 
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
        
      </div>