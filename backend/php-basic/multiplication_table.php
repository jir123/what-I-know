<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border:1x solid #ccc;
            background:#ddd;
        }
        th {
            background:#fcfcfc;
        }
        
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #FFF}
        col:nth-child(2n+3) {background: #CCC}

    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
            //create first row of the table header
            echo "<tr>";
            echo "<th>&nbsp</th>";
            for($col=1; $col<=12; $col++)
                echo "<th>$col</th>";
            echo "</tr>";
            //create remaining row
            for($row=1, $col=1; $row<=12; $row++):
                echo "<tr>";
                    //first cell is a table header
                    if($col == 1){
                        echo "<td>$row &nbsp;</td>";
                    }
                    while($col<=12){
                        echo "<td>".$row*$col++."&nbsp;</td>";
                    }
                    //Reset $col at the end of the row
                    $col = 1;
                echo "</tr>";
            endfor;
        ?>
    </table>
</body>
</html>