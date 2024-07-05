<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        setTimeout(function() {
            window.location.href = "/";
        }, 5000);
    </script>
</head>
<body class="bg-green-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-9xl font-bold text-green-600">404</h1>
        <p class="text-2xl md:text-3xl font-light leading-normal text-green-800">Sorry, we couldn't find this page.</p>
        <p class="mb-8 text-green-700">But don't worry, you can find plenty of other things on our homepage.</p>
        <a href="/" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition duration-300">
            Back to Homepage
        </a>
     </div>
</body>
</html>
