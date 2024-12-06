document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete');
    const plateNameElement = document.getElementById('plateName');
    const plateIdInput = document.getElementById('plateId');
    const deleteForm = document.getElementById('deleteForm');

    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const plateId = button.getAttribute('data-id');
            const plateName = button.getAttribute('data-name');
            plateNameElement.textContent = plateName;
            plateIdInput.value = plateId;


            deleteForm.action = `/admin/plates/${plateId}`;
        });
    });
});