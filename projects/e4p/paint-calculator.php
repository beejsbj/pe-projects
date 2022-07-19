<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[[XXXXXXXXXXXXXXXXX]]">
    <meta property="og:image" content= "[XXXXXXXXX]">

    <link rel="stylesheet" href="css/style.css">

    <title>How much Paint</title>



</head>




    
<?php
function showPageErrors() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}



// showPageErrors();







$class = "hide";
 // $class = "output-field";




$length = 0;
$width = 0;
$area = 0;
$gallons = 0;

$convertToGalConst = 350;





if (isset($_POST['submitted'])){ 
    if ((isset($_POST['length'])) && (isset($_POST['width']))) {
        if (($_POST['length'] != '') && ($_POST['width'] != '')) {




            $length = floatval($_POST['length']);
            $width = floatval($_POST['width']);




            $area = ceil($length * $width);
            $gallons = ceil($area / $convertToGalConst);

            $output = "You will need to purchase <span>$gallons</span> gallons of paint to cover <span>$area</span> square feet";
            

        





            $class = "output-field";

        }

    }
}


    





?>

<body>
    <header>
        <div class="inner-column">
            <a href="index.php">⬅</a>
            <h1>Paint Calculator</h1>
        </div>
    </header>
    <main>
        <div class="inner-column">

            <form method="POST">
                <!-- <div class="input-field radio-list">
                    <div class="input-field">
                        <input type="radio" name="unitChoice" value="feet">
                        <label for="">feet</label>
                    </div>
                    <div class="input-field">
                        <input type="radio" name="unitChoice" value="meter"> 
                        <label for="">meter</label>
                    </div>
                </div> -->
                <div class="input-field">
                    <input id="lengthid" type="number" name="length" placeholder="length??" value="" step="0.1" min="1">
                    <label for="lengthid"> What is the length?</label>
                </div>

                <div class="input-field">
                    <input id="widthid" type="number" name="width" placeholder="width??" value="" step="0.1"  min="1">
                    <label for="widthid"> What is the width?</label>
                </div>


                <button type="submit" name="submitted">
                    Calculator
                </button>


                <div class="<?=$class?>">
                    <p>
                        <?=$output?>
                    </p>
                </div>
                
            </form>
        </div>
    </main>


</body>
</html>
















































