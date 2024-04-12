//BASIC- WITHOUT FOR LOOP

var hi=document.getElementById('word');
function random(){
    let randomvalue1= Math.floor((Math.random()*13)+1);
    let randomvalue2= Math.floor((Math.random()*13)+1); 
    document.getElementById('demo1').innerHTML = "Values :" +randomvalue1;
    document.getElementById('demo2').innerHTML = ", " +randomvalue2; 
  let newtotal=randomvalue1+randomvalue2;
  document.getElementById('total').innerText= "Sum: " + newtotal;
        if(newtotal>21){
            hi.innerText="OOPS ! You Lost";
            document.getElementById('add').disabled=true;
          }
          else if(newtotal==21){
            document.getElementById('word').innerText="WOOW ! You WON";
            document.getElementById('add').disabled=true;
          }
          else{
            document.getElementById('word').innerText="Draw a Card agian !";
            document.getElementById('add').disabled=false;
          }
      }
function addvalue(){
var randomvalue= Math.floor((Math.random()*13)+1);
var total=parseInt(document.getElementById('total').innerText);
var newtotal=total+randomvalue;
document.getElementById('demo3').innerText+= "," +randomvalue;
document.getElementById('total').innerText="Sum: " + newtotal;

if(newtotal>21){
    document.getElementById('word').innerText="OOPS ! You Lost";
    document.getElementById('add').disabled=true;
  }
  else if(newtotal==21){
    document.getElementById('word').innerText="WOOW ! You WON";
    document.getElementById('add').disabled=true;
  }
  else{
    document.getElementById('word').innerText="Draw a Card agian !";
    document.getElementById('add').disabled=false;
  }

}





    