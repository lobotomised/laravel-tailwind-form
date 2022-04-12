<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $class = null,
        public ?string $form = null,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.submit');
    }
}
