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
    <title>O Duque e Eu</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>O Duque e Eu (Livro 1 - Os Bridgertons)</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/romance/o duque e eu.jpeg" alt = "O Duque e Eu" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Simon Basset, o irresistível duque de Hastings, acaba de retornar a Londres depois de seis anos viajando pelo mundo. Rico, bonito e solteiro, ele é um prato cheio para as mães da alta sociedade, que só pensam em arrumar um bom partido para suas filhas. Simon, porém, tem o firme propósito de nunca se casar. Assim, para se livrar das garras dessas mulheres, precisa de um plano infalível. É quando entra em cena Daphne Bridgerton, a irmã mais nova de seu melhor amigo. Apesar de espirituosa e dona de uma personalidade marcante, todos os homens que se interessam por ela são velhos demais, pouco inteligentes ou destituídos de qualquer tipo de charme. E os que têm potencial para ser bons maridos só a veem como uma boa amiga. A ideia de Simon é fingir que a corteja. Dessa forma, de uma tacada só, ele conseguirá afastar as jovens obcecadas por um marido e atrairá vários pretendentes para Daphne. Afinal, se um duque está interessado nela, a jovem deve ter mais atrativos do que aparenta. Mas, à medida que a farsa dos dois se desenrola, o sorriso malicioso e os olhos cheios de desejo de Simon tornam cada vez mais difícil para Daphne lembrar que tudo não passa de fingimento. Agora, ela precisa fazer o impossível para não se apaixonar por esse conquistador inveterado que tem aversão a tudo o que ela mais quer na vida.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxkaW1lbnNhb2RhbGVpdHVyYXNlcmllczN8Z3g6NTU5MDJlY2Y4YTY3NDM5"> <i class="fa-light fa-down-to-line"></i>Ler Livro </a>
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