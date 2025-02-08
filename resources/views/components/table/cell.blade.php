<td @class([$attributes["class"]]) @if(!empty($attributes["data-label"])) data-label="{{ $attributes["data-label"] }}" @endif>
  {{ $slot }}
</td>