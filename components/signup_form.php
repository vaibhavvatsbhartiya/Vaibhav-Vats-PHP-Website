<!-- components/signup_form.php -->
<div id="signupForm" class="bg-white p-8 rounded shadow-lg w-full form-transition hidden-form hidden">
    <h2 class="text-2xl font-bold mb-4">Create Account</h2>
    <form action="signup_process.php" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Your name</label>
            <input type="text" id="name" name="name" placeHolder="Vaibhav Vats" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Your e-mail</label>
            <input type="email" id="email" name="email" placeHolder="vabhavvats30@gmail.com" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Create password</label>
            <input type="password" id="password" placeholder="*********" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <button type="submit" class="w-full bg-yellow-400 text-white py-2 px-4 rounded-md hover:bg-yellow-500">Create Account</button>
    </form>
</div>
