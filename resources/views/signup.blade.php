<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    


<div id="block">
<img id="signupimg" src="https://www.signupsoftware.com/wp-content/uploads/2019/01/Signup-logotype-inverted-300x147.png" alt="">
</div>
<form action="/sucess" method="POST">
@csrf
<div id="loginid4" class="field">
  <p class="control has-icons-left has-icons-right">
    <input name="name" class="input" type="name" placeholder="Name">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div id="loginid" class="field">
  <p class="control has-icons-left has-icons-right">
    <input name="email" class="input" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div id="loginid2" class="field">
  <p class="control has-icons-left has-icons-right">
    <input name="password" class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div id="loginid3" class="field">
  <p class="control has-icons-left has-icons-right">
    <input name="passwordreplace" class="input" type="password" placeholder="Replace Password">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>

<button id="button" class="button is-rounded">Sign Up</button>
</form>
<a href="/">
<button id="button2" class="button is-rounded">Return Home</button>
</a>
<style>
#button{
    position:absolute;
    top: 65%;
    left: 44%;
    background-color: #dba617;
    border-color: #dba617;
    color: #1d2327;
    font-weight: 500;
}
#button2{
    position:absolute;
    top: 10%;
    left: 575px;
    background-color: #dba617;
    border-color: #dba617;
    color: #1d2327;
    font-weight: 500;
}
#loginid{
    position:absolute;
    bottom: 49%;
    left: 36%;
}
#loginid2{
    position:absolute;
    bottom: 43%;
    left: 36%;
}
#loginid4{
    position:absolute;
    top: 308px;
    left: 36%;
}
#loginid3{
    position:absolute;
    bottom: 37%;
    left: 36%;
}
#logintext{
    position: absolute;
    left: 30%;
    top: 0%;
}
#block{
    background-color:#1d2327;
    height: 500px;
    width: 410px;
    position:absolute;
    left: 33%;
    top: 20%;
    border-radius: 10px;
    
}
body{
    background-image: url("https://conteudo.imguol.com.br/c/parceiros/0e/2019/12/13/o-compliance-e-os-desafios-ambientais-do-agronegocio-1576250553908_v2_1920x1080.jpg");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    width: 1490px;
    height: 801px;

}
#signupimg{
position:absolute;
left: 50px;
}
</style>

</body>
</html>