@props([
  'type' => 'button',     // Type of the button ('button' or 'link')
  'href' => '#',          // Destination for the link
  'target' => '_self',    // Target for the link
  'color',                // Color for the button
  'fullwidth' => false,   // Full width state of the button
  'active' => false,      // Active state of the button
  'disabled' => false,    // Disabled state of the button
  'arialabel'             // Aria label for the button
])
@if($type =='link')
<a href="{{ $href }}" target="{{ $target }}" @class(['btn btn-pill', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled]) @if(!empty($arialable)) {{ $attributes->merge(['aria-label' => $arialabel]) }} @endif>
    {{ $slot }}
</a>
@else
<button type="submit" @class(['btn btn-pill', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled]) @if(!empty($arialable)) {{ $attributes->merge(['aria-label' => $arialabel]) }} @endif>
    {{ $slot }}
</button>
@endif