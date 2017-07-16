<html> 
<head> 
<title>the title</title> 
   <script type="text/javascript"  
   src="jquery.js"></script> 
   <script type="text/javascript" language="javascript"> 
   $(document).ready(function() { 
      $("#driver").click(function(event){ 
          var arr=[];
          $.getJSON('result.json', function(jd) { 
            arr= $('#stage').html('<p> Name: ' + jd.name + '</p>').val(); 
             arr+=$('#stage').append('<p>Age : ' + jd.age+ '</p>').val(); 
             arr+=$('#stage').append('<p> Sex: ' + jd.sex+ '</p>').val();
             alert(arr);
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
</html> 
