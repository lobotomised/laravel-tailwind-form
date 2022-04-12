<?php

namespace Lobotomised\LaravelTailwindForm;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Lobotomised\LaravelTailwindForm\Forms\Buttons\Delete;
use Lobotomised\LaravelTailwindForm\Forms\Buttons\DeleteSmall;
use Lobotomised\LaravelTailwindForm\Forms\Buttons\Primary;
use Lobotomised\LaravelTailwindForm\Forms\Buttons\Secondary;
use Lobotomised\LaravelTailwindForm\Forms\CheckboxField;
use Lobotomised\LaravelTailwindForm\Forms\Form;
use Lobotomised\LaravelTailwindForm\Forms\Hidden;
use Lobotomised\LaravelTailwindForm\Forms\Password;
use Lobotomised\LaravelTailwindForm\Forms\Select;
use Lobotomised\LaravelTailwindForm\Forms\Submit;
use Lobotomised\LaravelTailwindForm\Forms\Switcher;
use Lobotomised\LaravelTailwindForm\Forms\Text;
use Lobotomised\LaravelTailwindForm\Forms\Textarea;

class LaravelTailwindFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'component');

        Blade::component('forms.form', Form::class);
        Blade::component('forms.hidden', Hidden::class);
        Blade::component('forms.checkbox-field', CheckboxField::class);
        Blade::component('forms.text', Text::class);
        Blade::component('forms.password', Password::class);
        Blade::component('forms.select', Select::class);
        Blade::component('forms.submit', Submit::class);
        Blade::component('forms.switcher', Switcher::class);
        Blade::component('forms.textarea', Textarea::class);

        Blade::component('forms.buttons.delete', Delete::class);
        Blade::component('forms.buttons.delete-small', DeleteSmall::class);
        Blade::component('forms.buttons.primary', Primary::class);
        Blade::component('forms.buttons.secondary', Secondary::class);
    }
}
