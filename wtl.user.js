// ==UserScript==
// @name           wiki.vspace.one WTL-Button
// @description    Add a button to print a QR code
// @version        2025.03.10.1
// @include        https://wiki.vspace.one
// ==/UserScript==

const wtl_proxy="http://10.0.1.18:8985";

let wtl_button = `<li class="action">
  <form method="POST" action="${wtl_proxy}/print" id="wtl_print_form">
    <input name="title" type="hidden" value="${JSINFO["id"]}">
    <input name="url" type="hidden" value="${location}">
  </form>
  <button title="Ettiket Drucken" class="menuitem top" form="wtl_print_form" formtarget="_blank" style="border:none;background:none;">
    <!-- icon from [MDI](https://materialdesignicons.com/) --> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,4H10V10H4V4M20,4V10H14V4H20M14,15H16V13H14V11H16V13H18V11H20V13H18V15H20V18H18V20H16V18H13V20H11V16H14V15M16,15V18H18V15H16M4,20V14H10V20H4M6,6V8H8V6H6M16,6V8H18V6H16M6,16V18H8V16H6M4,11H6V13H4V11M9,11H13V15H11V13H9V11M11,6H13V10H11V6M2,2V6H0V2A2,2 0 0,1 2,0H6V2H2M22,0A2,2 0 0,1 24,2V6H22V2H18V0H22M2,18V22H6V24H2A2,2 0 0,1 0,22V18H2M22,22V18H24V22A2,2 0 0,1 22,24H18V22H22Z" /></svg>
    <span>Ettiket Drucken</span>
  </button>
</li>`;

//fetch(wtl_proxy+"/ident").then(response=>{
//    if (response.ok) {
        let pt = document.getElementById("dw__pagetools");
        if (pt != null) pt.children[0].children[0].innerHTML += wtl_button;
//    }
//});
