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
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
        

        <div class="imagem">
        <h1>O Manifesto Comunista</h1>
          <img src="https://m.media-amazon.com/images/I/71Zy2zMjZ+L.jpg" alt = "O Manifesto Comunista" height="700" width="450">
        </div>  


        <div class="texto">
          <h2>Resumo da obra</h2>

          <p>Escrita há quase 200 anos, O Manifesto Comunista, de Karl Marx e Friedrich Engels, foi concebido excepcionalmente para comunicar as ideias seminais da organização política do proletariado a um público amplo e popular. A finalidade dos autores era aproximar a classe trabalhadora das teorias políticas que formariam as bases do comunismo na Europa. A empreitada resultou em um texto claro e objetivo, que chegou aos quatro cantos do planeta e se tornou um dos principais acontecimentos políticos do mundo moderno e comtemporâneo.</p>
          <button> <a href="#"> Ler livro </a> </button>
          <button> <a href="#"> Voltar </a> </button>
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
    <div class="avaliacao">
        
        <?php 
            echo "<h3>Avaliações: <h3>";
            echo "<h3>$comentario</h3>";
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
</body>
</html>