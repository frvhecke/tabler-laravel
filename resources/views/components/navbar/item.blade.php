@props([
  'active' => false,        // Flag indicating whether navbar item is active
  'title' => '',            // Title for the navbar item
  'icon' => '',             // Icon for the navbar item
  'href' => '#'             // Link for the navbar item
])
<li {{ $attributes->class([ "nav-item", "active" => $active ]) }}>
  <a class="nav-link" href="{{ $href }}">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      @if(!empty($icon))
      <x-icon.tabler :icon="$icon" @class(["icon"]) />
      @endif
    </span>
    <span class="nav-link-title">{{ $title }}</span>
  </a>
</li>