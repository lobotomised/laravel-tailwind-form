@php
/** @var \Illuminate\Support\HtmlString $slot */
@endphp
<div class="py-3">
    <button
        type="submit"
        class="{{ $class ?? 'bg-primary text-white font-bold rounded focus:outline-none text-sm py-2 px-4' }}"
        style="{{ $style ?? null }}"
        @if($form) form="{{ $form }}" @endif
    >
        {{ $slot->isEmpty() ? 'Sauvegarder' : $slot }}
    </button>
</div>
