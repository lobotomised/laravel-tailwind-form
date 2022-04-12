<div class="switcher py-3">
    <input
        type="checkbox"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ ($value ?? null) ?? 1 }}"
        @if($checked) checked @endif
    >
    <label for="{{ $id }}">
        <span></span> {{ $label }}
    </label>
</div>
