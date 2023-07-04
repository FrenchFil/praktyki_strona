function getValue(){
    option1 = document.getElementById("withdrawing");
    var value = option1.value;
   var sum;
   if(option1 == 0){
       
      }
      if(value==1)
      {
         sum = 150*value;
      }
   if(value==2)
   {
      sum = 100*value;
   }

   console.log(sum);
   document.getElementById('calc_result').value = sum;
}