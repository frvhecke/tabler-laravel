@props([
  'responsive' => true,     // Responsive behavior for the table
  'card' => true,           // Include table in card seamlessly
  'vcenter' => true,        // Vertically center the table rows
  'striped' => false,       // Striped rows
])
<div {{ $attributes->class([ 'table-responsive' => $responsive ]) }} style="overflow: visible;">
  <table @class(['table', 'table-vcenter' => $vcenter, 'card-table' => $card, 'table-striped' => $striped])>
    @if(!empty(stripslashes($header)))
    <thead>
      <tr>
        @if($header) {{ $header }} @endif
      </tr>
    </thead>
    @endif
    <tbody>
      {{ $slot }}
    </tbody>
  </table>
</div>