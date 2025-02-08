@props([
  'responsive' => true,     // Responsive behavior for the table
  'card' => true,           // Include table in card seamlessly
  'vcenter' => true,        // Vertically center the table rows
  'striped' => false,       // Striped rows
])
<div @class(['table-responsive' => $responsive])>
  <table @class(['table', 'table-vcenter' => $vcenter, 'card-table' => $card, 'table-striped' => $striped])>
    @if(!empty(stripslashes($header)))
    <thead>
      <tr>
        {{ $header }}
      </tr>
    </thead>
    @endif
    <tbody>
      {{ $slot }}
    </tbody>
  </table>
</div>