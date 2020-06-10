<?php require 'header.html' ?>

			<div class="main">
				
				
				<ul class="caminho">
					<li><a href="index.php">Home</a></li>
					<li>></li>
					<li>Contato</li>
				</ul>

				<h1>Contato</h1>
				
				<form action="phpmail.php" method="POST"> 
					
					<h3>Nome:</h3> 
					<input class="txt" type="text" name="nome"> 
					
					<h3>E-mail:</h3> 
					<input class="txt" type="email" name="email"> 
					
					<h3>Comentários:</h3>
					<textarea class="txtComent" name="Comentarios" cols="30" rows="10"></textarea><br/><br/>
					
					<input onclick="enviado()" class="btn" type="submit" value="Enviar">  
				</form>

				<h3>Telefone:</h3>
				<p>(16) 994130325</p>

				<h3>Redes Sociais:</h3>
				<a href="https://web.facebook.com/profile.php?id=100010117777982" target="_blank"><img class="social-img" src="img/facebook.png" alt="link para facebook"></a>
				<a href="https://www.instagram.com/davilson_junior/" target="_blank"><img class="social-img" src="img/instagram.png" alt="link para facebook"></a>
				<a href="https://www.linkedin.com/in/davilson-paulino-da-cunha-junior-23029315a/" target="_blank"><img class="social-img" src="img/linkedIn.png" alt="link para facebook"></a><br/>

			<?php require 'footer.html' ?>