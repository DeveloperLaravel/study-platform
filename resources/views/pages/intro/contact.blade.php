<x-app-layout>

   
<x-header.title
    title=" تواصل معنا"
    subtitle="يسعدنا تواصلك معنا في أي وقت، سواء كان لديك استفسار أو اقتراح."
/>
    <x-contact.section>

        <x-contact.info
            email="hnarfr20063@gmail.com"
            phone=" 0054  489  93 218 +"
            address="ليبيا – الواحات / جالو"
        />

        <x-contact.form />

    </x-contact.section> 
{{-- SweetAlert للنجاح --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 @if(session('success')) <script> Swal.fire({ icon: 'success', title: 'نجاح!', text: '{{ session('success') }}', timer: 3000, timerProgressBar: true, showConfirmButton: false }); </script> @endif 
 @if(session('error')) <script> Swal.fire({ icon: 'error', title: 'خطأ!', text: '{{ session('error') }}', timer: 3000, timerProgressBar: true, showConfirmButton: false }); </script> @endif







</x-app-layout>
