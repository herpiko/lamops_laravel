<!DOCTYPE html>
@extends('master')
<html>
  
  <head data-gwd-animation-mode="proMode">
    <title>LAMOPS.com - beta testing</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="generator" content="Google Web Designer 1.0.6.0428">
 
<!-- Core CSS - Include with every page -->
    <link href="sb-admin-v2/css/bootstrap.min.css" rel="stylesheet">
    <link href="sb-admin-v2/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="sb-admin-v2/css/sb-admin.css" rel="stylesheet">
  

   
    <style type="text/css" id="" title="Temp" media="screen"></style>

    
    
  </head>
  
 <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Yo!</h3>{{ $error }}
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kata kunci" name="password" type="password" value="">
                                </div>
                               <!--  <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Log in">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>
</html>