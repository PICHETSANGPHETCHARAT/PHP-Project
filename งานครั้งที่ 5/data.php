<?php 
session_start();
if( $_SESSION['username'] != $_POST['login'] && $_SESSION['password'] != $_POST['password']){
    echo '<script>alert("password ไม่ตรงกัน")</script>';
    echo "<script>window.location = './login.php'</script>";
}
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
      <div class="alert success" style="width: 100%">
        <span class="closebtn">&times;</span>  
        <strong>ลงทะเบียนสำเร็จ!</strong> โปรดตรวจสอบข้อมูลของท่าน
      </div>
      <br>
    <div class='container'>
        <div class="container" style="width: 65%">
              <!-- <form action="#" method="post"> -->
                <form>
                  <center><h2>ผลการลงทะเบียน</h2> </center>
            <br>
              <div class="form-group">
                 <label for="username">Username</label>
                 <input type="text" class="form-control" id="username" name="username" placeholder="" required="" value="<?php echo "".$_SESSION["username"]; ?>" disabled>
               </div>
               <div class="form-group">
                 <label for="password">Password</label>
                 <input type="text" class="form-control" id="password" name="password" placeholder="" required="" value="<?php echo "".$_SESSION["password"]; ?>" disabled>
               </div>
               <div class="form-group">
                 <label for="fname">ชื่อ</label>
                 <input type="text" class="form-control" id="fname" name="fname" placeholder="" required="" value="<?php echo "".$_SESSION["fname"]; ?>" disabled>
               </div>
               <div class="form-group">
                 <label for="lname">นามสกุล</label>
                 <input type="text" class="form-control" id="lname" name="lname" placeholder="" required="" value="<?php echo "".$_SESSION["lname"]; ?>" disabled>
               </div>
               <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" required="" value="<?php echo "".$_SESSION["email"]; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="tel">เบอร์โทรศัพท์</label>
                <input class="form-control" type="tel" id="tel" name="tel" placeholder="" required="" value="<?php echo "".$_SESSION["tel"]; ?>" disabled>
              </div>
              <div class="item" style="width: 100%;">
                <label for="date">วัน/เดิน/ปีเกิด</label>
                <input class="form-control" id="date" type="date"  name="date" placeholder="" required="" value="<?php echo "".$_SESSION["date"]; ?>" disabled>
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div class="question">
                        <label for="radio">ชั้นปี</label>
                        <input type="text" class="form-control" name="radio" id="radio" placeholder="" required="" value="<?php echo "".$_SESSION["radio"]; ?>" disabled>   
              </div>  
               <div class="form-group">
                <label for="study">สาขาวิชา:</label>
                <input  class="form-control" type="study" id="study" name="study" placeholder="" required="" value="<?php echo "".$_SESSION["study"]; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="address">ที่อยู่:</label>
                <br>
                <textarea id="address" name="address" type="text" class="form-control"
                        rows="5"  placeholder="" required="" disabled><?php echo "".$_SESSION["address"]; ?>
                </textarea>
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