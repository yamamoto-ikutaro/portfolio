'use strict';

{
    const open = document.getElementById('open');
    const category = document.getElementById('category');
    
    open.addEventListener('click', () => {
        category.classList.toggle('show');
    });
    
}