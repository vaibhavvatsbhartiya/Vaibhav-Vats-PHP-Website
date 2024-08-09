<!-- Footer -->
<footer class="bg-blue-500 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Us Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">About Us</h4>
                <p class="text-sm">We are a team of passionate developers and designers dedicated to building quality web applications.</p>
            </div>
            <!-- Quick Links Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="../pages/home.php" class="hover:text-gray-300">Home</a></li>
                    <li><a href="../pages/about.php" class="hover:text-gray-300">About</a></li>
                    <li><a href="../pages/service.php" class="hover:text-gray-300">Services</a></li>
                    <li><a href="../pages/blog.php" class="hover:text-gray-300">Blogs</a></li>
                    <li><a href="../pages/contact.php" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
            <!-- Services Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Web Development</a></li>
                    <li><a href="#" class="hover:text-gray-300">WordPress Development</a></li>
                    <li><a href="#" class="hover:text-gray-300">SEO Optimization</a></li>
                    <li><a href="#" class="hover:text-gray-300">Digital Marketing</a></li>
                </ul>
            </div>
            <!-- Contact Us Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Email: info@example.com</a></li>
                    <li><a href="#" class="hover:text-gray-300">Phone: +123 456 7890</a></li>
                    <li><a href="#" class="hover:text-gray-300">Address: West Delhi, Delhi, India</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright Section -->
        <div class="border-t border-gray-400 mt-8 pt-4 font-bold text-center">
            <p class="text-sm"> &copy; <span id="year"></span> Vaibhav Vats. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // JavaScript to dynamically set the current year
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
