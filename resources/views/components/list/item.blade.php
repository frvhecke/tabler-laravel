@props([
  'flush' => false,
  'hover' => false,
])
<div {{ $attributes->class([ 'list-group-item' => true, 'list-group-flush' => $flush ]) }} @if(!$hover) style="background-color: unset !important;" @endif>
  {{ $slot }}
</div>