<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Localization</title>
</head>
<body>
    <header class="header">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
            <li>
                <button class="btn btn-success" onclick="LangFunc()">Language</button>
                <div class="language displayNone" id="language">
                    <a class="btn btn-info" href="{{route(Route::currentRouteName(), 'en')}}">EN</a>
                    <a class="btn btn-info" href="{{route(Route::currentRouteName(), 'ru')}}">RU</a>
                    <a  class="btn btn-info" href="{{route(Route::currentRouteName(), 'uz')}}">UZ</a>
                </div>
            </li>
        </ul>
    </header>
    @yield('content')
</body>
<script>
    let language = document.getElementById('language')
    function LangFunc(){
        if(language.classList.contains('displayNone')){
            console.log('has')
            language.classList.remove('displayNone')
        }else{
            console.log('no')
            language.classList.add('displayNone')
        }
    }
</script>
</html>
<style>
    .displayNone {
        display: none;
    }
    .header>ul {
        display: flex;
        justify-content: space-around;
        list-style: none;
    }
    .header>ul a {
        display: flex;
        justify-content: space-around;
        text-decoration: none;
    }
    .language{
        position: absolute;
    }
</style>
