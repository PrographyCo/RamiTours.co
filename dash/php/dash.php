<?php

class dash{
    public $vals;
    public function __construct($vals)
    {
        $this->vals = $vals;
    }
}

//  first Chart

function setdate($cond,$sth,$table = 'users'){
    global $con;
    $date = date('Y-m-d');
    if ($sth == 'months'){
        $date = date('Y-m-%');
    }

    if ($cond !== 0 && $sth == 'months'){
        $date = date('Y-m-%', strtotime('-'.$cond.' '.$sth, strtotime($date)));
    }elseif ($cond !== 0 && $sth == 'days'){
        $date = date('Y-m-d', strtotime('-'.$cond.' '.$sth, strtotime($date)));
    }


    $sel = $con->query('SELECT * FROM '.$table.' WHERE date LIKE "'.$date.'" ORDER BY date DESC');
    $data = $sel->fetchAll(PDO::FETCH_ASSOC);
    return count($data);
}

function countDays($i,$sth = 'users'){
    $num = 0;
    for ($x=0;$x<=$i;$x++){
        $num += setdate($x,'days',$sth);
    }

    return $num;
}

function val($i,$x = 70){
    global $hund;

    $val = 0;

    if ($hund > 0){
        $val = ($i/7) / $hund;
        $val = 2-$val;
        $val = $x*($val);
    }
    return ($val == 0)? $x: $val;
}



//  Second Chart

$days = array();
for ($i=0;$i<=6;$i++){
    $days[$i] = setdate($i,'days','visitors');
}

$hund = array_sum($days)/7;


$vals = '';
for ($i = 6; $i >= 0; $i--) {
    $x = 50 * ((6 - $i) + 1);
    $y = val($days[$i],30);
    $vals .= "L$x,$y ";
}

$two = new dash($vals);