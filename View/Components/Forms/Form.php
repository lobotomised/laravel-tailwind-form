<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(
        public $action,
        public $method = 'post',
        public $class = null,
        public $id = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.form');
    }
}
