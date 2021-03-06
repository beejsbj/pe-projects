<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="[[XXXXXXXXXXXXXXXXX]]">
        <meta property="og:image" content="[XXXXXXXXX]">
        <link rel="stylesheet" href="css/style.css">
        <title>Calculate your BMI</title>
    </head>
    <?php
 

$height = '';
$weight = '';
$bmi = 0;








$class = "hide";





if (
    isset($_POST['submitted']) &&
    (isset($_POST['weight']))  && 
    ($_POST['weight'] != '')   && 
    (isset($_POST['height']))  && 
    ($_POST['height'] != '')
) {

    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $bmi = ($weight / ($height * $height)) * 703;

    if ($bmi < 18.5) {
        $output = "You are underweight. Eat more!";
    }
    if ($bmi > 25) {
        $output = "You are overweight. see your doctor.";
    }
    if ($bmi >= 18.5 && $bmi <= 25) {
        $output = "You are within the ideal weight range.";
    }


    $class = "output-field"; 
}
?>

    <body>
        <header>
            <div class="inner-column">
                <a href="index.php">⬅</a>
                <h1>BMI Calculator</h1>
            </div>
        </header>
        <main>
            <div class="inner-column">
                <form method="POST">
                    <div class="input-field range-field">
                        <input id="height-ID" type="range" min="1" max="120" step="1" required name="height" placeholder="height??" value="<?=$height?>">
                        <label for="height-ID">
                            Height: <span></span>
                        </label>
                    </div>
                    <div class="input-field range-field">
                        <input id="weight-ID" type="range" min="1" max="300" step="1" required name="weight" placeholder="weight??" value="<?=$weight?>">
                        <label for="weight-ID">
                            Weight: <span></span>
                        </label>
                    </div>
                    <button type="submit" name="submitted"> BMIBMI </button>
                    <div class="<?=$class?>">
                        <p>
                            <?=$output?>
                        </p>
                    </div>
                </form>
            </div>
        </main>
        <script>
        const myCoolForm = document.querySelector('form');
        const rangeH = myCoolForm.querySelector('#height-ID');
        const outputH = myCoolForm.querySelector('#height-ID + label span');
        const rangeW = myCoolForm.querySelector('#weight-ID');
        const outputW = myCoolForm.querySelector('#weight-ID + label span');
        // the thing it's listening for is a change of value of input in general / on the whole form (not to be confused with the specific input)
        
        myCoolForm.addEventListener('input', function() {
            rangeHft = parseInt(rangeH.value / 12);
            rangeHin = Math.round(rangeH.value % 12);
            outputH.innerHTML = 'ft: ' + rangeHft + ' in: ' + rangeHin;
        });
        myCoolForm.addEventListener('input', function() {
            outputW.innerHTML = rangeW.value + ' lbs';
        });
        // myCoolForm.addEventListener('change', function() {
        //   output.innerHTML = range.value;
        // }); // this will only update when you let go - and the value has officially changed
        </script>
    </body>

</html>