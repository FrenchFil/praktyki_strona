function getValue(){
    option1 = document.getElementById("withdrawing");
    days = document.getElementById("calc_value").value;
    var value = option1.value;
   var sum;
   if(option1 == 0){
       
      }
      if(option1==1)
      {
         sum = 150*days;
      }
   if(option1==2)
   {
      sum = 100*days;
   }
   else if(option1==3)
   {
      sum = 100*days;
   }
   else if(option1==4)
   {
      sum = 200*days;  
   }
   else if(option1==5)
   {
      sum = 30*days;
   }
   else if(option1==6)
   {
      sum = 200*days;
   }
   else if(option1==7)
   {
      sum = 100*days;
   }
   else(option1==8)
   {
      sum = 100*days;
   }

   console.log(sum);
   document.getElementById('calc_result').value = sum;
}