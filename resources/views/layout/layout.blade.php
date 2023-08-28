
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="grid place-content-center w-full h-screen bg-slate-500 p-[10%]">
        <div class="border-1 w-[900px] h-[500px] bg-slate-700 box rounded-[20px]">
            <div class="card w-full h-full bg-base-100 shadow-xl p-4 overflow-clip ">
                    @yield('me')
                    @yield('town')
                    @yield('fav')
                    @yield('welcome')
        </div>
</body>
</html>
