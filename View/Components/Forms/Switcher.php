<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class Switcher extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string $id,
        public string $name,
        public bool $checked = false,
        public ?string $value = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.switcher');
    }
}
