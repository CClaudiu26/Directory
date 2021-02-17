
  $(window).on('beforeunload', function() {
    $('body').hide();
    $(window).scrollTop(0);

   


  });



  $(function () {
    $(document).scroll(function () {
      var $nav = $(".nav");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });



$(document).ready(function(){

    var $rows = $('table tr:has(td)')
    $('#search').keyup(function() {
    
    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
        reg = RegExp(val, 'i'),
        text;
    
    $rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
    }).hide();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        
            $('#return-to-top').fadeIn(200);    
        } else {
            $('#return-to-top').fadeOut(200);   
        }
    });
    $('#return-to-top').click(function() {      
        $('body,html').animate({
            scrollTop : 0                       
        }, 500);
    });
         

    


    $('#clicker').click(function() {
      
            if ($('#save').attr('disabled')) {
                $('#save').prop('disabled', false);
                $('input').prop ('disabled', false);
                $('#Location').prop('disabled', true);
            }
            else {
                $('#save').prop('disabled', true);
                $('input').prop('disabled', true);
                
            }
        });
  
    
    });



    $('#save').click(function() {

        let url_str = window.location.href;
        let url = new URL(url_str);
        let search_params = url.searchParams; 
        
        let getid = search_params.get('id');
  

        $.ajax({
            url: "libs/update.php",
            type: 'POST',
            dataType: 'json',
            data:{
                lastname : $("#last-name").val(),
                firstname: $("#first-name").val(),
                email : $("#email").val(),
             
                department : $("#Department").val(),
                id: getid
                
            },
            
          
            success: function(result){

                console.log(result.status.code);
                
                $('#save').prop('disabled', true);
                $('input').prop('disabled', true);
                    
            }
    
        });
    });


    const  changelocation = () => {

        $.ajax ({
            url: "libs/getlocation.php",
            type: 'POST',
            dataType: 'json',
            data:{
               dep: $("#Search").val(),
            },

            success: function(result){
                console.log(result);

                alert("Actual Location for this Department is " + result.data[0].location);
                
               
              
              
                
                    
            }


        });



    };

    $('#change').click(function() {
        $.ajax({

            url: "libs/updateloc.php",
            type: 'POST',
            dataType: 'json',
            data:{
               loc: $("#newlocation").val(),
               dep: $("#Search").val()
               
            },

            success: function(result){
                console.log(result);
                
                
                $('#newlocation').prop('disabled', true);
                
                    
            }
            
        })
    })
        

   


    





