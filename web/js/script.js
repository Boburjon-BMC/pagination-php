document.addEventListener('DOMContentLoaded', ()=>{
     'use strict';
     
     // delete
     const delete_bitton = document.querySelector('.delete_item'),
               form_check_input = document.querySelectorAll('.form-check-input');
               let item_length = 0;
               form_check_input.forEach(element => {
                    element.addEventListener('click', ()=>{
                         element.classList.toggle('activex1');          
                         let item = document.querySelectorAll('.activex1');
                         item_length = item;
                         if(item.length > 0) {    
                              delete_bitton.classList.remove('disabled');      
                         }
                         else
                              delete_bitton.classList.add('disabled');      

                    });
               });
               let item_namber = document.querySelector('.item_namber')
               function delete_click(){
                    item_namber.textContent = item_length.length
               }
               delete_bitton.addEventListener('click', delete_click)

})