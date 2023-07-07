function getValue(){
    option1 = document.getElementById("withdrawing");
    days = document.getElementById("calc_value").value;
    var value = option1.value;
   var sum;
   if(option1 == 0){
       
      }
      if(value==1)
      {
         sum = 150*days;
      }
   if(value==2)
   {
      sum = 100*value;
   }

   console.log(sum);
   document.getElementById('calc_result').value = sum;
}