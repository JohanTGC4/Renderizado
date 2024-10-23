import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js"

export class NavTabFixed extends HTMLElement {

 connectedCallback() {
  this.classList.add("md-tab", "fixed")

  this.innerHTML = /* HTML */`
   <a ${resaltaSiEstasEn(["/index.html", "", "/"])} href="index.html">
    <span class="material-symbols-outlined">description</span>
    Formulario
   </a>
   <a ${resaltaSiEstasEn(["/rederizadoCli.html", "", "/"])} href="rederizadoCli.html">
    <span class="material-symbols-outlined">person</span>
    Renderizado Cliente
   </a>
      <a ${resaltaSiEstasEn(["/rederizadoSer.html", "", "/"])} href="rederizadoSer.html">
   <span class="material-symbols-outlined">
dns
</span>
    Renderizado Servidor
   </a>

   <a ${resaltaSiEstasEn(["/ayuda.html"])} href="ayuda.html">
    <span class="material-symbols-outlined">help</span>
    Ayuda
   </a>
  `
 }

}

customElements.define("nav-tab-fixed", NavTabFixed)