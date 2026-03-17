<div class="p-4 max-w-lg mx-auto">
    <div class="bg-white rounded-2xl shadow-md p-4">
        <img src="game_icon.png" class="w-24 h-24 rounded-xl mx-auto shadow-lg mb-4">
        <h1 class="text-center text-xl font-bold">Free Fire Topup</h1>
        
        <div class="mt-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Recharge</label>
            <div class="grid grid-cols-2 gap-2">
                <button class="border-2 border-blue-600 rounded-lg p-2 text-sm bg-blue-50">100 Diamonds <br> <b>৳85</b></button>
                <button class="border-2 border-gray-100 rounded-lg p-2 text-sm">Weekly Membership <br> <b>৳160</b></button>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <span class="text-sm font-medium">Quantity</span>
            <div class="flex items-center gap-4 bg-gray-100 rounded-full px-4 py-1">
                <button onclick="changeQty(-1)" class="font-bold text-xl text-blue-600">−</button>
                <span id="qty" class="font-bold">1</span>
                <button onclick="changeQty(1)" class="font-bold text-xl text-blue-600">+</button>
            </div>
        </div>

        <div class="mt-6">
            <input type="text" placeholder="Enter Player ID (UID)" class="w-full p-3 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>

        <button class="w-full mt-8 bg-blue-600 text-white py-4 rounded-xl font-bold shadow-lg transition-all hover:translate-y-[-2px] active:scale-95">
            Buy Now
        </button>
    </div>
</div>

<script>
    function changeQty(val) {
        let qty = document.getElementById('qty');
        let current = parseInt(qty.innerText);
        if(current + val >= 1) qty.innerText = current + val;
    }
</script>
