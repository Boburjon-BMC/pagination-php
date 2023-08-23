document.addEventListener("DOMContentLoaded", function(){
     // loading
     const loading1 = document.querySelector('.loadingio-spinner-dual-ring-v8gwnplrx2n')
     const container_add = document.querySelector('.container_add');
          loading1.classList.add('loading_active');
          setTimeout(() => {
               loading1.style.display = 'none';
          }, 4000);
          container_add.classList.add('active');
});