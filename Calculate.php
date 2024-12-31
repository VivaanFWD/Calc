<?php
    if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])){
        $val1 = $_POST['num1'];
        $val2 = $_POST['num2'];
        $operation = $_POST['operation'];

        echo '<link rel="stylesheet" href="style.css">'; 
        echo '<header>Result</header>';
        echo '<main>'; 

        if(is_numeric($val1) && is_numeric($val2)){
            switch($operation){
                case 'add':
                    $result = $val1 + $val2;
                    echo "<div class='result'>Result: $val1 + $val2 = $result</div>";
                    break;
                case 'sub':
                    $result = $val1 - $val2;
                    echo "<div class='result'>Result: $val1 - $val2 = $result</div>";
                    break;
                case 'mul':
                    $result = $val1 * $val2;
                    echo "<div class='result'>Result: $val1 * $val2 = $result</div>";
                    break;
                case 'div':
                    $result = $val1 / $val2;
                    echo "<div class='result'>Result: $val1 / $val2 = $result</div>";
                    break;
            }
        }else{
            echo '<span class="error">Error: Type Correct Number, not other Characters.</span>';

        }
        echo '</main>';
        echo '<footer>tCS</footer';
    }  

?>