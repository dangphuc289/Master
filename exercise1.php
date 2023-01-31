<?php
    function checkValidString($string)
    {
        $x = 'book';
        $y = 'restaurant';

        if (!strpos($string,$x) && !strpos($string, $y)){
            return false;
        }elseif (strpos($string,$x) && strpos($string, $y)){
            return false;
        }
            return true; 
    }

    function readDoc($path){
        $file = @fopen($path,"r");
        $conten = fread($file, filesize($path));
        return $conten;
    }
    function Ring($conten){
        $re = checkValidString($conten);
        $n = substr_count($conten,'.');
        if ($re == true){
            echo "Chuỗi hợp lệ. Chuỗi bao gồm $n câu.\n";
        }
        else {
            echo "chuỗi không hợp lệ\n";
        }
    }

    Ring(readDoc("file1.txt"));
    Ring(readDoc("file2.txt"));
?>

