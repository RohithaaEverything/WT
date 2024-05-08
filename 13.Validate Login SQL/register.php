<!DOCTYPE html>    
<html>    
<head>
    <title>Register</title>    
    <style>
        body, h1, h2, h3, p, ul, ol, li, form, input, textarea, button {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            font-family: inherit;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            padding: 50px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(238, 157, 157, 0.1);
        }

        h1 {
            color: #079af6;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e98e6;
        }
    </style>    
</head>    
<body> 
    <div class="container">
        <h1>Registration Form</h1>
        <form action="" method="POST">    
            <fieldset><br>
                <label for="user">Username:</label>
                <input type="text" id="user" name="user"><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass"><br>
                <center><p><a href="index.html">Login</a></p>
                <input type="submit" id="btn" value="Register" name="submit" /></center>
            </fieldset>    
        </form>
        <?php    
        if(isset($_POST["submit"])){    
        if(!empty($_POST['user']) && !empty($_POST['pass'])) {    
            $user=$_POST['user'];    
            $pass=$_POST['pass'];    
            $con=mysqli_connect('localhost','root','') or die(mysql_error());    
            mysqli_select_db($con,'login') or die("cannot select DB");    
            
            $query=mysqli_query($con,"SELECT * FROM signin WHERE username='".$user."'");    
            $numrows=mysqli_num_rows($query);    
            if($numrows==0){    
            $sql="INSERT INTO signin(username,password) VALUES('$user','$pass')";    
            $result=mysqli_query($con,$sql);
            if($result){    
            echo "Account Successfully Created";    
            } else {    
            echo "Failure!";    
            }    
            } else {    
            echo "That username already exists! Please try again with another.";    
            }
        } else {    
            echo "All fields are required!";    
        }
        }    
        ?>
    </div>    
</body>    
</html>