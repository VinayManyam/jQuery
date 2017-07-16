<html> 
<head> 
<title>the title</title> 
   <script type="text/javascript"  
   src="jquery.js"></script> 
   <script type="text/javascript" language="javascript"> 
   $(document).ready(function() { 
      $("#driver").click(function(event){ 
          var name = $("#name").val(); 
         $tel= $("#stage").load('register.php', {"name":name} ).val();
         alert($tel);
      }); 
   }); 
   </script> 
</head> 
<body> 
   <p>Enter your name and click on the button:</p> 
   <input type="input" id="name" size="40" /><br /> 
  <div id="stage"> 
          
   </div> 
   <input type="button" id="driver" value="Show Result" /> 
</body> 
</html>