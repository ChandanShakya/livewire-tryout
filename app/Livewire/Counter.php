<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{
    public $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
