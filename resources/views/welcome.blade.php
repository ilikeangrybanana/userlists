<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>User Lists</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="text-5xl h-16 w-auto text-gray-700 sm:h-20">
                    Our Users
                </h1>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-3 justify-start">
                    @foreach (DB::table('users')->get() as $user)
                        <x-user-card :userEmail="$user->email" :userEmoj="config('user-emojis')[$user->id % count(config('user-emojis'))]"  :userName="$user->name"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>