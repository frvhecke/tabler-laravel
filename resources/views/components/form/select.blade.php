@props([
  'name',                 // Name for the input field
  'options' => [],        // List of options for the select field (value and text)
  'selected',             // Selected value
  'rounded' => false,     // Flag indicating whether style is rounded
  'disabled' => false,    // Flag indicating whether field is disabled
  'readonly' => false,    // Flag indicating whether field is read-only
])
<select @class(["form-select", "form-control-rounded" => $rounded]) @if(!empty($name)) name="{{ $name }}" @endif @disabled($disabled) @readonly($readonly)>
@foreach($options as $key => $option)
  <option value="{{ $key }}" {{ ($key == $selected)?"selected":"" }}>{{ $option }}</option>
@endforeach
</select>