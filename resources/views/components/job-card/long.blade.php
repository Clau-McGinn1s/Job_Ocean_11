@props(['job'])
<x-card class="flex space-x-4">
    <div class="shrink">
        <x-employer-logo/>
    </div>
    <div class="grow flex flex-col">
        <div class="flex flex-row justify-between">
            <div>
                <a class="text-sm hover:underline" href="#">{{$job->employer->name}}</a>
            </div>
            <div class="flex text-sm space-x-1">
                <x-tag>{{$job->location}}</x-tag>
                <x-tag>{{$job->created_at->diffForHumans()}}</x-tag>
            </div>
        </div>
        <x-card-title class="text-xl mt-2 font-semibold">{{$job->title}}</x-card-title>
        <div class="flex justify-between mt-10 text-sm">
            <p>{{$job->shift_type}} - From {{$job->salary}}</p>
            <div class="flex space-x-1 font-semibold">
                @foreach ($job->tags as $tag)
                    <x-tag :$tag >{{$tag->name}}</x-tag>
                @endforeach
            </div>
        </div>
    </div>
</x-card>

