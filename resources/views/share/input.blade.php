@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $id ??= $name;
@endphp

<div @class(['input-group input-group-outline mb-3', $class])>
    @if($label)
        <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        class="form-control"
        value="{{ old($name, $value) }}"
        onfocus="focused(this)"
        onfocusout="defocused(this)">
</div>
