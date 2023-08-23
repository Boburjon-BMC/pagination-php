<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagination php</title>
   <link rel="stylesheet" href="web/css/style.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
   <section class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="row">
               <p class="text_table mt-3">Table Name</p>
            </div>
            <div class="row">
               <div class="col-sm-6 input_title">
                  <input type="text" class="search_input pt-1 pb-1 " placeholder="search">
                  <img src="web/icon/search.png" class="ichon_search" alt="">
               </div>
               <div class="col-sm-6 button_add ">
                  <button type="button" class="btn btn-primary delete_item" id="delete-bitton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     <i class="fa-solid fa-trash"></i>
                     <span>Delete</span>            
                  </button>
                  <button type="button" id="add-bitton">
                     <a href="add.php" class="add_a">
                        <img src="web/icon/add.png" alt="">
                        <span>Add</span>
                     </a>
                  </button>
               </div>
            </div>
         </div>
         <div class="row table_content mt-4">
            <table class="table ">
               <thead >
                 <tr>
                     <th class="col-5 ps-5">Column header</th>
                     <th class="col-2 ">Column header</th>
                     <th class="col-2 ">Column header</th>
                     <th class="col-3 ">Column header</th>
                 </tr>
               </thead>
               <tbody class="table-group-divider">
                  <tr class="item">
                     <td>
                        <div class="wrap">
                           <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                           <img src="web/icon/icon.png" class="icon" alt="">
                           <div class="text">
                              <p>This is text in a cell</p>
                              <p>Here is some more additional text</p>
                           </div>
                        </div>
                     </td>  
                     <td>
                        <div class="link">
                           <a href="#">This is a link</a>  
                        </div>
                     <td>
                        <div class="link">
                           <p class="m-0">Mar 23, 2022</p>
                        </div>
                     </td>  
                     <td>
                        <div class="wrap1">
                           <div class="row4_title">
                              <img src="img/img.jpg" alt="">
                              <p class=" m-0">Name Here</p>
                           </div>
                           <img src="web/icon/setting.png" class="set_icon" alt="">
                  
                        </div>
                     </td>  
                  </tr>
                  <tr class="item">
                     <td>
                        <div class="wrap">
                           <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                           <img src="web/icon/icon.png" class="icon" alt="">
                           <div class="text">
                              <p>This is text in a cell</p>
                              <p>Here is some more additional text</p>
                           </div>
                        </div>
                     </td>  
                     <td>
                        <div class="link">
                           <a href="#">This is a link</a>  
                        </div>
                     <td>
                        <div class="link">
                           <p class="m-0">Mar 23, 2022</p>
                        </div>
                     </td>  
                     <td>
                        <div class="wrap1">
                           <div class="row4_title">
                              <img src="img/img.jpg" alt="">
                              <p class=" m-0">Name Here</p>
                           </div>
                           <img src="web/icon/setting.png" class="set_icon" alt="">
                  
                        </div>
                     </td>  
                  </tr>
                  
                  
                                 
               </tbody>
            </table>
         </div>
         <div class="row cantrol_wrap mt-4 mb-4">
            <div class="col-4 length">
               <p class="m-0">
                  10 of 456 items
               </p>
            </div>
            <div class="col-4 pagination">
               <a href="#">1</a>
               <a href="#">2</a>
               <a href="#">3</a>
               <a href="#">4</a>
               <a href="#">...</a>
               <a href="#">10</a>
            </div>
            <div class="col-4 selaect p-0">
               <span>show</span>
               <span>
                  <select name="row" class="" id="">
                     <option selected value="10">10 rows</option>
                     <option value="25">25 rows</option>
                     <option value="50">50 rows</option>
                     <option value="75">75 rows</option>
                     <option value="100">100 rows</option>
                  </select>
               </span>
            </div>
         </div>
      </div>
   </section>

<!-- Modal button-->
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           ...
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Understood</button>
         </div>
       </div>
     </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="web/js/script.js"></script>  
</body>
</html>