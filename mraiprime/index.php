<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tanvir Shop | Premium Topup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .no-select { user-select: none; -webkit-tap-highlight-color: transparent; }
        @keyframes pulse-blue { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.1); } }
        .fab-pulse { animation: pulse-blue 2s infinite; }
    </style>
</head>
<body class="bg-gray-100 no-select pb-20">

    <div class="bg-blue-600 text-white py-1 overflow-hidden whitespace-nowrap">
        <div class="inline-block animate-marquee">
            Welcome to Tanvir Shop - Fast & Secure Gaming Top-up Service! ⚡ 
        </div>
    </div>

    <header class="bg-white shadow-sm p-4 flex justify-between items-center sticky top-0 z-50">
        <h1 class="text-xl font-bold text-blue-600 italic">TANVIR SHOP</h1>
        <div class="flex items-center gap-3">
            <div class="bg-blue-50 px-3 py-1 rounded-full flex items-center gap-2">
                <i class="fas fa-wallet text-blue-600"></i>
                <span class="font-bold text-sm">৳0.00</span>
            </div>
            <a href="profile.php" class="text-gray-600 text-xl"><i class="fas fa-user-circle"></i></a>
        </div>
    </header>

    <div class="relative w-full h-48 overflow-hidden mt-2" id="slider">
        <div class="flex transition-transform duration-700 ease-in-out h-full" id="sliderWrapper">
            <img src="https://via.placeholder.com/800x400/3b82f6/ffffff?text=Big+Sale" class="w-full flex-shrink-0 object-cover">
            <img src="https://via.placeholder.com/800x400/10b981/ffffff?text=New+Games" class="w-full flex-shrink-0 object-cover">
            <img src="https://via.placeholder.com/800x400/f59e0b/ffffff?text=Instant+Delivery" class="w-full flex-shrink-0 object-cover">
        </div>
    </div>

    <main class="p-4">
        <h2 class="text-lg font-bold mb-4 border-l-4 border-blue-600 pl-2">Game Shop</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="game_detail.php?id=1" class="bg-white rounded-xl shadow-sm overflow-hidden block">
                <img src="https://via.placeholder.com/150" class="w-full h-32 object-cover">
                <div class="p-2 text-center">
                    <p class="text-sm font-semibold truncate">Free Fire Diamond</p>
                </div>
            </a>
            </div>
    </main>

    <a href="https://t.me/yourlink" class="fixed bottom-24 right-6 bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg fab-pulse z-50">
        <i class="fab fa-telegram-plane text-2xl"></i>
    </a>

    <nav class="fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around py-3 z-50">
        <a href="index.php" class="text-blue-600 flex flex-col items-center"><i class="fas fa-home"></i><span class="text-xs">Home</span></a>
        <a href="addmoney.php" class="text-gray-400 flex flex-col items-center"><i class="fas fa-plus-circle"></i><span class="text-xs">Add Money</span></a>
        <a href="order.php" class="text-gray-400 flex flex-col items-center"><i class="fas fa-shopping-bag"></i><span class="text-xs">Orders</span></a>
        <a href="profile.php" class="text-gray-400 flex flex-col items-center"><i class="fas fa-user"></i><span class="text-xs">Profile</span></a>
    </nav>

    <script>
        // Slider Logic
        const wrapper = document.getElementById('sliderWrapper');
        let index = 0;
        setInterval(() => {
            index = (index + 1) % 3;
            wrapper.style.transform = `translateX(-${index * 100}%)`;
        }, 1500);

        // Marquee Animation
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes marquee { 0% { transform: translateX(100%); } 100% { transform: translateX(-100%); } }
            .animate-marquee { display: inline-block; animation: marquee 15s linear infinite; }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
