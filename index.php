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
    ?>
</body>
</html>