@props([
  'page' => 1,
  'total' => 10,
  'text' => false,
  'next' => true,
  'last' => false,
  'show' => 5,
  'href' => url()->full(),
  'query_param' => 'page'
])
<ul @class(["pagination", $attributes["class"]])>
  @if($last)
  <li @class(["page-item", "disabled" => ($page==1)])>
    <a class="page-link" href="{{ url()->query($href, [$query_param => 1]) }}" aria-disabled="true">
      <x-icon.tabler icon="chevron-left-pipe"/> @if($text) First @endif
    </a>
  </li>
  @endif
  @if($next)
  <li @class(["page-item", "disabled" => ($page==1)])>
    <a class="page-link" href="{{ url()->query($href, [$query_param => ($page==1)?1:$page-1]) }}" tabindex="-1" aria-disabled="true">
      <x-icon.tabler icon="chevron-left"/> @if($text) Previous @endif
    </a>
  </li>
  @endif
  @if($total <= $show)
  @for($i = 1; $i <= $total; $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="{{ url()->query($href, [$query_param => $i]) }}">{{ $i }}</a></li>
  @endfor
  @elseif($page - ceil(($show-1)/2) <= 1)
  @for($i = 1; $i <= $page + ceil(($show-1)/2); $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="{{ url()->query($href, [$query_param => $i]) }}">{{ $i }}</a></li>
  @endfor
  <li class="page-item page-link">...</li>
  <li @class(["page-item", "active" => ($page==$total)])><a class="page-link" href="{{ url()->query($href, [$query_param => $total]) }}">{{ $total }}</a></li>
  @elseif($page + ceil(($show-1)/2) >= $total)
  <li @class(["page-item", "active" => ($page==1)])><a class="page-link" href="{{ url()->query($href, [$query_param => 1]) }}">1</a></li>
  <li class="page-item page-link">...</li>
  @for($i = $page - ceil(($show-1)/2); $i <= $total; $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="{{ url()->query($href, [$query_param => $i]) }}">{{ $i }}</a></li>
  @endfor
  @else
  <li @class(["page-item", "active" => ($page==1)])><a class="page-link" href="{{ url()->query($href, [$query_param => 1]) }}">1</a></li>
  @if($page - ceil(($show-1)/2) > 2)
  <li class="page-item page-link">...</li>
  @endif
  @for($i = $page - ceil(($show-1)/2); $i <= $page + ceil(($show-1)/2); $i++)
  <li @class(["page-item", "active" => ($page==$i)])><a class="page-link" href="{{ url()->query($href, [$query_param => $i]) }}">{{ $i }}</a></li>
  @endfor
  @if($page + ceil(($show-1)/2) < $total - 1)
  <li class="page-item page-link">...</li>
  @endif
  <li @class(["page-item", "active" => ($page==$total)])><a class="page-link" href="{{ url()->query($href, [$query_param => $total]) }}">{{ $total }}</a></li>
  @endif
  @if($next)
  <li @class(["page-item", "disabled" => ($page==$total)])>
    <a class="page-link" href="{{ url()->query($href, [$query_param => ($page>$total)?$total:$page+1]) }}">
      @if($text) Next @endif <x-icon.tabler icon="chevron-right"/>
    </a>
  </li>
  @endif
  @if($last)
  <li @class(["page-item", "disabled" => ($page==$total)])>
    <a class="page-link" href="{{ url()->query($href, [$query_param => $total]) }}">
      @if($text) Last @endif <x-icon.tabler icon="chevron-right-pipe"/>
    </a>
  </li>
  @endif
</ul>