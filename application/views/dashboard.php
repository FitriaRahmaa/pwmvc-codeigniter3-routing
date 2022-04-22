<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets//materialize/css/materialize.min.css') ?>">
    <title>Landing Page</title>
</head>
<body>
    <!--- Navbar --->
    <div class="navbar">
        <nav class="black dark-en">
            <div class="container">
                <div class="nav-wrap">
                <a href="" class="brand-logo">Mencoba</a>

                <ul class="right hide-on-med-and-down">
                    <li><a class="list" href="">Home</a></li>
                    <li><a class="list" href="#about">About</a></li>
                    <li><a class="list" href="">Services</a></li>
                    <li><a class="list" href="#portofolio">Portofolio</a></li>
                    <li><a class="list" href="">Contact</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </div>

    <!---- Slider ---->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="<?php echo base_url('assets/img/jam.jpg'); ?>">
                <div class="caption">
                    <h3>Selamat Datang di Website Saya</h3>
                    <h5>Belajar - Berkreasi</h5>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets/img/jam 2.jpg'); ?>">
                <div class="caption">
                    <h3>Selamat Datang di Website Saya</h3>
                    <h5>Belajar - Berkreasi</h5>
                </div>
            </li>
        </ul>
    </div>

    <!--- About Us --->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center">About Us</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo neque provident nostrum laudantium iure repellat nobis aliquid ea ullam, assumenda soluta nulla, ex blanditiis aspernatur labore possimus, cumque voluptatibus libero!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel dicta excepturi aperiam sint assumenda laborum cum, similique amet in ducimus perferendis ea aliquam magnam, quas et laudantium quo sequi itaque?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem illum maxime quia corrupti libero! Molestias voluptas nemo perspiciatis. Voluptates nulla dolor aliquam eveniet optio rem quisquam exercitationem ipsam eligendi est.</p>
            </div>
        </div>
    </section>

    <!--- Portofolio --->
    <section id="portofolio">
        <div class="container">
            <div class="row">
                <h3 class="center">Portofolio</h3>

                <div class="col m4">
                    <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
             </div>
             <div class="col m4">
                    <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
             </div>
             <div class="col m4">
                    <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </section>
 

<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js') ?>"></script>

<script type="text/javascript">
    //Slider
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        duration : 400,
        interval : 5000
    });
</script>  
</body>
</html>