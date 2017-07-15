<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
            $("#driver").click(function(event){ 
               $('#stage1').load('register.php'); 
               
            });  
            $(document).ajaxComplete(function(event, request, settings){ 
               $("#stage2").html("<h1>Request Complete.</h1>"); 
            }); 
         }); 
      </script> 
   
   </head>  
   <body> 
  
      <p>Click on the button to load result.html file:</p> 
   
      <div id="stage1" style="background-color:blue;"> 
         STAGE - 1 
      </div> 
   
      <div id="stage2" style="background-color:blue;"> 
             STAGE - 2 
      </div> 
   
      <input type="button" id="driver" value="Load Data" /> 
   
   </body> 
  
</html>