<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php 
    //getting values of variable
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $session = $_POST['session'];
    $branch = $_POST['branch'];
    $residence = $_POST['residence'];
    $domocile = $_POST['domocile'];
    $category = $_POST['category'];
    $religion = $_POST['religion'];
    $massage = $_POST['massage'];
    $tel = $_POST['tel'];
    //connecting to the databasee
     $dbc = mysqli_connect('localhost','id14205159_root' 'Kkanhayak0007@','id14205159_testdb')
     or die('Error in connecting to the databases');
     $query = "INSERT INTO student (fname,lname,roll,gender,session,branch,residence,domocile,category,religion,massage)" . 
     "VALUES ('$fname','$lname','$roll','$gender','$session','$branch','$residence','$domocile','$category','$religion','$massage','$tel' )";
     $result = mysqli_query($dbc,$query)
     or die('Error in querring');
     echo 'Thankyou for giving your valuable time your data is submitted ';
     

    
    ?>
</body>
</html>