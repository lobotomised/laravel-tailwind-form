<?php

declare(strict_types=1);

namespace Lobotomised\LaravelTailwindForm\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $name,
        public $label,
        public $value = null,
        public $required = null,
        public $autofocus = null,
        public $readonly = null,
        public ?string $helper = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|string
    {
        return view('component::forms.textarea');
    }
}
