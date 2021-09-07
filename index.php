<?php
    session_start();
    include('connect.php');

    error_reporting(0);

    $query = "SELECT ID FROM players";
    $result = mysqli_query($conn, $query);
    $countplayers = mysqli_num_rows($result);

    $query2 = "SELECT jobName FROM jobs";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "SELECT factionID FROM factions";
    $result3 = mysqli_query($conn, $query3);
    $countfactions = mysqli_num_rows($result3);

    $query4 = "SELECT carID FROM cars";
    $result4 = mysqli_query($conn, $query4);
    $countcars = mysqli_num_rows($result4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css?v=<?=time();?>">
  <title>GTA BLACKSANTOS CITY RP - Welcome</title>
  <meta name=”keywords” content="GTA BLACKSANTOS CITY RP" />
  <meta name=”description” content="เซิฟเวอร์ GTA BLACKSANTOS CITY RP มาพร้อมกับระบบใหม่ๆที่ไม่เคยเห็นที่ไหนมาก่อน!" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
  <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100578878332089"
  theme_color="#FF3333"
  logged_in_greeting="สวัสดี, มีอะไรให้เราช่วยไหม?"
  logged_out_greeting="สวัสดี, มีอะไรให้เราช่วยไหม?">
      </div>
  <div class="main-container">
    <div id="navbar">
      <a href="#home" class="animate__bounceIn" id="logo">GTA BLACKSANTOS CITY</a>
      <div id="navbar-right">
        <a href="#home" class="animate__animated animate__heartBeat">🏠 หน้าหลัก</a>
        <a href="#download" class="animate__animated animate__heartBeat">📂 ดาวน์โหลด</a>
        <a href="shop.php" class="animate__animated animate__heartBeat" target="_blank">🛒 ร้านค้า</a>
        <a href="payment.php" class="animate__animated animate__heartBeat" target="_blank">💵 เติมเงิน</a>
        <a href="https://www.facebook.com/groups/877425766054448/" class="animate__animated animate__heartBeat" target="_blank">📋 กลุ่ม</a>
        <a href="https://www.facebook.com/GTALONGLIFEONLINE" class="animate__animated animate__heartBeat" target="_blank">📞 ติดต่อทีมงาน</a>
        <?php if ($_SESSION["uID"] == "")
        {
          ?>
          <a href="login.php" class="animate__animated animate__heartBeat" target="_blank">📲 เข้าสู่ระบบ</a>
          <?php
        }
        else{
        ?>
        <?php }?>
        <?php if ($_SESSION["uID"] == "")
        {
        }
        else{
        ?>
            <a href="char.php" class="animate__animated animate__heartBeat"><button class="buttonUser"><?=$_SESSION["playername"];?></button></a>
        <?php }?>
      </div>
    </div>
    <div id="navbarmobile">
      <a href="#home" class="animate__animated animate__heartBeat">🏠 หน้าหลัก</a>
      <a href="#download" class="animate__animated animate__heartBeat">📂 ดาวน์โหลด</a>
      <a href="shop.php" class="animate__animated animate__heartBeat" target="_blank">🛒 ร้านค้า</a>
      <a href="payment.php" class="animate__animated animate__heartBeat" target="_blank">💵 เติมเงิน</a>
      <a href="https://www.facebook.com/groups/877425766054448/" class="animate__animated animate__heartBeat" target="_blank">📋 กลุ่ม</a>
      <a href="https://www.facebook.com/GTALONGLIFEONLINE" class="animate__animated animate__heartBeat" target="_blank">📞 ติดต่อทีมงาน</a>
      <?php if ($_SESSION["uID"] == "")
      {
        ?>
        <a href="login.php" class="animate__animated animate__heartBeat" target="_blank">📲 เข้าสู่ระบบ</a>
        <?php
      }
      else{
      ?>
      <?php }?>
      <?php if ($_SESSION["uID"] == "")
      {
      }
      else{
      ?>
          <a href="char.php" class="animate__animated animate__heartBeat"><button class="buttonUser"><?=$_SESSION["playername"];?></button></a>
      <?php }?>
    </div>

    <div class="banner-head-top" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-sr='enter top'>
                  <div class="banner-head-top-text">
                    <img src="img/logomain.png" id="heart" width="650" height="300">
                    <div class="boxmsgmain">
                      <div class="boxmsg2">
                        <marquee onmouseout="this.start()" onmouseover="this.stop()">
                            <h4 class="animate__animated animate__rubberBand"><font color="#FFFFFF"><strong>ยินดีต้อนรับผู้เล่นทุกคนเข้าสู่เซิฟเวอร์ของเรา เราจะพัฒนาไปเรื่อยๆโดยไม่มีที่สิ้นสุด!!</strong></font></h4></marquee>
                      </div>
                    </div>
                      <a href="#download"><button class="glow-on-hover" type="button">💻 สำหรับ Windows</button></a>
                      <a href="#download"><button class="glow-on-hover" type="button">📱 สำหรับ Android</button></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsmain">
      <div class="headserver">
        <h3 class="h32"><strong>ข่าวสารอัพเดท</strong></h3>
        <h4 class="h42"><strong>News update of server</strong></h4>
      </div>

      <div class="newslide1">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
            <li data-target="#myCarousel" data-slide-to="11"></li>
            <li data-target="#myCarousel" data-slide-to="12"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/update1.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/ChickenJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/CowJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/GrapeJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/FishingJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/PizzaJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/BeeJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/AlgaeJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/KerryJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/OilJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/SombatJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/KemiJob.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/CarpartsJob.jpg" alt="" style="width:100%;">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="newsupdate">
        <h4 class="h43new">ข่าวสารอัพเดท</h4>
        <h4 class="h44new">New Update</h4>
        <div class="news">
          <ul>
              <li>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> เตรียมพบกับการปรับรูปแบบการเล่นใหม่ให้ Roleplay กว่าเดิมเร็วๆนี้</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> พบบัคพบโปร โปรดแจ้งแอดมินที่ แฟนเพจ เซิฟเวอร์</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> ยินดีต้อนรับเข้าสู่  GTA BLACKSANTOS CITY RP</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> พบกับระบบใหม่ๆได้แล้ววันนี้ที่ GTA BLACKSANTOS CITY</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> รอการอัพเดท</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> รอการอัพเดท</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> รอการอัพเดท</a><br>
                  <a href="#" class="newsastyle"><font color="red">[News]</font> รอการอัพเดท</a><br>
              </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="showserver">

      <div class="headserver">
        <h3 class="h32"><strong>ข้อมูลภายในเซิฟเวอร์</strong></h3>
        <h4 class="h42"><strong>Infomation In Server</strong></h4>
      </div>

      <div class="showplayer">
        <h3 class="h33"><strong>ข้อมูลเซิฟเวอร์</strong></h3>
        <h4 class="h44"><strong>Information Server</strong></h4>
        <ul class="ulcs">
            <div class="informationserver">
                <li><h4><i class="fa fa-user-circle-o"></i> จำนวน "ตัวละคร" ในเซิฟเวอร์: <?=number_format($countplayers);?></h4></li>
            </div>
            <div class="informationserver">
                <li><h4><i class="fa fa-users"></i> จำนวน "กลุ่ม/แก๊ง" ในเซิฟเวอร์: <?=number_format($countfactions);?></h4></li>
            </div>
            <div class="informationserver">
                <li><h4><i class="fa fa-car"></i> จำนวน "ยานพาหนะ" ในเซิฟเวอร์: <?=number_format($countcars);?></h4></li>
            </div>
        </ul>
        <br>
        <br>
        <img src="img/g2.png" class="vert-move" width="200" height="300"/>
      </div>
      <div class="showserver1">
        <h3 class="h33"><strong>งานภายในเซิฟเวอร์</strong></h3>
        <h4 class="h44"><strong>Jobs In Server</strong></h4>
        <ul class="ulcs">
            <?php while($joblist = mysqli_fetch_assoc($result2)){

            ?>
            <li><?=$joblist['jobName'];?></li>

            <?php
            }
            ?>
        </ul>
      </div>
    </div>

    <div class="showdata">

      <div class="headshowdata">
        <h3 class="h32"><strong>เกี่ยวกับเซิฟเวอร์</strong></h3>
        <h4 class="h42"><strong>About Server</strong></h4>
      </div>

      <div class="showdata2">
        <h3 class="h33"><strong>ข้อมูลเกี่ยวกับเซิฟเวอร์</strong></h3>
        <h4 class="h44"><strong>Infomation Server</strong></h4>
        <button class="buttoninfo">โปรดเล่นกันอย่างมีสติอย่าประมาท</button>
        <a href="https://www.facebook.com/GTALONGLIFEONLINE/"><button class="buttoninfo">Fanpage Facebook (แฟนเพจเซิฟเวอร์) [คลิก]</button></a>
        <a href="https://www.facebook.com/groups/877425766054448/"><button class="buttoninfo">Group Facebook (กลุ่มเซิฟเวอร์) [คลิก]</button></a>
        <a href="https://discord.gg/YrNPkKy"><button class="buttoninfo">Discord (ดิสคอดเซิฟเวอร์) [คลิก]</button></a>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
      </div>
      <div class="showdata1">
        <img src="img/g4.png" class="vert-move" width="300" height="520"/>
      </div>
      <div class="showdata2">
        <h3 class="h33"><strong>กฏของเซิฟเวอร์</strong></h3>
        <h4 class="h44"><strong>Rules of Server</strong></h4>
        <button class="buttoninfo">Bully-ห้ามดูถูกเหยีดหยามใช้คำหยาบ</button>
        <button class="buttoninfo">DB-ห้ามใช้รถเหยียบหรือชนplayer</button>
        <button class="buttoninfo">DM-ห้ามยิงหรือต่อยplayerอื่นมั่ว</button>
        <button class="buttoninfo">SK-ห้ามดักฆ่าจุดเกิดหรือดักจุดวาป</button>
        <button class="buttoninfo">QG-ห้ามหนีบทบาทดิสหนีการจับกุม</button>
        <a href="https://sites.google.com/view/gtaloneliferules/" target="_blank"><button class="buttoninfo">อ่านเพิ่มเติม.......</button></a>
        <a href="https://sites.google.com/view/rulespolicelonglife/home" target="_blank"><button class="buttoninfo">กฏของเจ้าหน้าที่ตำรวจ</button></a>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
        <button class="buttoninfo">รอการอัพเดท</button>
      </div>
    </div>

    <div class="downloadbox">

      <div id="download" class="headdownload">
        <h3 class="h32"><strong>ดาวน์โหลดเกมส์</strong></h3>
        <h4 class="h42"><strong>Download Game</strong></h4>
      </div>

      <div class="downloadbox1">
        <h3 class="h33"><strong>ดาวน์โหลด</strong></h3>
        <h4 class="h44"><strong>Downloads</strong></h4>
        <button class="buttonpc"><strong>สำหรับ PC 💻</strong></button>
        <br>
        <br>
        <a href="https://drive.google.com/file/d/1AX7O0bXvhsyPMmgxgCY3qoDW4QG1gatP/view" class="apc"># ตัวเกมส์ GTA:SA <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a>
        <br>
        <a href="https://dracoblue.net/download-release/samp-client-0.3.7/sa-mp-0.3.7-install.exe" class="apc"># ตัวออนไลน์ 0.3.7-R2 <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a>
        <br>
        <p class="underline"></p>
        <br>
        <button class="buttonad"><strong>สำหรับ Android 📱</strong></button>
        <br>
        <br>
        <span><font color="red">[ดาวน์โหลด APK เวอร์ชั่น ไม่มีไมค์]<br>
              * พื้นที่ใช้ประมาณ 2GB *</font></span><br>
        <a href="https://mega.nz/file/S7IHmSgL#40yiKOsNtylb7YBo2rFWfMVXjunuewn0GjKHSiKit-M" class="apc"># APK Full <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://mega.nz/file/SihDUK4Q#DlkzgD6rjBbzBtLJNuurtIDhneSla87hYkcVU_5LJ0Q" class="apc"># APK Lite <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://www.mediafire.com/download/lscm79tx34ailxv" class="apc"># Data Lite <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://www.mediafire.com/download/4apydpgb1cpeyrc" class="apc"># OBB <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a>
		<br>
        <br>
        <span><font color="red">[ดาวน์โหลด APK เวอร์ชั่น มีไมค์]<br>
        </font></span>
        <a href="https://mega.nz/file/emoiGKzT#FKlktkQHP0FShpI7WT8nPR6J5zn2W31OrlANkec6Bc" class="apc"># APK Full (Voice) <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://mega.nz/file/3ixSUCDb#q0x1fYRIggk7uardDuiOXQZToslUYwoY3ax9TaG0jn8" class="apc"># APK Lite (Voice) <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://mega.nz/file/04xCVTZK#SWXgWAOSh-AdLtW08ePUoecnDwGpZdDiI1PlTHKN0pY" class="apc"># Data (สำหรับ Full และ Lite) <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://mega.nz/file/g0QjyCrS#GoUYMg6jAr6DU1ejU_nyj-ZDJDne3aXwWq-7ps5ymwo" class="apc"># OBB Full <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a><br>
        <a href="https://mega.nz/file/pg5w3bpJ#j2xaJ5H4X7PIQ-pfgxkpuMyFoh6MhHvUVEOYstdvku8" class="apc"># OBB Lite <font color="green">[คลิกเพื่อดาวน์โหลด]</font></a> 
		<br>
        <br>
        <span><font color="red">* หมายเหตุ:ผู้เล่นท่านใด ไม่สามารถโหลดได้ หรือมีปัญหาในการโหลดเกมส์ให้ติดต่อแอดมินพร้อมให้คำปรึกษา<br>
        </font></span>
      </div>
    </div>
  </div>
  <footer>
      <div class="foot">
          <span>Copyright GTA LONG LIFE TH © 2020 Design by Justinz</span>
      </div>
  </footer>
</body>
<script>

// All animations will take twice the time to accomplish
document.documentElement.style.setProperty('--animate-duration', '2s');

// All animations will take half the time to accomplish
document.documentElement.style.setProperty('--animate-duration', '.5s');

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("logo").style.fontSize = "30px";
  } else {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("logo").style.fontSize = "30px";
  }
}
</script>
</html>
