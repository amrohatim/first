@props(
['job' , 'tag']
)


<div class="  p-4 bg-white/10 rounded-xl flex flex-col text-center border-y border-transparent hover:border-blue-800 group">
     
     <div class="self-start text-sm ">{{$job->employee->name}}</div>
     <div class="py-8 font-bold">
      <a href="{{$job->url}}">         <h3 class="group-hover:text-blue-600">{{$job->title}}</h3>
      </a>
         <p class="mt-3 text-xs">{{$job->salary}}</p>
     
     </div>
  
  
  <div class="flex justify-between items-center mt-auto">
     <div>
    
      @foreach ($job->tags as $tag)
      <x-tag href="/tags/{{$tag->name}}">{{$tag->name}}</x-tag>
      @endforeach

     </div>
     <x-empimg :employee="$job->employee" :width="42" />
   </div>
</div>