<html> 
<head> 
<title>The Selecter Example</title> 
<script type="text/javascript" src="jquery.js"> 
</script> 
    
<script type="text/javascript" language="javascript">  
   $(document).ready(function() { 
       $("#driver").click(function(event){ 
         
        var content = $("#int").val(); 
         $("p#pid1").text(content); 
        
        var content = $("#int2").val(); 
         $("p#pid2").text(content); 
      
         
               }); 
   }); 
      
 
</script> 
<style> 
  .red { color:red; } 
  .green { color:green; } 
</style>  
</head> 
<body>  
    
 <input type="text" id="int" value="First Input Box"/> 
<input type="text" id="int2" value="Second Input Box"/> 
 <input type="button" id="driver" value="Load Data" /> 
<p class="green" id="pid1"></p> 
<p class="red" id="pid2"></p>  
</body> 
</html>
    