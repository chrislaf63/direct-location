<script>
    document.addEventListener('DOMContentLoaded', function () {
        const targets = document.querySelectorAll('.target');
        const deleteButtons = document.querySelectorAll('.delete-button');
        const modal = document.getElementById('modal');
        const modalContent = modal.querySelector('.modal-content');
        const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');

        if (!modal || !modalContent) {
            console.error('Modal or modal content not found');
            return;
        }

        if (!csrfTokenMeta) {
            console.error('CSRF token meta tag not found');
            return;
        }

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const adId = this.getAttribute('data-ad-id');
                const userId = this.getAttribute('data-user-id');
                console.log('Delete button clicked, adId:', adId); // Log the adId

                if (adId) {
                    const formAction = `/annonces/${adId}`;
                    modalContent.innerHTML = `
                    <h2 class="text-center text-3xl font-bold">Attention !!!</h2>
                    <p class="text-center">Cette annonce va être supprimée</p>
                    <p class="text-center">Souhaitez-vous vraiment continuer ?</p>
                    <div class="flex justify-around">
                        <form action="${formAction}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="${csrfTokenMeta.getAttribute('content')}">
                            <button class="confirm-button bg-red-500 text-white px-3 py-1 rounded-xl hover:bg-red-400 hover:shadow-md">
                                Oui
                            </button>
                        </form>
                        <button class="back-button bg-gray-500 text-white px-3 py-1 rounded-xl hover:bg-gray-400 hover:shadow-md">Non</button>
                    </div>
                `;
                    targets.forEach(target => {
                        target.classList.add('hidden');
                    });
                    modal.classList.remove('hidden');


                    modal.querySelector('.back-button').addEventListener('click', function () {
                        modal.classList.add('hidden');
                        targets.forEach(target => {
                            target.classList.remove('hidden');
                        });
                    });
                } else if (userId) {
                    const formAction = `/users/${userId}`;
                    modalContent.innerHTML = `
                    <h2 class="text-center text-3xl font-bold">Attention !!!</h2>
                    <p class="text-center">Cet utlisateur va être supprimée</p>
                    <p class="text-center">Souhaitez-vous vraiment continuer ?</p>
                    <div class="flex justify-around">
                        <form action="${formAction}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="${csrfTokenMeta.getAttribute('content')}">
                            <button class="confirm-button bg-red-500 text-white px-3 py-1 rounded-xl hover:bg-red-400 hover:shadow-md">
                                Oui
                            </button>
                        </form>
                        <button class="back-button bg-gray-500 text-white px-3 py-1 rounded-xl hover:bg-gray-400 hover:shadow-md">Non</button>
                    </div>
                `;
                    targets.forEach(target => {
                        target.classList.add('hidden');
                    });
                    modal.classList.remove('hidden');

                    modal.querySelector('.back-button').addEventListener('click', function () {
                        modal.classList.add('hidden');
                        targets.forEach(target => {
                            target.classList.remove('hidden');
                        });
                    });
                } else {
                        console.error('adId is null or undefined');
                    }
                }
            )
            });
        });
</script>
