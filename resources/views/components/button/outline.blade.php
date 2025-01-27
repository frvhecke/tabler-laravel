@if($type =='link')
<a href="{{ $href }}" target="{{ $target }}" @class(['btn', 'btn-outline-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled])>
    {{ $slot }}
</a>
@else
<button type="submit" @class(['btn', 'btn-outline-'.$color => !empty($color), 'w-100' => $fullwidth, 'active' => $active, 'disabled' => $disabled])>
    {{ $slot }}
</button>
@endif