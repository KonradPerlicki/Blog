@props(['name','type'])
<label class="form-label" for="{{ $name }}">{{ $slot }}</label>
<input type="{{ $type }}" name="{{ $name }}"class="form-control" id="{{ $name }}">
