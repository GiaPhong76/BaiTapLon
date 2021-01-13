$(document).ready(function() {
    $(window).scroll(function() {
        // Đổi màu thanh công cụ khi kéo xuống 
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        var aboutBtn=document.getElementById("btn-about");
        
        // Hiện nút kéo lên 
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show"); 
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });
    // Hiển thị chữ chạy
    var typed = new Typed(".typing", {
        strings: ["lập trình viên", "sinh viên"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["lập trình viên ", "sinh viên "],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-3", {
        strings: ["lập trình viên ", "sinh viên "],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    //Gán function cho nút kéo lên 
    $('.scroll-up-btn').click(function() {
        $('html').animate({ scrollTop: 0 });
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function() {
        $('html').css("scrollBehavior", "smooth");
    });
    //Hiện nút menu
    $('.menu-btn').click(function() {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
    //Hiển thị thành viên 
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
});