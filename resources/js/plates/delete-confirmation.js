const deleteFormElements = document.querySelectorAll("form.plate-destroyer");
// console.log(deleteFormElements);

deleteFormElements.forEach((formElement) => {
    formElement.addEventListener("submit", function (event) {
        event.preventDefault();

        const userChoice = window.confirm(
            `Sei sicuro di voler cancellare ${this.getAttribute(
                "custom-data-name"
            )}?`
        );

        if (userChoice === true) {
            this.submit();
        }
    });
});
