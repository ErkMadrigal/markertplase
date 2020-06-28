(() => {
    'use strict';
    window.addEventListener('load', () => {

        var extender = document.querySelector("#extender");
        var extraer = document.querySelector("#extraer");
        var plus = document.querySelector("#plus");
        var less = document.querySelector("#less");
        

        extender.addEventListener('click', (e) => {
            e.preventDefault();
            let none = 'd-none';
            let block = 'd-block';

            plus.classList.add(none); 
            plus.classList.remove(block); 

            less.classList.remove(none);
            less.classList.add(block);
        });
        extraer.addEventListener('click', (e) => {
            e.preventDefault();
            let none = 'd-none';
            let block = 'd-block';

            plus.classList.add(block); 
            plus.classList.remove(none); 

            less.classList.remove(block);
            less.classList.add(none);
        });
    }, false);
})();

