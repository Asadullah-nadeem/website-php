<section class="bg-white dark:bg-gray-900">
    <div class="container px-4 py-16 mx-auto lg:flex lg:items-center lg:justify-between">
        <h2 class="text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
            Sign up for our newsletter
        </h2>
        <div class="mt-8 lg:mt-0">
            <form action="_public\_views\subscribe.php" method="POST">
                <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row sm:-mx-2">
                    <input id="email" name="email" type="email" class="px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg sm:mx-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email Address" required>
                    <button class="px-6 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-600 rounded-lg focus:ring focus:ring-blue-300 focus:ring-opacity-80 sm:mx-2 hover:bg-green-500 focus:outline-none focus:bg-green-500" type="submit" required>
                        Get Started
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">


                <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                    Copyright &copy; 2024 CodeAxe. All Rights Reserved.
                </p>
                <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                </p>                
            </div>
        </div>
</footer>
    <script src="_public/_views/js/scripts.js"></script>
    <script>
        AOS.init();
    </script>