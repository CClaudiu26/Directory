
<?php
  include_once ('libs/config.php');
  $sql = "SELECT p.lastName, p.firstName,  p.email, d.name as department, l.name as location FROM personnel p LEFT JOIN department d ON (d.id = p.departmentID) LEFT JOIN location l ON (l.id = d.locationID) where p.id = " . $_GET['id'] ;
  $result = $conn-> query($sql);

?>

<!DOCTYPE html>



<html lang = "en">
    <head>
        <meta charset= "utf-8" >

		<title>Company Directory</title>
	
        <meta name = "author" content = "Claudiu Cozma" >
        <meta name = "viewport" content = "width = device-width" initial-scale = 1.0 maximum-scale=1.0  user-scalable=no>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/stylepro.css?v=<?php echo time(); ?>">



        </head>

<body>


<div class = "nav ">
          <div class = "nav_content">

          <a href = "index.php"> <img 
        class = "nav_logo"
        src= " https://towbarsonthedrive.co.uk/wp-content/uploads/2019/01/google-my-business-logo-png-transparent.png" alt = "" /></a>

      
        <button id = "save" type="button" class="btn btn-success"   disabled>SAVE</button>
      
        </div>

       

</div>













        <?php while ($row = $result -> fetch_assoc()): ?>

    
          <div class = "logbody">
            <div class = "wrapper">

            <form action = "" >

           


          
              <label for="first-name">First Name</label>
              <input type="text" id="first-name" value="<?php echo $row['firstName'] ?>" onfocus="this.value=''" disabled>
           


       
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" value="<?php echo $row['lastName'] ?>" onfocus="this.value=''" disabled>
         


      
            <label for="email">Email</label>
            <input type="email" id="email" value="<?php echo $row['email'] ?>" onfocus="this.value=''" disabled>
        



     
        

    
           <label for="Department">Department</label>
            <input type="text" id="Department" value="<?php echo $row['department'] ?>" onfocus="this.value=''" disabled>

            <label for="Location">Location</label>
            <input type="text" id="Location" value="<?php echo $row['location'] ?>" onfocus="this.value=''" disabled>
         

        
            <button id = "clicker" type="button" class="btn btn-primary" style = "margin-top:10px;">EDIT</button>


                

        

        </form>



        </div>
        </div>


        


        <?php endwhile; ?>


    

  
    

       
 



     

       <script src="https://kit.fontawesome.com/e0ff10d76d.js" crossorigin="anonymous"></script>
       <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
          <script type="application/javascript" src="libs/javascript/jquery-3.5.1.min.js"></script>
          <script type="application/javascript" src="libs/javascript/js.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
     </body>
 </html>