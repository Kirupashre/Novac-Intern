var count=0;
var counthis=[];
function increaseCount(button){
        count+=1;
    document.getElementById("count").innerText="Count-" +count;
}
function saveCount(){
    //counthis.push(count);
    var a = count;
    document.getElementById("result").innerText+="-" +a;
    count=0;
    document.getElementById("count").innerText="Count-" +count;
    
}