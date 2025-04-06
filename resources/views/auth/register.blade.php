<x-layout>
<x-pageheading>Register Account</x-pageheading>

<x-forms.form method="POST" action="/register"  class="mb-5" enctype="multipart/form-data">
<x-forms.input label="Your Name" name="name"/>
<x-forms.input label="Email" name="email" type="email"/>
<x-forms.input label="Password" name="password" type="password"/>
<x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>
<x-forms.divider></x-forms.divider>
<x-forms.input label="Employer Name" name="empname"/>
<x-forms.input label="Employer Logo" name="logo" type="file"/>
<x-forms.button>Create Account</x-forms.button>
</x-forms.form>

</x-layout>