<html>
<head>
<meta charset="utf-8">
<style>
.container{
    margin:20%;
    margin-top:10%;
    width:60%;
    height:60%;
    background-color:white;
}
.kolomKiri{
    width:20%;
    height:100%;
    float:left;
}
.kolomKanan{
    background-color: green;
    width:80%;
    height:100%;
    float:right;
}
</style>
</head>
<body>

    <div class="kolomKiri">
        @include('layouts.sidebar')
    </div>
    <div class="kolomKanan">
        <div class="container">
            @yield('content')
        </div>
    </div>


</body>
</html>