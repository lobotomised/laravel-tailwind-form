<form
    method="{{ $method }}"
    action="{{ $action  }}"
    onsubmit="return confirm('{{ $alert }}')"
>
    @csrf
    @method('delete')
    <button class="form-small-delete" type="submit">
        @icon(delete)
    </button>
</form>
