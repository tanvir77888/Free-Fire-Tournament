<form id="addGameForm" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl shadow-sm">
    <h3 class="font-bold mb-4">Add New Game</h3>
    <div class="grid gap-4">
        <input type="text" name="game_name" placeholder="Game Name" class="p-3 bg-gray-50 rounded-xl border">
        <select name="type" class="p-3 bg-gray-50 rounded-xl border">
            <option value="uid">UID Topup</option>
            <option value="voucher">Unipin Voucher</option>
        </select>
        <input type="file" name="image" class="text-sm">
        <button type="submit" class="bg-blue-600 text-white py-3 rounded-xl font-bold">Save Game</button>
    </div>
</form>
