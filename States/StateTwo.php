<?php
namespace App\States;

class StateTwo
{
    public function __construct($ObjectWithStates)
    {
        $this->ObjectWithStates = $ObjectWithStates;
    }

    public function one()
    {
        $this->ObjectWithStates->state = new StateOne($this->ObjectWithStates);
        echo 'perfect1' . PHP_EOL;
    }
    public function zero()
    {
        $this->ObjectWithStates->state = new StateThree($this->ObjectWithStates);
        echo 'bad3' . PHP_EOL;
    }
}

?>
