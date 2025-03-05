@props([
  'color' => 'default',
  'scrollable' => false,
  'sm' => false,
  'lg' => false
])
<span {{ $attributes->class([ 'badge' => true, 'bg-'.$color.'-lt' => $color, 'badge-sm' => $sm, 'badge-lg' => $lg ]) }}>
  {{ $slot }}
</span>