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
    <title>A Garota do Lago</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>A Garota do Lago</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/misterio/a garota do lago.jpeg" alt = "A Garota do Lago" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas dispostas à beira de um longo trecho de água intocada.Duas semanas atrás, a estudante de direito Becca Eckersley foi brutalmente assassinada em uma dessas casas. Filha de um poderoso advogado, Becca estava no auge de sua vida. Atraída instintivamente pela notícia, a repórter Kelsey Castle vai até a cidade para investigar o caso. ...E LOGO SE ESTABELECE UMA CONEXÃO ÍNTIMA QUANDO UM VIVO CAMINHA NAS MESMAS PEGADAS DOS MORTOS...E enquanto descobre sobre as amizades de Becca, sua vida amorosa e os segredos que ela guardava, a repórter fica cada vez mais convencida de que a verdade sobre o que aconteceu com Becca pode ser a chave para superar as marcas sombrias de seu próprio passado.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://drive.google.com/file/d/1Ppi8n3hxprP3BOM9S_2cDX4y2YS0vasu/view"> <i class="fa-light fa-down-to-line"></i>Ler Livro </a>
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
           