
<?php
  include_once ('libs/config.php');
 $sql = "select name from department";
  $result = $conn-> query($sql);
?>



<!DOCTYPE html>





<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styleform.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>


<div class = "nav ">
          <div class = "nav_content">

          <a href = "index.php"> <img 
        class = "nav_logo"
        src= " https://towbarsonthedrive.co.uk/wp-content/uploads/2019/01/google-my-business-logo-png-transparent.png" alt = "" /></a>

       <a href = "form.php"> <img
        class = "nav_avatar"
         src = " https://i.pinimg.com/originals/0d/dc/ca/0ddccae723d85a703b798a5e682c23c1.png" alt = " "/> </a>

          </div>

      
        </div>



   
    <div class = "logbody">
    <div class = "wrapper">


            <form action = "insert.php" method = "post">

            <h1>ADD EMPLOYEE</h1>
            <input type = "text" class = "input" name = "lastname" placeholder = "Last Name" required>
                <input type = "text" class = "input" name = "firstname" placeholder = "First Name"  required>
                
          
                <input type = "text" class = "input" name = "Email" placeholder = "Email" required>
                


                <select  class = "form-control" id="Search" name = "Search" >
                    <option  >Department </option>
                    <?php while ($row = $result -> fetch_assoc()){
                        echo "<option>" . $row['name'] . "</option>";
                    } ?>
               

                   </select>


               
               

                <button type = "submit" class = "button" name = "submit" value = "submit">Create </button>


                </form>

                


        
    </div>

    </div>






</body>

</html>
