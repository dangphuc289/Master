<?php
    class ExerciseString{
        public $Check1;
        public $Check2;

        public function readFile($path){
            $file = @fopen($path,"r");
            $conten = fread($file, filesize($path));
            return $conten;
        }

        public function checkValidString($string){
            $x = 'book';
            $y = 'restaurant';

            if(!strpos($string, $x) && !strpos($string, $y)){
                return false;
            }elseif (strpos($string,$x) && strpos($string, $y)){
                return false;
            }
                return true; 
        }

        public function writeFile($path, $data){
            $file = @fopen($path,"w");
            fwrite($file,$data);
        }
        
    }

    
    $object1 = new ExerciseString();
    $nd1 = $object1->readFile("file1.txt");
    $nd2 = $object1->readFile("file2.txt");
    $object1->Check1 = $object1->checkValidString($nd1);
    $object1->Check2 = $object1->checkValidString($nd2);
    
    function Ring($KQ){
        if($KQ){
            $data1 = "Check 1 là chuỗi hợp lệ.\n";
        }else{
            $data1 = "Check 1 là chuỗi không hợp lệ\n";
        }
        return $data1;
    }

    $data = Ring($object1->Check1). Ring($object1->Check2);
    $object1->writeFile("result_file.txt",$data);




    // function Ring(){
    //     $object1 = new ExerciseString();
    //     $object1->Check1 = $object1->checkValidString($object1->readFile("file1.txt"));
    //     $object1->Check2 = $object1->checkValidString($object1->readFile("file2.txt"));
    //     $n = substr_count($object1->readFile("file1.txt"),'.');
    //     $m = substr_count($object1->readFile("file2.txt"),'.');
    //     if($object1->Check1){
    //         $data1 = "Check 1 là chuỗi hợp lệ. Check 1 gồm $n câu\n";
    //     }else{
    //         $data1 = "Check 1 là chuỗi không hợp lệ\n";
    //     }
    //     if($object1->Check2){
    //         $data2 = "Check 2 là chuỗi hợp lệ. Check 1 gồm $m câu\n";
    //     }else{
    //         $data2 = "Check 2 là chuỗi không hợp lệ\n";
    //     }
    //     echo "$data1 $data2";
    // }

?>