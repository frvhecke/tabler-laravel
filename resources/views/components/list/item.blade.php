@props([
  'flush' => false,
])
<div {{ $attributes->class([ 'list-group-item' => true, 'list-group-flush' => $flush ]) }}>
  {{ $slot }}
</div>