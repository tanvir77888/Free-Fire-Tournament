<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tanvir Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white w-full max-w-md rounded-3xl shadow-xl overflow-hidden">
        <div class="flex border-b">
            <button onclick="toggleAuth('login')" id="loginTab" class="w-1/2 py-4 font-bold text-blue-600 border-b-2 border-blue-600">Login</button>
            <button onclick="toggleAuth('signup')" id="signupTab" class="w-1/2 py-4 font-bold text-gray-400">Sign Up</button>
        </div>

        <div class="p-8">
            <form id="loginForm" class="space-y-4">
                <div class="relative">
                    <i class="fas fa-envelope absolute top-4 left-4 text-gray-400"></i>
                    <input type="email" name="email" placeholder="Email Address" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="relative">
                    <i class="fas fa-lock absolute top-4 left-4 text-gray-400"></i>
                    <input type="password" name="password" placeholder="Password" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 transition">Login Now</button>
            </form>

            <form id="signupForm" class="space-y-4 hidden">
                <div class="relative">
                    <i class="fas fa-user absolute top-4 left-4 text-gray-400"></i>
                    <input type="text" name="name" placeholder="Full Name" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none" required>
                </div>
                <div class="relative">
                    <i class="fas fa-phone absolute top-4 left-4 text-gray-400"></i>
                    <input type="text" name="phone" placeholder="Phone Number" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none" required>
                </div>
                <div class="relative">
                    <i class="fas fa-envelope absolute top-4 left-4 text-gray-400"></i>
                    <input type="email" name="email" placeholder="Email Address" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none" required>
                </div>
                <div class="relative">
                    <i class="fas fa-lock absolute top-4 left-4 text-gray-400"></i>
                    <input type="password" name="password" placeholder="Create Password" class="w-full pl-12 pr-4 py-3 bg-gray-100 rounded-xl outline-none" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold">Create Account</button>
            </form>
        </div>
    </div>

    <script>
        function toggleAuth(type) {
            const loginF = document.getElementById('loginForm');
            const signupF = document.getElementById('signupForm');
            const loginT = document.getElementById('loginTab');
            const signupT = document.getElementById('signupTab');

            if(type === 'login') {
                loginF.classList.remove('hidden');
                signupF.classList.add('hidden');
                loginT.className = 'w-1/2 py-4 font-bold text-blue-600 border-b-2 border-blue-600';
                signupT.className = 'w-1/2 py-4 font-bold text-gray-400';
            } else {
                loginF.classList.add('hidden');
                signupF.classList.remove('hidden');
                signupT.className = 'w-1/2 py-4 font-bold text-blue-600 border-b-2 border-blue-600';
                loginT.className = 'w-1/2 py-4 font-bold text-gray-400';
            }
        }
    </script>
</body>
</html>
