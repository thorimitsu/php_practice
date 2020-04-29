<?php
    //No.1
        function No1($number){
            return $number * 2;
        }
        echo No1(10)."\n";

    //No.2
        function No2($a,$b){
            return $a+$b;
        }
        echo No2(3,4)."\n";

    //No.3
        function No3($arr){
            $total = 1;
            foreach($arr as $a){
                $total = $total * $a;
            }
            return $total;
        }
        echo No3(array(1,3,5,7,9))."\n";

    //No,4
        function max_array($arr){
            // とりあえず配列の最初の要素を一番大きい値とする
            $max_number = $arr[0];
            foreach($arr as $a){
                if($a > $max_number){
                    $max_number = $a;
                }
            }
            return $max_number;
        }
        echo max_array(array(1,3,9,7,5))."\n";

    //No.5
        function No5($a,$b,$c){
            //曜日を作成（strip_tags、array_merge、array_push）
            $title=strip_tags($a);
            $result_week='';
            
            $week=array_merge($b,$c);
            array_push($week,'土','日');
            foreach($week as $i){
                $result_week .= $i;
            }
            
            //現在時刻追加（date、time）
            return $title.$result_week." ".date('Y-m-d',time());
        }
        echo No5('<br>曜日：',array('月','火','水'),array('木','金'))."\n";
