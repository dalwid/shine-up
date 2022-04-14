<?php
    /*
               ALGORITMO PERFEITO
			   
	   $percentual = 20; $dinheiro = 100; 
	  
	   $x = ($percentual / 100) * $dinheiro;
	   echo "Dinehrio  ".$dinheiro."<br>";
	   echo "20% do Dinheiro para o ajudante = ".number_format($x,2);
	   
	   $y = $dinheiro - $x;
	   echo "<br>Total do dinheiro tirando 20% do ajudante =  ".number_format($y,2)."<br><br>";
	   
	   $g = $y - $x;
	   echo "Mais 20% para a garagem  ".number_format($x,2)."<br>"; 
	   echo "Total do dinheiro tirando os 20% para garagem =  ".number_format($g,2)."<br><br>";
	   
	   $z = $g - $x;
	   echo "Mais 20% para o material  ".($x,2)."<br>";
	   echo "Total do dinheiro tirando os 20% para o material ".number_format($z,2)."<br><br>";
	    
		echo "<br>Paulo (A Shine Up ) Recebe  ".number_format($z,2);
	  */ 
	    
	  
	  /* Variaveis 
	   $_REQUEST['total'] = $_REQUEST['entrada'] 
	    ajud
	   garagem 
       material
       paulo */ 
	  
	 //Variavel declarada  
	 $percentual = 20;
	 //Processo para achar  os 20 porcentos  
	 $_REQUEST['x'] = ($percentual / 100) * $_REQUEST['entrada'];
	 //Total do dinheiro tirando 20% do ajudante.  Neste caso fica como acumulador
	 $_REQUEST['y'] = $_REQUEST['entrada'] - $_REQUEST['x']; 
	 //Total do dinheiro tirando os 20% para a garagem.  Neste caso fica como acumulador  
	 $_REQUEST['g'] = $_REQUEST['y'] - $_REQUEST['x']; 
	 /*Total do dinheiro tirando os 20% para o material.  Neste caso fica como acumulador
	    Agora Paulo/Shine up fica com o total ou seja o resto
	  */ 
	 $_REQUEST['z'] = $_REQUEST['g'] - $_REQUEST['x']; 
	  
	  
	  
	  
	  
	   
?>