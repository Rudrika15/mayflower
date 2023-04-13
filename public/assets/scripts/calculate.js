var age = document.getElementById("age");
var height = document.getElementById("height");
var weight = document.getElementById("weight");
var form = document.getElementById("form");
let resultArea = document.querySelector(".comment");

function calculate(){
 
  if(age.value=='' || height.value=='' || weight.value==''){

  }else{
    countBmi();
  }
  
}

function countBmi(){
  var p = [age.value, height.value, weight.value];

  var bmi = Number(p[2])/(Number(p[1])/100*Number(p[1])/100);
      
  var result = '';
  if(bmi<18.5){
    result = 'Underweight';
     }else if(25<=bmi&&bmi<=29.9){
    result = 'Overweight';
     }else if(35<=bmi){
    result = 'Obese';
     }



resultArea.style.display = "block";
document.querySelector(".comment").innerHTML = `You are <span id="comment">${result}</span>`;
document.querySelector("#result").innerHTML = bmi.toFixed(2);

}

window.onclick = function(event) {
}

