@props([
  'color' => 'default',
  'scrollable' => false,
  'sm' => false,
  'lg' => false
])
<span {{ $attributes->class([ 'badge badge-outline' => true, 'text-'.$color => $color, 'badge-sm' => $sm, 'badge-lg' => $lg ]) }}>
  {{ $slot }}
</span>