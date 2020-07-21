<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#333333">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
</head>
<body>

<div class="wrap">
    <div class="container">
        <div class="row header">
            <div class="col-sm-4 hidden-xs">
                <a href="/"> <img src="/img/logo.jpg"></a>
            </div>
            <div class="col-sm-8 menu">
                <div class="row">
                    <nav id="w1" class="navbar-inverse navbar">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">POTAPOV</a>
                            </div>
                            <div id="w1-collapse" class="collapse navbar-collapse">
                                <ul id="w2" class="navbar-nav navbar-right nav">
                                    <li><a href="/photo">Photo</a></li>
                                    <li><a href="/video">Video</a></li>
                                    <li><a href="/music">Music</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/resume">Resume</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-right">&copy; a-potap <?= date('Y') ?></p>
    </div>
</footer>
</body>
</html>
