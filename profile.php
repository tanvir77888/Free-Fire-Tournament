<?php include 'common/config.php'; ?>
<div class="p-4 pt-8">
    <div class="bg-white rounded-3xl p-6 shadow-sm text-center mb-6">
        <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-4">
            <i class="fas fa-user text-3xl text-blue-600"></i>
        </div>
        <h2 class="text-xl font-bold">Tanvir Ahmed</h2>
        <p class="text-gray-400 text-sm">tanvir@example.com</p>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-6">
        <div class="bg-blue-600 p-4 rounded-3xl text-white">
            <p class="text-[10px] uppercase opacity-80">Available Balance</p>
            <h3 class="text-xl font-bold">৳1,250.00</h3>
        </div>
        <div class="bg-black p-4 rounded-3xl text-white">
            <p class="text-[10px] uppercase opacity-80">Total Orders</p>
            <h3 class="text-xl font-bold">42</h3>
        </div>
    </div>

    <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
        <a href="order.php" class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center gap-3"><i class="fas fa-history text-blue-500"></i> <span class="font-medium">Order History</span></div>
            <i class="fas fa-chevron-right text-gray-300"></i>
        </a>
        <a href="addmoney.php" class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center gap-3"><i class="fas fa-wallet text-green-500"></i> <span class="font-medium">Payment History</span></div>
            <i class="fas fa-chevron-right text-gray-300"></i>
        </a>
        <a href="logout.php" class="flex items-center justify-between p-4 text-red-500">
            <div class="flex items-center gap-3"><i class="fas fa-sign-out-alt"></i> <span class="font-medium">Logout</span></div>
        </a>
    </div>
</div>
