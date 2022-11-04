<!DOCTYPE html>
<html>
    
<?php
     $sodaArr = array(
        'Coke' => 10,
        'Sprite' => 15,
        'Royal' => 15,
        'Dew' => 20,
        'Pepsi' => 20
    );
        
     $sizeArr = array(
        'Regular' => 'regular',
        'Up-size(add ₱5)' => 'upsize', 
        'Jumbo(add ₱10)' => 'jambo'
    );
?>

    <head>
        <meta charset="utf-8">

    <title>Vendo Machine</title>
    </head>
  <body>
    <h3>Vendo Machine</h3>
    <form method="post">

        <fieldset style="width: 355px;">

        <legend>Products:</legend>
        
        <?php
        if (isset($sodaArr)){
            foreach($sodaArr as $sodakey => $sodaValue) {
                echo "<input type='checkbox' name='sodaCheck[". $sodakey ."]' value='". $sodaValue ."'>
                <label>". $sodakey ." - ₱". $sodaValue ."</label><br>";

            }
        }
        ?>
        </fieldset>

        <fieldset style="display: inline-block;">
            
            <legend>Options:</legend>
            <label for="sizeSelect">Size</label>
            <select class="drop" name="sizeSelect" id="sizeSelect">

                <?php  
                    if (isset($sizeArr)) {
                        foreach($sizeArr as $sizekey => $sizeValue) {
                            echo "<option value='". $sizeValue ."'>". $sizekey . "</option>";
                        }
                    }
                ?>
            </select>

            <label for="numQuantity">Quantity</label>
            <input class="num" type="number" name="numQuantity" id="numQuantity" min="0" max="100" value="0" >
            <button type="submit" name="btnSubmit" >Check out </button>
            </fieldset>
    </form>

    <?php
			if (isset($_POST['btnSubmit'])) :
				if (isset($_POST['numQuantity']) && isset($_POST['sodaCheck'])) {
					$SelectSoda = $_POST['sodaCheck'];
					$sizeSelect = $_POST['sizeSelect'];
					$numQuantity = $_POST['numQuantity'];
					
					if ($numQuantity == 1 ) {
						$var = " piece ";
					}else{
						$var = " pieces ";
					}

					if ($sizeSelect == 'regular') {
						$addOn = 0;
					}elseif ($sizeSelect == 'upsize') {
						$addOn = 5;
					}elseif ($sizeSelect == 'jambo') {
						$addOn = 10;
					}
					echo "<h3>Purchased Summary: </h3>";

					foreach ($SelectSoda as $keySelect => $Selectvalue) {
						echo "<div><ul><li>".$numQuantity." ".$var."of ".$sizeSelect." ".$keySelect." amounting to ₱ ".$total = intval($Selectvalue) * intval($numQuantity) ."</li></ul></div>";
					}
                    $raw = $total = intval($Selectvalue) * intval($numQuantity) + ($addOn * intval($numQuantity));
					echo "<b>Total Number of Items:</b> ". $totalquantity = ($numQuantity * sizeof($SelectSoda))  ;
					echo "<br><b>Total Amount:</b> " . $raw;
				}
				else{
					echo "<b>No Selected Product. Try Again</b>";
				}
			
		  ?>
		<?php endif; ?>
  </body>
</html>