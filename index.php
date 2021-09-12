
    <?php
        $test_1 = 1000;
        $test_2 = 400;
        //変数の先頭は英文字かアンダーバー

        //配列
        $array = [5,7,3];
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
        //連想配列
        $array_member = [
            'name' => 'ホンダ',
        ];

        echo '<pre>';
        echo $array_member;
        echo '</pre>';

        //キーの中にまた連想配列を作ることができる
        $array_member_2 = [
            '岸田' => [
                'age' => 29,
                'height' => '200'
            ],
            '田中' => [
                'age' => '20',
                height => '300'
            ]
        ];
        var_dump($array_member_2);
        
        //演算子
        $test1 = 500;
        $test2 = 4834;

        //条件

        // if(条件){
        //     条件が真なら実行
        // }
        if ($test1 === 500){
            echo '身長は100cmです';
        }
        //if文にif文を入れる構造をネスト


        //データが入っているかどうか
        //isset empty is_null
        $test = '';

        if(empty($test)){
            echo '変数は空です';
        }

        $signal_1 = 'red';
        $signal_2 = 'blue';

        if($signal_1 === 'red' && $signal_2 === 'blue'){
            echo '赤と青だよ';
        }

        //複数の値

        $members = [
            'name' => '岸田',
            'age' =>23,
            'hobby' => '野球'
        ];
        //valueの値が表示される
        foreach($members as $member){
            echo $member;
        }

        //キーとバリューを表示させる $keyはなんでも大丈夫
        foreach($members as $key => $value){
            echo $key . 'は' . $value . 'です';
        }


        //for, while
        //for文は数が決まっているとき
        //while文は数が決まっていない時
        //(このカッコには3つ書く必要がある)
        //continue, breakはあんまつかわない
        for($i = 0; $i < 10; $i++ ){
            //処理
            echo $i;
        }
        
        //while

        $j = 0;
        while($j < 5){
            echo $j;
            $j++;
        }


        //関数 function機能
        //引数がお金、得たものが戻り値

        //組み込み関数・・・準備してある関数
        //ユーザー関数


        //この引数、returnがそれぞれない場合がある
        // function test(引数){
        //     //処理
        //     return //戻り値

        // }    


        //引数なし
        //戻り値なし returnがない

        function test(){
            echo 'テスト'; //処理内容だけが行われる
        }
        test();

        //引数あり
        //戻り値なし
        $comment = 'コメント２';
        function getComment($string){
            echo $string;
        }

        getComment($comment);

        //引数なし
        //戻り値あり

        function getNumberOfComment(){
            return 5;
        }
        // getNumberOfComment(); = 5 みたいな構造

        $commentNumber = getNumberOfComment();

        echo $commentNumber;

        //引数2つ
        //戻り値あり

        function sumPrice($int1, $int2){
            $int3 = $int1 + $int2;
            return $int3;
        }

        $total = sumPrice(3, 5);
        echo $total;

        //組み込み関数
        //文字列の長さ

        $text = 'あいうえお';

        echo strlen($text);

        //キャメルケース
        // checkPostalCode();
        //スネークケース
        // check_postal_code();

        
        //変数の範囲(スコープ)

        
    ?>
