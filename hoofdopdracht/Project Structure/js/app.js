const now = new Date();

let hours = now.getHours();
let minutes = now.getMinutes();

if(minutes<10){
    minutes = "0"+ minutes;
}

document.getElementById("dbTime").textContent ="Database geladen om:"+hours+":"+minutes;