<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms\Buttons;

use Illuminate\View\Component;

class Delete extends Component
{
    public function __construct(
        public string $method,
        public string $action,
        public string $alert,
        public string $label,
    ) {
        //
    }

    public function render()
    {
        return view('component::forms.buttons.delete');
    }
}
