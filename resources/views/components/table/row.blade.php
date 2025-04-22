@props([
  'href' => ''
])
@if($href != "")
<a href="{{ $href }}">
@endif
<tr {{ $attributes }}>
  {{ $slot }}
</tr>
@if($href != "")
</a>
 @endif