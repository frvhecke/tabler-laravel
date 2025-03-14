@props([
  'actions' => "",      // Content for actions slot
])
<div {{ $attributes->class(["card-header", $attributes["class"]]) }}>
  {{ $slot }}
</div>