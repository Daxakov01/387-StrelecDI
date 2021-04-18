<?php

//implode "VarDumper.php";

class Zmeya
{
    public $inn = '------------------------';

    public function zmeya()
    {
        $sna = $this->inn;
        $arr = str_split($sna);
        foreach ($arr as $key => $x) {
            $arr[$key] = "*";
            $key++;
            $arr[$key] = '>';

            echo implode($arr) . '<br>';
        }
    }
}

$n = new Zmeya();
$n->zmeya();


?>