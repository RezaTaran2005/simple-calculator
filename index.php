<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $expression = $_POST["expression"];

  
    if (preg_match('/[^0-9\+\-\*\/\(\)\.%]/', $expression)) {
        $result = "Invalid expression!";
    } else {
        
        eval('$result = ' . $expression . ';');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="calc_content">
        <form action="" method="post">
            <div class="calc_screen">
                <input type="text" name="expression" value="<?php echo isset($result) ? $result : ''; ?>">
            </div>
            <div class="calc_btn_content">
                <input class="bg_eb2a46" type="button" value="clear">
                <input type="button" name="btn" value="p">
                <input type="button" name="btn" value="%">
                <input type="button" name="btn" value="/">
                <input type="button" name="btn" value="7">
                <input type="button" name="btn" value="8">
                <input type="button" name="btn" value="9">
                <input type="button" name="btn" value="*">
                <input type="button" name="btn" value="4">
                <input type="button" name="btn" value="5">
                <input type="button" name="btn" value="6">
                <input type="button" name="btn" value="-">
                <input type="button" name="btn" value="1">
                <input type="button" name="btn" value="2">
                <input type="button" name="btn" value="3">
                <input type="button" name="btn" value="+">
                <input type="button" name="btn" value="0">
                <input type="button" name="btn" value=".">
                <input class="bg_a160fb w_150px" type="submit" value="=">
            </div>
        </form>
    </div>
    
</body>
</html>

