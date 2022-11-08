<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
    $data=file('Question.txt') or die("Cannot open file");

    array_shift($data);//xóa phần tử đầu tiên
    
    $arrQuestions=array();
    foreach($data as $key=>$value) {
        $tmp=explode("|",$value);
        $id = $tmp[0];
        $question=$tmp[1];
        $arrQuestions[$id]=array("question"=>$question);
    }
    
    
