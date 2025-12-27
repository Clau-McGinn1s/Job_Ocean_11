<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-4">
            <h2 class="text-3xl font-bold">Let's Find Your Next Job</h2>
            <form action="" method="POST">
                @csrf
                <input type="text" placeholder="Overseas Manager..." 
                class="rounded-lg bg-sky/10 border border-sky/10 p-2 text-sm w-full max-w-xl text-cerulean placeholder:text-cerulean/50" />
            </form>
        </section>
        <section>
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 mt-5 gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <x-job-card.standard/>
                @endfor
            </div>
            
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2 text-lg font-semibold">
                @for($i = 0; $i < 20; $i++)
                    <x-tag>Tag {{$i}}</x-tag>
                @endfor
            </div>
        </section>
        <section>
            <div class="flex justify-between items-center">
                <div class="grow">
                    <x-section-heading>Recent Jobs</x-section-heading>
                </div>
                <div class="flex space-x-1">
                    <span class="bg-sky/10 rounded-md px-3 py-1 inline-block hover:bg-sky/20">
                        -
                    </span>
                    <span class="bg-sky/10 rounded-md px-3 py-1 inline-block hover:bg-sky/20">
                        +
                    </span>
                    <span class="bg-sky/10 rounded-md px-6 py-1 inline-block hover:bg-sky/20">
                        Filter
                    </span>
                </div>
            </div>
            
            <div class="space-y-3 mt-3">
                @for ($i = 0; $i < 10; $i++)
                    <x-job-card.long/>
                @endfor
            </div>
       
        </section>
    </div>
   
</x-layout>