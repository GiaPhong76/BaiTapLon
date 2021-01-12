<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <?php   
        include 'connect.php';
        $sql="select * from team where id=1";
        if($result=mysqli_query($conn,$sql)){
            $data=mysqli_fetch_all($result);
          }
        $idteam=$data[0][0];
        $sql="select * from member where idteam=$idteam";
        if($result=mysqli_query($conn,$sql)){
            $data=mysqli_fetch_all($result);
          }
    ?>
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">CvCreate<span>.vn</span></a></div>
            <ul class="menu">
                <li><a href="#home" id="btn-home" class="menu-btn">TRANG CHỦ</a></li>
                <li><a href="#about" id="btn-about" class="menu-btn">GIỚI THIỆU </a></li>
                <li><a href="#services" id="btn-services" class="menu-btn">DỊCH VỤ</a></li>
                <li><a href="#skills" id="btn-skills" class="menu-btn">KỸ NĂNG</a></li>
                <li><a href="#teams" id="btn-teams" class="menu-btn">NHÓM</a></li>
                <li><a href="#contact" id="btn-contact" class="menu-btn">LIÊN HỆ</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Trang chủ -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Xin chào, chúng tôi là: </div>
                <div class="text-2">Mai Vinh Quang,</div>
                <div class="text-2">Hà Gia Phong </div>
                <div class="text-3">Chúng tôi đang là <span class="typing"></span></div>
                <a href="#contact">Liên hệ với chúng tôi</a>
            </div>
        </div>
    </section>

    <!-- Trang giới thiệu -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">GIỚI THIỆU</h2>
            <div class="about-content1 about-content">
                <div class="column left">
                    <img src="images/Quang.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Tôi là Quang và tôi là <span class="typing-2"></span></div>
                    <p></p>
                    <a href="#">Tải xuống CV</a>
                </div>
            </div>
            <div class="about-content2 about-content">
                
                <div class="column left">
                    <div class="text">Tôi là Phong và tôi là <span class="typing-3"></span></div>
                    <p></p>
                    <a href="#">Tải xuống CV</a>
                </div>
                <div class="column right">
                    <img src="images/Phong.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Dịch vụ  -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">DỊCH VỤ CỦA CHÚNG TÔI</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Thiết kế Web</div>
                        <p></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Quảng cáo </div>
                        <p></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Thiết kế ứng dụng</div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>