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
    <title>Querido John</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>Querido John</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/romance/querido john.jpeg" alt = "Querido John" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Após uma juventude de rebeldia e bebedeira, John Tyree decidiu dar início a um novo capítulo em sua vida e se alistou no Exército. Um ano depois, agora um novo homem, ele retorna a -Wilmington, na Carolina do Norte, para passar um tempo com o velho pai. Uma tarde, enquanto admira o pôr do sol da pequena cidade litorânea, ele conhece a garota de seus sonhos. Além de ser linda, Savannah é amigável, de sorriso fácil, um exemplo de boa conduta e altruísmo. Curiosamente, esse contraste de personalidades não impede que um sentimento arrebatador nasça entre os dois. No entanto, John precisa voltar para a Alemanha a fim de concluir o serviço militar. Em nome do amor, Savannah decide esperar por ele, enquanto o jovem soldado promete que, após esse período, vai ficar para sempre ao lado da mulher que conquistou seu coração. O que nenhum dos dois poderia esperar eram os eventos do 11 de Setembro. Enquanto John entra em combate no Iraque, Savannah precisa reunir forças para superar a dor da distância. Nesse cenário de saudade e incertezas, uma simples carta pode mudar a vida dos dois para sempre.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://docs.google.com/file/d/0B3CewnbIykOwdXY3bVV0QkJDTTQ/edit?resourcekey=0-sK2jSIi7KNUCu8P_C8gcWA"> <i class="fa-light fa-down-to-line"></i>Ler Livro </a>
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
           