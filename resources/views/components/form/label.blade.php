@props([
	'required' => false,   // Flag indicating whether to render label in required state
])
<label @class(['form-label', 'required' => $required])>{{ $slot }}</label>