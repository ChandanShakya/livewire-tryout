<?php
namespace App\Livewire;

use Livewire\Attributes\Session;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{
    #[Session(key: 'counter')]
    public $counter;

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
