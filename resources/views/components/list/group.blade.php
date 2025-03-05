@props([
  'hoverable' => false,
  'scrollable' => false,
])
<div {{ $attributes->class([ 
  'list-group list-group-flush' => true,
  'list-group-hoverable' => $hoverable,
  'overflow-auto' => $scrollable
]) }}>
  {{ $slot }}
</div>