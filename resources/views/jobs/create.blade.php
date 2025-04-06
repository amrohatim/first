<x-layout>
    <x-pageheading>Add Job</x-pageheading>
    
    <x-forms.form method="POST" action="/jobs/store"  class="mb-5">
      

    <x-forms.input label="Title" name="title" placeholder="e.g  SEO Manager"/>
    <x-forms.input label="Salary" name="salary" placeholder="e.g  20,000 Monthly"/>
    <x-forms.input label="Location" name="location" placeholder="e.g  Khartoum , Central Park "/>
    <x-forms.select label="Schedule" name='schedule'>
        <option value="Part Time" class="text-gray-600">Part Time</option>
        <option value="Full Time" class="text-gray-600">Full Time</option>
    </x-forms.select>
    <x-forms.input label="URL" name='url' placeholder="https://acme.com/jobs/ceo-wanted"/>
    <x-forms.checkbox label="Featured" name="featured"/>

   <x-forms.divider/>

    <x-forms.input label="Tags" name="tags" placeholder="Programming , Player , doctor"></x-form.input>

     <x-forms.button>ADD Job</x-forms.button>
  
    </x-forms.form>
    
    </x-layout>