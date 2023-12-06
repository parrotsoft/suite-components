<?php

namespace App\View\Components\Concerns;


use Illuminate\Contracts\Support\Arrayable;

trait HasInputField
{
    protected ?string $value = null;
    protected ?string $name = null;
    protected ?string $placeholder = null;
    protected ?string $maxLength = null;
    protected bool|null $readonly = null;
    protected bool|null $required = null;
    protected ?string $pattern = null;

    public function value(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function placeholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function maxLength(string $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function readonly(bool $readonly = true): self
    {
        $this->readonly = $readonly;

        return $this;
    }

    public function required(bool $required = true): self
    {
        $this->required = $required;

        return $this;
    }

    public function pattern(string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'value' => $this->value,
            'name' => $this->name,
            'placeholder' => $this->placeholder,
            'maxLength' => $this->maxLength,
            'readonly' => $this->readonly,
            'required' => $this->required,
            'pattern' => $this->pattern,
        ];
    }

}
