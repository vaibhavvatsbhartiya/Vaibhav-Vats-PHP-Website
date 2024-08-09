<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaibhav Vats</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .form-transition {
            transition: all 0.5s ease-in-out;
        }
        .headingPara {
            display: block;
        }
        .hidden {
            opacity: 0;
            transform: translateX(-100%);
            position: absolute;
        }
        .visible {
            opacity: 1;
            transform: translateX(0);
            position: relative;
        }
        .hidden-form {
            display: none;
        }
        .order-1 {
            order: 1;
        }
        .order-2 {
            order: 2;
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div id="container" class="flex flex-col md:flex-row w-3/4 bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Left Side: Image and welcome message -->
        <div id="welcomeSection" class=" w-full md:w-1/2 bg-blue-500 flex items-center justify-center p-12">
            <div class="text-white text-center">
                <!-- <img src="assets/image.jpg" alt="Welcome Image" class="w-full h-auto mb-6"> -->
                <h2 class="text-xl md:text-3xl font-bold">Welcome!</h2>
                <p class="mt-4">Welcome to our website. Please sign in or create an account to continue.</p>
            </div>
        </div>
        <!-- Right Side: Forms -->
        <div id="formSection" class="w-full md:w-1/2 p-12 relative">
            <div class="flex justify-between mb-6">
                <button id="createAccountBtn" class="w-1/2 bg-yellow-400 text-white py-2 px-4 rounded-l-md hover:bg-yellow-500">Create account</button>
                <button id="signInBtn" class="w-1/2 bg-purple-500 text-white py-2 px-4 rounded-r-md hover:bg-purple-600">Sign in</button>
            </div>
            <div id="formContainer" class="relative">
                <?php include 'components/login_form.php'; ?>
                <?php include 'components/signup_form.php'; ?>
            </div>
        </div>
    </div>
    <script>
        const container = document.getElementById('container');
        const welcomeSection = document.getElementById('welcomeSection');
        const formSection = document.getElementById('formSection');
        const loginForm = document.getElementById('loginForm');
        const signupForm = document.getElementById('signupForm');
        const createAccountBtn = document.getElementById('createAccountBtn');
        const signInBtn = document.getElementById('signInBtn');

        createAccountBtn.addEventListener('click', function () {
            welcomeSection.classList.add('order-2');
            formSection.classList.add('order-1');
            loginForm.classList.remove('visible');
            loginForm.classList.add('hidden');
            setTimeout(() => {
                loginForm.classList.add('hidden-form');
                signupForm.classList.remove('hidden-form');
                signupForm.classList.remove('hidden');
                signupForm.classList.add('visible');
            }, 500);
        });

        signInBtn.addEventListener('click', function () {
            welcomeSection.classList.remove('order-2');
            formSection.classList.remove('order-1');
            signupForm.classList.remove('visible');
            signupForm.classList.add('hidden');
            setTimeout(() => {
                signupForm.classList.add('hidden-form');
                loginForm.classList.remove('hidden');
                loginForm.classList.remove('hidden-form');
                loginForm.classList.add('visible');
            }, 500);
        });

        // Initially show login form and hide signup form
        loginForm.classList.add('visible');
        signupForm.classList.add('hidden-form');
        signupForm.classList.add('hidden');
     
        

        
// un used function 

      // {
        // Handle the other part of div which is not our form 
        // function adjustHeadingPara() {
        //     const headingPara = document.querySelector('.headingPara');

        //     if (window.innerWidth < 575) {
        //         headingPara.style.display = 'none';
        //     } else {
        //         headingPara.style.display = 'block';
        //     }
        // }

        // Initial check
        // adjustHeadingPara();

        // Update on window resize
        // window.addEventListener('resize', adjustHeadingPara);
      // }
    </script>
</body>
</html>
