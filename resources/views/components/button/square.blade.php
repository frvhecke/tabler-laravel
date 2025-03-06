@props([
  'type' => 'button',     // Type of the button ('button' or 'link')
  'href' => '#',          // Destination for the link
  'target' => '_self',    // Target for the link
  'color' => '',          // Color for the button
  'fullwidth' => false,   // Full width state of the button
  'active' => false,      // Active state of the button
  'disabled' => false,    // Disabled state of the button
  'arialabel' => '',      // Aria label for the button
  'icononly' => false,    // Icon only button styling
])
@if($type =='link')
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->class(['btn btn-square', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $icononly, 'btn-icon' => $icononly]) }}>
    {{ $slot }}
</a>
@else
<button type="submit" {{ $attributes->class(['btn btn-square', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled, 'btn-icon' => $icononly]) @if(!empty($arialabel)) }}>
    {{ $slot }}
</button>
@endif