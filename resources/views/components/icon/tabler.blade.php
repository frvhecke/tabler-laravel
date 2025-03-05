@props([
  'icon',         // Name of the tabler icon
  'color' => ''   // Color for the icon
])
<i {{ $attributes->class([ 'icon ti', 'ti-'.$icon => !empty($icon), 'text-'.$color => !empty($color) ]) }}></i>