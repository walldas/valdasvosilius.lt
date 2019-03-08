


function print(a){
  console.log(a)
}
matrix=[]
function getRandom(nuo,iki){
	return Math.floor(Math.random()*(iki-nuo+1)+nuo)
}
function binLine(){
  line=""
  for(i=0;i<8;i++){
    sk=getRandom(0,1)
    line=line+sk
  }
  return(line)
}
function loadRandomMatrix(col=12,row=30){
  a=0
  while (a<col){
    stulpelis=[]
    a++
    for(k=0;k<row;k++){
      line=binLine()
      stulpelis.push(line)
    }
    matrix.push(stulpelis)
  }
}
loadRandomMatrix()
function showLines(arr){
  i=0
  while (i<arr.length){
    id=arr[i]
  $("#m"+id).addClass("white1")
  i++
  }

}
function showMatrix(markId){
  col=matrix.length
  row=matrix[0].length
  ats=''
  stulp=0
  id=0
  while (stulp<row){
    ats=ats+"<tr>"
    eil=0
    while(eil<col){
      ats=ats+"<td id=m"+id+"> "+matrix[eil][stulp]+" </td>"
      eil++  
      id++
    }
    stulp++
    ats=ats+"</tr>"
  }
  $("#matrix").html(ats)
  if(Boolean(markId)){
    showLines(markId)
  }
}
showMatrix()
function getId(row,col){
  ve=matrix[0].length
  ats=ve*col+row
  return(ats)
}

function changeLine(line="10010001"){
  lenLine=line.length
  
  x=getRandom(0,lenLine)
  // x=3
  langas=line[x]
  ats=''
  if(langas=="1"){
    a="0"
  }
  else if(langas=="0"){
    a="1"
  }
  for(i=0;i<lenLine;i++){
    if (i!=x){
      ats=ats+line[i]
    }
    else if (i==x){
      ats=ats+a
    }
  }
  line=ats
  // showMatrix()

  return(line)
}

function main(taskai=42){
  markId=[]
  col=matrix.length-1
  row=matrix[0].length-1
  pakitimai=0
  while(pakitimai<taskai){
    rcol=getRandom(0,col)
    rrow=getRandom(0,row)
    id=getId(rrow,rcol)
    // print(rcol)
    // print(rrow)
    markId.push(id)
    line=changeLine(matrix[rcol][rrow])
    // line=binLine()
    matrix[rcol][rrow]=line
    pakitimai++
  }  
  // console.clear()
  // print(markId)
  // print("--")
  showMatrix(markId)
}
main()
setInterval(main,100)

