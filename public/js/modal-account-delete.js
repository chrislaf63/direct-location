document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal');
    const target = document.getElementById('target');
    const back = document.getElementById('back');
    const deleteButton = document.getElementById('delete');

    deleteButton.addEventListener('click', function () {
        target.classList.add('hidden');
        modal.classList.remove('hidden');

        back.addEventListener('click', function () {
            modal.classList.add('hidden');
            target.classList.remove('hidden');
        });

    });
});
