@props([
    'title',       // Title for the card header
    'icon',        // Optional icon for the card header
])
<div class="card-header">
@if($title != "" || $icon != "")
    <h3 class="card-title">
@if(isset($icon) && $icon != "")
        <x-icon.tabler icon="{{ $icon }}" style="font-size: 14pt; margin-right: 5px;"/>
@endif
        {{ $title }}
    </h3>
@endif
@if($slot->isNotEmpty())
    <div class="card-actions">{{ $slot }}</div>
@endif
</div>