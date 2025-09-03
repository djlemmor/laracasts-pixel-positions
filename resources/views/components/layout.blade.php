<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="font-bold text-4xl">Pixel Positions</div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex space-x-6 items-center">
                    <a href="/jobs/create">Post A Job</a>

                    <x-forms.form method="POST" action="/logout">
                        <x-forms.button>Logout</x-forms.button>
                    </x-forms.form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Signup</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[1280px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>