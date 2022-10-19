<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>SHOW</span>ROOM </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#vehicles">kendaraan</a> -->
        <a href="index6.php">Form</a>
        <a href="#featured">Produk</a>
        <a href="Index2.php">Tentang Saya</a>
        <button class="dark-mode" onclick="myFunction()"><a>Mode</a></button>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
        
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="#">create one</a> </p>
    </form>
</div>

<section class="home" id="home"> </section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="vehicle-1.png" alt="">
                <div class="content">
                    <h3>All New Avanza</h3>
                    <div class="price"> <span>price : </span> Rp.270.000.000 </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> New
                        <span class="fas fa-circle"></span> 0 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-2.png" alt="">
                <div class="content">
                    <h3>All New Xpander</h3>
                    <div class="price"> <span>price : </span> Rp.330.000.000 </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> New
                        <span class="fas fa-circle"></span> 0 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-3.png" alt="">
                <div class="content">
                    <h3>All New Rize</h3>
                    <div class="price"> <span>price : </span> Rp.290.000.000 </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> Second
                        <span class="fas fa-circle"></span> 10.000 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-4.png" alt="">
                <div class="content">
                    <h3>All New GT 86</h3>
                    <div class="price"> <span>price : </span> Rp.400.000.000 </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Manual
                        <span class="fas fa-circle"></span> New
                        <span class="fas fa-circle"></span> 0 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-5.png" alt="">
                <div class="content">
                    <h3>All New Brz</h3>
                    <div class="price"> <span>price : </span> Rp.430.000.000 </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic and Manual
                        <span class="fas fa-circle"></span> New
                        <span class="fas fa-circle"></span> 0 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="vehicle-6.png" alt="">
                <div class="content">
                    <h3>Honda Crv</h3>
                    <div class="price"> <span>price : </span> Rp.360.000.000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> Automatic
                        <span class="fas fa-circle"></span> New
                        <span class="fas fa-circle"></span> 0 Km
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>Ladder Frame</span> Cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="car-1.png" alt="">
                <div class="content">
                    <h3>All New Triton</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp.600.000.000</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="car-2.png" alt="">
                <div class="content">
                    <h3>All New Raptor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp.1.350.000.000</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="car-3.png" alt="">
                <div class="content">
                    <h3>All New Pajero Sport</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp.800.000.000</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="car-4.png" alt="">
                <div class="content">
                    <h3>All New Izuzu Mux</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">500.000.000</div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="car-5.png" alt="">
                 <div class="content">
                     <h3>Izuzu D Max</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rp.480.000.000</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="car-6.png" alt="">
                 <div class="content">
                     <h3>All New Hilux</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rp.550.000.000</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="car-7.png" alt="">
                 <div class="content">
                     <h3>All New Fortuner</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rp.750.000.000</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="car-8.png" alt="">
                 <div class="content">
                     <h3>All New Xtrail</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rp.430.000.000</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter"></section>

<section class="footer" id="footer">

    <div class="box-container">
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> WhatsApp </a>
        </div>

    </div>

    <div class="credit"> created by mr. web designer | all rights reserved </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>