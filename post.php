<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
    
            $("#driver").click(function(event){   $.post(  
                  "register.php", 
                  { name: "Zara" }, 
                  function(data) { 
                     $('#stage').html(data); 
                     test=data;
                   //  alert(test);
                  } 
               ); 
      
            }); 
         }); 
         function load(){
             alert(test);
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
   
   </body> 
  
</html> 
