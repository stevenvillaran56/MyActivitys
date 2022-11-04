<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2 Photo sizing</title>
</head>
<body>
    <h3>Pays App<h3>
        <hr>
        <form method="post">
            <label for="slider">Select Size Photo</label>
            <input type="range" name="slider" id="slide" min="10" max="210" step="20" value="120"><br>

            <label for="backcolor">Select Border Color:</label>
            <input type="color" name="backcolor" id="backcolor"><br>

            <button type="submit" name="btnsub">Process</button><br><br>
        </form>

        <?php
            if(isset($_POST['btnsub'])) {

                $img = $_POST['slider'];
                $color = $_POST['backcolor'];
            }
        ?>
        <hr>
        
        

        <img src="pic.jpg" alt="steven"  width="<?php echo $img; ?>px" style="color:<?php echo $color; ?>" border="5%" value="100" >
</body>
</html>