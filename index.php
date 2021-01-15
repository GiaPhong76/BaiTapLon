<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head> 
<body>
<?php   
        include 'connect.php';
        $idteam=1;
        $sql="select * from member where idteam=$idteam";
        if($result=mysqli_query($conn,$sql)){
            $member=mysqli_fetch_all($result);
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
                <div class="text-2"><?php echo $member[0][2]?>,</div>
                <div class="text-2"><?php echo $member[1][2]?> </div>
                <div class="text-3">Chúng tôi đang là <span class="typing"></span></div>
                <a href="#contact">Liên hệ với chúng tôi</a>
            </div>
        </div>
    </section>

    <!-- Trang giới thiệu  -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">GIỚI THIỆU</h2>
            <div class="about-content1 about-content">
                <div class="column left" >
                    <img src="images/Quang.jpg"  alt="">
                </div>
                <div class="column right">
                    <div class="text">Tôi là <?php echo $member[0][2]?> và tôi là <span class="typing-2"></span></div>
                    <p><?php echo $member[0][6]?></p>
                    <a href="#">Tải xuống CV</a>
                </div>
            </div>
            <div class="about-content2 about-content">
                <div class="column left">
                    <div class="text">Tôi là <?php echo $member[1][2]?> và tôi là <span class="typing-3"></span></div>
                    <p><?php echo $member[1][6]?></p>
                    <a href="#">Tải xuống CV</a>
                </div>
                <div class="column right">
                    <img src="images/Phong.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php   
        $sql="select * from services where idteam=$idteam";
        if($result=mysqli_query($conn,$sql)){
            $services=mysqli_fetch_all($result);
        }
    ?>
    <!-- Trang dịch vụ  -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">DỊCH VỤ CỦA CHÚNG TÔI</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text"><?php echo $services[0][1] ?></div>
                        <p><?php echo $services[0][2] ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text"><?php echo $services[1][1] ?> </div>
                        <p><?php echo $services[1][2] ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text"><?php echo $services[2][1] ?></div>
                        <p><?php echo $services[2][2] ?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php   
        $sql="select * from skill where idteam=$idteam";
        if($result=mysqli_query($conn,$sql)){
            $skill=mysqli_fetch_all($result);
        }
    ?>
    <!-- Kỹ năng -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Kỹ năng của chúng tôi</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Kinh nghiệm sáng tạo của chúng tôi</div>
                    <ul style="list-style-position: inside;">
                        <li>Chịu trách nhiệm làm việc với nhiều dự án cùng lúc, thiết kế các trang web hấp dẫn, tương tác hàng ngày với các bạn thiết kế đồ họa, back-end developer và nhóm tiếp thị.<br></li>
                        <li>Phát triển và duy trì chức năng front-end của các trang web.<br></li>
                        <li>Tham gia thảo luận với khách hàng để làm rõ những gì họ muốn.<br></li>
                        <li>Thiết kế prototypes cho ứng dụng và trang web.<br></li>
                    </ul>
                    <a href="#">Đọc thêm</a>
                </div>
                <div class="column right">
                    <div class="text">Kỹ năng </div>
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span><?php echo $skill[0][1] ?>%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span><?php echo $skill[0][2] ?>%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span><?php echo $skill[0][3] ?>%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span><?php echo $skill[0][4] ?>%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span><?php echo $skill[0][5] ?>%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
            <style>
                .skills-content .right .html::before{
                    width: <?php echo $skill[0][1] ?>%; 
                }
                .skills-content .right .css::before{
                    width: <?php echo $skill[0][2] ?>%;
                }
                .skills-content .right .js::before{
                    width: <?php echo $skill[0][3] ?>%;
                }
                .skills-content .right .php::before{
                    width: <?php echo $skill[0][4] ?>%;
                }
                .skills-content .right .mysql::before{
                    width: <?php echo $skill[0][5] ?>%;
                }   
            </style>
        </div>
    </section>
    <!-- Trang nhóm  -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">NHÓM CỦA CHÚNG TÔI</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/Phong.jpg" alt="">
                        <div class="text"><?php echo $member[1][2]?></div>
                        <p></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Quang.jpg" alt="">
                        <div class="text"><?php echo $member[0][2]?></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php   
        $sql="select * from team where id=$idteam";
        if($result=mysqli_query($conn,$sql)){
            $contact=mysqli_fetch_all($result);
        }
    ?>
    <!-- Trang liên hệ  -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Liên hệ với chúng tôi</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Liên lạc</div>
                    <p></p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user-friends"></i>
                            <div class="info">
                                <div class="head">Nhóm</div>
                                <div class="sub-title"><?php echo $contact[0][1] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Địa chỉ</div>
                                <div class="sub-title"><?php echo $contact[0][2] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><?php echo $contact[0][3] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Nội dung</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input id="yourname" type="text" placeholder="Tên" required>
                            </div>
                            <div class="field email">
                                <input id="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input id="subject" type="text" placeholder="Tiêu đề" required>
                        </div>
                        <div class="field textarea">
                            <textarea id="message" cols="30" rows="10" placeholder="Tin nhắn..." required></textarea>
                        </div>
                        <div class="button" id="send">
                            <button type="submit">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Thanh cuối trang  -->
    <footer>
        <span>Created By <a href="https://www.facebook.com/quang.mai.k8/">Mai Vinh Quang </a> | <a href="https://www.facebook.com/giaphong.ha.12/">Hà Gia Phong</a></span>
    </footer>
    <script src="main.js"></script>
</body>
</html>