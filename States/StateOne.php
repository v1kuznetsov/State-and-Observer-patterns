<?php
namespace App\States;

class StateOne
{
    public function __construct($ObjectWithStates)
    {
        $this->ObjectWithStates = $ObjectWithStates;
    }

    public function one()
    {
        echo 'exelent' . PHP_EOL;
    }

    public function zero()
    {
        $this->ObjectWithStates->state = new StateTwo($this->ObjectWithStates);
        echo 'bad2' . PHP_EOL;
    }
}

?>
