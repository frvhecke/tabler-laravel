@props([
  'small' => false,
  'large' => false,
  'fullwidth' => false,
  'scrollable' => false,
])
<div {{ $attributes->class([ 'modal modal-blur fade' ])->merge([ "tabindex" => "-1", "style" => "display: none;", "aria-hidden" => "true" ]) }}>
  <div @class([ 'modal-dialog modal-sm modal-dialog-centered', 'modal-sm' => $small, 'modal-lg' => $large, 'modal-full-width' => $fullwidth, 'modal-dialog-scrollable' => $scrollable ]) role="document">
    <div class="modal-content">
      {{ $slot }}
    </div>
  </div>
</div>