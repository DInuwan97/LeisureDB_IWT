function calculate(){

  var unitprice = document.getElementById("unitprice").value;
  var persons = document.getElementById("persons").value;


  var finalcost = unitprice * persons;

  document.getElementById("calculate").value = finalcost;


}