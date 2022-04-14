<?php
   //require 'tentativa2.php';
   include 'data.php';
   include 'hora.php';
   include 'calculo.php';
   
   
   // este funcionou
   
  
   
?>
<html>
<head><title></title></head>
<body>
    <form name="res" method="post" action="<?php $PHP_SELF ?>">
       <p>
         <label>Ajudante.: </label>
         <input name="ajud" type="text" disabled="disabled" value="<?php echo number_format($_REQUEST['x'],2);?>" />
         
         <label>Garagem.: </label>
         <input name="garagem" type="text" disabled="disabled" value="<?php echo number_format($_REQUEST['x'],2);?>" />
         
         <label for="data">Data</label>
         <input name="data" id="data" value="<?php echo $_REQUEST['data']; ?>" size="6" type="datetime" />
       </p>
       <p>
         
         <label>Material.: </label>
         <input name="material" type="text" disabled="disabled" value="<?php echo number_format($_REQUEST['x'],2);?>" />
         
         <label>Paulo.: </label>
         <input name="paulo" type="text" disabled="disabled" value="<?php echo number_format($_REQUEST['z'],2);?>" />
         <label for="hora">Hora</label>
         <input type="time" name="hora" id="hora" value="<?php echo $_REQUEST['hora']; ?>">
       </p>
       
        
    </form>   
</body>    
</html>
