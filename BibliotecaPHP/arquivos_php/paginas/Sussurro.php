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
    <title>Sussurro</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>Sussurro (Livro 1 - Saga Hush Hush)</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/fantasia/sussurro.jpeg" alt = "Sussurro" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Nora é uma menina responsável. Aos 17 anos, ela tira boas notas e sempre avisa à mãe aonde vai e o que está fazendo. Nem mesmo garotos a fazem perder o foco nos estudos. Até porque, apesar das tentativas de sua melhor amiga, Vee, de lhe arrumar um pretendente, ela nunca se interessou por ninguém na escola. Pelo menos não até conhecer Patch, seu novo colega na aula de biologia. Ele parece estar em todos os lugares e saber tudo sobre ela. Seu jeito ao mesmo tempo sedutor e perigoso faz com que Nora fique imediatamente intrigada. E encantada.É então que eventos estranhos começam a acontecer. Um homem usando uma máscara de esqui salta diante de seu carro, seu quarto é invadido e aparentemente alguém está tentando matá-la. Nora não sabe em quem confiar. Quando Vee conhece dois novos rapazes e tenta arranjar um encontro, as coisas só pioram. Nora está assustada a maior parte do tempo. Patch é o da máscara de esqui? Ou será Elliot, o novo garoto com quem Vee quer que ela saia?Em sua busca por respostas, Nora está prestes a se descobrir no centro de uma batalha ancestral entre seres imortais e anjos caídos - uma disputa que não se resolverá sem sacrifícios.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://docs.google.com/file/d/0B0cY27d4AxwFNm1YVDZ6UEZiZU0/edit?resourcekey=0-GOUWfkln-mcQoToxLAW_pw"> <i class="fa-light fa-down-to-line"></i>Ler Livro </a>
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
           