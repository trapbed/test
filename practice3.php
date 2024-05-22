<!-- if(!$num3){
            throw new Exception("Введите Значение 3!");
        }       
        else{
            $res1 = $num1- $num2;
            // $num3 = 
            // echo $num3;
            $num3 = (string)$num3;
            $countName = 0;
            // $names = ['$com1', '$com2'];
            // $lenght = strlen()
            for($i = 0 ; $i < strlen($num3); $i++){
                // echo $num3[$i];
                if(is_numeric($num3[$i]) && is_numeric($num3[$i+1])){
                    if($countName == 0){
                        $com1 = $num3[$i];
                    }
                    if($countName == 1){
                        $com2 = $num3[$i];
                    }
                    // $com1 = $num3[0];
                    // $com2 = $num3[1];
                    
                    // print_r(${$names[$countName]});
                }
                else if($num3[$i] == 'i'){
                    $icomS = -1;
                }
                else{
                    if($countName == 0){
                        $com1 = $num3[$i];
                    }
                    if($countName == 1){
                        $com2 = $num3[$i];
                    }
                    // $countName++;
                }
            }
            echo $com1;
            echo $com2;
            
            // print_r($num3);

            // throw new Exception("Задача : ln(R1 - R2) * R2 - R3 <br> Решение с ответом : <br>ln(".$num1." - ".$num2.") * ".$num2." - ".$num3."  =  ".log($num1 - $num2) * $num2 - $num3);
        } -->
