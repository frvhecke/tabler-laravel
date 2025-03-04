@props([
  'size' => 0,            // Column size
  'sm' => 0,              // Column size for small screens
  'md' => 0,              // Column size for medium screens
  'lg' => 0,              // Column size for large screens
  'xl' => 0,              // Column size for extra large screens
  'colsm' => false,
  'colmd' => false,
  'collg' => false,
  'colxl' => false,
  'colauto' => false,
  'colsmauto' => false,
  'colmdauto' => false,
  'collgauto' => false,
  'colxlauto' => false,
  'center' => false,
])
<div @class(['col' => $size+$sm+$md+$lg+$xl==0 && !$colsm && !$colmd && !$collg && !$colxl && !$colauto && !$colsmauto && !$colmdauto && !$collgauto && !$colxlauto,'col-'.$size => $size>0, 'col-sm-'.$sm => $sm>0, 'col-md-'.$md => $md>0, 'col-lg-'.$lg => $lg>0, 'col-xl-'.$xl => $xl>0, 'col-sm' => $colsm, 'col-md' => $colmd, 'col-lg' => $collg, 'col-xl' => $colxl, 'col-auto' => $colauto, 'col-sm-auto' => $colsmauto, 'col-md-auto' => $colmdauto, 'col-lg-auto' => $collgauto, 'col-xl-auto' => $colxlauto, 'align-self-center' => $center, $attributes["class"]])>
  {{ $slot }}
</div>