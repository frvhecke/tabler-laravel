@props([
  'icon',         // Name of the tabler icon
  'color' => ''   // Color for the icon
])
<i @class(['icon ti', 'ti-'.$icon => !empty($icon), 'text-'.$color => !empty($color)])></i>