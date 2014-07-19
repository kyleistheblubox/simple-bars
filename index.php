<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <title>Radials Demo</title>

        <!-- Bootstrap core CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="./css/styles.css" rel='stylesheet'>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

         <!-- Some quick tests -->
        <div class="row">
            <div class="col-xs-12 test-spacer" style="background-color: #9999ee;">
                    <h1>Scroll down to see demo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 test-spacer" style="margin-top: 60px;">
                <div class="row" style='text-align: center'>
                    <h1>Radial Demo</h1>
                </div>
                 <div class="row" style="margin-top: 60px;">
                    <div class="col-xs-12 col-sm-4 pull-left">
                       <div class="radial" data-percent='85' data-color='red'>
                            <div class="radial-clip"></div>
                            <div class="radial-fill red"></div>
                            <div class="radial-center">
                                <h2>85%</h2>
                            </div>
                       </div>
                       <div class="progress-alt">
                           <h4>Value One</h4>
                       </div>
                    </div>                   
                    <div class="col-xs-12 col-sm-4">
                       <div class="radial" data-percent='95' data-color='green'>
                            <div class="radial-clip"></div>
                            <div class="radial-fill green"></div>
                            <div class="radial-center">
                                <h2>95%</h2>
                            </div>
                       </div>
                       <div class="progress-alt">
                           <h4>Value Two</h4>
                       </div>
                    </div>                   
                    <div class="col-xs-12 col-sm-4">
                       <div class="radial" data-percent='90' data-color='blue'>
                            <div class="radial-clip"></div>
                            <div class="radial-fill blue"></div>
                            <div class="radial-center">
                                <h2>90%</h2>
                            </div>
                       </div>
                       <div class="progress-alt">
                           <h4>Value Three</h4>
                       </div>
                    </div>                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 test-spacer" style="background-color: orange;"></div>
        </div>
       
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- compiled and minified Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src='./js/radials.js'></script>
    </body>
</html>
