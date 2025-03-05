@props([
  'href' => "#",
  'active' => false,
  'disabled' => false,
])
<a href="{{ $href }}" {{ $attributes->class([ 'list-group-item list-group-item-action' => true, 'active' => $active, 'disabled' => $disabled ]) }}>
  {{ $slot }}
</a>