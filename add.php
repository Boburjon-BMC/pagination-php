<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagination php</title>
   <link rel="stylesheet" href="web/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="loadingio-spinner-dual-ring-v8gwnplrx2n">
   <div class="ldio-d9g8amnky77">
      <div></div><div><div></div></div>
   </div>
</div>
<div class="container-fluid container_add active">
   <div class="container  ">   
      <p class="text_add">add container</p>
      <form action="" method="post" id="forma_add">
            <div>
               <label for="">name</label>
               <input type="text" placeholder="name" name="name" required>
            </div>

            <div>
               <label for="">date</label>
               <input type="datetime-local" required>
            </div>
            
            <div>
               <label for="link">link</label>
               <input type="text" placeholder="link" name="link" required>
            </div>
            
            <div>
               <label for="title">title</label>
               <input type="text" placeholder="title" name="title">
            </div>
         
            <div class="div">
               <input type="file" id="file" class="input">
                   <label for="file">
                        rasimni kiriting 
                  </label>
            </div>
            
            <div>
               <label for="">text</label>
               <textarea name="text" id="" placeholder="text"></textarea>
            </div>
            
            <input type="submit" value="save" name="save" id="save">
      </form>  
   </div>
</div>
<script src="web/js/script_add.js"></script>
</body>
</html>