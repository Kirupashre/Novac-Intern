function randomnumber(){
  var randomvalue= Math.floor((Math.random()*13)+1);
  var total=parseInt(document.getElementById('total').innerText);
  var newtotal=total+randomvalue;
  document.getElementById('random').innerText+= "-" +randomvalue;
  document.getElementById('total').innerText= newtotal;

  if(newtotal>21){
    document.getElementById('addrandom').disabled=true;
    alert("You are out ! As you crossed 21 points! \nYour Total: " + newtotal + "\nJust Start Over !!" );
  }
} 