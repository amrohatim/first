
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js','resources/css/app.css'])
    <title>Document</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/10  py-4">
        <div>
      <a href="">
        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
      </a>
        </div>
        <div class="space-x-6 font-bold" >
<a href="#">Jobs</a>
<a href="#">Carrers</a>
<a href="#">Salaries</a>
<a href="#">Compnies</a>
        </div>
        <div class="flex flex-row space-x-6 font-bold ">
          @auth
          <a href="/jobs/create" class="text-blue-700 hover:bg-white/20  hover:text-blue-200"">Post a Job</a>
          
          <form action="/login" method="POST">
            @csrf
            @method('delete')
            <button class="text-red-700   hover:bg-white/20  hover:text-red-200">LogOut</button>
          </form>
          @endauth
          @guest
          <a href="/login">Login</a>
          <a href="/register">Cretae Account</a>
          @endguest
          
        
        </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto mb-10">
         {{$slot}}
        </main>
    </div>
    
</body>
</html>