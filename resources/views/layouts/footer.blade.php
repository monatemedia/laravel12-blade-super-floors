<?php
$current_year = date('Y');
?>

<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <a href="/" class="flex justify items-center">
                    <img src="/images/logo-black-white.png" alt="Logo B&W" class="w-12 mb-4 mr-4">
                    <span class="text-4xl font-bold mb-4">Super Floors</span>
                </a>
                <div>
                    <p class="text-gray-400 mt-1">Professional Care for Your Floors Since 2005</p>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <div class="space-y-2">
                    <a href="tel:+27836338268"
                        class="flex items-center text-gray-400 hover:text-white transition-colors">
                        <i class="fa-solid fa-phone mr-3"></i>
                        +27 83 633 8268
                    </a>
                    <a href="mailto:luke@super-floors.co.za"
                        class="flex items-center text-gray-400 hover:text-white transition-colors">
                        <i class="fa-solid fa-envelope mr-3"></i>
                        luke@super-floors.co.za
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                <a href="https://www.facebook.com/profile.php?id=100067323252480" target="_blank"
                    rel="noopener noreferrer"
                    class="flex items-center text-gray-400 hover:text-white transition-colors">
                    <i class="fa-brands fa-facebook mr-3"></i>
                    Facebook
                </a>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-baseline">
                <span class="text-gray-400 text-sm">
                    © 2005 - <?php echo $current_year; ?> Super Floors | All rights reserved
                </span>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="/privacy-policy" class="text-gray-400 hover:text-white transition-colors text-sm">
                        Privacy Policy
                    </a>
                    <span class="text-gray-400">|</span>
                    <a href="https://www.monatemedia.com/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors text-sm">
                        Powered by Monate Media
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
