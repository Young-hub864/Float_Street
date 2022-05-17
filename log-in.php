<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<title>Log in</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Cardo:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,700,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/png" href="images/favicon-red.png">
	<link rel="stylesheet" type="text/css" href="css/linea.css">
	<link rel="stylesheet" type="text/css" href="css/perch.css">
	<link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/color.css">
	<link rel="stylesheet" type="text/css" href="fonts/Stroke-Gap-Icons-Webfont/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <style>
.log-in-img{
	text-align: center;
	margin-top: 8%;
}

.log-in-h4{
	margin-left: 35%;
	margin-top: 3%;
}

.log-in{
	padding-bottom: 20px;
}

input[type=text], input[type=password] {
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }
  input[type=email] {
	width: 50%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=name] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=number] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=tel] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input[type=date] {
	width: 64%;
	padding: 12px 20px;
	margin: 8px 0;
	display:block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
	text-transform: none;
  }

  input{
	outline: none;
}

.log-in-btn{
		background-color:#f3525a;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 50%;
		outline: none;
  }


a.Link-dn{
	margin-left: 18%;
	font-size: 16px;
	color: #fff;

}
div.p-word{
	padding-bottom: 20px;
    padding-top: 20px;
    color: #fff;
  }

  a.Links-dny{
	  margin-left: 10%;
	  font-size: 14px;
	  color: #fff;
  }


        </style>
        
</head>
    <body style="background-color:rgb(26, 27, 29);">
        <div class="log-in">
            <div class="container">
                <div class="log-in-img" href="index.html"><img src="images/fs_white.png" alt="logo"></a>
                </div>
                <div class="log-in-h4">
                    <h4>Log in</h4>
                    <div class="input-fields">
                        <div class="email-input">
                            <input type="email" placeholder="Enter Email" name="psw" required>
                        </div>
                        <div class="password-input">
                            <input type="password" placeholder="Enter Password" name="psw" required>
                        </div>
                        <div class="p-word">
                            <input class="r-link" type="checkbox" checked="checked" name="remember"> Remember me  <a class="Link-dn" href="forgot-password.php">Forgot Password</a>
                        </div>
                        <button class="log-in-btn" type="submit">Login</button>
                        <div class="sign-up">
                        <a class="Links-dny" href="/password">Don't have an account? Sign up today!</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php' ?>