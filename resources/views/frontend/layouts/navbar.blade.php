<!-- Navbar Start -->
<div class="navbar">
    <nav>
        <ul class="nav-links" id="navbarCollapse">
            <a href="/home" class="nav-item nav-link"><span class="Active">Home</span></a>
            <a href="/aboutus" class="nav-item nav-link"><span>Aboutus</span></a>
            <a href="/service" class="nav-item nav-link"><span>Services</span></a>
            <a href="/shop" class="nav-item nav-link"><span>Spare Part</span></a>
            <a href="/contact" class="nav-item nav-link"><span>Contact</span></a>
        </ul>
    </nav>
</div>


<script>
    // Get all the <a> elements in the navbar
// Get all the <a> elements in the navbar
const navLinks = document.querySelectorAll('.nav-link');

// Function to update active class based on current URL
function setActiveLink() {
    const currentPage = window.location.pathname; // Get current page URL path
    
    // Loop through each nav link
    navLinks.forEach(link => {
        const span = link.querySelector('span');
        const linkHref = link.getAttribute('href');
        
        // Remove 'Active' class from all spans
        span.classList.remove('Active');
        
        // Add 'Active' class to the link whose href matches the current page URL
        if (currentPage === linkHref) {
            span.classList.add('Active');
        }
    });
}

// Call setActiveLink on page load to set the active link based on current URL
window.addEventListener('load', setActiveLink);

// Add event listeners to update the active class when links are clicked
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove 'Active' class from all spans
        document.querySelectorAll('.nav-link span').forEach(s => {
            s.classList.remove('Active');
        });

        // Add 'Active' class to the clicked span
        const span = this.querySelector('span');
        span.classList.add('Active');
    });
});


</script>
<!-- Navbar End -->
