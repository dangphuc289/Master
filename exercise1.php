

<?php
    function checkValidString($string){
        $x='book';
        $y='restaurant';
        if(strpos($string,$x)!==false){
            if(strpos($string,$y)!==false){
                echo 'chuỗi không hợp lệ';
            }
            else{
                $n = substr_count($string,'.');
                echo "chuỗi hợp lệ. Chuỗi bao gồm $n câu";
            }
        }
        elseif(strpos($string,$y)!==false){
            echo 'chuỗi không hợp lệ';
        }
        else{
            $n = substr_count($string,'.');
            echo "chuỗi hợp lệ. Chuỗi bao gồm $n câu";
        }

    }

    $path1 = "file1.txt";
    $file1 = @fopen($path1,"r");
    $conten1 = fread($file1, filesize($path1));
    checkValidString($conten1);
    echo "\n";

    $path2 = "file2.txt";
    $file2 = @fopen($path2,"r");
    $conten2 = fread($file2, filesize($path2));
    checkValidString($conten2);


    
?>

