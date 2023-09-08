<?php
    if(!empty($_POST['estrela'])){
        $estrela = $_POST['estrela'];
        $comentario = $_POST['comentario'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cores_Paginas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <title>IT a Coisa</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>IT a Coisa</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/terror/it a coisa.jpg.webp" alt = "IT a Coisa" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Nesse clássico que inspirou os filmes da Warner, um grupo de amigos conhecido como Clube dos Otários aprende o real sentido da amizade, do amor, da confiança... e do medo. O mais profundo e tenebroso medo. Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas. É assim que Bill, Beverly, Eddie, Ben, Richie, Mike e Stan enfrentam a Coisa pela primeira vez. Quase trinta anos depois, o grupo volta a se encontrar. Mike, o único que permaneceu em Derry, dá o sinal ― uma nova onda de terror tomou a pequena cidade. É preciso unir forças novamente. Só eles têm a chave do enigma. Só eles sabem o que se esconde nas entranhas de Derry. Só eles podem vencer a Coisa.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://drive.google.com/file/d/1j5p4WsAWBmOXvrTVk-qfuHJ5LHRG3JWW/view"> <i class="fa-light fa-down-to-line"></i>Ler livro </a>
                 </button>
                </div>
           </div>
           
         
      <div class="avaliar">
          <form method="POST" action="avalie.php" enctype="multipart/form-data">
              <div class="estrelas">
                  <input type="radio" id="vazio" name="estrela" value="0" checked>
                  
                  <label for="estrela_um"><i class="fa"></i></label>
                  <input type="radio" id="estrela_um" name="estrela" value="1">
                  
                  <label for="estrela_dois"><i class="fa"></i></label>
                  <input type="radio" id="estrela_dois" name="estrela" value="2">
                  
                  <label for="estrela_tres"><i class="fa"></i></label>
                  <input type="radio" id="estrela_tres" name="estrela" value="3">
                  
                  <label for="estrela_quatro"><i class="fa"></i></label>
                  <input type="radio" id="estrela_quatro" name="estrela" value="4">
                  
                  <label for="estrela_cinco"><i class="fa"></i></label>
                  <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
  
                  <input type="text" name="comentario" placeholder="comentário..." id="coment"><br><br>
          
                  <input type="submit" value="Avaliar">
                  
              </div>
          </form>
          <h3>O que acharam desse livro </h3>
          <div class="avaliacoes">

            <div class="avaliacao">

                <?php 
                    echo "<p>USUARIO</p>";
                    echo "<p>$comentario</p>";
                    if($estrela == '1'){
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '2') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '3') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '4') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '5') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }
                ?>
                </div>
                <div class="avaliacao">
                <?php 
                    echo "<p>USUARIO</p>";
                    echo "<p>$comentario</p>";
                    if($estrela == '1'){
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '2') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '3') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '4') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }elseif ($estrela == '5') {
                        echo "<h3> Nota: <u>$estrela</u></h3>";
                    }
                ?>
                    </div>
                    <div class="avaliacao">
                    <?php 
                        echo "<p>USUARIO</p>";
                        echo "<p>$comentario</p>";
                        if($estrela == '1'){
                            echo "<h3> Nota: <u>$estrela</u></h3>";
                        }elseif ($estrela == '2') {
                            echo "<h3> Nota: <u>$estrela</u></h3>";
                        }elseif ($estrela == '3') {
                            echo "<h3> Nota: <u>$estrela</u></h3>";
                        }elseif ($estrela == '4') {
                            echo "<h3> Nota: <u>$estrela</u></h3>";
                        }elseif ($estrela == '5') {
                            echo "<h3> Nota: <u>$estrela</u></h3>";
                        }
                    ?>
                        </div>
          </div>
          
       </div>
    </div>
</body>
</html>