<html>
 <head>
 <link rel="stylesheet" href="EstiloCSS_P4.CSS"/>

 <?php
$pais=array();
	$paises["Mexico"]=array("Guadalajara","Monterrey","Guerrero","DF","Veracruz");
	$paises["Argentina"]=array("Cordoba","Mendoza","","Salta","Rosario");
	$paises["Estado Unidos"]=array("Texas","Los Angeles","Boston","Detroi","Dallas");
	$paises["Egipto"]=array("Asuan","Luxor","Alejandria","El Cairo","Sharm");
	$paises["Brasil"]=array("Rio de Janeiro","Fortaleza","Brasilia","Manaus","Recife");
	$paises["Dinamarca"]=array("Copenhague","Aarhus","Aalborg","Randers","Odense");
	$paises["Gran Bretaña"]=array("Londres","Manchester","Liverpool","Leeds","Sheffield");
	$paises["Italia"]=array("Roma","Milan","Napoles","Turin","Palermo");
	$paises["Suiza"]=array("Zurich","Ginebra","Berna","Basilea","Lucerna");
	$paises["Turquia"]=array("Estambul","Ankara","Izmir","Bursa","Adana");


	foreach($paises as $nombre=>$ciudad){
	
		echo "<ul>";
		echo "<li><h1>".$nombre."</li></h1>";
		echo "<ol>";
		
		for($i=0;$i<count($paises[$nombre]);$i++){
			
			echo " <li>".$paises[$nombre][$i]."</li>";
	}



		echo "</ol>";
		echo "</ul>";
	}
 ?>

 </body>                                                                 
 </html>