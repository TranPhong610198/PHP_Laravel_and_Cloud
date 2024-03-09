<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="POST">
        
        <div>
            <label for="number1">Number 1: </label>
            <input type="number" name="number1">
        </div>
        <div>
            <label for="number2">Number 2: </label>
            <input type="number" name="number2" >
        </div>
        <div>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Calculate">
        </div>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" ) {
            if(!empty($_POST["number1"]) && !empty($_POST["number2"])) {
                $number1 = $_POST["number1"] ;
                $number2 = $_POST["number2"] ;

                // $sum = $number1 + $number2 ;
                // $minus = $number1 - $number2;

                $operator = $_POST["operator"] ;
                $finalAnswer = '';

                switch($operator) {
                    case '+':
                        $finalAnswer = $number1 + $number2;
                        break;
                    case '-':
                        $finalAnswer = $number1 - $number2;
                        break;
                    case '*':
                        $finalAnswer = $number1 * $number2;
                        break;
                    case '/':
                        if($number2 == 0) {
                            echo ('cannot deivde by 0');
                        } else {
                            $finalAnswer = $number1 / $number2;
                        }
                        break;
                }
                // echo ("$number1 + $number2 is $sum");
                // echo ("$number1 - $number2 is $minus");
                echo ("Answer: $finalAnswer");
            }
        }
    ?>
</body>
</html>