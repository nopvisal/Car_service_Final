@extends('dashboard.layouts.master')
@section('title', 'user')

@section('content')

<div class="container-fluid ps-4 pe-4" id="user_crud">
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between py-3 px-4">
            <div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <span class="me-2"><i class="fa-solid fa-backward-step"></i></span>Back
                </a>
            </div>

            <div class="">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    Add Product
                </button>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

            </div>
        </div>
          
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <h4>Name Product 1</h4>
                </div>
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark-blue" style="background: color(srgb red green blue);">
                        <tr class="text-center">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock Quantity</th>
                        <th>Photo</th>
                        <th>Actions</th> <!-- Add Actions column -->
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr class="text-center">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock?->quantity ?? '0' }}</td>
                        <td>
                            @if($product->photo)
                                <img src="{{ Storage::url($product->photo) }}" alt="Product Photo" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Delete Button (with confirmation) -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" name="name" id="name" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input type="number" name="price" id="price" class="form-control" required step="0.01">
                  </div>

                  <div class="col-md-12 mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea name="description" id="description" class="form-control"></textarea>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label for="stock_quantity" class="form-label">Stock Quantity</label>
                      <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label for="photo" class="form-label">Product Photo</label>
                      <input type="file" name="photo" id="photo" class="form-control">
                  </div>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Product</button>
          </div>

      </form>
    </div>
  </div>
</div>

@endsection

