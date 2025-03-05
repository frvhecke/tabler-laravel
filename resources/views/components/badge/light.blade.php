@props([
  'color' => 'default',
  'scrollable' => false,
])
<span {{ $attributes->class([ 'badge' => true, 'bg-'.$color.'-lt' => $color ]) }}>
  {{ $slot }}
</span>