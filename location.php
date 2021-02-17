
<?php
  include_once ('libs/config.php');
 $sql = "select name from department";
  $resultdep = $conn-> query($sql);

  $sql = "select name from location";
  $resultloc = $conn-> query ($sql);
?>



<!DOCTYPE html>





<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styleloc.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>


<div class = "nav ">
          <div class = "nav_content">

          <a href = "index.php"> <img 
        class = "nav_logo"
        src= " https://towbarsonthedrive.co.uk/wp-content/uploads/2019/01/google-my-business-logo-png-transparent.png" alt = "" /></a>

 

      
        </div>

</div>



   
    <div class = "logbody">
    <div class = "wrapper">


            <form  >

            <h1>Change Department Location</h1>
            
                


                <select  class = "form-control" id="Search" name = "Search" onchange="changelocation();">
                    <option  >Department </option>
                    <?php while ($row = $resultdep -> fetch_assoc()){
                        echo "<option>" . $row['name'] . "</option>";
                    } ?>
               

                   </select>


               



                   <select  class = "form-control"  id = "newlocation" >
                    <option  >New Location </option>
                    <?php while ($row = $resultloc -> fetch_assoc()){
                        echo "<option>" . $row['name'] . "</option>";
                    } ?>
               

                   </select>


               
               

                <button type = "button" class = "button" id = "change" value = "change">Change </button>


                </form>

                


        
    </div>

    </div>


    <script src="https://kit.fontawesome.com/e0ff10d76d.js" crossorigin="anonymous"></script>
       <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
          <script type="application/javascript" src="libs/javascript/jquery-3.5.1.min.js"></script>
          <script type="application/javascript" src="libs/javascript/js.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
  


</body>

</html>