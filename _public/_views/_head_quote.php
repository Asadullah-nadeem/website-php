

<div id="notification" class="flex items-center justify-between gap-4 bg-green-600 px-4 py-3 text-white hidden">

    <p class="text-sm font-medium">

        Expert digital solutions, empowering you.

        <a href="quote.php" class="inline-block underline">Check out!</a>
    </p>

    <button aria-label="Dismiss" class="shrink-0 rounded-lg bg-black/10 p-1 transition hover:bg-black/20" onclick="dismissNotification()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
</div>


    <!-- Navbar -->
    <nav class="nav-color-Con shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="index.php" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-lg">CodeAxe.co.in</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index.php"
                        class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Home</a>
                    <a href="index.php#services"
                        class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Services</a>
                    <a href="index.php#about"
                        class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">About</a>
                    <a href="index.php#News"
                        class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">News</a>
                    <a href="contact.php"
                        class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mobile menu -->
    <div class="hidden mobile-menu">
        <ul>
            <li>
                <a href="index.php" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a>
            </li>
            <li><a href="index.php#services"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
            <li><a href="index.php#about"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a>
            </li>
            <li><a href="index.php#News"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">News</a>
            </li>
            <li><a href="contact.php"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact</a></li>
        </ul>
    </div>
    <!-- Google from -->
    <div class="center">
        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSfX2ruNzHoPkZAoiwXvIurW_1QgogQItXi4DOtv443YJ4UCkw/viewform?embedded=true"
            width="800" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>

    <!-- popup win -->
    <div class="popup-container" id="popupContainer">
        <div class="popup" id="popup">
            <img src="_public/_assets/_img/Palestine.png" alt="Floating Icon">
            <span class="close" id="closePopup">&times;</span>
            <p><b>حرية لفلسطين</b></p>
            <p><b>Stand with Palestine. Everyone deserves peace and freedom. Raise your voice for justice. Together, we
                    can make a difference. Free Palestine!</b></p>
        </div>
    </div>
    <div class="floating-icon" id="floatingIcon">
        <img src="_public/_assets/_img/freedom.png" alt="Floating Icon">
    </div>

    