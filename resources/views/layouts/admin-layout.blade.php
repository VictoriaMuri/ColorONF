<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <title>@yield('title')</title>
</head>
<body>

    <div class="container">

        <div class="nav-menu">
            <input type="checkbox" id="side-checkbox" />
            <div class="side-panel">
                <label class="side-button-2" for="side-checkbox">+</label>
                <div class="side-title">ColorON</div>
                <ul class="menu">
                    <a href="/main"><li>ИНФОРМАЦИЯ НА СТРАНИЦЕ</li></a>
                    <a href="/service"><li>УСЛУГИ</li></a>
                    <a href="/graph"><li>ГРАФИК</li></a>
                </ul>
            </div>
            <div class="side-button-1-wr">
                <label class="side-button-1" for="side-checkbox">
                    <div class="side-b side-open">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </label>
            </div>
        </div>

        <div class="main-content">

            <div class="triangle1"></div>
            <div class="triangle2"></div>
            <div class="triangle3"></div>
            <div class="triangle4"></div>

            @yield('content')
        </div>

    </div>

    <script src="/js/main.js"></script>
</body>
</html>