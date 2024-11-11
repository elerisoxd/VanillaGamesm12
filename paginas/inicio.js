
import { header } from "../componentes/header.js";

function inicio(){
    return`
    ${header()}
    <h1>Hola </h1>
    
    `
}
document.querySelector('#contenedor_principal').innerHTML = inicio();