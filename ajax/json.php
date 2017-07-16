<html> 
<head> 
<title>the title</title> 
   <script type="text/javascript"  
   src="jquery.js"></script> 
   <script type="text/javascript" language="javascript"> 
   $(document).ready(function() { 
      $("#driver").click(function(event){ 
          $.ajax( { 
             url:'register.php', 
             success:function(data) { 
                $('#stage').html(data); 
             } 
          }); 
      }); 
   }); 
   </script> 
</head> 
<body> 
   <p>Click on the button to load result.html file:</p> 
   <div id="stage" style="background-color:blue;"> 
          STAGE 
   </div> 
   <input type="button" id="driver" value="Load Data" /> 
</body> 
</html