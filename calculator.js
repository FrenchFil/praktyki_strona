function getValue(){
     option1 = document.getElementById("calc_value").value;
    const error = "Choose number bigger than 0";
    var sum;
    if(option1 < 0){
      document.getElementById('calc_result').value = error;
       }
       else{
             sum = Number(calc_value.value)*85;
    console.log(sum);
    document.getElementById('calc_result').value = sum;}
}