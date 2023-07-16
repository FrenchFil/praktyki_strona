/*var today = new Date();
var span = document.getElementById('span');
function time(){
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
var hour = today.getHours();
var min = today.getMinutes();
var mil = today.getSeconds();
span.textContent =  ("0" + hour).substr(-2) + ":" + ("0" + min).substr(-2) + ":" + ("0" + mil).substr(-2);
}
setInterval(time, 1000);


today =  hour + '/' + min + '/' + mil;
document.write(today);
console.log(today);*/

let a;
let time;
setInterval(() => {
  a = new Date();
  time = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
  document.getElementById('span').innerHTML = time;
}, 1000);