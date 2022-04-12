<div class="{{ $class ?? 'form-check py-3' }}">
    <label class="form-check" for="{{ $name }}">
        <input
            type="checkbox"
            name="{{ $name }}"
            value="1"
            id="{{ $name }}"
            class="checkmark"
            {{ (old($name) ?? $initialValue ?? null) ? 'checked' : '' }}
        >
        <span class="checkmark"></span>
        {{ $label }}
    </label>
</div>
