<?php
    include "function.php";
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number: </td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the Second Number: </td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['calculate'])){
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];
        if(empty($numOne) or empty($numTwo)){
            echo "<span style='color:#ee655a;'>Frield must not be empty</span>";
        }else {
            echo "First number is :".$numOne."<br/>Second number is :".$numTwo."<br/>";
            $cal = new Calculator;
            $cal->add($numOne,$numTwo);
        }

        
    }
?>