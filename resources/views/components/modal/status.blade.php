@props([
  'color' => 'success',
])
<div {{ $attributes->class([ 'modal-status', 'bg-'.$color => $color ]) }}></div>