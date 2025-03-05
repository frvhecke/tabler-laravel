@props([
  'color' => 'default',
  'scrollable' => false,
])
<span {{ $attributes->class([ 'badge badge-outline' => true, 'text-'.$color => $color ]) }}>
  {{ $slot }}
</span>