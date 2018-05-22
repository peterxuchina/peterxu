<?php
/**
 * peterxu
 * 2013-8-13
 * xxtao.com
 */

/* function ExplodeLines($text, $columnNames){
    $datas = file($text);
    $result = array();
    $count = count($columnNames);
    foreach($datas as $index => $line){

        $temp = explode(',',$line);
        $a = array_splice($temp, 0,$count);
        print_r($a);
        print_r($temp);
        $temp = array_slice($a, 0,$count);
        echo '<br /><br />';
        //print_r($temp);

        //$result[$index] = array_combine($columnNames, $temp);
    }
    return $result;
}

$columnNames = array('Fruit', 'Number', 'Color');
ExplodeLines('a.txt', $columnNames); */

$a = 'a0120c3';
var_dump(intval($a));
$result = '';
$len = strlen($a);
for($index = 0;$index < $len; $index++){
    $char = $a[$index];
    if( preg_match('[\d]', $char)){
        if($char == 0 && !$result){
            continue;
        }else{
            $result .= $char;
        }
    }
}
var_dump($result);
