<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="" method="$_POST">
                <select name="Cars" class="form-select " style="width: 20%;" aria-label="Default select example">
                 <option selected>All Buyers</option>
                 <option value="1">Active Buyers</option>
                 <option value="2">Blocked Buyers</option>
                 <option value="3">Pending Buyers</option>
               </select>
               <button type="submit" name="submit" value="number">Get Value</button>
            </form>
                
                
               <?php 
               function test(){
                   echo" Actives";
               }
               test();
               ?>
            
</body>
</html>