<?php
namespace App\Observers;

use App\States\StateOne;
use App\States\StateTwo;
use App\States\StateThree;
use App\States\StateFour;

use SplSubject;

class bPerfomanceObserver implements \SplObserver
{
  public int $result = 0;

  public function update(SplSubject $subject)
  {
    if ($subject->state instanceof StateFour && $subject->previousState instanceof StateFour)
    {
      $this->result += 1;
    }
  }

  public function getSumBadWork(): int
  {
    return $this->result;
  }
}

?>
