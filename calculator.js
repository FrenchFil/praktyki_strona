function getValue(){
     option1 = document.getElementById("calc_value").value;
     option2 = document.getElementById("calc_value2").value;
    var sum;
    sum = Number(calc_value.value) + Number(calc_value2.value);
    console.log(sum);
    document.getElementById('calc_result').value = sum;

}