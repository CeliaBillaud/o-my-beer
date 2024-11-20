import { popup } from "./popup-min.js";
import { flashMessage } from "./flash_message-min.js";
import { favoriteTest } from "./favorite_test-min.js";

import { lazyLoading } from "./lazy_loading-min.js";

const app = {

    init: function(){
        popup.init();
        flashMessage.init();
        lazyLoading.init();
        favoriteTest.init();
    }
    
};
document.addEventListener("DOMContentLoaded", () => app.init());