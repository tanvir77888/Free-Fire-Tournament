<?php include '../common/config.php'; ?>
<div class="p-6">
    <div class="bg-white rounded-3xl p-6 shadow-sm">
        <h2 class="text-xl font-bold mb-6">Site Configuration</h2>
        <form id="settingForm" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase">Site Name</label>
                    <input type="text" name="site_name" value="Tanvir Shop" class="w-full p-3 mt-1 bg-gray-50 border rounded-xl outline-none">
                </div>
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase">Currency Symbol</label>
                    <input type="text" name="currency" value="৳" class="w-full p-3 mt-1 bg-gray-50 border rounded-xl outline-none">
                </div>
            </div>

            <div>
                <label class="text-xs font-bold text-gray-400 uppercase">Marquee Text (Promo Bar)</label>
                <div class="flex items-center gap-4 mt-2 mb-2">
                    <span class="text-sm">Status:</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <textarea name="marquee" class="w-full p-3 bg-gray-50 border rounded-xl outline-none" rows="2">Flash sale active! Get 10% bonus on all Bkash payments today.</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase">FAB (Support) Link</label>
                    <input type="text" name="fab_link" value="https://wa.me/yournumber" class="w-full p-3 mt-1 bg-gray-50 border rounded-xl">
                </div>
                <div>
                    <label class="text-xs font-bold text-gray-400 uppercase">Add Money Video (YouTube)</label>
                    <input type="text" name="yt_link" value="https://youtube.com/watch?v=..." class="w-full p-3 mt-1 bg-gray-50 border rounded-xl">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold shadow-lg shadow-blue-200">Update Settings</button>
        </form>
    </div>
</div>
