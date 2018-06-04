<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title','Home') </title>
</head>
<body>
    @section('header')
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
        @show
    @section('content')
        <p>This is my information</p>
        @show
    @section('footer')
    <section>
        <footer>
            <p>Copyright &copy; <?php echo date('Y'); ?></p>
        </footer>
    </section>
        @show
</body>
</html>