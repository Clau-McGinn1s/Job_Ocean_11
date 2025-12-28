@props(['error' => false])
<div>
   @if($error)
        <p class="text-xs text-red-700 font-light italic">
            *{{$error}}
        </p>
   @endif
</div>