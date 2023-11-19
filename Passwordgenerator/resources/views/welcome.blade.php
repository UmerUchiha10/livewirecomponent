<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>

    <body class="bg-gray-100">
        <div class="font-sans text-gray-900 antialiased">
            <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
                <h2 class="font-bold text-2x1">Generate Password: Tailwind Version</h2>

                <div class="w-full sm:max-w-x1 mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm: rounded-1g">
                    @livewire('password-generator')
                </div>

            </div>
        </div>
        @livewireScripts
    </body>

</html>
