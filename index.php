<?php
  include_once ('libs/config.php');
  $sql = "SELECT p.id, p.lastName, p.firstName, p.jobTitle, p.email, d.name as department, l.name as location FROM personnel p LEFT JOIN department d ON (d.id = p.departmentID) LEFT JOIN location l ON (l.id = d.locationID) ORDER BY p.lastName, p.firstName, d.name, l.name";
  $result = $conn-> query($sql);
?>

<!DOCTYPE html>



<html lang = "en">
    <head>
        <meta charset= "utf-8" >

		<title>Company Directory</title>
	
        <meta name = "author" content = "Claudiu Cozma" >
        <meta name = "viewport" content = "width = device-width" initial-scale = 1.0 maximum-scale=1.0  user-scalable=no>

        <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    </head>

    <body>


    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


    <div class = "nav ">
          <div class = "nav_content">

          <a href = "index.php"> <img 
        class = "nav_logo"
        src= " https://towbarsonthedrive.co.uk/wp-content/uploads/2019/01/google-my-business-logo-png-transparent.png" alt = "" /></a>

       <a href = "form.php"> <img
        class = "nav_avatar"
         src = " https://i.pinimg.com/originals/0d/dc/ca/0ddccae723d85a703b798a5e682c23c1.png" alt = " "/> </a>


         <a href = "location.php"> <img
        class = "nav_loc"
         src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTulBTOzi8bpEmgmuk_04gAvzJp3BuGQelHXA&usqp=CAU" alt = " "/> </a>

          </div>

      
        </div>



    <header class = "banner" >

  
    

   

    





    </header>
	
<div class = "search_form">
    <form >
      <input id = "search" placeholder = "Search Employee" onfocus="this.placeholder=''"></input>

  
    </form>

</div>
   
    
   





    
   


    

      


         
            
            <table  class = "container" id = "mytable" cellspacing="0">
            <thead>
              <tr >
             
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Email</th>
                  <th width="300">Department</th>
               </tr>

               </thead>
               
               <tbody id = "#example" style = "color: white;">
                 <?php while ($row = $result -> fetch_assoc()): ?>




                           <tr class = "click-row" onclick="window.location='profile.php?id=<?php echo $row['id'] ?>';"> 
                      
                            <td> <?php echo $row['lastName']; ?></td>
                            <td> <?php echo $row['firstName']; ?> </td>
                           
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['department']; ?> </td>
                            </tr>



            
                          

                    



                 <?php endwhile;?>
                

            
               </tbody>
             
          
             </table>
 
            
          
         
 
          <script type="application/javascript" src="libs/javascript/jquery-3.5.1.min.js"></script>
          <script src = "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
          <script src="https://kit.fontawesome.com/e0ff10d76d.js" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
          <script type="application/javascript" src="libs/javascript/js.js"></script>

 
     </body>
 </html>






