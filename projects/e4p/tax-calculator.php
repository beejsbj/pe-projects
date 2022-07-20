<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[[XXXXXXXXXXXXXXXXX]]">
    <meta property="og:image" content= "[XXXXXXXXX]">

    <link rel="stylesheet" href="css/style.css">

    <title>Calculate Taxes</title>



</head>




    
<?php
function showPageErrors() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}



// showPageErrors();

$amount = 0;
$state = '';
$taxRate = 0;
$tax = 0;
$total = 0; 

$states = [
	['wi', 'wisconsin', 5.5],
	['mn', 'minnesota', 6.875],
	['tx', 'texas', 6.25],
	['ca', 'california', 7.25],
	['al', 'alabama', 4],
];



$class = "hide";
 // ;




if (isset($_POST['submitted'])){
    
	    if ((isset($_POST['amount'])) && (isset($_POST['state']))) {
    		if (($_POST['amount'] != '') && ($_POST['state'] != '')) {

	        	$amount = floatval($_POST['amount']);
	        	$state = strtolower($_POST['state']);


	        	foreach ($states as $stateArr) {
	        		// check if given state exists in array
	        		if (in_array($state, $stateArr)) {

	        			// set tax rate based on state
					    $taxRate = $stateArr[2];
					}
	        	}
	        	// if taxrate is still 0, state doesnt exist in array
	        	if ($taxRate == 0) {
	        		$output = "state doesnt exist";
	        	} else {

	        		$tax = round(($amount * $taxRate / 100), 2);
	        		$total = $amount + $tax;

	        		$output = "The subtotal is <span>$$amount</span> <br>
						       The tax is <span>$$tax</span>. <br>
						       The total is <span>$$total</span>.";

	        	}


	        	$class = "output-field";

        }
    }

           
           


}





    





?>

<body>
    <header>
        <div class="inner-column">
            <a href="index.php">⬅</a>
            <h1>Tax Calculator</h1>
        </div>
    </header>
    <main>
        <div class="inner-column">

            <form method="POST">
            	<div class="input-field">
                    <input id="amount-ID" type="number" name="amount" placeholder="amount??" min="0.01" step="0.01">
                    <label for="amount-ID">What is the order amount?</label>
                </div>
                <div class="input-field">
                    <input id="state-ID" type="text" name="state" placeholder="state??" value="">
                    <label for="state-ID">What is the state?</label>
                </div>


                <button type="submit" name="submitted">
                	Taxify
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

















































