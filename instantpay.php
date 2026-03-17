<div class="p-4 max-w-md mx-auto">
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h2 class="text-gray-500 text-sm">Total Payment</h2>
        <p class="text-3xl font-black text-blue-600 mb-6">৳550.00</p>

        <h3 class="font-bold mb-4">Select Payment Method</h3>
        <div class="grid grid-cols-3 gap-3 mb-6">
            <button onclick="showFields('Bkash')" class="border rounded-xl p-2 hover:border-blue-500 transition">
                <img src="bkash_logo.png" class="h-8 mx-auto">
            </button>
            <button onclick="showFields('Nagad')" class="border rounded-xl p-2 hover:border-blue-500 transition">
                <img src="nagad_logo.png" class="h-8 mx-auto">
            </button>
        </div>

        <div id="paymentArea" class="hidden bg-blue-50 p-4 rounded-xl border border-blue-100">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <p class="text-xs text-blue-600 font-bold uppercase" id="methodName">Bkash Personal</p>
                    <p class="text-lg font-mono font-bold" id="adminNum">01700000000</p>
                </div>
                <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-xs">Copy</button>
            </div>
            
            <div class="space-y-3">
                <input type="text" placeholder="Your Number" class="w-full p-3 rounded-lg border outline-none">
                <input type="text" placeholder="Transaction ID (TrxID)" class="w-full p-3 rounded-lg border outline-none">
                <button class="w-full bg-green-600 text-white py-3 rounded-lg font-bold shadow-md">Confirm Payment</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showFields(method) {
        document.getElementById('paymentArea').classList.remove('hidden');
        document.getElementById('methodName').innerText = method + " (Personal)";
    }
</script>
