export const slider = {
    sliderImages: ["carousel1.webp", "carousel2.webp", "carousel3.webp"],
    imageElements: [],
    currentIndex: 0,
    
    init: function(){
        slider.sliderButtons = document.querySelectorAll(".slider_btn");
        
        slider.generateImages();
        slider.bindNAvigationButtons(); 
    },

    generateImages: function() {
        const sliderContainer = document.querySelector(".slider");
        
        for (const sliderImage of slider.sliderImages.reverse()) {
            const newSliderImage = document.createElement('img');
            newSliderImage.src = "assets/img/" + sliderImage;
            newSliderImage.alt = "Image " + sliderImage;
            newSliderImage.classList.add("sliderImage","position-absolute", "img-fluid", "object-fit-cover", "top-0", "left-0");
            newSliderImage.style.width = "100%";
            newSliderImage.style.height = "100%";
            newSliderImage.fetchPriority = "low"
            sliderContainer.prepend(newSliderImage);
            slider.imageElements.unshift(newSliderImage);
           
        }

        // To avoid having the animation when the site loads, we pass true to the function (skipAnim) 
        slider.goToSlide(0, true);

        slider.interval = setInterval(slider.autoSlide, 6000);
    },

     /**
     * link the good buttons to the good handle function
     */
     bindNAvigationButtons: function(){
        const firstButton = slider.sliderButtons[0];
        const secondButton = slider.sliderButtons[1];
        const thirdButton = slider.sliderButtons[2];

        firstButton.addEventListener("click", () => {slider.handleSlide(0)});
        secondButton.addEventListener("click", () => {slider.handleSlide(1)});
        thirdButton.addEventListener("click", () => {slider.handleSlide(2)});
    },
    
    autoSlide: function() {
        // call the function handleSlide with index + 1
        slider.handleSlide((slider.currentIndex + 1) % slider.sliderButtons.length);
    },
    
    handleSlide: function(newIndex){
        clearInterval(slider.interval);
        slider.interval = setInterval(slider.autoSlide, 6000);

       
        // go to the desired slide, skip the slide anim if the desired slide is equal to the current slide
        slider.goToSlide(newIndex, newIndex === slider.currentIndex);
    },

    

    goToSlide: function (newIndex, skipAnim){
        let lastIndex = slider.currentIndex;

        for (let i = 0; i <= slider.imageElements.length - 1; i++) {
            //  for each imageElement remove all z-index classes
            slider.imageElements[i].classList.remove("z-0", "z-1", "z-2");

            //  define z-0 for the image not used in animation
            if (i !== newIndex && i !== lastIndex) {
                slider.imageElements[i].classList.add("z-0");
            }
        }

        slider.imageElements[lastIndex].classList.add("z-1");
        slider.imageElements[newIndex].classList.add("z-2");
        
        slider.sliderButtons[lastIndex].classList.remove("bg-dark");
        slider.sliderButtons[newIndex].classList.add("bg-dark");

    
        if (!skipAnim) {
            slider.imageElements[newIndex].animate([{ opacity: 0 }, { opacity: 1 }], { duration: 2000 });
        }
        
        slider.currentIndex = newIndex;
    },

    
};

document.addEventListener("DOMContentLoaded", () => slider.init());
