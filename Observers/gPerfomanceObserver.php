<?php
namespace App\Observers;

use App\States\StateOne;
use App\States\StateTwo;
use App\States\StateThree;
use App\States\StateFour;

use SplSubject;

class gPerfomanceObserver implements \SplObserver
{
  public int $result = 0;

  public function update(SplSubject $subject)
  {
    if ($subject->state instanceof StateOne && $subject->previousState instanceof StateOne)
    {
      $this->result += 1;
    }
  }

  public function getSumPerfectWork(): int
  {
    return $this->result;
  }
}

?>
