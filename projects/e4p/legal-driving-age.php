<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[[XXXXXXXXXXXXXXXXX]]">
    <meta property="og:image" content= "[XXXXXXXXX]">

    <link rel="stylesheet" href="css/style.css">

    <title>Legal Driving Age</title>

    <style>
        .output-field {
            flex-direction: column;
            gap: 20px;
        }


    </style>


</head>




    
<?php
 

$legalAges = [
                "argentina" => 17,
                "brazil" => 18,
                "canada" => 16,
                "china" => 18,
                "denmark" => 17,
                "france" => 18,
                "india" => 18,
                "japan" => 18,
                "mexico" => 18,
                "niger" => 23,
                "salvador" => 15,
                "saudi arabia" => 18,
                "sweden" => 16,
                "usa" => 16,
            ];

$age = '';

$legalInCountryArr = [];
$countryOutput = '';






$class = "hide";
 // $class = "output-field";




if (
    isset($_POST['submitted']) &&
    (isset($_POST['age']))  && 
    ($_POST['age'] != '')
) {

    $age = $_POST['age'];


    foreach ($legalAges as $country => $countryAge) {
        if ($age >= $countryAge) {
            array_push($legalInCountryArr, $country);
        } else {

        }
    }

    if (empty($legalInCountryArr)) {
        $countryOutput = "<li><span>No where</span></li>";
    } else {

        foreach ($legalInCountryArr as $country) {
            $countryOutput = $countryOutput . "<li><span>" . ucfirst($country) . "</span></li>";
         }
    }

    

    $output = "You are old enough to legally drive in: ";





    $class = "output-field"; 
}
?>



<body>
    <header>
        <div class="inner-column">
            <a href="index.php">⬅</a>
            <h1>Legal Driving Age</h1>
        </div>
    </header>
    <main>
        <div class="inner-column">

            <form method="POST">

                <div class="input-field">
                    <input id="age-ID" type="text" class="text-number-input" required name="age" placeholder="aGe??!!?" min="1" step="1" value="<?=$age?>">
                    <label for="age-ID">What is your age?</label>
                </div>


                <button type="submit" name="submitted">
                    Legalize
                </button>


                <div class="<?=$class?>">
                    <p>
                        <?=$output?>
                    </p>
                    <ul class='country-list'>
                        <?=$countryOutput?>
                    </ul>
                </div>
                
            </form>
        </div>
    </main>


</body>
</html>

















































