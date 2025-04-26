@props([
  'name',                 // Name for the input field
  'text',                 // Text to display alongside the radio button
  'description',          // Optional description to display underneath the text
  'selected' => false,    // Flag indicating whether the radio button should be checked
  'disabled' => false,    // Flag indicating whether the radio button should be disabled
  'inline' => false       // Flag indicating whether the radio button should be displayed inline
])
<label @class(['form-check', 'form-check-inline' => $inline])>
  <input class="form-check-input" type="radio" @if(!empty($value)) value="{{ $value }}" @endif @if(!empty($name)) name="{{ $name }}" @endif {{ $selected?"checked":"" }} {{ $disabled?"disabled":""}}>
  <span class="form-check-label">{{ $text }}</span>
@if(!empty($description))
  <span class="form-check-description">
    {{ $description }}
  </span>
@endif
</label>