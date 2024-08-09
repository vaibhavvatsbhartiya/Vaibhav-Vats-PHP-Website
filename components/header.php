<!-- Navbar -->
<nav class="bg-blue-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-grow flex justify-center sm:justify-start">
                <a href="#" class="font-bold text-white text-2xl">Vaibhav Vats</a>
            </div>
            <!-- Menu -->
            <div class="hidden sm:flex space-x-4 flex-grow justify-center font-bold">
                <a href="../pages/home.php" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-lg">Home</a>
                <a href="../pages/about.php" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-lg">About</a>
                <a href="../pages/service.php" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-lg">Services</a>
                <a href="../pages/blog.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">Blogs</a>
                <a href="../pages/contact.php" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-lg">Contact</a>
            </div>
            <!-- Mobile menu button -->
            <div class="flex sm:hidden items-center">
                <button id="menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, toggle classes based on menu state. -->
    <div class="hidden sm:hidden font-bold" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="../pages/home.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">Home</a>
            <a href="../pages/about.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">About</a>
            <a href="../pages/service.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">Services</a>
            <a href="../pages/blog.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">Blogs</a>
            <a href="../pages/contact.php" class="text-white block hover:text-gray-300 px-3 py-2 rounded-md text-lg">Contact</a>
        </div>
    </div>
</nav>

<script>
    const menuButton = document.getElementById('menu-button');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
    });
</script>
