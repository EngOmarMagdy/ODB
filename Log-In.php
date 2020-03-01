<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title> Log-in </title>
        <link rel="stylesheet" href="css/LogIn.css">
        <style> </style>
    </head>
    <body>
        
        <div class="background">
            <img src="css/Picture/logo.png">
            <div class="container"> 
            
                <h1> Login </h1>
                
                <form action="HD.php" method="post">
                    <div class="inp">
                        <label> User Name </label>
                        <input type="text" class="user" required >
                        
                        <label> Password </label>
                        <input type="password" class="password" required >
                    
                        <div class="sign-d">
                            <input type="Submit" value="Sign in" class="sign-in"> 
                        </div>
                        
                        <div class="cancel-d">
                            <input type="reset" value="Cancel" class="cancel">  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>