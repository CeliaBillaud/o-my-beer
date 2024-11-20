export const popup = {

    init: function(){
        this.buttonCloseElement = document.querySelector("#close-modal");
        this.modalElement = document.querySelector(".modal");

        this.buttonCloseElement.addEventListener("click", (event) => this.handleClickCloseModal());

        if (!localStorage.getItem("entryValidated") ) {
            this.modalElement.classList.remove("d-none")
        } 
    },
    
    handleClickCloseModal: function (){
        this.modalElement.classList.add("d-none");
        localStorage.setItem("entryValidated", true);
    }
    
};

