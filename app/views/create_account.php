<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body{
            background-color: khaki;
        }

        form input{
            width: 60%;
            border: 0;
            outline: none;
            background: #262626;
            padding: 15px;
            margin: 15px 0;
            color: #fff;
            font-size: 18px;
            border-radius: 6px;
        }
        form .btn{
            background-color: #008000;
            padding: 14px 60px;
            border: 1px solid #44ff00;
            border-radius: 6px;
            font-size: 18px;
            margin: 40px auto;
            cursor: pointer;
            color:#fff;
            transition: background 0.5s;
        }

        .btn:hover{
            background: #ff004f;
        }

        .form{
            padding: 3%;  
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            width: 45%;
            text-align: center;
            border-top-left-radius: 70px;
            border-bottom-right-radius: 70px;
            background-color: #1c87c9;
            border: 10px inset #fff;
        }

        .btn{
            display:block; 
        }

        .button{
            background-color: #1c87c9;
            border: none;
            color: white;
            padding: 20px 34px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
         
    </style>
</head>
<body>
     <div class="container">


    <form class="form" >
            <h1 style="text-align: center">Create Account</h1>
            <input type="text" id="username" class="form-control" name="username" placeholder="Username"required><br>
            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required><br>
            <input type="text" id="password" class="form-control" name="password" placeholder="Password" required><br>
            <input type="text" id="vpassword" class="form-control" name="vpassword" placeholder="Verify Password" required><br>
        <button type="submit" class="btn">Submit</button> 
        <h3>Already have an account?
        <a href="/">Login</a></h3>
    </form>
    </body>
</body>
</html>