<!DOCTYPE html>
<html>
<head>
    <title>Ex1</title>
    <link rel="stylesheet" type="text/css" href="./Bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <p class="bg-lightgreen alert">Sign in</p>
        <div class="form-group">
            <form action="http://localhost/homework_php/10%20Mar%202021/Exercises/Ex1/" method="post">
                <table class="container">  
                    <tr>
                        <td><input class="bg-lightGray" type="text" name="Username" placeholder="Username" id="Usrname"></td>
                    </tr>
                    <tr>
                        <td><p class="text-danger" id="validateUsername"></p></td>
                    </tr><br>
                    <tr>
                        <td><input class="bg-lightGray" type="password" name="Password" placeholder="Password" id="pass"></td>
                    </tr>
                    <tr>
                        <td><p class="text-danger" id="validatePassword"></p></td><br>
                    </tr>
                    <tr>
                        <td><button class="bg-lightgreen" type="submit"onclick="validate()">Login</button></td>
                    </tr>
                </table>
            </form> 
        </div>
    </div>
    <script type="text/javascript">
        function validate(){
            $usrname=document.getElementById('Usrname').value;
            $pass=document.getElementById('pass').value;
            if($usrname==''){
                document.getElementById('validateUsername').innerHTML='Vui lòng không để trống trường này!';
            }
            if($pass==''){
                document.getElementById('validatePassword').innerHTML='Vui lòng không để trống trường này!';
            }
        }
    </script>
</body>
</html>