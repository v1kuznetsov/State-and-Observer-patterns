<?php
namespace App\States;

class StateThree
{
    public function __construct($ObjectWithStates)
    {
        $this->ObjectWithStates = $ObjectWithStates;
    }

    public function one()
    {
        $this->ObjectWithStates->state = new StateTwo($this->ObjectWithStates);
        echo 'perfect2' . PHP_EOL;
    }
    public function zero()
    {
        $this->ObjectWithStates->state = new StateFour($this->ObjectWithStates);
        echo 'bad4' . PHP_EOL;
    }
}

?>
