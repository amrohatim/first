<x-layout>
    <div class="space-y-10">
<section class="text-center pt-6">
<x-forms.form action="/search" class="mt-6">

<x-forms.input :label='false' name="q" placeholder="Web Developer..." />    
</x-forms.form>
</section>
 
     <section>
         <x-heading>Featured Jobs</x-heading>
    <div class="grid lg:grid-cols-3 mt-6 gap-8">

    @foreach ($featuredjobs as $job)
    <x-jobcard :job="$job"/>
    @endforeach
   
 
    </div>
 
     </section>
 
     <section>
         <x-heading>
             Tags
         </x-heading>
         <div class="mt-6 space-x-2 space-y-2 flex">
            @foreach ($tags as $tag)
            <x-tag href="/tags/{{$tag->name}}">{{$tag->name}}</x-tag> 
            @endforeach
           
          
         </div>
     </section>
 
     <section>
         <x-heading>
             Recent
         </x-heading>
 
         <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)

            <x-jobcart2 :$job/>
                
            @endforeach
         
        
 
        
 
         </div>
     </section>
    </div>
 </x-layout>