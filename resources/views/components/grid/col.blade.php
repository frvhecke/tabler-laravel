<div {{ $attributes->class(['col-'.$size => $size>0, 'col-sm-'.$sm => $sm>0, 'col-md-'.$md => $md>0, 'col-lg-'.$lg => $lg>0, 'col-xl-'.$xl => $xl>0, 'col-sm' => $colsm, 'col-md' => $colmd, 'col-lg' => $collg, 'col-xl' => $colxl, 'col-auto' => $colauto, 'col-sm-auto' => $colsmauto, 'col-md-auto' => $colmdauto, 'col-lg-auto' => $collgauto, 'col-xl-auto' => $colxlauto]) }}>
  {{ $slot }}
</div>