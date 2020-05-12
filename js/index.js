"use strict";
let resultados_r=["5-0","3-1","1-0","2-1"];
let resultados_e=["0-0","2-2","1-1","5-5"];

let btn = document.getElementById("boton");
btn.addEventListener("click", cambiar);

function ran(){
  let num = Math.floor(Math.random() * resultados_r.length);
return num;
  }

function cambiar(){
      let btn_e = document.getElementById("emp").checked;

      let btn_g = document.getElementById('gan').checked;

      let btn_p = document.getElementById('per').checked;

    if(btn_p){
        let var_=document.getElementById("textResultado");
        var_.innerHTML= "Resultado random para la proxima fecha: perdemos  " + resultados_r[ran()];


  } else if(btn_e){
        let var_=document.getElementById("textResultado");
        var_.innerHTML= "Resultado random para la proxima fecha: empatamos " + resultados_e[ran()];

    }else if(btn_g){
        let var_=document.getElementById("textResultado");
        var_.innerHTML= "Resultado random para la proxima fecha: ganamos " + resultados_r[ran()];
    }
    }
