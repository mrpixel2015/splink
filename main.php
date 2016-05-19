<?php
// session_start();

// include("classes/DataBase.class.php");
// include("classes/FeedCBUtility.class.php");
// include("classes/Utility.class.php");
// include("classes/UtilityGetRecord.class.php");


// $page = (isset($_GET['pg']))?$_GET['pg']:'';
// $act = empty($_GET['action'])?'':$_GET['action'];



// if(!$_SESSION['USERNAME'] || empty($_SESSION['USERNAME'])){
// 	header("Location:index.php");
// }


// if($act == "logout"){
// 	unset($_SESSION['USERNAME']);
// 	session_destroy();
// 	header("Location:index.php");
// }



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Swimming Academy Management Information System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootflat.css" rel="stylesheet">
  
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/jquery.noty.css"/>
    <link rel="stylesheet" type="text/css" href="css/noty_theme_default.css"/> 

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
		  

      .modal-header-success {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5cb85c;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
        .modal-header-warning {
          color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #f0ad4e;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
        .modal-header-danger {
          color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #d9534f;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
        .modal-header-info {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5bc0de;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
        .modal-header-primary {
          color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #428bca;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
		
	   </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          
          <img style="max-width:200px; margin-top: -30px;" src="img/logoth3.png" > 
        
            

          </a>
          
        </div>
      
        <div id="navbar" class="navbar-collapse collapse">
  
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?pg=home&action=logout"; ?>">Login as <?php echo $_SESSION['USERNAME']; ?>&nbsp;&nbsp;<i class="fa fa-sign-out fa-fw text-danger"></i>Logout</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</nav>
    
    <!-- the content begins	-->
    <div class="container">
    	<br/>
		<div class="row" style="padding-top:60px;">
        	<div class="col-md-2">
            	<ul class="list-group">
                  <li class="list-group-item"><a href="<?php echo $_SERVER['PHP_SELF']."?pg=home&sid=".$_SESSION['SESSID']; ?>"><i class="fa fa-home fa-fw"></i>Home</a></li>
                  
                  <!--<li class="list-group-item"><a href="<?php echo $_SERVER['PHP_SELF']."?pg=cust&sid=".$_SESSION['SESSID']; ?>"><i class="fa fa-users fa-fw"></i>Customer</a></li>
                  <li class="list-group-item"><a href="<?php echo $_SERVER['PHP_SELF']."?pg=inv&sid=".$_SESSION['SESSID']; ?>"><i class="fa fa-list-alt fa-fw"></i>Inventory</a></li>-->
                  <!--<li class="list-group-item"><a href="#"><i class="fa fa-cogs fa-fw"></i>Setting</a></li>-->
                </ul>
            </div>
            <div class="col-md-10">
            <?php
			           

                 include("home.php");
				
          				// if($page == "home"){
          				// 	include("home.php");
          				// }else if($page == "cust"){
          				// 	include("customer.php");
          				// }else if($page == "inv"){
          				// 	include("inventory.php");
          				// }else{
          				// 	include("home.php");
          				// }
          			
          	?>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/ecmascript" src="js/icheck.min.js"></script>
    <script type="text/javascript" src="js/wickedpicker.js"></script>
    <script type="text/javascript" src="js/jquery.noty.js"></script>
    <script src='js/fullcalendar.min.js'></script>
	 <script type="text/javascript">

     

	
		$(document).ready(function(e) {
            
			//console.log("document load complete");
			
			//$('#example').DataTable();
			
        });
	
	</script>
  </body>
</html>