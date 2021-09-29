@props(['name','type','value'=>'' , 'disabled'=>''])
<label class="form-label" for="{{ $name }}">{{ $slot }}</label>
<input {{ $disabled }} type="{{ $type }}" value="{{ $value }}" name="{{ $name }}"class="form-control" id="{{ $name }}">
