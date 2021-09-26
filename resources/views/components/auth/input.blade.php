@props(['name','type','value'=>''])
<label class="form-label" for="{{ $name }}">{{ $slot }}</label>
<input type="{{ $type }}" value="{{ $value }}" name="{{ $name }}"class="form-control" id="{{ $name }}">
