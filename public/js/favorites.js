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
