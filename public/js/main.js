'use strict';

{
    const open = document.getElementById('open');
    
    const category = document.getElementById('category');
    
    const session = document.getElementById('session');
    
    const validation = document.getElementById('validation');

    const fadeOut_Session = () => {
        session.classList.add('hidden');
    }
    
    const fadeOut_Validation = () => {
        validation.classList.add('hidden');
    }
    
    open.addEventListener('click', () => {
        category.classList.toggle('show');
    });
    
    if (session != null) {
        setTimeout(fadeOut_Session, 2500);
    }
    
    if (validation != null) {
        setTimeout(fadeOut_Validation, 2500);
    }
    
    
}