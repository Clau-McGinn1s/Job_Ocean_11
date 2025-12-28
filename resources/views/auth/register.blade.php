<x-layout>
    <section>
        <x-page-heading>Register New Account</x-page-heading>
        <x-section-heading/>
        <form method="POST" action="/register" enctype="multipart/form-data"> 
            @csrf
            <div class="space-y-4">
                <x-text-input name="name" placeholder="Joan Smith" :label="true"/>
                <x-text-input name="email" placeholder="joan_smith@example.com"  :label="true"/>
                <x-text-input name="password" placeholder="********" type="password" :label="true"/>
                <x-text-input name="password_confirmation" placeholder="********" type="password" :label="true"/>
            </div>
             <hr class="grow border max-w-xs mx-auto border-sky/30 my-8"/>
             <div class="space-y-4">
                <x-text-input name="company_name" placeholder="Smithing AS" :label="true"/>
                <x-text-input name="company_logo" :label="true" type="file"/>
             </div>
        
           <div class="flex space-x-2 justify-center mt-8">
                <a class="btn"
                    href="{{route('jobs.index')}}">
                    Cancel
                </a>
                <button class="btn" type="submit">
                    Register
                </button>
            </div>
        </form>
    </section>
</x-layout>
