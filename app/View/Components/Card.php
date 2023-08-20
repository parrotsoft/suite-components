<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    protected $sections = [];

    public function sections(mixed $components): self
    {
        $this->sections[] = $components;

        return $this;
    }

    public static function build(): self
    {
        return new self();
    }
    public function render(): View|Closure|string
    {
        return view('components.card', [
            'sections' => $this->sections,
        ]);
    }
}
