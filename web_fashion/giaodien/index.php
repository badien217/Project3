<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo1.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>gracious garments</title>

</head>

<div>
    <header>
        <div class="logo">
            <a href=""> <img src="img/logo3.png" alt=""></a>
        </div>
        <nav class="menu">
            <li><a href="#">Nu</a>
                <ul class="sub-menu">
                    <li><a href="#">Fashion News</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="#">Shirt</a>
                        <ul>
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Vest</a></li>
                            <li><a href="#">Sweater</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Trousers</a>
                        <ul>
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Vest</a></li>
                            <li><a href="#">Sweater</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Nam</a></li>
            <li><a href="#">Chirent</a></li>
            <li><a href="#">Sale</a></li>
            <li><a href="#">Khau trang</a></li>
            <li><a href="#">VST</a></li>
            <li><a href="#">Thong tin</a></li>

        </nav>
        <div class="others">
            <li><input type="text" placeholder="Search"><i class="fas fa-search "></i></li>
            <li><a class="fa fa-paw" href="#"></a></li>
            <li><a class="fa fa-user" href="#"></a></li>
            <li><a class="fa fa-shopping-bag" href="#"></a></li>
        </div>
    </header>
    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="img/anhthu.jpg">
            <img src="img/anhthu2.jpg">
            <img src="img/anhthu3.jpg">
        </div>

        <div class="container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <section class="app-container">
        <p>Dowload gg</p>
        <div class="app-google">
            <img src="img/googleplayjpg.jpg">
            <img src="img/intagram.jpg">
        </div>
        <p>Nhan thong bao</p>
        <input type="text" placeholder="Nhap email cua ban">
    </section>
<!-----------------footer--------->
<div class="footer-top">
    <li><a href=""><img src="img/slide5.png"></a></li>
    <li><a href="">Lien he</a></li>
    <li><a href=""></a>Tuyen dung</li>
    <li><a href=""></a>Gioi thieu</li>
    <li>
    <a class="fab fa-facebook" href="#"></a>
    <a class="fab fa-twitter" href="#"></a>
    <a class="fab fa-youtube" href="#"></a>
    </li>
</div>
    <div class="footer-center"
<p>Cong ty co phan Dinh Van Trong<br>
    Dia chi : 43 Tran Dai Nghia-0987654435<br>
    Dat hang online: <b>0373172624</b>
</p>
</div>
<div class="footer-bottom">
    <p>Copyright © 1996-2023 IndiaMART InterMESH Ltd. All rights reserved.</p>
</div>
</body>
<script>
    //làm slide :1.chạy tự động 2.click vào button chạy tương ứng 3.màu của thanh chọn
    const imgP = document.querySelectorAll(".aspect-ratio-169 img")
    const imgC = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let index = 0;
    let imgNum = imgP.length;
//can anh
    imgP.forEach(function(image, index){
        // console.log(imgP);
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function (){
        slider(index)
        })
    })
function imgSlide (){
    index ++
    console.log(index)
    if(index >= imgNum){
        index = 0;
    }
    slider(index);
}
function slider (index) {
    imgC.style.left = "-" + index* 100 + "%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}

setTimeout(imgSlide,5000)

    const header = document.querySelector("header")
window.addEventListener("scroll",function (){
    x = window.pageYOffset
    // console.log(x);
    if(x > 0) {
        header.classList.add("sticky")
    }else {
        header.classList.remove("sticky")
    }
})
</script>

</html>