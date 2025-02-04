@props([
  'name',                   // Name for the text field
  'placeholder',            // Placeholder for the text field
  'value',                  // Value for the text field
  'disabled' => false,      // Flag indicating whether field is disabled
  'readonly' => false,      // Flag indicating whether field is read-only
  'mask',                   // Mask for the text field
  'rounded' => false,       // Flag indicating whether style is rounded
  'icon_start' => '',
  'icon_end' => ''
])
<input type="password" @class(["form-control", "form-control-rounded" => $rounded]) @if(!empty($name)) name="{{ $name }}" @endif @if(!empty($placeholder)) placeholder="{{ $placeholder }}" @endif @if(!empty($value)) value="{{ $value }}" @endif @if($disabled) disabled @endif @if($readonly) readonly @endif />