require("./bootstrap");
console.log(windows)
window.boolpress = {
    currentForm: null,
    productId: null,
    openModal(e, id) {
        e.preventDefault();
        this.productId = id;
        this.currentForm = e.currentTarget.parentNode;
        $("#deleteModal-body").html(
            `Sei sicuro di voler eliminare l'elemento con id: ${this.productId}`
        );
        $("#deleteModal").modal("show");
    },
    submitForm() {
        this.currentForm.submit();
    },
};
