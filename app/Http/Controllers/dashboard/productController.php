<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
     public function completePurchase(Request $request)
    {
        // Get the items from the request
        $items = $request->input('items');
        
        foreach ($items as $item) {
            $product = Product::where('name', $item['name'])->first();
            
            if ($product) {
                // Deduct stock/quantity from the product
                $product->quantity -= $item['quantity'];
                
                if ($product->quantity < 0) {
                    return response()->json(['success' => false, 'message' => 'Not enough stock for ' . $item['name']]);
                }

                // Save the updated product
                $product->save();
            } else {
                return response()->json(['success' => false, 'message' => 'Product ' . $item['name'] . ' not found']);
            }
        }

        return response()->json(['success' => true, 'message' => 'Purchase completed successfully']);
    }
   public function index()
    {
        $products = Product::with('stock')->get();
        return view('dashboard.product.index', compact('products'));
    }
   

    // Show form to create a new product
    public function create()
    {
        return view('dashboard.product.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload for photo
        $photoPath = $request->hasFile('photo') ? $request->file('photo')->store('products', 'public') : null;

        // Create the product
        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'photo' => $photoPath,
        ]);

        // Create the stock for the product
        $product->stock()->create([
            'quantity' => $validatedData['stock_quantity'],
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // Show the form to edit an existing product
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', compact('product'));
    }

    // Update an existing product
    public function update(Request $request, Product $product)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload for new photo
        $photoPath = $request->hasFile('photo') ? $request->file('photo')->store('products', 'public') : $product->photo;

        // Update the product
        $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'photo' => $photoPath,
        ]);

        // Update the stock quantity
        $product->stock->update([
            'quantity' => $validatedData['stock_quantity'],
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        // Delete the photo if it exists
        if ($product->photo && Storage::exists($product->photo)) {
            Storage::delete($product->photo);
        }

        // Delete the stock entry
        $product->stock()->delete();

        // Delete the product itself
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
