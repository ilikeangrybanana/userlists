<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>User Lists</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" type="text/javascript" defer></script>
</head>

<body>
    <div class="mt-5 container">
        <h1>My Users</h1>

        <div class="userlist">
            @foreach (DB::table('users')->get() as $user)
            <x-user-card :userEmail="$user->email"
                :userEmoj="config('user-emojis')[$user->id % count(config('user-emojis'))]"
                :userName="$user->name" />
            @endforeach
        </div>
    </div>
</body>

</html>