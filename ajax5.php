<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
            /* Global variable */ 
            var count = 0;  
            $("#driver").click(function(event){ 
               $('#stage0').load('register.php'); 
            }); 
     
            /* Gets called when request starts */ 
            $(document).ajaxStart(function(){ 
               count++; 
               $("#stage1").html("<h1>Starts, Count :" + count + "</h1>");
                 }); 
     
            /* Gets called when request is sent */ 
            $(document).ajaxSend(function(evt, req, set){ 
               count++; 
               $("#stage2").html("<h1>Sends, Count :" + count + "</h1>"); 
               $("#stage2").append("<h1>URL :" + set.url  + "</h1>"); 
            }); 
     
            /* Gets called when request completes */ 
            $(document).ajaxComplete(function(event,request,settings){ 
               count++; 
               $("#stage3").html("<h1>Completes,Count:" + count + "</h1>"); 
            }); 
     
            /* Gets called when request is stopped */ 
            $(document).ajaxStop(function(event,request,settings){ 
               count++; 
               $("#stage4").html("<h1>Stops, Count :" + count + "</h1>"); 
            }); 
     
            /* Gets called when all request completes successfully */ 
            $(document).ajaxSuccess(function(event,request,settings){ 
               count++; 
               $("#stage5").html("<h1>Success,Count :" + count + "</h1>"); 
            }); 
         }); 
      </script> 
   
   </head> 
  
   <body> 
  
      <p>Click on the button to load result.html file:</p> 
   
      <div id="stage0" style="background-color:blue;"> 
              STAGE - 0 
      </div> 
   
      <div id="stage1" style="background-color:blue;"> 
         STAGE - 1 
      </div> 
   
      <div id="stage2" style="background-color:blue;"> 
         STAGE - 2 
      </div> 
   
      <div id="stage3" style="background-color:blue;"> 
         STAGE - 3 
      </div> 
   
      <div id="stage4" style="background-color:blue;"> 
         STAGE - 4 
      </div> 
   
      <div id="stage5" style="background-color:blue;"> 
         STAGE - 5 
      </div> 
   
      <input type="button" id="driver" value="Load Data" /> 
   
   </body> 
  
</html> 