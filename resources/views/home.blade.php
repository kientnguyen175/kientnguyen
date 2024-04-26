<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

</head>
<body>
    <div class="absolute text-5xl text-white top-5 left-5">
        <a href="https://www.instagram.com/kientnguyen175"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="xl:flex h-screen">
        <img class="xl:w-1/2 xl:h-full object-cover" src="{{ asset('images/home-left.png') }}" alt="">
        <img class="xl:w-1/2 xl:h-full object-cover" src="{{ asset('images/home-right.png') }}" alt="">
    </div>
</body>
</html>
