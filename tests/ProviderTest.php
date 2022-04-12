<?php

use Illuminate\Support\Facades\Blade;

it('it load component', function () {
    expect(Blade::render('<x-forms.checkbox-field name="foo" label="bar"></x-forms.checkbox-field>'))->toBeString();

    expect(Blade::render('<x-forms.form action="url"></x-forms.form>'))->toBeString();

    expect(Blade::render('<x-forms.hidden name="foo" value="bar"></x-forms.hidden>'))->toBeString();

    expect(Blade::render('<x-forms.password name="foo" label="bar"></x-forms.password>'))->toBeString();

    expect(Blade::render('<x-forms.text name="foo" label="bar"></x-forms.text>'))->toBeString();

    expect(Blade::render('<x-forms.select label="foo" name="bar" id="test" :options="[]"></x-forms.select>'))->toBeString();

    expect(Blade::render('<x-forms.submit></x-forms.submit>'))->toBeString();

    expect(Blade::render('<x-forms.switcher id="foo" name="bar" label="test"></x-forms.switcher>'))->toBeString();

    expect(Blade::render('<x-forms.textarea name="foo" label="bar"></x-forms.textarea>'))->toBeString();


    expect(Blade::render('<x-forms.buttons.delete action="foo" alert="bar" method="delete" label="test"></x-forms.buttons.delete>'))->toBeString();

    expect(Blade::render('<x-forms.buttons.delete-small action="foo" alert="bar" method="delete" label="test"></x-forms.buttons.delete-small>'))->toBeString();

    expect(Blade::render('<x-forms.buttons.primary url="/foo" label="bar"></x-forms.buttons.primary>'))->toBeString();

    expect(Blade::render('<x-forms.buttons.secondary url="/foo" label="bar"></x-forms.buttons.secondary>'))->toBeString();
});
