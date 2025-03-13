@props([
  'active' => false,        // Flag indicating whether navbar item is active
  'title' => '',            // Title for the navbar item
  'icon' => '',             // Icon for the navbar item
  'href' => '#'             // Link for the navbar item
])
<li {{ $attributes->class([ "nav-item", "dropdown", "active" => $active ]) }}>
  <a class="nav-link dropdown-toggle" href="{{ $href }}" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      @if(!empty($icon))
      <x-icon.tabler :icon="$icon" @class(["icon"]) />
      @endif
    </span>
    <span class="nav-link-title">{{ $title }}</span>
  </a>
  <div class="dropdown-menu">
    {{ $slot }}
  </div>
</li>