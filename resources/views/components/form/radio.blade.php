<label @class(['form-check', 'form-check-inline' => $inline])>
  <input class="form-check-input" type="radio" @if(!empty($value)) value="{{ $value }}" @endif @if(!empty($name)) name="{{ $name }}" @endif @if($selected) checked @endif @if($disabled) disabled @endif>
  <span class="form-check-label">{{ $text }}</span>
</label>