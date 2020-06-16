﻿<?php @ session_start()?>
<!DOCTYPE html >
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mr. Robot</title>
<link href="css/bootstrap(mr-robot).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png"></head>
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
<div class="thumbnail"> <a href="Mr-Robot.php"><img src="images/mr-robot-cards.jpg" alt="" width="2000" class="cards"/></a>
      <h4><a href="Mr-Robot.php">MR. ROBOT</a> </h4>
      <p class="tag">Elliot (Rami Malek) é um jovem programador que trabalha como engenheiro de segurança virtual durante o dia, e como hacker vigilante durante a noite. Elliot se vê numa encruzilhada quando o líder (Christian Slater) de um misterioso grupo de hacker o recruta para destruir a firma que ele é pago para proteger. Motivado pelas suas crenças pessoais, ele luta para resistir à chance de destruir os CEOs da multinacional que ele acredita estarem controlando – e destruindo – o mundo.
	    <p>Criado por: Sam Esmail (2015)</p>
		<p>Gênero: Drama, Suspense</p>
		<p>País: EUA</p>
		<p>Atores: Rami Malek, Carly Chaikin, Portia Doubleday, mais ...</p>
		<p>Status: Em Produção</p>
		<p>Duração: 45 minutos</p></p>
		<div class="ver"></div>
		<h3 class="thumb22"><span>1ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:11A3E52CF42A7A30B0F01EF48A9930920ED548AC&dn=Mr.%20Robot%20%282015%29%20Dual%20%c3%81udio%20%2b%20Legendas%20720p%20%28By-LuanHarper%29&tr=udp%3a%2f%2ftracker.trackerfix.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2710%2fannounce&tr=http%3a%2f%2fpow7.com%2fannounce&tr=%2audp%3a%2f%2fopen.demonii.com%3a1337%2fannounce&tr=udp%3a%2f%2fcoppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=http%3a%2f%2ftracker.blazing.de%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2f%2fannounce" download="Mr-Robot"><img src="images/download.png" width="29px"/></a></span></h3>
			<div id="epsetemps">
        		<ul class="temps" id="temp1">
            <li><a href="Mr-Robot/Mr-Robot-T01EP01.php" class="text">MR. ROBOT T01EP01</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP02.php" class="text">MR. ROBOT T01EP02</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP03.php" class="text">MR. ROBOT T01EP03</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP04.php" class="text">MR. ROBOT T01EP04</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP05.php" class="text">MR. ROBOT T01EP05</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP06.php" class="text">MR. ROBOT T01EP06</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP07.php" class="text">MR. ROBOT T01EP07</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP08.php" class="text">MR. ROBOT T01EP08</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP09.php" class="text">MR. ROBOT T01EP09</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T01EP10.php" class="text">MR. ROBOT T01EP10</a></li>
            </ul></div>
		<h3 class="heading"><span>2ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:AFA3A1073D179313B654631BF1300CF742577685&dn=Mr.Robot.S02E02ao04.720p.BluRay.x264.DUAL-WWW.TORRENTDOSFILMES.COM&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2780%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce&tr=udp%3a%2f%2fglotorrents.pw%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftorrent.gresille.org%3a80%2fannounce&tr=udp%3a%2f%2ftracker.aletorrenty.pl%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.piratepublic.com%3a1337%2fannounce" download="Mr-Robot"><img src="images/download.png" width="29px"/></a></span></h3>
			<div id="temp2">
			<ul id="lista_eps2">
            <li><a href="Mr-Robot/Mr-Robot-T02EP01.php" class="text">MR. ROBOT T02EP01</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP02.php" class="text">MR. ROBOT T02EP02</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP03.php" class="text">MR. ROBOT T02EP03</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP04.php" class="text">MR. ROBOT T02EP04</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP05.php" class="text">MR. ROBOT T02EP05</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP06.php" class="text">MR. ROBOT T02EP06</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP07.php" class="text">MR. ROBOT T02EP07</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP08.php" class="text">MR. ROBOT T02EP08</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP09.php" class="text">MR. ROBOT T02EP09</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP10.php" class="text">MR. ROBOT T02EP10</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T02EP11.php" class="text">MR. ROBOT T02EP11</a></li>
                </ul></div>
	 	<h3 class="heading"><span>3ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:884C039ABBF7471FE891EF3ADBCDFC929360EB08&dn=%7bWWW.BLUDV.COM%7d%20Mr.%20Robot%20-%20Sociedade%20Hacker%202017%20-%203%C2%AA%20Temporada%20Completa%20%281080p%29%20Acesse%20o%20ORIGINAL%20WWW.BLUDV.COM&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2770%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce&tr=http%3a%2f%2fglotorrents.pw%3a80%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftorrent.gresille.org%3a80%2fannounce&tr=udp%3a%2f%2ftracker.aletorrenty.pl%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.piratepublic.com%3a1337%2fannounce" download="Mr-Robot"><img src="images/download.png" width="29px"/></a></span></h3>
			<div id="temp3">
			<ul id="lista_eps3">
            <li><a href="Mr-Robot/Mr-Robot-T03EP01.php" class="text">MR. ROBOT T03EP01</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP02.php" class="text">MR. ROBOT T03EP02</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP03.php" class="text">MR. ROBOT T03EP03</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP04.php" class="text">MR. ROBOT T03EP04</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP05.php" class="text">MR. ROBOT T03EP05</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP06.php" class="text">MR. ROBOT T03EP06</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP07.php" class="text">MR. ROBOT T03EP07</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP08.php" class="text">MR. ROBOT T03EP08</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP09.php" class="text">MR. ROBOT T03EP09</a></li>
            <li><a href="Mr-Robot/Mr-Robot-T03EP10.php" class="text">MR. ROBOT T03EP10</a></li>
                </ul></div>
            <h3 class="heading"><span>4ª Temporada Em Breve</span></h3></div></div>
            <!-- Seção final -->
  			<footer id="contact">
    			<p class="hero_header text_column2">SENTIU FALTA DE ALGUMA SÉRIE </p>
    			<div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  			</footer>
  <!-- Seção fim -->
  		<div class="copyright">&copy;2020 - <a style="text-decoration:none" href="index.php"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
        </div>
        </body>
</html>
