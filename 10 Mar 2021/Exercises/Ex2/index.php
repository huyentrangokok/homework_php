<!DOCTYPE html>
<html>
<head>
	<title>Ex2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./Bootstrap/bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        
            <div class="row">
                <div class="col-md-7 pl-3">
        		<p class="bg-secondary mt-2 pl-3"><b>Registration Form</b></p>
        		<form action="#" method="post" class="pl-3">
        			<p>First name<br> <input type="text" name="fname" id="firstName"></p>
        			<p>Last name<br> <input type="text" name="lname" id="lastName"></p>
        			<p>Email<br> <input type="email" name="email" id="Email"></p>
        			<p>
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" id="male" value="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="female">
                        <label for="female">Female</label>
                    </p>
                    <p>
                        <label for="state">State</label>
                        <select name="state" id="state">
                            <option value="johor">Johor</option>
                            <option value="massachusetts">Massachusetts</option>
                            <option value="washington">Washington</option>
                        </select>
                    </p>
                    <p>
                        <label for="hobbies">Hobbies</label> <br>
                        <input type="checkbox" name="hobbies" value = "badminton" >
                        <label for="badminton">Badminton</label>
                        <input type="checkbox" name="hobbies" value = "football" >
                        <label for="football">Football</label>
                        <input type="checkbox" name="hobbies" value = "bicycle" >
                        <label for="bicycle">Bicycle</label>
                    </p>
        			<p>
                        <button type="submit" class=" btn btn-primary">Save record</button> 
                        <button type="reset" class="btn btn-default" >Reset</button>
                    </p>
        		</form>
            	</div>
                <div class="col-md-5 pl-3 pr-3">
                    <p class="bg-secondary mt-2 pl-3"><b>Featured</b></p>
                    <p><b>Special title treatment</b></p>
                    <p>With supporting text below as a natural<br>lead-in to additional content.</p>
                    <button type="submit" class="btn btn-primary active" >Go somewhere</button>
                </div>
            </div>
        
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $lname = $email = $gender = $hobbies = $state = "";
            $fname =  ($_POST["fname"]);
            $lname =  ($_POST["lname"]);
            $email =  ($_POST["email"]);
            $gender =  ($_POST["gender"]);
            $hobbies =  ($_POST["hobbies"]);
            $state =  ($_POST["state"]);
            
        }
        if ($fname == "") {
            echo "First name không được để trống!<br>" ;
             
                }
        if ($lname == "") {
            echo "Last name không được để trống! <br>";
        }
        if ($email == "") {
            echo "Email không được để trống!";
        }
        if ($fname != "" && $lname != "" && $email != "") {
            echo "<br>Đăng ký thành công !";
            echo "<br> Fist name :". $fname ."<br>";
            echo "Last name : ". $lname ."<br>";
            echo "Email : " .$email ."<br>";
            echo "Gender : " .$gender ."<br>";
            echo "Hobbies : " . $hobbies ."<br>";
            echo "State : " .$state ."<br>";
        }
    ?>
</body>
</html>