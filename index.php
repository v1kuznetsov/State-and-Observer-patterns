<?php
namespace App;

use App\Object\ObjectWithStates;
use App\Observers\gPerfomanceObserver;
use App\Observers\bPerfomanceObserver;

require_once './vendor/autoload.php';

$obj = new ObjectWithStates ();

$gPerfomanceObserver = new gPerfomanceObserver();
$obj->attach($gPerfomanceObserver);

$bPerfomanceObserver = new bPerfomanceObserver();
$obj->attach($bPerfomanceObserver);

while (@$input != -1)
{
    echo "Enter '1' for good performance and '0' for bad performance." . PHP_EOL;

    $input = readline();

    if ($input == 1)
    {
        $obj->ChangeState($input);
        echo 'hr - ' . $gPerfomanceObserver->getSumPerfectWork() . PHP_EOL;
        echo 'manager - ' . $bPerfomanceObserver->getSumBadWork() . PHP_EOL; 
    }
    elseif ($input == 0)
    {
        $obj->ChangeState($input);
        echo 'hr - ' . $gPerfomanceObserver->getSumPerfectWork() . PHP_EOL;
        echo 'manager - ' . $bPerfomanceObserver->getSumBadWork() . PHP_EOL; 
    }
    else
    {
        echo 'wrong number' . PHP_EOL;
        $input = -1;
    }
}

?>
