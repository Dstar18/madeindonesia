<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.6.2.min.js"></script>

    <script>
        $(document).ready(function(){

        $('#login').on('click', function(){
            $.ajax({
                type : "POST",
                url  :'prosesLogin.php',
                data : $('#formLogin').serialize(),
                success: function(data){
                    console.log(data);
                }
            });
        return false;
        });

        });
    </script>
</head>
<body>
 
	<h1>Username : admin <br/> Password : admin <br/> Pengecekan di inspect network</h1>

 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form id="formLogin">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" id="login" class="tombol_login" value="Submit">
 
			<br/>
			<br/>

		</form>
		
	</div>
    
 
</body>
</html>