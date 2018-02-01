<?php

    $flames = array(
        "F" => "Friend",
        "L" => "Lover",
        "A" => "Affection",
        "M" => "Marriage",
        "E" => "Enemy",
        "S" => "Sister"
    );
    $n1 ="BETH";
    $n2 = "LESTER";

    // Removed the space
    $name1 = strtoupper(str_replace(" ", "", $n1)); 
    $name2 = strtoupper(str_replace(" ", "", $n2));

    echo "1st Name : ".$n1."<br>";
    echo "2nd Name : ".$n2."<br>";


    if($name1 == $name2)
        echo "<b>The names are the same.</b>";
    else{
        for($i = 0; $i < strlen($name1); $i++){ // First Loop for the first name
            if(isset($name1[$i])){
                for($j = 0; $j < strlen($name1); $j++){  // Second loop
                    if(isset($name2[$j])){
                        if($name1[$i] == $name2[$j]){  // If same letter
                             $name1[$i] = $name2[$j] = "*"; // Changed the common letter
                             break;
                        }
                    }
                }
            }
        }
        // Removed the asterisk - common letters
        $name1 = str_replace("*", "", $name1);
        $name2 = str_replace("*", "", $name2);
        // Count the left letters
        $count = strlen($name1) + strlen($name2);
        echo "<br>LEFT IN 1st Name : ".$name1;
        echo "<br>LEFT IN 2nd Name : ".$name2;
        echo "<br><br>TOTAL LEFT : ".$count;

        $flame = "FLAMES";
        $cnt_flame = strlen($flame);

        if ($count > $cnt_flame) {
            // Loop again in the first letter of FLAMES
            $i = $count;
            while ($i >= $cnt_flame) {
                $i = $i - $cnt_flame;
            }
            if ($i == 0) {
                $flame =$flame[$i+5];
            }else{
                $flame =$flame[$i-1];
            }
        }else{

            $flame =$flame[$count-1];
        }
        echo "<br>Letter : ".$flame;
        echo "<br>FLAMES   :   " . $flames[$flame] . "</div>";
    }
    
 
 
