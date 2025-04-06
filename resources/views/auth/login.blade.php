<x-layout>
    <x-pageheading>Register Account</x-pageheading>
    
    <x-forms.form method="POST" action="/login"  class="mb-5">

    <x-forms.input label="Email" name="email" type="email"/>
    <x-forms.input label="Password" name="password" type="password"/>
     <x-forms.button>Log In</x-forms.button>
  
    </x-forms.form>
    
    </x-layout>