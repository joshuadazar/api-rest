
let items=  document.querySelector("ul.listado");
let getLista= document.querySelector("ul.get-lista")
const btnObtener= document.querySelector(".btnObtener");
let stateGet=false;

btnObtener.addEventListener("click", function(){
    
    if (stateGet==false){
        let elementosObtenidos= Array.from(document.querySelectorAll("a.collection-item"));
        elementosObtenidos.slice(0, 5).map(elemento=>{
            getLista.innerHTML+=`<a class='collection-item'>${elemento.textContent}</a>`
            
        });
    }
    stateGet=true;
});



fetch('http://localhost/api/controller')
  .then(datos=> datos.json())
  .then(datos=>renderear(datos));

  function renderear(datos){
      //console.table(datos);
      
      for (const item of datos) {

          items.innerHTML+= `<a class='collection-item'> ${item.nom_opcion} </a>`
      }

      
  }


  //materialize
  var instance = M.Tabs.init(getLista, options);