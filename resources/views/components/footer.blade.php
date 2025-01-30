<footer class="bg-gray-800 text-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4">About This Website</h3>
                <p class="text-sm leading-relaxed">
                    Welcome to my website, here you can find a lot of interesting posts.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-blue-400 transition">Home</a></li>
                    <li><a href="{{ route('posts') }}" class="hover:text-blue-400 transition">Posts</a></li>
                    <li><a href="{{ route('aboutme') }}" class="hover:text-blue-400 transition">About Me</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8c0 1.105-.895 2-2 2s-2-.895-2-2m4 8H8m4-16a4 4 0 104 4 4 4 0 00-4-4z" />
                        </svg>
                        <span>jsodabas@gmail.com</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2a2 2 0 01-2 2v4a6 6 0 0012 0v-4a2 2 0 01-2-2z" />
                        </svg>
                        <span>+993 731 9157</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                        </svg>
                        <span>Narra I, Silang, Cavite</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Social Links -->
        <div class="mt-8 border-t border-gray-700 pt-4 text-center">
            <div class="flex justify-center space-x-6">
                <!-- Facebook -->
                <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-blue-500 transition">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35C.59 0 0 .589 0 1.316v21.369C0 23.41.59 24 1.325 24h11.488v-9.294H9.847V10.59h2.966V8.345c0-2.93 1.792-4.524 4.409-4.524 1.253 0 2.33.093 2.644.135v3.065h-1.816c-1.422 0-1.696.675-1.696 1.664v2.18h3.39l-.442 3.116h-2.948V24h5.782c.735 0 1.325-.59 1.325-1.315V1.316C24 .589 23.41 0 22.675 0z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com" target="_blank" class="text-pink-500 hover:text-pink-400 transition">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.334 3.608 1.309.975.975 1.247 2.242 1.309 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.334 2.633-1.309 3.608-.975.975-2.242 1.247-3.608 1.309-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.334-3.608-1.309-.975-.975-1.247-2.242-1.309-3.608C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.849c.062-1.366.334-2.633 1.309-3.608.975-.975 2.242-1.247 3.608-1.309C8.416 2.175 8.796 2.163 12 2.163zM12 0C8.741 0 8.332.014 7.052.072c-1.292.059-2.22.27-3.005.554-.818.295-1.502.688-2.186 1.372C1.347 2.708.955 3.392.66 4.21.375 4.995.164 5.923.105 7.215.047 8.495.033 8.904.033 12c0 3.096.014 3.505.072 4.785.059 1.292.27 2.22.554 3.005.295.818.688 1.502 1.372 2.186.683.683 1.367 1.076 2.186 1.372.785.285 1.713.495 3.005.554 1.28.058 1.689.072 4.785.072s3.505-.014 4.785-.072c1.292-.059 2.22-.27 3.005-.554.818-.295 1.502-.688 2.186-1.372.683-.683 1.076-1.367 1.372-2.186.285-.785.495-1.713.554-3.005.058-1.28.072-1.689.072-4.785s-.014-3.505-.072-4.785c-.059-1.292-.27-2.22-.554-3.005-.295-.818-.688-1.502-1.372-2.186-.683-.683-1.367-1.076-2.186-1.372-.785-.285-1.713-.495-3.005-.554C15.505.014 15.096 0 12 0zm0 5.838a6.162 6.162 0 100 12.324A6.162 6.162 0 0012 5.838zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com" target="_blank" class="text-blue-700 hover:text-blue-600 transition">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 20h-3v-10h3v10zm-1.5-11.429c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.429h-3v-5.429c0-1.285-.025-2.939-1.794-2.939-1.794 0-2.069 1.403-2.069 2.849v5.519h-3v-10h2.881v1.364h.041c.401-.761 1.379-1.561 2.836-1.561 3.031 0 3.594 1.994 3.594 4.587v5.61z" />
                    </svg>
                </a>
            </div>
            <p class="mt-4 text-sm">&copy; {{ date('Y') }} Your Website Name. All rights reserved.</p>
        </div>
    </div>
</footer>
