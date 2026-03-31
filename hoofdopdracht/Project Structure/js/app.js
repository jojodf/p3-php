const now = new Date();

let hours = now.getHours();
let minutes = now.getMinutes();

if(minutes<10){
    minutes = "0"+ minutes;
}

document.getElementById("dbTime").textContent ="Database geladen om:"+hours+":"+minutes;


const footer = document.getElementById("funFooter");

let clickTeller = 0;

if (footer) {
    footer.addEventListener("click", function() {
        
       
        if (clickTeller === 5) {
            alert("⚠️ Druk hier niet, sukkel! 😎😂 ");
            
            clickTeller = 0; 
        }
    });
}