<?php
namespace AnanthIyer\MagewireExamples\Magewire;

class Counter extends \Magewirephp\Magewire\Component
{
    public $count = 10;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrease(): void
    {
        $this->count--;
    }

    public function setCounter($value): void
    {
        $this->count = (int)$value;
    }
}
