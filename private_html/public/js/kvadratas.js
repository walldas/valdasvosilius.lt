//_________________pagalbines funkcijos________________
function jusuMasyvas(){// duotas jusu masyvas
	return masyvas=[
		[4,9,2,3,5],
		[3,5,7,4,2],
		[8,1,6,6,2],
		[1,1,6,6,2]
	]
}

function getRandomInteger(nuo,iki){//atsitiktiniai skaiciai nuo iki
	return Math.floor(Math.random()*(iki-nuo+1)+nuo)
}

$.sum = function(arr) {// array suma
    var r = 0;
    $.each(arr, function(i, v) {
        r += v;
    });
    return r;
}
function sumavimas(arr){
	ats=0
	for (i=0;(arr).length>i;i++){
		ats=ats+arr[i]
	}
	return ats
}

function colSum(masyvas,stulpNr){//paduoto masyvo,  stulpelioNr suma
	sizeMatrix=masyvas.length
	suma=0
	for(i=0;sizeMatrix>i;i++){
		suma=suma+masyvas[i][stulpNr]
	}
	return suma
}
function istrzSumDown(masyvas){//suma istriza zemin
	sizeMatrix=masyvas.length
	suma=0
	for(i=0;sizeMatrix>i;i++){
		suma=suma+masyvas[i][i]
	}
	return suma
}
function istrzSumUp(masyvas){//suma istriza aukstin
	sizeMatrix=masyvas.length
	suma=0
	for(i=0;sizeMatrix>i;i++){
		suma=suma+masyvas[i][sizeMatrix-i-1]
	}
	return suma
}
//________________________pagrindines funkcijos_________________
function getNumberMatix(){// suformuoti random masyva pagal paduodamus dydzius
  stulp=$("#stulp").val()
  iki=$("#iki").val()
  matrix=[]
while (stulp>0){
  eil=$("#eil").val()
  row=[]
  while (eil>0){
    ran=getRandomInteger(1,iki)
    eil=eil-1
    row.push(ran)
  }
  stulp=stulp-1
  matrix.push(row)
}
return (matrix)
}

function atvaizduok(masyvas){//atvaizduoti paduota masyva kaip lentele
		stulp=masyvas.length
    ats=""
		id=0
		x=0
  while (stulp>0){
		y=0
    ats=ats+"<tr>"
		eil=(masyvas[0]).length
    while (eil>0){
			ran=masyvas[x][y]
      ats=ats+"<td id='"+id+"'>"+ran+"</td>"
      eil=eil-1
			id=id+1
			y=y+1
    }
    ats=ats+"</tr>"
    stulp=stulp-1
		x=x+1
  }
    $(".staciakampis>table").html(ats)
}


function itsMagic(masyvas){ //patikrinti ar paduotas masyvas yra magiskasis kvadratas -> yes/no
	sizeMatrix=masyvas.length
	pirmosEilSum=$.sum(masyvas[0])
	lygioseilutes="yes"
	lygusStulpeliai="no"
	for (eil=0;eil<sizeMatrix;eil++){
		eilSum=$.sum(masyvas[eil])
		if (lygioseilutes=="yes"){
			if (eilSum==pirmosEilSum){
				lygioseilutes="yes"
			}
			else{
				return "no"
			}
		}
	}
	if (lygioseilutes=="yes"){
		for (stulp=0;stulp<sizeMatrix;stulp++){
			stulpSum=colSum(masyvas,stulp)
				if (stulpSum==pirmosEilSum){
					lygusStulpeliai="yes"
				}
				else{
					return "no"
				}
			}
	}
	if(lygusStulpeliai=="yes"){
		if (pirmosEilSum==istrzSumDown(masyvas) && pirmosEilSum==istrzSumUp(masyvas)){
			return "yes"
		}
		return "no"
	}
	return "no"
}

function skenuok(masyvas){ //grazina magiskuju kvadratu pradines kordinates
	ats=[]
	lenRow=(masyvas[0]).length
	lenCol=masyvas.length
	//susirandam didziausia galimalango dydi
	maxLenLangas=Math.min(lenRow,lenCol)
	lenLangas=maxLenLangas
while (lenLangas>1){
	down=0
	while((down+lenLangas)<=lenCol){
		left=0
		while ((left+lenLangas)<=lenRow){
			eilutesNr=0
			langoMasyvas=[]
			while (lenLangas>eilutesNr){
				langas=masyvas[eilutesNr+down].slice(left,lenLangas+left)
				langoMasyvas.push(langas)
				eilutesNr=eilutesNr+1
			}
			if(itsMagic(langoMasyvas)=="yes"){
				pradLangoIdKordinate=[down*lenRow+left,lenLangas]
				ats.push(pradLangoIdKordinate)
			}
			left=left+1
		}
		down=down+1
	}
	lenLangas=lenLangas-1
}
return ats
}

function getAllMagicsId(kordinates,masyvas){//grazina magiskuju kvadratu visus id
	lenRow=masyvas[0].length
	ats=[]
	for(i=0;kordinates.length>i;i++){
		pradinisId=kordinates[i][0]
		lenLangas=kordinates[i][1]
		langoAllIds=[]
		down=0
		while(down<lenLangas){
			esamasId=0
			while(lenLangas>esamasId){
				id=pradinisId+esamasId+down*lenRow
				langoAllIds.push(id)
				esamasId=esamasId+1
			}
			down=down+1
		}
		ats.push(langoAllIds)
	}
	return ats
}

function spalvok(magicIds){//nuspalvoja magiskaji kvadrata random spalva
	lenCol=magicIds.length
	for(i=0;i<lenCol;i++){
		lenRow=magicIds[i].length
		color="rgb("+getRandomInteger(0,255)+","+getRandomInteger(0,255)+","+getRandomInteger(0,255)+")"
		for(j=0;lenRow>j;j++){
			id=magicIds[i][j]
			$("#"+id).css('background-color',color)
		}
	}
}




function magiskasisKvadratas(masyvas=0){//>>>>>PAGRINDINE FUNKCIJA<<<<<<
	if (masyvas.length>0){
		yraMasyvas="yes"
	}
	else{
		yraMasyvas="no"
	}
	magija=0
	kartota=-1
	while(magija==0){
		kartota++
		if (yraMasyvas=="no"){
			masyvas=getNumberMatix()
		}
		atvaizduok(masyvas)
	  stebuklingiKvadratai=getAllMagicsId(skenuok(masyvas),masyvas)
		spalvok(stebuklingiKvadratai)
		magija=stebuklingiKvadratai.length
}
$("#kartota").text("kartota "+kartota+" kartai kol ")
$("#rasta").text("rasta "+magija+" magiskieji kvadratai")
}

$(document).on("click","#btn1",btnRandom)
function btnRandom(){//paspaudus migtuka "Random" bus aktyvuota magiskojo Kvadrato funkcija
	magiskasisKvadratas()
}

$(document).on("click","#btn2",btnJusu)
function btnJusu(){//paspaudus migtuka "Jusu" bus paduodamas masyvas i magiskojo kvadrato funkcija
	magiskasisKvadratas(jusuMasyvas())
}
btnJusu()
