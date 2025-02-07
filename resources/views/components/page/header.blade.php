@props([
  'actions' => '',      // Slot for page actions slot
])
<div @class(["page-header", "d-print-none", $attributes["class"]])>
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        {{ $slot }}
      </div>
      @if(!empty(stripslashes($actions)))
      <div class="col-auto ms-auto d-print-none">
        {{ $actions }}
      </div>
      @endif
    </div>
  </div>
</div>