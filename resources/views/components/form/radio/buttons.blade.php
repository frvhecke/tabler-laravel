@props([
  'name',                 // Name for the input field
  'options' => [],        // List of options for the select field (value and text)
  'selected' => '',       // Selected value
])
<div class="btn-group w-100" role="group">
@foreach($options as $key => $option)
  <input type="radio" class="btn-check" name="{{ $name }}" id="{{ $name }}-{{ $key }}" autocomplete="off" {{ ($key == $selected)?"checked":"" }}>
  <label for="{{ $name }}-{{ $key }}" type="button" class="btn">{{ $option }}</label>
@endforeach
</div>