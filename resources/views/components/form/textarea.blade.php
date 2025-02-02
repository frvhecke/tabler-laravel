@props([
  'name',                 // Name for the textarea
  'rows' => 5,            // Number of rows for the textarea
  'placeholder',          // Placeholder text for the textarea
  'value',                // Value for the text area
  'disabled' => false,    // Flag indicating whether the textarea should be disabled
  'readonly' => false,    // Flag indicating whether the textarea should be readonly
  'autosize' => false     // Flag indicating whether the textarea should autosize
])
<textarea @class(["form-control"]) @if(!empty($name)) name="{{ $name }}" @endif @if(!$autosize) rows="{{ $rows }}" @endif @if(!empty($placeholder)) placeholder="{{ $placeholder }}" @endif @if(!empty($value)) value="{{ $value }}" @endif {{ $disabled?"disabled":"" }} {{ $readonly?"readonly":"" }} @if($autosize) data-bs-toggle="autosize" style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 60px;" @endif>{{ $slot }}</textarea>