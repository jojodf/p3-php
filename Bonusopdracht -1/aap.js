let  hour = new Date().getHours ();
 


let greeting;



if(hour>=6 && hour<12){
     greeting ="Goedemorgen";
}
else if(hour>=12 && hour <18){
     greeting="Goedemiddag";
}
else{
     greeting ="Goedenavond";
}



document.getElementById("greeting").innerText = greeting;