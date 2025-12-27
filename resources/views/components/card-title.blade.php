@php
    $baseStyle = "group-hover:text-sky transition-colors duration-200";
@endphp
<div {{ $attributes(['class' => $baseStyle]) }}>
    {{ $slot }}
</div>