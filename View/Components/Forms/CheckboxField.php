<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class CheckboxField extends Component
{
    public function __construct(
        public string $name,
        public string $label,
        public ?string $initialValue = null,
        public ?string $class = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.checkbox-field');
    }
}
