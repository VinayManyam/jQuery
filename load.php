<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
            $("#driver").click(function(event){ 
               $('#stage').load('load.php'); 
            }); 
         }); 
      </script> 
   
   </head> 
      <body> 
  
      <p>Click on the button to load result.html file:</p> 
   
      <div id="stage" style="background-color:cc0;"> 
         STAGE 
      </div> 
   
      <input type="button" id="driver" value="Load Data" /> 
   
   </body> 
  
</html