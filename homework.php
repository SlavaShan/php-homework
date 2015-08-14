<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

<?php 

/* 1 задача

    $arr = array("Раз","Два","Три"); 

    function myname ($arr) { 

        for ($i = 0; $i < count($arr); $i++) { 
            echo "<p>".$arr[$i]."</p>"; 
        }

    }

    myname($arr);

*/

/*
 2 задача

    $arr = array(1,2,3,4,5);
    $str = "+";

    function result($arr, $str) {
        foreach ($arr as $value) {
            if(!isset($rez)) {
                $rez = $value;
                continue;
            }

            $string = "\$rez $str= $value;";
            echo($string . "<br>");
            eval($string);
        }
        return $rez;
    };

    echo result($arr,$str);
*/


/* 3 задача   
    $str = "*";

    function result() {
        $arguments = func_get_args();
        $str = $arguments[0];

        if (is_string($str)) {
            array_shift($arguments);
            $arr = $arguments;

            foreach ($arr as $value) {

                if(!isset($rez)) {
                    $rez = $value;
                    continue;
                }

                $string = "\$rez $str= $value;";
                echo($string . "<br>");
                eval($string);
            }
            return $rez;
        } else {
            exit("1st argument is not a string");
        }
    };

    echo result($str, 1,2,3,4,5);
*/

/*
задача 4

   function result($num1, $num2) {
        if (is_int($num1) && is_int($num2)) {
            echo "<table>";

            for ($i=1; $i <= $num2 ; $i++) { 
                echo "<tr>";
                for ($n=1; $n <= $num1 ; $n++) { 
                    echo "<td>";
                        echo $i*$n;
                    echo "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            exit("arguments are not integer");
        }
    }


    result(10,9);

*/


/*задача 5
    $arr = array( 1, 22, 5, 66, 3, 57);

    foreach($arr as $val)
    {
        echo (" $val");
    }

    echo "</br>";

    asort($arr);
    foreach($arr as $val)
    {
        echo (" $val");
    }
*/

    


?>
</body>
</html>