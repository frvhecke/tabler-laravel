@props([
  'name',                 // Name for the input field
  'options' => [],        // List of options for the select field (value and text)
  'selected',             // Selected value
  'rounded' => false      // Flag indicating whether style is rounded
])
<select @class(["form-select", "form-control-rounded" => $rounded]) @if(!empty($name)) name="{{ $name }}" @endif>
@foreach($options as $key => $option)
  <option value="{{ $key }}" {{ ($key == $default)?"selected":"" }}>{{ $option }}</option>
@endforeach
</select>