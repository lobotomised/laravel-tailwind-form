<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public $label,
        public string $name,
        public string $id,
        public array|Collection $options,
        public string $value = '',
        public $initialValue = null,
        public ?bool $required = false,
        public ?bool $autofocus = false,
        public ?bool $disabled = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.select');
    }
}
