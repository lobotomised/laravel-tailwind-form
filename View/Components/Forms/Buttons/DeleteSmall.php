<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms\Buttons;

use Illuminate\View\Component;

class DeleteSmall extends Component
{
    public function __construct(
        public string $action,
        public string $alert,
        public string $method='post',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.buttons.delete-small');
    }
}
