require('./bootstrap');

window.addEventListener("load", function () {
    const deleteForms = document.querySelectorAll(".delete-form");

    deleteForms.forEach(element => {
        element.addEventListener("submit", (event) => {
            if (!confirm("Sei sicuro di voler cancellare questo fumetto?")) {
                event.preventDefault();
            }
        });
    });
});