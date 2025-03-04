@props([
  'title',                // Title for the alert
  'description',          // Description for the alert
  'icon',                 // Optional icon for the alert
  'color' => 'success',   // Color for the alert (default: success)
  'dismissible' => false, // Flag indicating whether alert is dismissible
  'important' => false    // Flag indicating whether alert is important (using color as background for alert box)
])
<div role="alert" @class(['alert', 'alert-'.$color => !empty($color), 'alert-dismissible' => $dismissible, 'alert-important' => $important])>
  <div class="d-flex">
    @if(!empty($icon))
    <div>
      <x-icon.tabler :icon="$icon" class="icon alert-icon" />
    </div>
    @endif
    @if(empty($description))
    <div>{{ $title }}</div>
    @else
    <div>
      @if(!empty($title))
      <h4 class="alert-title">{{ $title }}</h4>
      @endif
      <div class="text-secondary">{{ $description }}</div>
    </div>
    @endif
  </div>
@if($dismissible)
  <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
@endif
</div>