<?php
namespace AnanthIyer\MagewireExamples\Magewire;

class Counter extends \Magewirephp\Magewire\Component
{
    public $count = 10;

    /** @var string[] */
    protected $listeners = [
        'validate_zip_code' => 'validateCounter',
    ];

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

    public function validateCounter($value): void
    {
        if ($value < 0) {
            $value = 0;
        }
        $this->count = (int)$value;
    }
}
