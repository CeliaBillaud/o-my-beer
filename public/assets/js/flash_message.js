export const flashMessage = {

    init: function(){
        let flashMessage = document.querySelector(".alert-secondary");

        if(flashMessage){

            const timeout = setTimeout(function (){
                flashMessage.style.display = 'none';
            }, 10000)
        }
    }
};

