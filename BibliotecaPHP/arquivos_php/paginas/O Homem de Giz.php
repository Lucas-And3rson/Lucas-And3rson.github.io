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
    <title>O Homem de Giz</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="cabeca">
        <h1>O Homem de Giz</h1>
        <div>
            <button class="voltar"> <a href="Principal.html"> Voltar </a> </button>
        </div>
        
    </header>
    <div class="geral">
        <div class="imagem">
        
            <img src="assets/img/misterio/o homem de giz.jpeg" alt = "O Homem de Giz" height="700" width="450">
          </div>  
  
  
          <div class="texto">
            <h1>Resumo da obra</h1>
  
            <p>Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto: homenzinhos rabiscados no asfalto; mensagens que só eles entendem. Mas um desenho misterioso leva o grupo de crianças até um corpo desmembrado e espalhado em um bosque. Depois disso, nada mais é como antes. Em 2016, Eddie se esforça para superar o passado, até que um dia ele e os amigos de infância recebem um mesmo aviso: o desenho de um homem de giz enforcado. Quando um dos amigos aparece morto, Eddie tem certeza de que precisa descobrir o que de fato aconteceu trinta anos atrás. Alternando habilidosamente entre presente e passado, O Homem de Giz traz o melhor do suspense: personagens maravilhosamente construídos, mistérios de prender o fôlego e reviravoltas que vão impressionar até os leitores mais escaldados.</p>
            <div>
                <button class="baixar"> 
                    <a href="https://drive.google.com/file/d/1hmNlfsaOGQyw5faZ0l5q79mRBGonPJmB/view"> <i class="fa-light fa-down-to-line"></i>Ler livro </a>
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