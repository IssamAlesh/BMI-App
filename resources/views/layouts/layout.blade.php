<html>
<head>
    <link rel="icon" href="{{asset('img/images.jpg')}}">
    <title>BMI-App</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!--semantic-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark">
    <img src="{{asset('img/imags.webp')}}" style="width:100px">
</nav>
<div style="margin-top: 5vh">
    @yield('content')
</div>
<br>

</body>
<br><br>
<footer class="text-center mt-auto">
    <div style="text-align: center">
        <span><strong>Copyright &copy; 2022/23 All Rights Reserved to Issam & Amer&reg;</strong></span>
    </div>
</footer>
</html>
