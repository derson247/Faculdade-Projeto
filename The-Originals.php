<?php @ session_start()?>
<!DOCTYPE html >
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Originals</title>
<link href="css/bootstrap(the-originals).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
</head>
<body>	
<!-- Main Container -->
<div class="corp"><div align="center" class="center"><img alt="" src="images/logo2.png"/></div>
 <div class="container">
<div class=" menu-item-43">
    <nav id="menu" class="container">
      <ul id="menu-top-menu" class="sf-menu">
        <li id="menu-item-09"><a href="index.php">Início</a></li>
        <li id="menu-item-10"><a href="categoria123.php">#</a></li>
        <li id="menu-item-11"><a href="categoriaA.php">A</a></li>
        <li id="menu-item-12"><a href="categoriaB.php">B</a></li>
        <li id="menu-item-13"><a href="categoriaC.php">C</a></li>
        <li id="menu-item-14"><a href="categoriaD.php">D</a></li>
        <li id="menu-item-15"><a href="categoriaE.php">E</a></li>
        <li id="menu-item-16"><a href="categoriaF.php">F</a></li>
        <li id="menu-item-17"><a href="categoriaG.php">G</a></li>
        <li id="menu-item-18"><a href="categoriaH.php">H</a></li>
        <li id="menu-item-19"><a href="categoriaI.php">I</a></li>
        <li id="menu-item-20"><a href="categoriaJ.php">J</a></li>
        <li id="menu-item-21"><a href="categoriaK.php">K</a></li>
        <li id="menu-item-22"><a href="categoriaL.php">L</a></li>
        <li id="menu-item-23"><a href="categoriaM.php">M</a></li>
        <li id="menu-item-24"><a href="categoriaN.php">N</a></li>
        <li id="menu-item-25"><a href="categoriaO.php">O</a></li>
        <li id="menu-item-26"><a href="categoriaP.php">P</a></li>
        <li id="menu-item-27"><a href="categoriaQ.php">Q</a></li>
        <li id="menu-item-28"><a href="categoriaR.php">R</a></li>
        <li id="menu-item-29"><a href="categoriaS.php">S</a></li>
        <li id="menu-item-30"><a href="categoriaT.php">T</a></li>
        <li id="menu-item-31"><a href="categoriaU.php">U</a></li>
        <li id="menu-item-32"><a href="categoriaV.php">V</a></li>
        <li id="menu-item-33"><a href="categoriaW.php">W</a></li>
        <li id="menu-item-34"><a href="categoriaX.php">X</a></li>
        <li id="menu-item-35"><a href="categoriaY.php">Y</a></li>
        <li id="menu-item-36"><a href="categoriaZ.php">Z</a></li>
        <?php
            if ((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { ?>
         <li id='menu-item-38'><a href='login.php'>Login / Cadastro</a></li>
        <?php }  else { ?>
      <li id='menu-item-38'><a href='profile.php'>Perfil</a></li>
      <?php  } ?>
      </ul>
    </nav></div>
    	<select id="select" class="container" onchange="window.location=this.value">
        	<option value="#" selected="selected">Menu - Lista de Série s A - Z...</option>
    		<option value="index.php"> Início</option>
    		<option value="categoria123.php">Categoria #</option>
    		<option value="categoriaA.php">Categoria A</option>
   	 		<option value="categoriaB.php">Categoria B</option>
    		<option value="categoriaC.php">Categoria C</option>
    		<option value="categoriaD.php">Categoria D</option>
    		<option value="categoriaE.php">Categoria E</option>
    		<option value="categoriaF.php">Categoria F</option>
    		<option value="categoriaG.php">Categoria G</option>
    		<option value="categoriaH.php">Categoria H</option>
    		<option value="categoriaI.php">Categoria I</option>
    		<option value="categoriaJ.php">Categoria J</option>
    		<option value="categoriaK.php">Categoria K</option>
    		<option value="categoriaL.php">Categoria L</option>
    		<option value="categoriaM.php">Categoria M</option>
    		<option value="categoriaN.php">Categoria N</option>
    		<option value="categoriaO.php">Categoria O</option>
    		<option value="categoriaP.php">Categoria P</option>
    		<option value="categoriaQ.php">Categoria Q</option>
    		<option value="categoriaR.php">Categoria R</option>
    		<option value="categoriaS.php">Categoria S</option>
    		<option value="categoriaT.php">Categoria T</option>
    		<option value="categoriaU.php">Categoria U</option>
    		<option value="categoriaV.php">Categoria V</option>
    		<option value="categoriaW.php">Categoria W</option>
    		<option value="categoriaX.php">Categoria X</option>
    		<option value="categoriaY.php">Categoria Y</option>
    		<option value="categoriaZ.php">Categoria Z</option>
        <?php
          if ((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { ?>
         <option value="login.php">Login / Cadastro</option>
        <?php }  else { ?>
      <option value="profile.php">Perfil</option>
      <?php  } ?>
      </select>
  <div class="gallery">
    <div class="thumbnail"><img src="images/the-originalls.jpg" alt="" width="2000" class="cards"/>
      <h4>THE ORIGINALS</h4>
      <p class="tag">Um spin-off de The Vampire Diaries, que se passa em New Orleans. A série é centrada nos irmãos Mikaelson, que são conhecidos como os vampiros originais do mundo: Klaus (Joseph Morgan, Elijah (Daniel Gilles), e Rebekah (Claire Holt). Séculos atrás, eles prometeram ficar juntos para sempre e proteger uns aos outros. Agora, os laços familiares quebrados, tragédia e fome recaem como maldição àqueles que não cumpriram seus votos.</p> 
      	<p>Criado por: Julie Plec (2013)</p>
		<p>Gênero: Drama, Fantasia</p>
		<p>País: EUA</p>
		<p>Atores: Joseph Morgan, Daniel Gillies, Phoebe Tonkin, mais ....</p>
		<p>Status: Em produção</p>
		<p>Duração: 42 minutos</p>
		<div class="ver"></div>
		<h3 class="thumb22"><span>1ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:c28f803f5061199809a1ded6c01860b094543780&dn=The+Originals%3A+1%26ordf%3B+Temporada+%282014%29+BDRip+720p+Dual+Audio&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80&tr=udp%3A%2F%2Ftracker.publicbt.com%3A80&tr=udp%3A%2F%2Ftracker.istole.it%3A6969&tr=udp%3A%2F%2Fopen.demonii.com%3A1337" download="The-Originals"><img src="images/download.png" width="29px"/></a></span></h3>
			<div id="epsetemps">
        		<ul class="temps" id="temp1">
            <li><a href="The-Originals/The-Originals-T01EP01.php" class="text">The Originals T01EP01</a></li>
            <li><a href="The-Originals/The-Originals-T01EP02.php" class="text">The Originals T01EP02</a></li>
            <li><a href="The-Originals/The-Originals-T01EP03.php" class="text">The Originals T01EP03</a></li>
            <li><a href="The-Originals/The-Originals-T01EP04.php" class="text">The Originals T01EP04</a></li>
            <li><a href="The-Originals/The-Originals-T01EP05.php" class="text">The Originals T01EP05</a></li>
            <li><a href="The-Originals/The-Originals-T01EP06.php" class="text">The Originals T01EP06</a></li>
            <li><a href="The-Originals/The-Originals-T01EP07.php" class="text">The Originals T01EP07</a></li>
            <li><a href="The-Originals/The-Originals-T01EP08.php" class="text">The Originals T01EP08</a></li>
            <li><a href="The-Originals/The-Originals-T01EP09.php" class="text">The Originals T01EP09</a></li>
            <li><a href="The-Originals/The-Originals-T01EP10.php" class="text">The Originals T01EP10</a></li>
            <li><a href="The-Originals/The-Originals-T01EP11.php" class="text">The Originals T01EP11</a></li>
            <li><a href="The-Originals/The-Originals-T01EP12.php" class="text">The Originals T01EP12</a></li>
            <li><a href="The-Originals/The-Originals-T01EP13.php" class="text">The Originals T01EP13</a></li>
            <li><a href="The-Originals/The-Originals-T01EP14.php" class="text">The Originals T01EP14</a></li>
            <li><a href="The-Originals/The-Originals-T01EP15.php" class="text">The Originals T01EP15</a></li>
            <li><a href="The-Originals/The-Originals-T01EP16.php" class="text">The Originals T01EP16</a></li>
            <li><a href="The-Originals/The-Originals-T01EP17.php" class="text">The Originals T01EP17</a></li>
            <li><a href="The-Originals/The-Originals-T01EP18.php" class="text">The Originals T01EP18</a></li>
            <li><a href="The-Originals/The-Originals-T01EP19.php" class="text">The Originals T01EP19</a></li>
            <li><a href="The-Originals/The-Originals-T01EP20.php" class="text">The Originals T01EP20</a></li>
            <li><a href="The-Originals/The-Originals-T01EP21.php" class="text">The Originals T01EP21</a></li>
            <li><a href="The-Originals/The-Originals-T01EP22.php" class="text">The Originals T01EP22</a></li>
            </ul></div>
		<h3 class="heading"><span>2ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:C6711A5AC9188C845EAE47FC06AAB039ADC3D30E&dn=The%20Originals%20-%2002%c2%aa%20Temporada%20%282015%29%20720p%20Dual%20%c3%81udio%20-%20HipnosTPF&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce" download="The-Originals"><img src="images/download.png" width="29px"/></a></span></h3>
			<div id="temp2">
			<ul id="lista_eps2">
     		<li><a href="The-Originals/The-Originals-T02EP01.php" class="text">The Originals T02EP01</a></li>
            <li><a href="The-Originals/The-Originals-T02EP02.php" class="text">The Originals T02EP02</a></li>
            <li><a href="The-Originals/The-Originals-T02EP03.php" class="text">The Originals T02EP03</a></li>
            <li><a href="The-Originals/The-Originals-T02EP04.php" class="text">The Originals T02EP04</a></li>
            <li><a href="The-Originals/The-Originals-T02EP05.php" class="text">The Originals T02EP05</a></li>
            <li><a href="The-Originals/The-Originals-T02EP06.php" class="text">The Originals T02EP06</a></li>
            <li><a href="The-Originals/The-Originals-T02EP07.php" class="text">The Originals T02EP07</a></li>
            <li><a href="The-Originals/The-Originals-T02EP08.php" class="text">The Originals T02EP08</a></li>
            <li><a href="The-Originals/The-Originals-T02EP09.php" class="text">The Originals T02EP09</a></li>
            <li><a href="The-Originals/The-Originals-T02EP10.php" class="text">The Originals T02EP10</a></li>
            <li><a href="The-Originals/The-Originals-T02EP11.php" class="text">The Originals T02EP11</a></li>
            <li><a href="The-Originals/The-Originals-T02EP12.php" class="text">The Originals T02EP12</a></li>
            <li><a href="The-Originals/The-Originals-T02EP13.php" class="text">The Originals T02EP13</a></li>
            <li><a href="The-Originals/The-Originals-T02EP14.php" class="text">The Originals T02EP14</a></li>
            <li><a href="The-Originals/The-Originals-T02EP15.php" class="text">The Originals T02EP15</a></li>
            <li><a href="The-Originals/The-Originals-T02EP16.php" class="text">The Originals T02EP16</a></li>
            <li><a href="The-Originals/The-Originals-T02EP17.php" class="text">The Originals T02EP17</a></li>
            <li><a href="The-Originals/The-Originals-T02EP18.php" class="text">The Originals T02EP18</a></li>
            <li><a href="The-Originals/The-Originals-T02EP19.php" class="text">The Originals T02EP19</a></li>
            <li><a href="The-Originals/The-Originals-T02EP20.php" class="text">The Originals T02EP20</a></li>
            <li><a href="The-Originals/The-Originals-T02EP21.php" class="text">The Originals T02EP21</a></li>
            <li><a href="The-Originals/The-Originals-T02EP22.php" class="text">The Originals T02EP22</a></li>
                </ul></div>
			<h3 class="heading"><span>3ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:F924FCA3AEC82D49799CFDF5A0DFCDB2ED72CF0C&dn=T.O.S03.WEB-DL.720P.DUAL&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce" download="The-Originals"><img src="images/download.png" width="29px"/></a></span></h3>
            <div>
            <ul>
			<p><a class="text2"></a></p>
            <li><a href="The-Originals/The-Originals-T03EP01.php" class="text">The Originals T03EP01</a></li>
            <li><a href="The-Originals/The-Originals-T03EP02.php" class="text">The Originals T03EP02</a></li>
            <li><a href="The-Originals/The-Originals-T03EP03.php" class="text">The Originals T03EP03</a></li>
            <li><a href="The-Originals/The-Originals-T03EP04.php" class="text">The Originals T03EP04</a></li>
            <li><a href="The-Originals/The-Originals-T03EP05.php" class="text">The Originals T03EP05</a></li>
            <li><a href="The-Originals/The-Originals-T03EP06.php" class="text">The Originals T03EP06</a></li>
            <li><a href="The-Originals/The-Originals-T03EP07.php" class="text">The Originals T03EP07</a></li>
            <li><a href="The-Originals/The-Originals-T03EP08.php" class="text">The Originals T03EP08</a></li>
            <li><a href="The-Originals/The-Originals-T03EP09.php" class="text">The Originals T03EP09</a></li>
            <li><a href="The-Originals/The-Originals-T03EP10.php" class="text">The Originals T03EP10</a></li>
            <li><a href="The-Originals/The-Originals-T03EP11.php" class="text">The Originals T03EP11</a></li>
            <li><a href="The-Originals/The-Originals-T03EP12.php" class="text">The Originals T03EP12</a></li>
            <li><a href="The-Originals/The-Originals-T03EP13.php" class="text">The Originals T03EP13</a></li>
            <li><a href="The-Originals/The-Originals-T03EP14.php" class="text">The Originals T03EP14</a></li>
            <li><a href="The-Originals/The-Originals-T03EP15.php" class="text">The Originals T03EP15</a></li>
            <li><a href="The-Originals/The-Originals-T03EP16.php" class="text">The Originals T03EP16</a></li>
            <li><a href="The-Originals/The-Originals-T03EP17.php" class="text">The Originals T03EP17</a></li>
            <li><a href="The-Originals/The-Originals-T03EP18.php" class="text">The Originals T03EP18</a></li>
            <li><a href="The-Originals/The-Originals-T03EP19.php" class="text">The Originals T03EP19</a></li>
            <li><a href="The-Originals/The-Originals-T03EP20.php" class="text">The Originals T03EP20</a></li>
            <li><a href="The-Originals/The-Originals-T03EP21.php" class="text">The Originals T03EP21</a></li>
            <li><a href="The-Originals/The-Originals-T03EP22.php" class="text">The Originals T03EP22</a></li>
            </ul></div>
            <h3 class="heading"><span>4ª e 5ª Temporada Em Breve</span></h3>
            <!--<div>
            <ul>
			<p><a class="text2"></a></p>
            <li><a href="The-Originals/The-Originals-T04EP01-leg.php" class="text">The Originals T04EP01 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP02-leg.php" class="text">The Originals T04EP02 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP03-leg.php" class="text">The Originals T04EP03 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP04-leg.php" class="text">The Originals T04EP04 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP05-leg.php" class="text">The Originals T04EP05 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP06-leg.php" class="text">The Originals T04EP06 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP07-leg.php" class="text">The Originals T04EP07 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP08-leg.php" class="text">The Originals T04EP08 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP09-leg.php" class="text">The Originals T04EP09 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP10-leg.php" class="text">The Originals T04EP10 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP11-leg.php" class="text">The Originals T04EP11 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP12-leg.php" class="text">The Originals T04EP12 <span style="color:#FF0000">/</span> LEGENDADO</a></li>
            <li><a href="The-Originals/The-Originals-T04EP13-leg.php" class="text">The Originals T04EP13 <span style="color:#FF0000">/</span> LEGENDADO <img src="images/new.png" alt="Novo episodio '4ª Temporada  episodio 13 legendado" width="29px"/></a></li></ul></div>-->
	  </div>
  </div>
  <!-- Footer Section -->
  <footer id="contact">
    <p class="hero_header">SENTIU FALTA DE ALGUMA SÉRIE </p>
    <div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2020 - <a style="text-decoration:none" href="index.php"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
</div>
<!-- Main Container Ends -->
</body>
</html>