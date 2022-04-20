<?php
    session_start();
    include "connect.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styledata.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'your_site_key'
        });
      };
    </script>
    <title>แสดงผล</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="topnav">
        <a class="active" href="./index.html">Home</a>
        <div class="search-container">
            <input type="text" placeholder="Search.." name="search">
        </div>
      </div>
      <br>
      
      <br>
    <div class='container'>
        <div class="container" style="width: 65%">
              <!-- <form action="#" method="post"> -->
                <form>
                  <center><h2>ผลการลงทะเบียน</h2> </center>
            <br>
            <div class="container-fluid mt-5">
        <div class="row">
            <form method="POST" action="">
                <div class="col-md-5 text-start">
                    ตารางข้อมูล
                </div>
                <div class="col-md-5">
                    <select class="form-select shadow-sm" name="select_view" id="select_view">
                        <option value="1">ALL</option>
                        <option value="2">OPERATOR</option>
                        <option value="3">AND</option>
                        <option value="4">BETWEEN AND</option>
                        <option value="5">IS NULL</option>
                        <option value="6">IS NOT NULL</option>
                        <option value="7">LIKE</option>
                        <option value="8">NOT LIKE</option>
                        <option value="9">IN</option>
                        <option value="10">DISTINCT</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button class="btn btn-primary w-100" type="submit" onclick="search();">ค้นหา</button>
                </div>
            </form>
            
        </div>
        
        
        <br>
        <table class="table table-striped" id="data_table">
                <thead>
                    <tr>
                        <th class="text-center">USER NAME</th>
                        <th class="text-center">PASSWORD</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">LAST NAME</th>
                        <th class="text-center">EMAIL</th>
                        <th class="text-center">TEL</th>
                        <th class="text-center">BIRTHDAY</th>
                        <th class="text-center">CLASS YEAR</th>
                        <th class="text-center">FILED OD STUDY</th>
                        <th class="text-center">ADDRESS</th>
                        
                        
                        </tr>
                    </thead>
                    <?php 
                        include 'connect.php';                     
                        
                            $type = $_POST["select_view"];
                            // echo $type;
                            if($type==1){
                                $sql = "SELECT * FROM user_data ORDER BY user_id ASC ";
                            }else if($type==2){
                                $sql = "SELECT * FROM user_data WHERE class>=2 ";
                            }else if($type==3){
                                $sql = "SELECT * FROM user_data WHERE class<=3 AND work='SOFTWARE' ";
                            }else if($type==4){
                                $sql = "SELECT * FROM user_data WHERE class BETWEEN 1-3 AND work='SOFTWARE'";
                            }else if($type==5){
                                $sql = "SELECT * FROM user_data WHERE work IS NULL";
                            }else if($type==6){
                                $sql = "SELECT * FROM user_data WHERE work IS NOT NULL";
                            }else if($type==7){
                                $sql = "SELECT * FROM user_data WHERE color LIKE 'RED'";
                            }else if($type==8){
                                $sql = "SELECT * FROM user_data WHERE color NOT LIKE 'RED'";
                            }else if($type==9){
                                $sql = "SELECT * FROM user_data WHERE class IN ('2','1')";
                            }else if($type==10){
                                $sql = "SELECT DISTINCT `username`, `password`, `fname`, `lname`, `email`, `tel`, `date`, `radio`, `study`, `address` FROM `user_data`";
                            }
                            // echo $sql;
                            $sql_result = mysqli_query($connect,$sql);
                            while($result_data = mysqli_fetch_array($sql_result)){
                                echo '<td>'.$result_data["username"].'</td>';
                                echo '<td>'.$result_data["password"].'</td>';
                                echo '<td>'.$result_data["fname"].'</td>';
                                echo '<td>'.$result_data["lname"].'</td>';
                                echo '<td>'.$result_data["email"].'</td>';
                                echo '<td>'.$result_data["tel"].'</td>';
                                echo '<td>'.$result_data["date"].'</td>';
                                echo '<td>'.$result_data["radio"].'</td>';
                                echo '<td>'.$result_data["study"].'</td>';
                                echo '<td>'.$result_data["address"].'</td>';
                                echo '</tr>';
                            }
                        
                        
                    ?>
                </table>
            </div>
        </div>
    </div>
            
              <center>
              <a href="./clear-session.php" id="btsuccess" class="btn btn-info" role="button">Log Out</a>   
            </center>
              </form>
          </div>
    </div>
    
    <br>
    <br>
    <br>
    <div class="footer-dark">
        <footer>    
                <p class="copyright">นายพิเชษฐ์ สังข์เพ็ชรรัตน์ 116110462068-6</p>
                <center><address><a href="1161104620686@mail.rmutt.ac.th">Contact Email</a></address></center>
            </div>
        </footer>
    </div>
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
          }
        }
  </script>


</body>
</html>