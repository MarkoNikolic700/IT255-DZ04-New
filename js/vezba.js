function prikazi_alert() { alert("Ja sam alert!!") }
function prikazi_confirm() { 
	var r=confirm("Pritisnite dugme") 
	if (r==true) { 
		document.write("Pritisnuli ste OK!") } else 
{ document.write("Pritisnuli ste Cancel!") } }
function prikazi_prompt() { 
	var ime=prompt("Molim vas unesite ime","Harry Potter") 
	if (ime != null && ime != "") { 
	document.write("Zdravo" + ime + "! Kako si danas?") } } 