<?php
    //No.1
        $name="堀光拓也";

        if($name=="堀光拓也"){
            echo "私は ".$name." です";
        }
        else{
            echo $name." ではありません";
        }
        echo "\n";
        echo "\n";

    //No.2
        $total=0;
        for($i=1; $i<=10000; $i++){
            $total += $i;
        }
        echo $total;
        echo "\n";
        echo "\n";

    //No.3
        $fruits=['りんご','バナナ','みかん','ぶどう','なし'];
        foreach($fruits as $fruits){
            echo $fruits;
            echo "\n";
        }
        echo "\n";

    //No.4
		/* for文の始めの値を定義する */
		$start = 1;
		/* for文の終わりの値を定義する */
		$end = 100;

		for($i = $start; $i <= $end; $i++){

		  // 5で割り切れたら{}内を実行する
		  if($i % 5 == 0){
		    echo $i;
		    echo "\n";
		  }
		}