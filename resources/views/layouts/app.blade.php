<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="{{ elixir('css/all.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <!-- Livereload -->
    @if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script> 
    @endif
    <!-- Livereload -->

    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar1">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar1">
            <a class="navbar-brand" href="javascript:void(0)">Twitter Bootstrap</a>
            <ul class="nav navbar-nav">
                 <li class="nav-item active">
                     <a class="nav-link" href="javascript:void(0)">Nav1 <span class="sr-only">(current)</span></a>
                 </li>
            </ul>
            <form class="form-inline pull-xs-right">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-success-outline" type="submit">Search</button>
            </form>
        </div>
    </nav>





    <script src="js/all.js"></script>

</body>
</html>