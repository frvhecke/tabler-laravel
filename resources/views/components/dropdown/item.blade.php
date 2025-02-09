@props([
  'disabled' => false,      // Flag indicating whether dropdown item is disabled
  'active' => false,        // Flag indicating whether dropdown item is active
  'icon' => '',             // Icon for the dropdown icon
  'color' => '',            // Text color for the dropdown icon
])
<a @class(["dropdown-item", "active" => $active, "disabled" => $disabled, "text-".$color => !empty($color), $attributes["class"]]) href="#">
  @if(!empty($icon))
  <x-icon.tabler :icon="$icon" :color="$color" @class(["dropdown-item-icon"]) />
  @endif
  {{ $slot }}
</a>