<html>
<head>
<title>
PHP Store
</title> 
</head>
<body>
<?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    $name="PHP store";
    $credit=1000;

    echo "<h1>Welcome to ".$name." </h1>";
    echo "<h2>You have ".$credit." in your wallet!</h2>";

        $products['computer']=750;
        $products['Car']=15000;
        $products['iPhone']=1000;
        $products['Toaster']=75;
    echo "<p>A car costs $".$products['Car']."</p>";
    foreach($products as $key => $value){
        echo "<p>The value of a ".$key." is ".$value."!!</p>";
    }
    echo "<h2>ITEMS YOU CAN AFFORD:</h2>";
    foreach($products as $key => $value){
        if($value <= $credit){
            echo "<p>".$key."/n</p>";
        }
    }
    $amount=800;
    $taxrate=0.0825;
    $addedtax=$amount*$taxrate;
    echo $addedtax;
    
    function tax_calc($amount,$tax){
        $calculate_tax = $amount*$tax;
        $amountwithtax = round($amount+$calculate_tax,2);
        return $amountwithtax;
    }
    foreach($products as $key => $value){
        $costwithtax=tax_calc($value,$taxrate);
        echo "<p>".$key." costs ".$costwithtax." with tax";
    }

    echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
        $costWithTax = tax_calc($value,$taxrate);
        if($costWithTax <= $credit ){
            echo "<p>".$key."</p>"; 
        }
    }
    ?>
</body>
</html>