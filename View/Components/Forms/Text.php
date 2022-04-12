<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class Text extends Component
{
    public function __construct(
        public $name,
        public $label,
        public $placeholder = '',
        public $type = 'text',
        public $value = null,
        public $required = null,
        public $autofocus = null,
        public $readonly = null,
        public $helper = null,
        public $pattern = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.text');
    }
}
