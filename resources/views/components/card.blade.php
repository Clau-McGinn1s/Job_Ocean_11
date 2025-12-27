@php
    $baseStyle = "p-5 bg-sky/10 border-2 border-sky/0 rounded-xl hover:border-sky/30 group transition-colors duration-200";
@endphp

<div {{$attributes(['class' => $baseStyle])}}>
    {{$slot}}
</div>