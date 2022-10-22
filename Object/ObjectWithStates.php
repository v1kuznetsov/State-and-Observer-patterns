<?php
namespace App\Object;

use App\States\StateOne;
use App\States\StateTwo;
use App\States\StateThree;
use App\States\StateFour;

use SplObserver;

class ObjectWithStates implements \SplSubject
{
    public $state;
    public $previousState;
    public $input;
    public \SplObjectStorage $observers;

    public function __construct()
    {
        $this->state = new StateTwo($this);
        $this->observers = new \SplObjectStorage();
    }
#################################################################
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
#################################################################
    public function ChangeState($input)
    {
        if ($input == 1)
        {
            $this->state->one();
            $this->notify();
        }
        elseif($input == 0)
        {
            $this->state->zero();
            $this->notify();
        }
        
        $this->previousState = $this->state;
    }
}

?>
