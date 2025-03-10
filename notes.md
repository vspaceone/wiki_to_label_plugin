## Outline
1. Check if request from vspace.one IP-range
2. Hook into DokuWiki's button sidebar generation Code.
3. fill in the current pages Title and canonical URL into the button code template.
4. At the end of the sidebar, add the button.

### Button-template
```html
<li class="action">
  <form method="POST" action="http://localhost:8985/print" id="wtl_print_form">
    <input name="title" type="hidden" value="Test-Titel">
    <input name="url" type="hidden" value="https://http.cat/">
  </form>
  <button title="Ettiket Drucken" class="menuitem top" form="wtl_print_form" formtarget="_blank" style="border:none;background:none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 20h-2V8l-5.5 5.5-1.42-1.42L12 4.16l7.92 7.92-1.42 1.42L13 8v12z"></path></svg>
    <span>Ettiket Drucken</span>
  </button>
</li>
```
