<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm tính cách</title>
</head>
<body>
    <?php
    //Đọc file question
    $data=file("Question.txt") or die("Cannot read file");
    $point=0;
    array_shift($data);
    foreach($data as $key=>$value){
        $tmp=explode("|",$value);
        $id=$tmp[0];
        $point=$point+$_POST[$id];
    }

    //Đọc file result
    $data=file("result.txt") or die("Cannot read file");
    array_shift($data);
    foreach($data as $key=>$value){
        $tmp=explode("|",$value);
        $min=$tmp[0];
        $max=$tmp[1];
        $content=$tmp[2];
        if($point>=$min && $point<=$max){
            $result=$content;
            break;  
        }
    }

    ?>
    <div class="content">
        <h1>Kết quả trắc nghiệm tính cách</h1>
        <p>
            <b>Tổng số điểm của bạn là: </b><?php echo $point?> </p>
            <p style='margin-top:10px;text-align:justify'><?php echo $result; ?>
    </div>
</body>
</html>