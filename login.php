<!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title></title>
 		<style type="text/css">
 			
 			body{
 			
 			    margin: 0;
 			
 			    padding: 0;
 			
 			    background: #487eb0;
 			
 			}
 			
 			.sign-div{
 			
 			    width: 300px;
 			
 			    padding: 20px;
 			
 			    text-align: center;
 			
 			    background: url(bg02.jpg);
 			
 			    position:absolute;
 			
 			    top: 50%;
 			
 			    left: 50%;
 			
 			    transform: translate(-50%,-50%);
 			
 			    overflow: hidden;
 			
 			}
 			
 			.sign-div h1{
 			
 			    margin-top: 100px;
 			
 			    color: #fff;
 			
 			    font-size: 40px;
 			
 			}
 			
 			.sign-div input{
 			
 			    display: block;
 			
 			    width: 100%;
 			
 			    padding: 0 16px;
 			
 			    height: 44px;
 			
 			    text-align: center;
 			
 			    box-sizing: border-box;
 			
 			    outline: none;
 			
 			    border: none;
 			
 			    font-family: "montserrat",sans-serif;
 			
 			}
 			
 			.sign-text{
 			
 			    margin:4px;
 			
 			    background: rgba(255,255,255,5);
 			
 			    border-radius: 6px;
 			
 			}
 			
 			.sign-btn{
 			
 			    margin-top: 50px;
 			
 			    margin-bottom: 20px;
 			
 			    background: #487eb0;
 			
 			    color: #fff;
 			
 			    border-radius: 44px;
 			
 			    cursor: pointer;
 			
 			    transition: 0.8s;
 			
 			}
 			
 			.sign-btn:hover{
 			
 			    transform:scale(0.96);
 			
 			}
 			
 			.sign-div a{
 			
 			    text-decoration: none;
 			
 			    color: #fff;
 			
 			    font-family: "montserrat", sans-serif;
 			
 			    font-size: 14px;
 			
 			    padding: 10px;
 			
 			    transition: 0.8s;
 			
 			    display: block;
 			
 			}
 			
 			.sign-div a:hover{
 			
 			    background: rgba(0,0,0,.3);
 			
 			}
 
 		</style>
 	</head>
 	<body>
 		<div class="sign-div">   
 		<form class="" action="login_success.php" method="post">       
 		<h1>Login </h1>        
 		<input class="sign-text" type="text" name="username" placeholder="Login Name" >       
 		<input class="sign-text" type="password" name="password" placeholder="password">       
 		<input class="sign-btn" type="submit" value="Login">    
 		</form> 
 		</div>
 		
 	
 </html>
 