let start = Date.Now();
let timer = setInterval(function(){
    let timePassed=Date.Now() - start;
    if(timePassed>=2000){
        clearInterval(timer);
        return;
    }
    draw(timePassed);
},20);
function draw (timePassed){
    train.style.left = timePassed / 5 + "px"
}