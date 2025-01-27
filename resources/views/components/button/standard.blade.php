@if($type =='link')
<a href="{{ $href }}" target="{{ $target }}" @class(['btn', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled]) @if(!empty($arialable)) {{ $attributes->merge(['aria-label' => $arialabel]) }} @endif>
    {{ $slot }}
</a>
@else
<button type="submit" @class(['btn', 'btn-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled])>
    {{ $slot }}
</button>
@endif