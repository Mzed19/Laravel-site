<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="public/style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
</head>
<body>

<!-- NavBar -->
<div id="home">
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
        <img id="img" src="https://images.vexels.com/media/users/3/137704/isolated/preview/87530af576941eeea98d685ae40c4d66-formas-poligonais-geom-eacute-tricas-do-logotipo-by-vexels.png" width="35" height="54">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
     <div class="navbar-start">
        <a href="#home" class="navbar-item">
            Home
        </a>
        <a href="#about" class="navbar-item">
            About
        </a>
        <a href="#CAL" class="navbar-item">
            Contact and Location
        </a>

        <a id="su" href="/signup" class="button is-primary">
            Sign Up
        </a>
     </div>
    </div>
   
</nav>
<!-- Home -->
    <div id="block">
     
           
        <img id="hello" src="https://pngimg.com/uploads/welcome/welcome_PNG81.png" alt="">
         <h1 id="text1">Conheça a rede mais rentável de investimentos do Brasil, o Agronegócio</h1>  
    </div>

    <a href="#about">
        <img id="seta" src="https://www.pngkey.com/png/full/302-3022333_free-icons-png-down-arrow-white-icon-png.png" alt="">  
    </a>
    </div>
<!-- About -->
    <div id="about">
        <img id="about-img"src="https://intheartiststudio.com/wp-content/uploads/2020/05/About.png" alt="">
    <div id="video">
        <iframe width="878" height="494" src="https://www.youtube.com/embed/wyH7ti7izbk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="textbox">
            
    </div>
    <a href="#CAL">
    <img id="seta2" src="https://www.pngkey.com/png/full/302-3022333_free-icons-png-down-arrow-white-icon-png.png" alt="">  
    </a>
    </div>


<!-- CAL -->
    <div id="CAL">
        <h1 id="title">Location at the Google Maps</h1>
        <div id="map" class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.bgmi.org/">BGMI</a></div><style>.mapouter{width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
        <h1 id="title2">Contacts</h1>
        <div id="contacts">
        <img id="phone" src="https://i2.wp.com/multarte.com.br/wp-content/uploads/2020/05/5cf6d8f924c302cfaa9e748b_phone-call.png?fit=512%2C512&ssl=1" alt=""> <h1 id="numbertext">9999-9999</h1>
        <img id="email" src="https://i2.wp.com/multarte.com.br/wp-content/uploads/2020/05/mail_122991.png?resize=512%2C512&ssl=1" alt=""> <h1 id="emailtext">@mail.com</h1>
        </div>
    </div>        



<style type="text/css">
@keyframes animation {
    0% {
        transform: translateY(0);
    }
    50%{
        transform: translateY(calc(2vw - 1px));
    }
    100%{
        transform: translateY(0);
    }
}
#login{
    position: absolute;
    right: 160px;
    top: 8px;
}
#su{
    position: absolute;
    right: 250px;
    top: 8px;
    background-color:#dba617;
}
#numbertext{
    color:black;
    position: absolute;
    top: 3%;
    left: 11%;
}
#emailtext{
    color:black;
    position: absolute;
    top: 14%;
    left: 11%;
}
#phone{
    width: 28px;
    height: 28px;
    position: absolute;
    top: 10px;
    left: 3px;
}
#email{
    width: 35px;
    height: 35px;
    position: absolute;
    top: 50px;
    left: 0px;
}
#contacts{
    position:absolute;
    top: 223%;
    left: 780px;
    
    width: 400px;
    height: 400px;
}
#title{
    position: absolute;
    left: 30px;
    top: 215%;
    color: black;
    font-size: 30px;
    font-style: oblique;
}
#title2{
    position: absolute;
    left: 800px;
    top: 215%;
    color: black;
    font-size: 30px;
    font-style: oblique;
}
#map{
    position:absolute;
    top: 223%;
    left: 30px;
}
#text1{
    color: black;
    font-size: 130%;
}
#textbox{
    width: 100px;
    height: 400px;
    
    position: absolute;
    top: 130%;
    right: 0%;
}
#video{
    width: 500px;
    height: 400px;
    
    position: absolute;
    top: 125%;
    left: 8%;
}
#about-img{    
    width: 30%;
    height: 20%;
    position: absolute;
    left: 8%;
    top: 820px;


}
#buttonarrow{

}
#cron-a{
    font-size:30px;
    color:black;
    font-family: "Times New Roman", Times, serif;
    font-weight: 500;
}
#seta{
    width: 4%;
    height: 4%;
    position: absolute;
    bottom: 45px;
    left: 46%;


    animation-name: animation;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}
#seta2{
    width: 4%;
    height: 4%;
    position: absolute;
    top: 190%;
    left: 46%;


    animation-name: animation;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}
#hello{
    width: 80%;
    height: 60%;
    text-align: center;
    transition-duration: 500ms;
}
#hello:hover{
    width: 90%;
    height: 80%;
    
}
#block{
    text-align: center;   
    width: 350px;   
    position: absolute;
    top: 40%;
    left: 35%;
}
#CAL{
    background-image: url("http://www.editoragazeta.com.br/sitewp/wp-content/uploads/2020/06/Agroneg%C3%B3cio.png");
    
    width: 1490px;
    height: 801px;

    
}
#home{
    background-image: url("https://www.agroprecision.com.br/wp-content/uploads/2019/03/Agricultura-Giro-Rural-1.jpg");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    width: 1490px;
    height: 801px;

}
#about{
    width: 1500px;
    height: 800px;
    background-repeat: no-repeat;
    background-image: url("http://www.agrodistribuidor.com.br/up_imgs/cont_140821115941_site-gratuito.jpg");
    background-attachment:fixed;
    animation-name: wallpaper;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

</style>
</body>
</html>