@props([
  'actions' => "",      // Content for actions slot
])
<div @class(["card-header", $attributes["class"]])>
  @if(!empty(stripslashes($slot)))
  <h3 class="card-title">
    {{ $slot }}
  </h3>
  @endif
  @if(!empty(stripslashes($actions)))
  <div class="card-actions">{{ $actions }}</div>
  @endif
</div>