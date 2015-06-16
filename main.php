<!DOCTYPE html>
<html>
	<head>
		<title>WO`GOA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.min.css" />
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery.mobile-1.3.2.min.js"></script>
        <script src="js/modernizr.js"></script>
        
	<style>
	html,body{overflow-y:hidden}
    .frame {
        height: 100% ;
        width: 100% ;
        border: 0  ;
        background-color: white ;
    }

    #content {
        height: 100vh;
        width: 100%;
        overflow-y: hidden;
    }

    .ui-content {
        margin: 0   !important ;
        padding: 0   !important ;
        border: 0   !important ;
        outline: 0   !important ;
        height: 100vh  ;
        overflow: hidden  ;
    }
	 
.styled-button-1 {
	color:#FFFFFF;
	background-color:#A68828 !important;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	padding:2px 16px;
	text-decoration:none;
}
a.styled-button-1:visited{
	color:#FFFFFF;
}
 
a.styled-button-1:hover{
	color:#FFFFFF;
}	
.logo{
	text-align:left;
	padding-left:10px;
	padding-top:2px;
	padding-bottom:2px;	
}
</style>
 
	</head>
	<body>
 
		<!-- Home Page -->
		<div data-role="page" id="home" data-theme="a" data-transition="flip">
			<div data-role="header"  class="custom-header" data-tap-toggle="false" data-id="header" >
				 
				<div class="logo"><a href="javascript:window.history.back()" data-direction="reverse" class="styled-button-1" data-theme="a" data-icon="back">Back</a></div>
			</div>
			<div data-role="content" style="height:100vh">
				<div class="quote" id="content" >
			 			 	 
					 
                    <iframe class="frame" frameborder="0" src="<?=$_GET['url']?>"></iframe>
                    
				</div>
			 
			</div>
		</div>
			<!-- end of home -->
 
	</body>
	 
	
    <script src="phonegap.js"></script>
    <script src="cordova.js"></script>
		
		
</html>