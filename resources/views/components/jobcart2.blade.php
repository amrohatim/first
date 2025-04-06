
@props(
['job']
)

<div class="  p-4 bg-white/10 rounded-xl  flex gap-x-6 border-y border-transparent hover:border-blue-800  group">

    <div class="self-center rounded-xl">
   <x-empimg :employee="$job->employee" />
    </div>
     <div class="flex-1 h-20 flex flex-col">
        <a href="#" class="text-gray-400" >{{$job->employee->name}}</a>
        <div class="font-bold">
            <a href="{{$job->url}}">         <h3 class="group-hover:text-blue-600">{{$job->title}}</h3>
            </a>
            <p class="text-sm text-gray-400 mt-6">{{$job->schedule}}</p>
        
        </div>
         
    </div>
 
 
 
 <div>
    <div>
   
        @foreach ($job->tags as $tag)
        <x-tag href="/tags/{{$tag->name}}">{{$tag->name}}</x-tag>
        @endforeach

    </div>

 </div>
</div>