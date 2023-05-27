<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informações de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/all.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"> <img src="img/logos/Logo_Samuel_116x23-2_preto.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Início</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Loja
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <!-- <a class="dropdown-item" href="category.html"> shop category</a> -->
                                            <a class="dropdown-item" href="single-product.html">Produtos</a>
                                            
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cadastro
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="cadastro.html"> login</a>
                                            <!-- <a class="dropdown-item" href="tracking.html">tracking</a>
                                            <a class="dropdown-item" href="checkout.html">product checkout</a>
                                            <a class="dropdown-item" href="cart.html">shopping cart</a>
                                            <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                            <a class="dropdown-item" href="elements.html">elements</a> -->
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="blog.html"> blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li> -->
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="contatos.html">Contatos</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hearer_icon d-flex">
                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <a href=""><i class="ti-heart"></i></a>
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="single_product">
        
                                        </div>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <section class="banner_part">

        </section>

        
     <br>
     <hr>
     <br>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de criação</th>
      <th scope="col">CPF</th>
      <th scope="col" id="treditar">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
     <?php 
     require_once("conexao2.php");

     $result_usuario = "SELECT * FROM usuarios";
     $resultado_usuario = mysqli_query($conn, $result_usuario);

     while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    ?>
    <tr>
        <td><?php echo "<p id='nome-mudar".$row_usuario['id']."'>".$row_usuario['nome']."</p>";?></td>
        <td><?php echo "<p id='email-mudar".$row_usuario['id']."'>".$row_usuario['email']."</p>";?></td>
        <td><?php echo "<p id='cpf-mudar".$row_usuario['id']."'>".$row_usuario['cpf']."</p>";?></td>
        <td><?php echo $row_usuario['created'];?></td>
        <td><button id="btn-editar<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none;" onclick="editar(<?php echo $row_usuario['id']; ?>)"><img src="img/edit.png" width="40" height="40"></button>
        <button id="btn-salvar<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none; display:none;" onclick="salvar(<?php echo $row_usuario['id']; ?>)"><img src="img/save.png" width="40" height="40"></button></td>
        <td><button id="btn-excluir<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none;" onclick="excluir(<?php echo $row_usuario['id']; ?>)"><img src="img/excluir.png" width="40" height="40"></button></td>
    </tr>
    <?php
     }
     ?>
     </tbody>
</table>
<script>
    function editar(id){
        var nome = document.getElementById('nome-mudar' + id)
        var email = document.getElementById('email-mudar' + id)

        nome.innerHTML = "<input type='text' id='nome-text"+ id +"' value='"+nome.innerHTML.trim()+"'>"
        email.innerHTML = "<input type='email' id='email-text"+ id +"' value='"+email.innerHTML.trim()+"'>"
        cpf.innerHTML = "<input type='text' id='cpf-text"+ id +"' value='"+cpf.innerHTML.trim()+"'>"

        document.getElementById('btn-editar' + id).style.display = "none"
        document.getElementById('btn-salvar' + id).style.display = "block"
        document.getElementById('treditar').innerText = "Salvar"

    }

    async function salvar(id){
        console.log(id)
        var nome_val = document.getElementById('nome-text' + id).value
        var email_val = document.getElementById('email-text' + id).value

        document.getElementById('nome-mudar' + id).innerHTML = nome_val
        document.getElementById('email-mudar' + id).innerHTML = email_val

        var dadosForm = "id=" + id + "&nome=" + nome_val + "&email=" + email_val

        const dados = await fetch("./editar.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: dadosForm
    });

        document.getElementById('btn-editar' + id).style.display = "block"
        document.getElementById('btn-salvar' + id).style.display = "none"
        setTimeout(function() {
   window.location.reload(1);
 }, 100);
    }

    async function excluir(id){
        var dadosForm = "id=" + id;

const dados = await fetch("excluir.php", {
    method: "POST",
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: dadosForm
});
setTimeout(function() {
   window.location.reload(1);
 }, 100);
    }
</script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>