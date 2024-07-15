<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>Create Transaction</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transaction</title>
</head>
<body>
    <h1>Create Transaction</h1>

    <form method="POST" action="{{ route('transactions.store') }}">
        @csrf <!-- This generates a hidden CSRF token field -->

        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>

        <label for="trxID">Transacrtion ID:</label><br>
        <textarea id="trxID" name="trxID" required></textarea><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="reference" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>