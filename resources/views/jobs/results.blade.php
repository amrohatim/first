<x-layout>
   <h1 class="text-center font-semibold text-xl">Results</h1>
    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)

        <x-jobcart2 :$job/>
            
        @endforeach
     
    

    

     </div>
</x-layout>