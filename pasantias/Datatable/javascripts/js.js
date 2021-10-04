function Caps()
  {
    var prov=document.getElementById('usuarios');
  	document.getElementById('eleccion').value=prov.options[prov.selectedIndex].value;

	var prov=document.getElementById('usuarios');
	document.getElementById('name').value=prov.options[prov.selectedIndex].text;
  }