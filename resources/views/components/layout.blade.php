<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/css/welcome.css', 'resources/css/admin.css', 'resources/css/aboutme.css', 'resources/css/profile.css', 'resources/css/allPosts.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    @include('components.header')

    <main class="main-hero">
        {{ $slot }}
    </main>

    {{-- footer --}}
    @include('components.footer')

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const burgerMenu = document.getElementById('burger-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        burgerMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });
    });
    ClassicEditor.create(document.querySelector( '#editor' ))
        .catch( error => {
            console.error( error );
        });

    const deleteButton = document.getElementById('deleteButton');
        const cancelButton = document.getElementById('cancelButton');
        const confirmModal = document.getElementById('confirmModal');

        // Show the modal
        deleteButton.addEventListener('click', () => {
            confirmModal.classList.remove('hidden');
            confirmModal.classList.add('flex');
        });

        // Hide the modal
        cancelButton.addEventListener('click', () => {
            confirmModal.classList.remove('flex');
            confirmModal.classList.add('hidden');
        });

</script>

</html>
