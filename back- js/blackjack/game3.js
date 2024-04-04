//WITH FOR LOOP AND PROPER BUTTON

let randomvalue1= Math.floor((Math.random()*13)+1);
let randomvalue2= Math.floor((Math.random()*13)+1);
var randomArr= [randomvalue1,randomvalue2];
let total=0;
let blackjack=true
let isalive=false
function randomfunction(){
    // var randomArr= [randomvalue1,randomvalue2];
  
for (let i = 0; i < randomArr.length; i++) {
  total+=randomArr[i];
document.getElementById("demo1").innerHTML += " " +randomArr[i];
// a += randomArr[i];
}
// let newtotal= randomArr[0]+ randomArr[1]
document.getElementById('total').innerText= "Sum: " +total;
   if(total>21){
        document.getElementById('word').innerText="OOPS ! You Lost";
        isalive=true;
        blackjack=false;
      }
      else if(total==21){
        document.getElementById('word').innerText="WOOW ! You WON";
       blackjack=false;
      }
      else{
        document.getElementById('word').innerText="Draw a Card agian !";
  
      } 
    }
function addvalue(){
    if(isalive===false && blackjack===true){
    var randomvalue= Math.floor((Math.random()*13)+1);
    randomArr.push(randomvalue);
    document.getElementById("demo1").innerHTML = [];
    total=0;
    randomfunction();
}
}