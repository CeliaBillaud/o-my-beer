export const favoriteTest = {

    //add your serverUrl
    serverUrl : "https://dymarion-server.eddi.cloud",

    init:function(){
        const favoriteIcons = document.querySelectorAll('.favorite-icon');
        const testIcons = document.querySelectorAll('.test-icon');

        // loop through each favorite icon and add a click event listener
        favoriteIcons.forEach(function(favoriteIcon) {
            favoriteIcon.addEventListener('click', favoriteTest.handleFavoriteClick);
        })

        // loop through each test icon and add a click event listener
        testIcons.forEach(function(testIcon) {
            testIcon.addEventListener('click', favoriteTest.handleTestClick);
        })
    },


    handleFavoriteClick: function (event) {
        const clickedIconElement = event.currentTarget;

        const beerElement = clickedIconElement.closest('.beer-element');

        if(clickedIconElement.classList.contains('bi-heart-fill')){

            favoriteTest.deleteFromFavorite(beerElement, clickedIconElement);

        } else if(clickedIconElement.classList.contains('bi-heart')) 
        {
            favoriteTest.addToFavorite(beerElement, clickedIconElement);
        }
    
    },

    handleTestClick: function (event) {
        const clickedIconElement = event.currentTarget;

        const beerElement = clickedIconElement.closest('.beer-element');

        if(clickedIconElement.classList.contains('bi-bookmark-check-fill')){
            favoriteTest.deleteFromTest(beerElement, clickedIconElement);


        } else if(clickedIconElement.classList.contains('bi-bookmark-check')) 
        {
            favoriteTest.addToTest(beerElement, clickedIconElement);
        }
    },

    addToFavorite: async function(beerElement, clickedIconElement){
        try {
            //get beer id from dataset
            const id = beerElement.dataset.id;
            
            const response = await fetch(`${favoriteTest.serverUrl}/api/favoris/${id}/ajouter`);
    
            if (response.ok) {
                clickedIconElement.classList.toggle('bi-heart');
                clickedIconElement.classList.toggle('bi-heart-fill');
            } else if (response.status === 404) {
                alert('Cette bière n\'existe pas')
            } else {
                alert('Erreur : '.response.status);
            }
        } catch (error) {
            alert(error);
        }

    },

    deleteFromFavorite: async function(beerElement, clickedIconElement){
        try {
            //get beer id from dataset
            const id = beerElement.dataset.id;
            
            const response = await fetch(`${favoriteTest.serverUrl}/api/favoris/${id}/supprimer`);

            if (response.ok) {
                clickedIconElement.classList.toggle('bi-heart');
                clickedIconElement.classList.toggle('bi-heart-fill');
                
                //is the user deleting the beer from his favorite page
                if (beerElement.classList.contains('beer-is-favorite')){
                    beerElement.remove();
                }

            } else if (response.status === 404) {
                alert('Cette bière n\'existe pas')
            } else {
                alert('Erreur : '.response.status);
            }
        } catch (error) {
            alert(error);
        }

    },


    addToTest: async function(beerElement, clickedIconElement){
        try {
            //get beer id from dataset
            const id = beerElement.dataset.id;
            
            const response = await fetch(`${favoriteTest.serverUrl}/api/test/${id}/ajouter`);
    
            if (response.ok) {
                clickedIconElement.classList.toggle('bi-bookmark-check');
                clickedIconElement.classList.toggle('bi-bookmark-check-fill');
            } else if (response.status === 404) {
                alert('Cette bière n\'existe pas')
            } else {
                alert('Erreur : '.response.status);
            }
        } catch (error) {
            alert(error);
        }

    },

    deleteFromTest: async function(beerElement, clickedIconElement){
        try {
            //get beer id from dataset
            const id = beerElement.dataset.id;
            
            const response = await fetch(`${favoriteTest.serverUrl}/api/test/${id}/supprimer`);
    
            if (response.ok) {
                clickedIconElement.classList.toggle('bi-bookmark-check');
                clickedIconElement.classList.toggle('bi-bookmark-check-fill');

                //is the user deleting the beer from his to test page
                if (beerElement.classList.contains('beer-to-test')){
                    beerElement.remove();
                }
                
            } else if (response.status === 404) {
                alert('Cette bière n\'existe pas')
            } else {
                alert('Erreur : '.response.status);
            }
        } catch (error) {
            alert(error);
        }

    }


}