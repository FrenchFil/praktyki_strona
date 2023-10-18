let date = new Date(2023,9,11,19,15,0,10);
let view;
let date2 = new Date();
var hours = date.getHours();
var minutes = date.getMinutes();
var seconds = date.getSeconds();
setInterval(() => {
    seconds = seconds +1;
    if(seconds == 60){
        seconds = 0;
        minutes = minutes + 1;
    }   
    else if(minutes == 60){
        minutes = 0;
        hours = hours + 1;
    }
    else if(hours == 24){
        hours = 0;
    }
     if(seconds<10 && minutes<10){
        view = hours + ":" +"0"+ minutes + ":" +"0" +seconds;
        console.log(view); 
        document.getElementById('span').innerHTML = view;  
        console.log(date2);   
    }
    else if(seconds<10){
    view = hours + ":" + minutes + ":" +"0"+ seconds;
    console.log(view); 
    document.getElementById('span').innerHTML = view;  
    console.log(date2);
    }
    else if(minutes<10){
        view = hours + ":" +"0"+ minutes + ":" + +seconds;
    console.log(view); 
    document.getElementById('span').innerHTML = view;  
    console.log(date2);

    }
   
    else{
        view = hours + ":" + minutes + ":" + seconds;
    console.log(view); 
    document.getElementById('span').innerHTML = view;  
    console.log(date2);
    }
    
  }, 1000);
