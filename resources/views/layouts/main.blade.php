<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('submit', '.favorite-form', function (e) {
        e.preventDefault();

        let form = $(this);
        let url = form.attr('action');
        let method = form.find('input[name="_method"]').val() || 'POST'; // Définit le type de requête : POST ou DELETE
        let data = form.serialize();

        $.ajax({
            url: url,
            type: method === 'DELETE' ? 'POST' : method, // POST si DELETE pour compatibilité avec HTML forms
            data: data,
            success: function (response) {
                // Remplacer le bouton favori avec la nouvelle version reçue du serveur
                form.closest('.favorite-container').html(response.html);
            },
            error: function (xhr) {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    });
</script>
<body class="antialiased relative min-h-screen m-auto">
@include('layouts.front.header-fixed')
<main class="pt-headerMobile pb-footerMobile md:pt-headerDesktop md:pb-footerDesktop w-full">
    {{ $slot }}
</main>
@include('layouts.front.footer')
@include('layouts.front.modal-script')
</body>
</html>

