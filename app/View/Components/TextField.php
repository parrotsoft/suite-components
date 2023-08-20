<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextField extends Component
{
    protected string $label;
    protected string $value;


    public function label(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function value(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public static function build(): self
    {
        return new self();
    }
    public function render(): View|Closure|string
    {
        return view('components.text-field', [
            'label' => $this->label,
            'value' => $this->value,
        ]);
    }
}
