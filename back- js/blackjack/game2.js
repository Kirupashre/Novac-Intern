//WITH FOR LOOP & DISABLING BUTTON

let randomvalue1= Math.floor((Math.random()*13)+1);
let randomvalue2= Math.floor((Math.random()*13)+1);

var randomArr= [randomvalue1,randomvalue2];
let total=0;
function randomfunction(){
    // var randomArr= [randomvalue1,randomvalue2];
  
for (let i = 0; i < randomArr.length; i++) {
  total+=randomArr[i];
document.getElementById("demo1").innerHTML += " " +randomArr[i];
// a += randomArr[i];
}
// let newtotal= randomArr[0]+ randomArr[1]
document.getElementById('total').innerText= "Sum: " + total;

    if(total>21){
        document.getElementById('word').innerText="OOPS ! You Lost";
       document.getElementById('addrandom').disabled=true;
      }
      else if(total==21){
        document.getElementById('word').innerText="WOOW ! You WON";
        document.getElementById('addrandom').disabled=true;
       
      }
      else{
        document.getElementById('word').innerText="Draw a Card agian !";
        
      }
}
function addvalue(){
    var randomvalue= Math.floor((Math.random()*13)+1);
    randomArr.push(randomvalue);
    document.getElementById("demo1").innerHTML = [];
    total=0;
    randomfunction();
}