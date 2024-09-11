import './bootstrap';

import 'bootstrap';


// resources/js/app.js

function toggleAccordion(id, button) {
    const content = document.getElementById(id);
    const isOpen = content.classList.contains('show');
    const buttons = document.querySelectorAll('.accordion-button');

    // Close all accordions
    document.querySelectorAll('.accordion-content').forEach(item => {
        item.classList.remove('show');
        item.style.maxHeight = null;
    });
    buttons.forEach(btn => btn.classList.remove('active'));

    if (!isOpen) {
        content.classList.add('show');
        content.style.maxHeight = content.scrollHeight + 'px';
        button.classList.add('active');
    } else {
        content.style.maxHeight = null;
    }
}

// Attach event listeners when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.accordion-button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('aria-controls');
            toggleAccordion(targetId, button);
        });
    });
});
