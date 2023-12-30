'use strict';

let contact_name = document.querySelector('#name');
let enabled_buttons = document.querySelectorAll('[data-empty]');

// enabled_buttons.forEach((button)=>{
//     console.log(button)
// });

let counter = 0;
let prev_contact_id;
let new_contact_id;
let prev_selected;

function handleClick(e, id){
    let selected = e.target.parentElement;
    new_contact_id = id;
    if(counter === 0){
        prev_contact_id = new_contact_id;
        prev_selected = selected;
        selected.classList.add('selected');
        enabled_buttons.forEach(button=>{
            button.classList.add('enabled');
        })
        counter = 1;
    }
    else{
        if(prev_contact_id === new_contact_id){
            selected.classList.remove('selected');
            enabled_buttons.forEach(button=>{
                button.classList.remove('enabled');
            })
            counter = 0;
        }
        else{
            prev_contact_id = new_contact_id;
            selected.classList.add('selected');
            prev_selected.classList.remove('selected');
            prev_selected = selected;
            counter = 1;
        }
    }
}