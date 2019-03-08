function print(a){
	console.log(a)
}

function doToggle(btn, hide){
	var toggleAutobusuUzduotis= document.getElementById(btn)
	toggleAutobusuUzduotis.addEventListener("click", function(){
		var btn=document.getElementById(hide)
		btn.classList.toggle("hidden")
	})
}
doToggle("toggleAutobusuUzduotis","autobusuUzduotis")

function checkTime(i) {
    if (i < 10) {i = "0" + i}
    return i
  }
function dabarYra(){
  d = new Date();
  diena = d.getDay();
  val=d.getHours()
  min=checkTime(d.getMinutes())
  s=checkTime(d.getSeconds())

  return (val+":"+min+":"+s)
}


function busPo(autobusas='1G'){
  dabarYra()
  if (diena<=5){
    savaitesDiena='darbo'
  }
  else if (diena==6) {
    savaitesDiena='sestadienis'
  }
  else if(diena==0){
    savaitesDiena=='sekmadienis'
  }
  //val=2
  //min=48

  if (val<23 && val>=5){
    kitosValPirmas=data[autobusas][savaitesDiena][val+1][0]+60
    masyvas=data[autobusas][savaitesDiena][val]
    masyvas.push(kitosValPirmas)
  }
  else if(val==23){
    masyvas=data[autobusas][savaitesDiena][val]
    masyvas.push('nevažiuoja')
  }
  else if(val<5){
    return ('nevažiuoja')
  }
  for(i=0;masyvas.length>i;i++){
    skirtumas=masyvas[i]-min
    if (skirtumas>=0){
      return(skirtumas)
    }
    if(masyvas[i]=="nevažiuoja"){
      return('nevažiuoja')
    }
  }
}



function getMin(arr){
  ans=[]
  for(i=0;arr.length>i;i++){
    if(Number.isInteger(arr[i])){
      ans.push(arr[i])
    }
  }
mm=Math.min.apply(null,ans)
 return (mm)
}



function vaziuokSu(){
  trumpiausiLaikai=[
    busPo(autobusai[0]),
    busPo(autobusai[1]),
    busPo(autobusai[2])]

  minimumas=getMin(trumpiausiLaikai)
  for(i=0;autobusai.length>i;i++){
  if(minimumas==trumpiausiLaikai[i]){
    return(autobusai[i])
  }
}
return ('naktiniu')
}

//<img src='bus1G.jpg' class=" busStop" >
function stotele(){
  st=vaziuokSu()
  ats="<img src='img/bus"+st+".jpg' class=' busStop' >"
  return (ats)
}


function show (){
$("#34").text(busPo('34'))
$("#1G").text(busPo('1G'))
$("#2G").text(busPo('2G'))
$("#iDarba").text(busPo('50i'))
$("#isDarbo").text(busPo('50is'))
$("#dabarYra").text(dabarYra())
$("#vaziuoti").text(vaziuokSu())
$("#stotele").html(stotele())
}

show()
setInterval(show,1000)
