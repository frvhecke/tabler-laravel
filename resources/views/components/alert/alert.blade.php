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