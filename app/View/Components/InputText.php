<?php

namespace App\View\Components;

use App\View\Components\Concerns\HasInputField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    use HasInputField;

    public function __construct()
    {

    }

    public static function build(): self
    {
        return new self();
    }

    public function render(): View|Closure|string
    {
        return view('components.input-text', array_merge(
            $this->toArray()
        ));
    }
}
