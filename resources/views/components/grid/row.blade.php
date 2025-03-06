@props([
  'cards' => false,       // Flag indicating whether the row-cards element should be added
  'gutter' => -1,         // Gutter size
  'center' => false,      // Flag indicating whether to align items center
])
<div {{ $attributes->class(['row', 'row-cards' => $cards, 'align-items-center' => $center, 'g-'.$gutter => $gutter != -1, $attributes["class"]]) }}>
  {{ $slot }}
</div>