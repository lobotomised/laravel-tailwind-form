<div class="py-3">
    <div class="{{ ($required ?? null) ? 'required' : '' }}">
        @isset($label)
            <label for="{{ $name }}" class="text-grey-lightest block mb-1">
                {{ $label }}
            </label>
        @endisset

        <div class="flex justify-start my-1" role="alert">
            @if (isset($errors) && $errors->has($name))
                <p class="text-red-500 text-sm">
                    {{ $errors->first($name) }}
                </p>
            @endif
        </div>

        <input
            type="{{ $type ?? 'text' }}"
            name="{{ $name }}"
            value="{{ old($name) ?? $value ?? null}}"
            @isset($pattern) pattern="{{ $pattern }}" @endisset
            id="{{ $name }}"
            @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
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
        >
        @if($helper)
            <p id="{{ $describer }}" class="text-sm text-grey-lightest opacity-50 cursor-default select-none">{{ $helper }}</p>
        @endif
    </div>
</div>
