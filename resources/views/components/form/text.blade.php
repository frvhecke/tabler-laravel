<input type="text" @class(["form-control", "form-control-rounded" => $rounded]) @if(!empty($name)) name="{{ $name }}" @endif @if(!empty($placeholder)) placeholder="{{ $placeholder }}" @endif @if(!empty($value)) value="{{ $value }}" @endif @if($disabled) disabled @endif @if($readonly) readonly @endif @if(!empty($mask)) data-mask="{{ $mask }}" data-mask-visible="true" placeholder="{{ $mask }}" autocomplete="off" @endif/>