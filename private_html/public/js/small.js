
function doToggle(btn, hide){
	var migtukas= document.getElementById(btn)
	migtukas.addEventListener("click", function(){
		var btn=document.getElementById(hide)
		btn.classList.toggle("hidden")
	})
}


doToggle("toggle-login","loginInputs")
doToggle("toggleAutobusuUzduotis","autobusuUzduotis")


doToggle("toggleMagic","hideMagic")
