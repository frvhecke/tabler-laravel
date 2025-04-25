@props([
  'href' => "#",
  'active' => false,
  'disabled' => false,
  'hover' => false,
])
<a href="{{ $href }}" {{ $attributes->class([ 'list-group-item list-group-item-action' => true, 'active' => $active, 'disabled' => $disabled ]) }} @if(!$hover) style="background-color: unset !important;" @endif >
  {{ $slot }}
</a>