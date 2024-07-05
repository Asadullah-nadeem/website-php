
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
    <nav class="nav-color shadow-lg">
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
                    <a href="#Home" class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Home</a>
                    <a href="#services" class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Services</a>
                    <a href="#about" class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">About</a>
                    <a href="#News" class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">News</a>
                    <a href="contact.php" class="py-4 px-2  font-semibold hover:text-green-500 transition duration-300">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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
            <li><a href="index.php#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
            <li><a href="index.php#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a>
            </li>
            <li><a href="index.php#News" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">News</a>
            </li>
            <li><a href="contact.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact</a></li>
        </ul>
    </div>

    
    <!-- Hero Section -->
    <div class="bg-white py-20">
        <div class="container mx-auto flex flex-col items-center justify-center">
            <h1 class="hero-text text-5xl font-bold text-gray-800 zoom-in-down center">Welcome to CodeAxe</h1>
            <p class="hero-text-2 text-xl text-gray-600 text-center back-in-up">Expertise in Business Finance, Stock
                Market, Freelancing,
                Backend, and Android Development</p>

            <a href="quote.php" class="mt-8 px-4 py-2 bg-green-500 text-white text-lg font-semibold rounded hover:bg-green-600 transition duration-300">Get
                a Quote</a>

        </div>

    </div>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800">Our Services</h2>

            <div class="flex flex-wrap mt-8">
                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Business Finance</h3>
                        <p class="mt-4 text-gray-600">Providing expert advice and services for managing your business
                            finances effectively.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Stock Market</h3>
                        <p class="mt-4 text-gray-600">Stay ahead with our in-depth analysis and insights on the stock
                            market.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Freelancing</h3>
                        <p class="mt-4 text-gray-600">Connecting freelancers with the best opportunities to grow their
                            careers.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Backend Development</h3>
                        <p class="mt-4 text-gray-600">Creating robust backend solutions to power your applications.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Android Development</h3>
                        <p class="mt-4 text-gray-600">Building high-quality Android apps that engage and delight users.
                        </p>
                    </div>
                </div>


                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Software Solution</h3>
                        <p class="mt-4 text-gray-600">Efficient website solutions tailored to your needs. Explore our
                            services!.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Web Hosting And Domain</h3>
                        <p class="mt-4 text-gray-600">Top-notch web hosting and domain services for your website needs.
                        </p>
                    </div>
                </div>


                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Cloud computing</h3>
                        <p class="mt-4 text-gray-600">Efficient cloud services for your website's smooth operation and
                            growth.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Data Analytics</h3>
                        <p class="mt-4 text-gray-600">Discover insights with our easy, powerful data analytics services.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Website Development</h3>
                        <p class="mt-4 text-gray-600">Discover our services for building your website. Easy, efficient,
                            professional.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Ecommerce Store Development</h3>
                        <p class="mt-4 text-gray-600">Build your online store with our expert eCommerce development
                            services.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                    <span class="whitespace-nowrap rounded-full  px-2.5 py-0.5 text-sm text-gray-600 border border-green-400">
                            Live
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800">Game development</h3>
                        <p class="mt-4 text-gray-600">Creating fun games for your website, tailored to your needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800">About Us</h2>
            <p class="mt-8 text-lg text-gray-600 text-center">
                We help you succeed. Get expert advice on business finance and stock market trends. Find great
                freelancing opportunities. Our services include backend and Android app development, smart software
                solutions, and dependable web hosting. We also offer cloud computing, data analytics, website creation,
                eCommerce store building, and fun game development. Partner with us for all your digital needs and feel
                empowered to achieve your goals.</p>
            <div class="mt-4 ">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="flex flex-col rounded-lg bg-green-50 px-4 py-8 text-center">
                        <img src="_public/_assets/_img/paper.png" alt="Description of Image" class="mx-auto mb-4 w-24 h-24"> <!-- Image element added -->
                        <dt class="order-last text-lg font-medium text-green-500">File Size</dt>
                        <dt class="order-last text-lg font-medium text-black-500">
                        <a href="#" class="underline font-bold">Coming Soon</a>
                        </dt>
                    </div>

                    <div class="flex flex-col rounded-lg bg-green-50 px-4 py-8 text-center">
                        <img src="_public/_assets/_img/manage.png" alt="Description of Image" class="mx-auto mb-4 w-24 h-24"> <!-- Image element added -->
                        <dt class="order-last text-lg font-medium text-green-500">Clear Documentation</dt>
                        <dt class="order-last text-lg font-medium text-black-500">
                        <a href="#"class="underline font-bold">Read The Manual</a>
                        </dt>
                    </div>

                    <div class="flex flex-col rounded-lg bg-green-50 px-4 py-8 text-center">
                        <img src="_public/_assets/_img/github.png" alt="Description of Image" class="mx-auto mb-4 w-24 h-24 rounded-full"> <!-- Image element added -->
                        <dt class="order-last text-lg font-medium text-green-500">Fix Bugs or Add Features </dt>
                        <dt class="order-last text-lg font-medium text-black-500">
                        <a href="#" class="underline font-bold">On GitHub</a>
                        </dt>
                    </div>
                </dl>
            </div>
        </div>
    </section>


    <section class="bg-slate">
        <div class="max-w-screen-xl mx-auto mt-20">
            <h1></h1>
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="_public/_assets/_svg/linode.svg">
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="_public/_assets/_svg/digitalocean.svg">
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="_public/_assets/_svg/github.svg">
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <img src="_public/_assets/_svg/amazonaws.svg">

                </div>

                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                    <img src="_public/_assets/_svg/redhat.svg">
                </div>

            </div>
        </div>
        <div id="News" class="container mx-auto p-5">

            <div class="mt-12 border-t-2 border-gray-200 pt-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Recent News Section -->
                    <div>
                        <h2 class="recent-news text-xl font-semibold mb-4">Recent News</h2>
                        <ul class="text-gray-600">
                            <li class="mb-2">2024.05.26 - <a href="#" class="text-gray-800 underline">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                        </ul>
                    </div>
                    <!-- Active Forum Threads Section -->
                    <div>
                        <h2 class="Active-Forum-Threads text-xl font-semibold mb-4">Active Forum Threads</h2>
                        <ul class="text-gray-600">
                            <li class="mb-2">2024.06.08 - <a href="#" class="text-gray-800 underline">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- popup win -->
    <div class="popup-container" id="popupContainer">
        <div class="popup" id="popup">
            <img src="_public/_assets/_img/Palestine.png" alt="Floating Icon">
            <span class="close" id="closePopup">&times;</span>
            <p><b>حرية لفلسطين</b></p>
            <p><b>Stand with Palestine. Everyone deserves peace and freedom. Raise your voice for justice. Together, we can make a difference. Free Palestine!</b></p>
        </div>
    </div>
    <div class="floating-icon" id="floatingIcon">
        <img src="_public/_assets/_img/freedom.png" alt="Floating Icon">
    </div>