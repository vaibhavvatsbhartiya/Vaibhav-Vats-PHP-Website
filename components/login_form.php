<!-- components/login_form.php -->
<div id="loginForm" class="bg-white p-8 rounded shadow-lg w-full form-transition">
    <h2 class="text-2xl font-bold mb-4">Sign In</h2>
    <form action="login_process.php" method="POST">
        <div class="mb-4">
            <label for="username" " class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" placeHolder="user_name" username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" placeholder="*********" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <button type="submit" class="w-full bg-purple-500 text-white py-2 px-4 rounded-md hover:bg-purple-600">Sign In</button>
    </form>
</div>
