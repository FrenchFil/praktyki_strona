const host = 'api.frankfurter.app';
fetch(`https://${host}/latest`)
  .then(resp => resp.json())
  .then((data) => {
   // alert(`1 PLN = ${data.rates.PLN} EURO`);
    var currency = data.rates.PLN;
    let test = document.getElementById('span');
    document.getElementById('span').innerHTML = currency;
  });
