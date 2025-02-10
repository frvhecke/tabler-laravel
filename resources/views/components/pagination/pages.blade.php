@props([
  'page' => 1,      // Flag indicating whether dropdown item is disabled
  'total' => 10,        // Flag indicating whether dropdown item is active
  'text' => false,
  'next' => true,
  'last' => false,
  'show' => 5
])
<ul class="pagination m-0 ms-auto">
  @if($last)
  <li @class(["page-item", "disabled" => ($page==1)])>
    <a class="page-link" href="#" aria-disabled="true">
      <x-icon.tabler icon="chevron-left-pipe"/> @if($text) First @endif
    </a>
  </li>
  @endif
  @if($next)
  <li @class(["page-item", "disabled" => ($page==1)])>
    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
      <x-icon.tabler icon="chevron-left"/> @if($text) Previous @endif
    </a>
  </li>
  @endif
  @if($total <= $show)
  @for($i = 1; $i <= $total; $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="#">{{ $i }}</a></li>
  @endfor
  @elseif($page - ceil(($show-1)/2) <= 1)
  @for($i = 1; $i <= $page + ceil(($show-1)/2); $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="#">{{ $i }}</a></li>
  @endfor
  <li class="page-item page-link">...</li>
  <li @class(["page-item", "active" => ($page==$total)])><a class="page-link" href="#">{{ $total }}</a></li>
  @elseif($page + ceil(($show-1)/2) >= $total)
  <li @class(["page-item", "active" => ($page==1)])><a class="page-link" href="#">1</a></li>
  <li class="page-item page-link">...</li>
  @for($i = $page - ceil(($show-1)/2); $i <= $total; $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="#">{{ $i }}</a></li>
  @endfor
  @else
  <li @class(["page-item", "active" => ($page==1)])><a class="page-link" href="#">1</a></li>
  @if($page - ceil(($show-1)/2) > 2)
  <li class="page-item page-link">...</li>
  @endif
  @for($i = $page - ceil(($show-1)/2); $i <= $page + ceil(($show-1)/2); $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="#">{{ $i }}</a></li>
  @endfor
  @if($page + ceil(($show-1)/2) < $total - 1)
  <li class="page-item page-link">...</li>
  @endif
  <li @class(["page-item", "active" => ($page==$total)])><a class="page-link" href="#">{{ $total }}</a></li>
  @endif
  @if($next)
  <li @class(["page-item", "disabled" => ($page==$total)])>
    <a class="page-link" href="#">
      @if($text) Next @endif <x-icon.tabler icon="chevron-right"/>
    </a>
  </li>
  @endif
  @if($last)
  <li @class(["page-item", "disabled" => ($page==$total)])>
    <a class="page-link" href="#">
      @if($text) Last @endif <x-icon.tabler icon="chevron-right-pipe"/>
    </a>
  </li>
  @endif
</ul>