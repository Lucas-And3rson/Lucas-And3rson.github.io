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
    <title>Fallen</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>Fallen</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/fantasia/fallen.jpeg" alt = "Fallen" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Excitante, sombrio e romântico Fallen é, ao mesmo tempo, um thriller vigoroso e uma inesquecível história de amor. Lauren aposta no amor impossível entre os protagonistas para tecer o início de uma saga com todos os ingredientes de um cult do gênero. Em Fallen, acompanhamos a adolescente Luce, mandada para um reformatório ― apropriadamente batizado de Sword & Cross ― após a morte do namorado em um incêndio misterioso. Ela suspeita que estranhas sombras negras, que a atormentam desde a infância, são as verdadeiras responsáveis. Mas quem acreditaria nela?Na escola, ela encontra o etereamente belo Daniel Grigori, que desperta uma estranha sensação de reconhecimento: único ponto luminoso num lugar onde celulares são proibidos e há câmeras de vigilância por todos os cantos. Mas tanta luz hipnotiza a menina, atraída pelo rapaz como uma mariposa pela chama. Ele tenta se manter afastado de Luce, mas também não consegue. E a verdade promete separá-los como tantas outras vezes ― com a morte de Luce. Amantes destinados a se encontrar e se perder vida após vida, século após século.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://docs.google.com/file/d/0Bx7mqK7FbFnlTkFsd2JrUXdrOTg/edit?resourcekey=0-xQ10MhQe5aMtQO3oCdo6CA"> <i class="fa-light fa-down-to-line"></i>Ler livro </a>
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