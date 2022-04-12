<div class="py-3">
    <div class="{{ ($required ?? null) ? 'required' : '' }}">
        @isset($label)
            <label for="{{ $name }}" class="text-grey-lightest block mb-1">
                {{ $label }}
            </label>
        @endisset

        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            rows="{{ $rows ?? 4 }}"
            class="bg-grey border border-grey-light rounded w-full
                {{ isset($errors) && $errors->has($name) ? 'border-red' : '' }}
                {{ $readonly ? 'cursor-not-allowed' : '' }}
            "
            {{ ($required ?? null) ? 'required' : '' }}
            {{ ($autofocus ?? null) ? 'autofocus' : '' }}
            @isset($readonly) readonly @endisset
            @if($helper)
                @php $describer = Illuminate\Support\Str::random(40); @endphp
                aria-describedby="{{ $describer }}"
            @endif
        >{{ old($name) ?? $value ?? null }}</textarea>

        @if($helper)
            <p id="{{ $describer }}" class="text-sm text-grey-lightest opacity-50 cursor-default select-none">{{ $helper }}</p>
        @endif
    </div>

    <div class="flex justify-start mt-2" role="alert">
        @if (isset($errors) && $errors->has($name))
            <p class="text-red-500 text-xs">
                {{ $errors->first($name) }}
            </p>
        @endif
    </div>
</div>
