@props(['job'])
<x-card class="flex flex-col">
    <h2 class="text-xs">{{$job->employer->name}}</h2>
    <x-card-title class="text-xl font-semibold text-center text-wrap mt-4">{{$job->title}}</x-card-title>
    <p class="text-sm font-light text-center text-no-wrap mt-4">{{$job->shift_type}} - From {{$job->salary}}</p>
    <div class="flex justify-between items-baseline">
        <div class="flex space-x-2 text-2xs mt-9">
            @foreach ($job->tags as $tag)
                <x-tag :$tag >{{$tag->name}}</x-tag>
            @endforeach
        </div>
        <x-employer-logo :size="42"/>
    </div>
</x-card>
