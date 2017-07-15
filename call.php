<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
    
            $("#driver").click(function(event){   $.post(  
                  "data.php", 
          {action:'typer'}, 
                  function(data) { 
                    mov=data;
                    document.getElementById('mov').innerHTML=mov;
                  } 
               ); 
      
            }); 
         }); 
         function load(){
             
             //document.getElementById('mov').innerHTML=mov;
         }
      </script> 
   
   </head> 
  
   <body> 
  
      <p>Click on the button to load result.html file −</p> 
   
      <div id="stage" style="background-color:cc0;"> 
         STAGE 
      </div> 
   
      <input type="button" id="driver" value="Load Data" /> 
      <input type="button" onclick="load();" value="load">
      <span id="mov"> </span>
   
   </body> 
  
</html> 
