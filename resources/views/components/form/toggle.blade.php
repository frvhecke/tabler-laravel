@props([
  'name' => ''            // Name for the input field
  'text' => '',           // Text to display alongside the toggle switch
  'description' => '',    // Optional description to display underneath the text
  'selected' => false,    // Flag indicating whether the toggle switch should be toggled on
  'disabled' => false,    // Flag indicating whether the toggle switch should be disabled
  'inline' => false       // Flag indicating whether the toggle switch should be displayed inline
])
<label @class(['form-check form-switch', 'form-check-inline' => $inline])>
  <input class="form-check-input" type="checkbox" @if(!empty($name)) name="{{ $name }}" @endif {{ $selected?"checked":"" }} {{ $disabled?"disabled":"" }}>
  <span class="form-check-label">{{ $text }}</span>
  @if(!empty($description))
  <span class="form-check-description">{{ $description }}</span>
  @endif
</label>