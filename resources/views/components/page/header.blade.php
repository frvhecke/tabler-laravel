@if($title != '' || $pretitle != '' || $slot->isNotEmpty())
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
@if($pretitle != '')
        <div class="page-pretitle">
          {{ $pretitle }}
        </div>
@endif
@if($title != '')
        <h2 class="page-title">
          {{ $title }}
        </h2>
@endif
      </div>
@if($slot->isNotEmpty())
      <div class="col-auto ms-auto d-print-none">
        {{ $slot }}
      </div>
@endif
    </div>
  </div>
</div>
@endif