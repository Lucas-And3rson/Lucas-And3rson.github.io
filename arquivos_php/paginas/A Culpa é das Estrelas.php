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
    <title>A Culpa é das Estrelas</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>A Culpa é das Estrelas</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/romance/a culpa é das estrelas.jpeg" alt = "A Culpa é das Estrelas" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Hazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante ― o que lhe dá a promessa de viver mais alguns anos ―, o último capítulo de sua história foi escrito no momento do diagnóstico. Mas em todo bom enredo há uma reviravolta, e a de Hazel se chama Augustus Waters, um garoto bonito que certo dia aparece no Grupo de Apoio a Crianças com Câncer. Juntos, os dois vão preencher o pequeno infinito das páginas em branco de suas vidas. Inspirador, corajoso, irreverente e brutal, A culpa é das estrelas é a obra mais ambiciosa e emocionante de John Green, sobre a alegria e a tragédia que é viver e amar.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxjaXRhY29lc3JlY29yZGFjb2VzZGVsaXZyb3N8Z3g6ZTc5MDUyZjQxMGM2MzVl"> <i class="fa-light fa-down-to-line"></i>Ler Livro </a>
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