<?php 
    include "connect.php";
    $data = file_get_contents("php://input");
    $result = json_decode($data, true);
    date_default_timezone_set("Asia/Bangkok");
    $t = time();
    $new_id = strval(time());
        echo "<br>";
        echo "working";
        echo "<br>";
            $username = mysqli_real_escape_string($connect,$_POST["username"]);
            $password = mysqli_real_escape_string($connect,$_POST["password"]);
            $fname = mysqli_real_escape_string($connect,$_POST["fname"]);
            $lname = mysqli_real_escape_string($connect,$_POST["lname"]);
            $email = mysqli_real_escape_string($connect,$_POST["email"]);
            $tel = mysqli_real_escape_string($connect,$_POST["tel"]);
            $date = mysqli_real_escape_string($connect,$_POST["date"]);            
            $radio = mysqli_real_escape_string($connect,$_POST["radio"]);
            $study = mysqli_real_escape_string($connect,$_POST["study"]);
            $address = mysqli_real_escape_string($connect,$_POST["address"]);
                       
            
            
    
                $sql = "INSERT INTO user_data(username,password,fname,lname,email,tel,date,radio,study,address) 
                VALUES('$username','$password','$fname','$lname','$email','$tel','$date','$radio','$study','$address',NOW())";
    
                $mysql_result=mysqli_query($connect,$sql);
                echo $sql;
                echo "<br>";
                echo $mysql_result;
                echo "<br>";
                if ($mysql_result) {
                    echo "complete";
                    header('location:index.php');
                } else {
                    echo "error";
                }
           
    
    
?>