
$(document).on("click","#kkbtn",kk)
function kk(){
  //Kinu Kalendorius=(Chinese Calendar) nanaudota 12 zenklu ir 5 spalvu funkcijos nes neatitinka zodziu linksniai
    metai=$("#chineseCalendar").val()
    b=metai%60
    if (b<0){
        b=b*(-1)
    }
    b=b+1
    if (b==22){
        $(".kkats>h4").text('Baltosios metalinės Gyvatės metai.')}
    else if (b==23){
        $(".kkats>h4").text('Juodojo vandens Žirgo metai.')}
    else if (b==24){
        $(".kkats>h4").text('Juodosios vandens Ožkos metai.')}
    else if (b==25){
        $(".kkats>h4").text('Žaliosios medinės Beždžionės metai.')}
    else if (b==26){
        $(".kkats>h4").text('Žaliojo medinio Gaidžio metai.')}
    else if (b==27){
        $(".kkats>h4").text('Raudonojo ugninio Šuns metai.')}
    else if (b==28){
        $(".kkats>h4").text('Raudonojo ugninio Šerno metai.')}
    else if (b==29){
        $(".kkats>h4").text('Geltonosios žemės Žiurkės metai.')}
    else if (b==30){
        $(".kkats>h4").text('Geltonojo žemės Buliaus metai.')}
    else if (b==31){
        $(".kkats>h4").text('Baltojo metalinio Tigro metai.')}
    else if (b==32){
        $(".kkats>h4").text('Baltojo metalinio Kiškio metai.')}
    else if (b==33){
        $(".kkats>h4").text('Juodojo vandens Drakono metai.')}
    else if (b==34){
        $(".kkats>h4").text('Juodosios vandens Gyvatės metai.')}
    else if (b==35){
        $(".kkats>h4").text('Žaliojo medinio Žirgo metai.')}
    else if (b==36){
        $(".kkats>h4").text('Žaliosios medinės Ožkos metai.')}
    else if (b==37){
        $(".kkats>h4").text('Raudonosios ugninės Beždžionės metai.')}
    else if (b==38){
        $(".kkats>h4").text('Raudonojo ugninio Gaidžio metai.')}
    else if (b==39){
        $(".kkats>h4").text('Geltonojo žemės Šuns metai.')}
    else if (b==40){
        $(".kkats>h4").text('Geltonojo žemės Šerno metai.')}
    else if (b==41){
        $(".kkats>h4").text('Baltosios metalinės Žiurkės metai.')}
    else if (b==42){
        $(".kkats>h4").text('Baltojo metalinio Buliaus metai.')}
    else if (b==43){
        $(".kkats>h4").text('Juodojo vandens Tigro metai.')}
    else if (b==44){
        $(".kkats>h4").text('Juodojo vandens Kiškio metai.')}
    else if (b==45){
        $(".kkats>h4").text('Žaliojo medinio Drakono metai.')}
    else if (b==46){
        $(".kkats>h4").text('Žaliosios medinės Gyvatės metai.')}
    else if (b==47){
        $(".kkats>h4").text('Raudonojo ugninio Žirgo metai.')}
    else if (b==48){
        $(".kkats>h4").text('Raudonosios ugninės Ožkos metai.')}
    else if (b==49){
        $(".kkats>h4").text('Geltonosios žemės Beždžionės metai.')}
    else if (b==50){
        $(".kkats>h4").text('Geltonojo žemės Gaidžio metai.')}
    else if (b==51){
        $(".kkats>h4").text('Baltojo metalinio Šuns metai.')}
    else if (b==52){
        $(".kkats>h4").text('Baltojo metalinio Šerno metai.')}
    else if (b==53){
        $(".kkats>h4").text('Juodosios vandens Žiurkės metai.')}
    else if (b==54){
        $(".kkats>h4").text('Juodojo vandens Buliaus metai.')}
    else if (b==55){
        $(".kkats>h4").text('Žaliojo medinio Tigro metai.')}
    else if (b==56){
        $(".kkats>h4").text('Žaliojo medinio Kiškio metai.')}
    else if (b==57){
        $(".kkats>h4").text('Raudonojo ugninio Drakono metai.')}
    else if (b==58){
        $(".kkats>h4").text('Raudonosios ugninės Gyvatės metai.')}
    else if (b==59){
        $(".kkats>h4").text('Geltonojo žemės Žirgo metai.')}
    else if (b==60){
        $(".kkats>h4").text('Geltonosios žemės Ožkos metai.')}
    else if (b==1){
        $(".kkats>h4").text('Baltosios metalinės Beždžionės metai.')}
    else if (b==2){
        $(".kkats>h4").text('Baltojo metalinio Gaidžio metai.')}
    else if (b==3){
        $(".kkats>h4").text('Juodojo vandens Šuns metai.')}
    else if (b==4){
        $(".kkats>h4").text('Juodojo vandens Šerno metai.')}
    else if (b==5){
        $(".kkats>h4").text('Žaliosios medinės Žiurkės metai.')}
    else if (b==6){
        $(".kkats>h4").text('Žaliojo medinio Buliaus metai.')}
    else if (b==7){
        $(".kkats>h4").text('Raudonojo ugninio Tigro metai.')}
    else if (b==8){
        $(".kkats>h4").text('Raudonojo ugninio Kiškio metai.')}
    else if (b==9){
        $(".kkats>h4").text('Geltonojo žemės Drakono metai.')}
    else if (b==10){
        $(".kkats>h4").text('Geltonosios žemės Gyvatės metai.')}
    else if (b==11){
        $(".kkats>h4").text('Baltojo metalinio Žirgo metai.')}
    else if (b==12){
        $(".kkats>h4").text('Baltosios metalinės Ožkos metai.')}
    else if (b==13){
        $(".kkats>h4").text('Juodosios vandens Beždžionės metai.')}
    else if (b==14){
        $(".kkats>h4").text('Juodojo vandens Gaidžio metai.')}
    else if (b==15){
        $(".kkats>h4").text('Žaliojo medinio Šuns metai.')}
    else if (b==16){
        $(".kkats>h4").text('Žaliojo medinio Šerno metai.')}
    else if (b==17){
        $(".kkats>h4").text('Raudonosios ugninės Žiurkės metai.')}
    else if (b==18){
        $(".kkats>h4").text('Raudonojo ugninio Buliaus metai.')}
    else if (b==19){
        $(".kkats>h4").text('Geltonojo žemės Tigro metai.')}
    else if (b==20){
        $(".kkats>h4").text('Geltonojo žemės Kiškio metai.')}
    else if (b==21){
        $(".kkats>h4").text('Baltojo metalinio Drakono metai.')}
    else{
        $(".kkats>h4").text('KLAIDA ieškok! ',"metai =",metai," b= ", b)}
}

 $(document).on("click","#kkbtn",kkz)
function kkz(){
  //Kinu Kalendoriaus Zenkliukas

    metai=$("#chineseCalendar").val()
    i=metai%12
    if (i<0){
        i=i*(-1)}
    vieta="img/"

     if (i==1){
        $("#kkimg").attr("src",vieta+"rooster.png")
        // $("#kkimg").attr("src","{!! asset('img/rooster.png') !!}")
    }
    else if (i==2){
        $("#kkimg").attr("src",vieta+"dog.png")
    }
    else if (i==3){
        $("#kkimg").attr("src",vieta+"pig.png")
    }
    else if (i==4){
        $("#kkimg").attr("src",vieta+"rat.png")
    }
    else if (i==5){
        $("#kkimg").attr("src",vieta+"ox.png")
    }
    else if (i==6){
        $("#kkimg").attr("src",vieta+"tiger.svg")
    }
    else if (i==7){
        $("#kkimg").attr("src",vieta+"rabbit.png")
    }
    else if (i==8){
        $("#kkimg").attr("src",vieta+"dragon.png")
    }
    else if (i==9){
        $("#kkimg").attr("src",vieta+"snake.png")
    }
    else if (i==10){
        $("#kkimg").attr("src",vieta+"horse.png")
    }
    else if (i==11){
        $("#kkimg").attr("src",vieta+"goat.png")
    }
    else if (i==0){
        $("#kkimg").attr("src",vieta+"monky.png")
    }
}

$(document).on("click","#kkbtn",kks)
function kks(){
  //Kinu Kalendoriaus spalvos

    metai=$("#chineseCalendar").val()
    i=metai%10
    if (i<0){
        i=i*(-1)}
    if (i==1){
        $("#kkimg").attr("class","kksB")
    }
    else if(i==2){
        $("#kkimg").attr("class","kksJ")
    }
    else if(i==3){
        $("#kkimg").attr("class","kksJ")
    }
    else if(i==4){
        $("#kkimg").attr("class","kksZ")
    }
    else if(i==5){
        $("#kkimg").attr("class","kksZ")
    }
    else if(i==6){
        $("#kkimg").attr("class","kksR")
    }
    else if(i==7){
        $("#kkimg").attr("class","kksR")
    }
    else if(i==8){
        $("#kkimg").attr("class","kksG")
    }
    else if(i==9){
        $("#kkimg").attr("class","kksG")
    }
    else if(i==0){
        $("#kkimg").attr("class","kksB")
    }
}
function kkdef () {
  //Kinu Kalendoriaus Defoult
    var d = new Date();
    var y=d.getFullYear() ;
    $("#chineseCalendar").val(y)
    kk()
    kkz()
    kks()
}
kkdef()
 //si funkcija skirta- tik uzkrovus puslapi kad butu dabartiniai metai puslapyje

document.addEventListener("keyup", function(event){
    // console.log(event.keyCode)
    if(38==event.keyCode){
        y=parseInt($("#chineseCalendar").val())
        y=y+1
        $("#chineseCalendar").val(y)
        kk()
        kkz()
        kks()
    }
    else if( 40==event.keyCode){
        y=parseInt($("#chineseCalendar").val())
        y=y-1
        $("#chineseCalendar").val(y)
        kk()
        kkz()
        kks()
    }
})
