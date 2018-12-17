<!DOCTYPE html>
<html>
	<head>
		<meta content="Jorge Sendra Gómez" name="author">
		<meta content="DragonBallWorld" name="description">
		<meta content="Dragon ball" name="keywords">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/general.css" type="text/css" media="all">
		
    <link rel="shortcut icon" href="img/favicon.ico"/>
		
		<title>DragonBallWorld</title>
    </head>

    <body>
            <p class="stroke1">Series</p>
            
            <br>
            <br>
          
        <nav class="main-nav">
                
          <li class="li-a"><a class="ala" href="seriespelis.php">Retrocede</a></li>
      
        </nav>
            <br>
            <br>
        
        
<?php
require_once("base/series.php");
    $gestorSeries=new Serie();
    $series=$gestorSeries->llistaSeries();
    
    ?>

<?php
        
        for($i=0; $i<count($series);$i++)
        {
          ?>
<div>
           <div>
              <h2 > <?php echo($series[$i]["nom"]); ?></h2>
              <p ><?php echo ($series[$i]["descripcio"]); ?></p>
               
               
            </div>
          

        <?php } ?>
    
    <br>
    <br>
    
    <img src="img/db.jpg" height="250px" weight="250px"/>
    <img src="img/dbz.gif" height="250px" weight="250px"/>
    <img src="img/dbs.jpg" height="250px" weight="250px"/>
      </div>
        
    </body>
    
</html>