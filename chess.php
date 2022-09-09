<html>
    <head>
        <title>
            chess
        </title>
        <link rel="stylesheet" href="chess.css">
    </head>
    <body>
        <div id='dd'>
            <h1>Chess Board</h1>
        </div>
        <div>
            <table cellspacing: 0px;>
            <?php
            for($i=1;$i<=8 ;$i++)
            { 
                echo "<tr> </tr>";         
                for($j=1;$j<=8;$j++)
                {
                    $cell=$i+$j;
                    if($cell%2==0)
                        echo "<td id='tt'> </td>";
                    else
                        echo "<td id='te'> </td>";
                    
                }
            }
            ?>
            </table>
        </div>
    </body>
    </html>