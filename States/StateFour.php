<?php
namespace App\States;

class StateFour
{
    public function __construct($ObjectWithStates)
    {
        $this->ObjectWithStates = $ObjectWithStates;
    }

    public function one()
    {
        $this->ObjectWithStates->state = new StateThree($this->ObjectWithStates);
        echo 'perfect3' . PHP_EOL;
    }
    
    public function zero()
    {
        echo 'terrible' . PHP_EOL;
    }
}

?>
