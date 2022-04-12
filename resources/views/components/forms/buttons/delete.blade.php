<form
    method="post"
    action="{{ $action }}"
    onsubmit="return confirm('{{ $alert }}')"
>
    @method($method)
    @csrf
    <button class="btn btn-danger" type="submit">
        <div class="flex">
            <span>{{ $label }}</span>
        </div>
    </button>
</form>
