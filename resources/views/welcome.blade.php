<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Welcome to our site!</h1>

        {{-- blade variable coming from controller/provider --}}
        <p>The current product key is: <strong>{{ $productKey ?? 'none' }}</strong></p>

        {{-- you can also pass custom data from a controller --}}
        @if(isset($message))
            <p class="mt-2 text-green-600">{{ $message }}</p>
        @endif
    </div>
</body>
</html>