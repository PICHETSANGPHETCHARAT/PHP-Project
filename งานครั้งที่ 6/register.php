<?php
session_start();
$msg = "";
include_once "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" >
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
    <title>งานครั้งที่ 2</title>
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
        <div class="container" style="width: 55%">
              <!-- <form action="#" method="post"> -->
                <form action="./adddata.php" method="post">
                  <center><h2>ลงทะเบียน</h2> </center>
            <br>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id ="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id ="password" name="password" required>
            </div>
            <div class="form-group">
              <label for="confirmpassword">Confirm Password</label>
              <input type="password" class="form-control" id ="confirmpassword" name="confirmpassword" required>
            </div>
            <small id="emailHelp" class="form-text text-muted">ชื่อ-นามสกุล</small><br>
               <div class="form-group">
                 <label for="fname">ชื่อ</label>
                 <input type="text" class="form-control" id ="fname" name="fname" required="">
               </div>
               <div class="form-group">
                 <label for="lname">นามสกุล</label>
                 <input type="text" class="form-control" id ="lname" name="lname" required="">
               </div>
               <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="text" class="form-control" id ="email" name="email" required="">
              </div>
              <div class="form-group">
                <label for="tel">เบอร์โทรศัพท์</label>
                <input type="tel" id="tel" name="tel" required=""><br>
              </div>
              <div class="item" style="width: 100%;">
                <label for="date">วัน/เดิน/ปีเกิด</label>
                <input id="date" type="date" name="date" required="">
                <i class="fas fa-calendar-alt"></i>
              </div>
              <center>
      
                <div class="question">
                  <label>ชั้นปี</label>
                  <div class="question-answer" >
                    
                    <input type="radio"  id="radio1" name="radio" value="1"  required="">
                    <label for="radio1" class="radio"><span>1</span></label>
                    <input  type="radio"  id="radio2" name="radio" value="2"  required="">
                    <label for="radio2" class="radio"><span>2</span></label>
                    <input  type="radio"  id="radio3" name="radio" value="3"  required="">
                    <label for="radio3" class="radio"><span>3</span></label>
                    <input  type="radio"  id="radio4" name="radio" value="4" required="">
                    <label for="radio4" class="radio"><span>4</span></label>
                    
              
                  </div>
                </div>
              </center>
               <div class="form-group">
                <label for="study">สาขาวิชา:</label>
                <select id="study" name="study" required="">
                  <option value="emp">เลือกสาขาวิชา</option>
                  <option value="วิศวกรรมคอมพิวเตอร์">วิศวกรรมคอมพิวเตอร์</option>
                  <option value="วิศวกรรมเครื่องกล">วิศวกรรมเครื่องกล</option>
                  <option value="วิศวกรรมโยธา">วิศวกรรมโยธา</option>
                  <option value="สาขาวิชาวิศวกรรมอิเล็กทรอนิกส์และโทรคมนาคม">สาขาวิชาวิศวกรรมอิเล็กทรอนิกส์และโทรคมนาคม</option>
                  <option value="สาขาวิชาวิศวกรรมเคมี">สาขาวิชาวิศวกรรมเคมี</option>
                  <option value="วิศวกรรมไฟฟ้า">วิศวกรรมไฟฟ้า</option>
                  <option value="วิศวกรรมการเกษตร">วิศวกรรมการเกษตร</option>
                  <option value="สาขาวิชาวิศวกรรมสิ่งแวดล้อม">สาขาวิชาวิศวกรรมสิ่งแวดล้อม</option>
                  <option value="สาขาวิชาวิศวกรรมอุตสาหการ">สาขาวิชาวิศวกรรมอุตสาหการ</option>
                  <option value="สาขาวิชาวิศวกรรมวัสดุ">สาขาวิชาวิศวกรรมวัสดุ</option>
                  <option value="สาขาวิชาวิศวกรรมเกษตรอุตสาหกรรม">สาขาวิชาวิศวกรรมเกษตรอุตสาหกรรม</option>
                  <option value="สาขาวิชาวิศวกรรมชลประทานและการจัดการน้ำ">สาขาวิชาวิศวกรรมชลประทานและการจัดการน้ำ</option>
                  <option value="สาขาวิชาวิศวกรรมอาหาร">สาขาวิชาวิศวกรรมอาหาร</option>
                  <option value="สาขาวิชาวิศวกรรมอิเล็กทรอนิกส์อากาศยาน">สาขาวิชาวิศวกรรมอิเล็กทรอนิกส์อากาศยาน</option>
                </select>
              </div>
              <div class="form-group">
                <label for="address">ที่อยู่:</label>
                <br>
                <textarea type="texe" id="address" name="address"
                        rows="5" placeholder="" required="">
                </textarea>
              </div> 
              <center>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LdeQ4QdAAAAAONai82b-GCxSUHw1hfuG-Lf8chJ"></div>
                <span id="captcha_error" class="text-danger"></span>
               </div>
               <button id="btreset" " type="reset" value="Reset" >Reset</button>
               <button id="btsuccess"  type="submit" >บันทึก</button>
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                async defer>
                </script>
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
    
</body>
</html>