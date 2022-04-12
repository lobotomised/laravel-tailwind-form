<?php
use Illuminate\Support\Str;
?>
<form
    @if(\Str::lower($method) === 'post') method="{{ $method }}" @endif
    @if(isset($method) && Str::lower($method) !== 'post') method="post" @endif
    action="{{ $action }}"
    @isset($class)class="{{ $class }}" @endisset
    @isset($id) id="{{ $id }}" @endisset
>
    @if(Str::lower($method) !== 'post')
        @method($method)
    @endif

    @csrf

    {{ $slot ?? null }}
</form>
