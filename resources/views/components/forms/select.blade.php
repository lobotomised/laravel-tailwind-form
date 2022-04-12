<div class="py-3">
    <div class="{{ ($required ?? null) ? 'required' : '' }}">
        @isset($label)
            <label for="{{ $name }}" class="text-grey-lightest block mb-1">
                {{ $label }}
            </label>
        @endisset

        <select
            id="{{ $name }}"
            name="{{ $name }}"
            class="bg-grey border border-grey-light rounded w-full {{ isset($errors) && $errors->has($name) ? 'border-red' : '' }}"
            {{ ($required ?? null) ? 'required' : '' }}
            {{ ($autofocus ?? null) ? 'autofocus' : '' }}
            {{ ($disabled ?? null) ? 'disabled' : '' }}
        >

            @if(!$required && old($name) === null && $initialValue === null)
                <option disabled selected></option>
            @endif

            @if(is_a($options, \Illuminate\Support\Collection::class))
                @foreach ($options as $option)
                    <option
                        value="{{ $option->$id }}"
                        {{ old($name) == $option->$id ? 'selected' : null }}
                        {{ ($initialValue ?? null) == $option->$id ? 'selected' : null }}
                    >{{ ($value ?? null) ? $option->$value : $option->value }}</option>
                @endforeach
            @else
                @foreach ($options as $k => $v)
                    <option
                        value="{{ $k }}"
                        {{ old($name) == $k ? 'selected' : null }}
                        {{ ($initialValue ?? null) == $k ? 'selected' : null }}
                    >{{ $v }}</option>
                @endforeach
            @endif

        </select>

    </div>

    <div class="flex justify-start mt-2" role="alert">
        @if (isset($errors) && $errors->has($name))
            <p class="text-red-500 text-xs">
                {{ $errors->first($name) }}
            </p>
        @endif
    </div>
</div>
