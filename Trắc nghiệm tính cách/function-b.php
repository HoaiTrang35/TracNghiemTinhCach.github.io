<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
    $data=file('Option.txt') or die("Cannot open file");

    array_shift($data);//xóa phần tử đầu tiên
    
    $arrOptions=array();
    foreach($data as $key=>$value) {
        $tmp=explode("|",$value);
        $questionID=$tmp[0];
        $optionID=$tmp[1];
        $answer=$tmp[2];
        $point=$tmp[3];
        $arrOptions[$questionID][$optionID]["option"]=$answer;
        $arrOptions[$questionID][$optionID]["point"]=$point;

    }
   