@props([
  'href' => ''
])
@if(!empty($href))
<a href="{{ $href }}">
@endif
<tr {{ $attributes }}>
  {{ $slot }}
</tr>
@if(!empty($href))
</a>
@endif