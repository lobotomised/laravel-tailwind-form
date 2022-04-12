<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms\Buttons;

use Illuminate\View\Component;

class Secondary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $url,
        public string $label,
        public string $class = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.buttons.secondary');
    }
}
