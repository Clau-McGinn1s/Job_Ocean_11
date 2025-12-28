@props([
    'placeholder' => '',
    'type' => 'text',
    'name' => '',
    'label' => null,
    'value' => old($name)
])

@php
    $inputStyle = "rounded-lg bg-sky/10 border border-sky/10 p-1 text-sm w-full max-w-xl text-cerulean placeholder:text-cerulean/50";
    $textAreaStyle = "rounded-lg bg-sky/10 border border-sky/10 p-1 text-sm w-full max-w-xl text-cerulean placeholder:text-cerulean/50";
@endphp

<div class="flex flex-col items-center">
    @if ($label !== null)
        <label for="{{$name}}"
            class="font-light text-lg block">
            {{Str::ucfirst(Str::replace('_', ' ', $name))}}
        </label>
    @endif
    @if ($type === "textarea")
        <textarea type="{{$type}}"  placeholder="{{$placeholder}}" name="{{$name}}" id="{{$name}}"
        {{ $attributes(['class' => $textAreaStyle]) }} rows=6
            >{{$value ?? ''}}</textarea>
    @else
        <input type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" id="{{$name}}" value="{{$value ?? ''}}" 
        {{ $attributes(['class' => $inputStyle]) }} />
    @endif
    <x-form.error :error="$errors->first($name)"/>
</div>