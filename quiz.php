<table border="1" align="center">
<?php
    echo "<tr>";
    for ($cabecera="0";$cabecera<=10;$cabecera++){
        echo "<th><font color='red'>";
        echo $cabecera;
        echo "</th></font>";
    }
    echo "</tr>";
    for ($x = 1; $x <=10; $x++){
        echo "<tr>";
        echo "<th><font color='red'>";
        echo $x;
        echo "</th></font>";
        for ($y=1;$y<=10;$y++){                      
            $multiplicacion=$x*$y;
            if($multiplicacion==100){
                echo "<td>";                      
                echo "<img src='icon/100.png' width='20' height='20'>";
                echo "</td>";
            }else{
                if($multiplicacion%3!=0){
                    if($multiplicacion%2==0){
                        echo "<td bgcolor='#F8FF00'>";                      
                        echo $multiplicacion;
                        echo "</td>";
                    }else{
                        echo "<td bgcolor='#28FF00'>";                      
                        echo $multiplicacion;
                        echo "</td>";
                    }
                }else{
                    echo "<td bgcolor='#0040FF'>";                      
                    echo $multiplicacion;
                    echo "</td>";
                }
            }
        }
                              
    echo "</tr>";          
}      
?>      
</table>