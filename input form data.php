<?php 
$conn = mysqli_connect('localhost','root','','test');

$name = ["name"];
$class = ["class"];
$absent = ["absent"];
$age = ["age"];
$gender = ["gender"];
$email = ["email"];
$password = ["password"];
$checkbox = ["check"];

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $class = $_POST["class"];
    $absent = $_POST["absent"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $checkbox = $_POST["check"];
    
    $query = "INSERT INTO data VALUES('', '$name', '$class', '$absent', '$age', '$gender', '$email', '$password', '$checkbox')";
    mysqli_query($conn, $query);
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div id="formWrapper">
        <form id="formInput" action="" method="post" class="text-white">
          <h1 class="fw-bold">Let's Input Your Data</h1>
        <div class="formArrange">
            <div class="col-8 p-2">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <input type="checkbox" value="yes" name="check" class="form-check-input" id="exampleCheck1">
                </div>
            </div>
            <div class="col-4 p-2">
                <div class="mb-3">
                    <label for="exampleInputAbsent1" class="form-label">Absent number</label>
                    <input type="number" name="absent" class="form-control" id="exampleInputAbsent1" aria-describedby="emailHelp" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="man" id="flexRadioDefault1" checked required>
                <label class="form-check-label" for="flexRadioDefault1">
                    Man
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="woman" id="flexRadioDefault2" required>
                <label class="form-check-label" for="flexRadioDefault2">
                    Woman
                </label>
            </div>
          </div>
        </div>
        <div class="formArrange submitBtn w-75">
            <button type="submit" name="submit" class="btn btn-primary w-75 rounded-pill">Submit</button>
        </div>
      </form>
    </div>
      <style>
        #formWrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        #formInput {
            padding: 20px;
            border-radius: 20px;
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .formArrange {
            display: flex;
          
        }
        .submitBtn {
            align-items: center;
            flex-direction: column;
        }
      </style>
</body>
</html>