<html> 
   <head>
        <title>The jQuery Example</title> 
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
            $("#driver").click(function(event){ 
               $.get(  
                  "result.php", 
                  { name: "Zara" }, 
                  function(data) { 
                     $('#stage').html(data); 
                  } 
               ); 
            }); 
         }); 
      </script> 
   
   </head> 
  
   <body> 
  
      <p>Click on the button to load result.html file −</p> 
   
      <span id="stage" style="background-color:#cc0;"> 
         STAGE 
      </span> 
   
      <div><input type="button" id="driver" value="Load Data" /></div> 
  
   </body> 
  
</htm