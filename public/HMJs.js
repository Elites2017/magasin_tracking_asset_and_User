
function refresh(who){ 
  if (who == 'Complement') {
  var urlvAdd = document.getElementById('urlvAdd');
  var urlvDeduc = document.getElementById('urlvDeduc');
  var urlvAdd = urlvAdd.className;
  var urlvDeduc = urlvDeduc.className;
  $('#vAdd').load(urlvAdd);
  $('#vDeduc').load(urlvDeduc);}

  if (who == 'Taxes') {
  var urlvTaxes = document.getElementById('urlvTaxes');
  var urlvTaxes = urlvTaxes.className;
  $('#vTaxes').load(urlvTaxes);}
  if (who == 'Budget') {
  var urlvBudget = document.getElementById('urlvBudget');
  var urlvBudget = urlvBudget.className;
  $('#vBudget').load(urlvBudget);}

}

function tagRocG(a,b){

var link1=document.getElementById(a);
var link2=document.getElementById(b);

  if(link1.className == "collapse in"){
    link1.className = "collapse";
    link2.className = "fa fa-chevron-down"; 
  }else{
    link1.className = "collapse in";
    link2.className = "fa fa-chevron-up"; 
  }

}

function TypeDedChoix(a,b){
    var ca=document.getElementById('rdd');
    var pr=document.getElementById('prc');
if(b=='lajan'){c='prctg';

    var cash=document.getElementById(a);
    var prctg=document.getElementById(c);
    if(cash.className != "form-group"){
        cash.className = "form-group";
        prctg.className = "form-group hidden";
        //pr.value = '';
    }

}else if(b=='pousan'){ c='cash';
    var prctg=document.getElementById(a);
    var cash=document.getElementById(c);
    if(prctg.className != "form-group"){
        prctg.className = "form-group";
        cash.className = "form-group hidden";
        //ca.value = '';
        
    }

}
if(b=='lajan2'){c='prctg2';

    var cash=document.getElementById(a);
    var prctg=document.getElementById(c);
    if(cash.className != "form-group"){
        cash.className = "form-group";
        prctg.className = "form-group hidden";
        //pr.value = '';
        ca.removeAttribute('disabled');
        pr.setAttribute('disabled','disabled');
    }

}else if(b=='pousan2'){ c='cash2';
    var prctg=document.getElementById(a);
    var cash=document.getElementById(c);
    if(prctg.className != "form-group"){
        prctg.className = "form-group";
        cash.className = "form-group hidden"; 
        //ca.value = '';
        pr.removeAttribute('disabled');
        ca.setAttribute('disabled','disabled');
    }

}
}

function mod(Def,Mod,k){
    
    var Def=document.getElementById(Def);
    var ClsDef=Def.className;

    var Mod=document.getElementById(Mod);
    var ClsMod=Mod.className;
    var h = ' hidden'; 
    if(k=='mod'){
    if(Mod.className != 'col-md-5 col-xs-12'){
        Def.className = ClsDef.concat(h);
        Mod.className = ClsMod.substring(0, ClsMod.length - 7);
        //viderInput();
    }}else if(k=='def') {
        if(Def.className != 'col-md-5 col-xs-12'){
        Mod.className = ClsMod.concat(h);
        Def.className = ClsDef.substring(0, ClsMod.length - 7);
        //viderInput();
    }}

}


function vmod(url,Id,who){

  if (who == 'Addi') {
            $.ajax({
                type:'POST',
                data:{val: Id, who: who},
                url: url,
                success: function(fmod){
                  $('#Mod204').html(fmod);
                }
              });
    }
    if(who == 'Deduc') {
            $.ajax({
                type:'POST',
                data:{val: Id, who: who},
                url: url,
                success: function(fmod){
                  $('#Mod214').html(fmod);
                }
              });
    }
    if(who == 'Taxes') {
            $.ajax({
                type:'POST',
                data:{val: Id, who: who},
                url: url,
                success: function(fmod){
                  $('#ModTxV').html(fmod);
                }
              });
    }

}
function sup(url,Id,who,msg){
var msg = document.getElementById(msg);

if (who == 'Addi') {
    var urlvAdd = document.getElementById('urlvAdd');
    var urlvAdd = urlvAdd.className;
            $.ajax({
                type:'POST',
                data:{Id: Id, who: who, tab: 'additif', col: 'ID_additif'},
                url: url,
                success: function(fmod){
                  //$('#Mod204').html(fmod);
                  //alert(fmod);
                    $('#vAdd').load(urlvAdd);
                    msg.className = "";
                    setTimeout(function() {
                    msg.className="hidden";
                    }, 2000);
                }
              });
       
  }
  if(who == 'Deduc') {
    var urlvDeduc = document.getElementById('urlvDeduc');
    var urlvDeduc = urlvDeduc.className;
            $.ajax({
                type:'POST',
                data:{Id: Id, who: who, tab: 'deduction', col: 'ID_deduction'},
                url: url,
                success: function(fmod){
                  //$('#Mod214').html(fmod);
                  //alert(fmod);
                    $('#vDeduc').load(urlvDeduc);
                    msg.className = "";
                    setTimeout(function() {
                    msg.className="hidden";
                    }, 2000);
                }
              });
  }
  if(who == 'Taxes') {
    var urlvTaxes = document.getElementById('urlvTaxes');
    var urlvTaxes = urlvTaxes.className;
            $.ajax({
                type:'POST',
                data:{Id: Id, who: who, tab: 'taxe', col: 'ID_Taxe'},
                url: url,
                success: function(fmod){
                  //$('#Mod214').html(fmod);
                  //alert(fmod);
                    $('#vTaxes').load(urlvTaxes);
                    msg.className = "";
                    setTimeout(function() {
                    msg.className="hidden";
                    }, 2000);
                }
              });
  }


}
 //***************AJAX*************
 $(function(){
    $('.boutMod').click(function(){
       // alert('ID: '+ID);
        var ID = this.id;
       // alert('ID: '+ID);
        var val = $(this).find("input[name="+ID+"]").val();
        var who = $(this).find("input[name=who]").val();
        var url = $(this).find("input[name=url]").val();
       // alert('url: '+url);
        if (who == 'Addi') {
            $.ajax({
                type:'POST',
                data:{val: val, who: who},
                url: url,
                success: function(fmod){
                  $('#Mod204').html(fmod);
                }
              });
        }else if(who == 'Deduc') {
            $.ajax({
                type:'POST',
                data:{val: val, who: who},
                url: url,
                success: function(fmod){
                  $('#Mod214').html(fmod);
                }
              });
            }
    });
});
//***************AJAX END*************


function aff(){
var id = document.getElementById('id');
var idmsg = id.className;
var msg = document.getElementById(idmsg);
    msg.className = "";
   setTimeout(function() {
     msg.className="hidden";
    }, 3000);

}

function viderInput(){
  $('.chp :input').each(function(){
    $(this).val('');
  });
  $('.chp :textarea').each(function(){
    $(this).val('');
  });
}

$('.Frm').submit(function(){
 // alert('click');

      var Id = $(this).find("input[name=Idmod]").val();
      var Idmsg = $(this).find("input[name=msg]").val();
      var msg = document.getElementById(Idmsg);
      var url = $(this).find("input[name=url]").val();
      who = $(this).find("input[name=who]").val();
      Cmnt = $(this).find("textarea[name=Cmnt]").val();
                             
        if ((who == 'Addi')||(who == 'Addimod')) {
          var urlvAdd = document.getElementById('urlvAdd');
          var urlvAdd = urlvAdd.className;
          nomA = $(this).find("input[name=NomA]").val();
          mntnMn = $(this).find("input[name=mntnMn]").val();
          mntnMx = $(this).find("input[name=mntnMx]").val();
          taxable = $(this).find("input[name=taxable]:checked").val();
          $.post(url,{Id: Id, who: who, nomA: nomA, mntnMx: mntnMx, mntnMn: mntnMn, taxable: taxable, Cmnt: Cmnt},function(data){
              $('#vAdd').load(urlvAdd);
              msg.className = "";
              setTimeout(function() {
              msg.className="hidden";
              }, 2000);
              viderInput();
          });
          

      }else if((who == 'Deduc')||(who == 'Deducmod')) {
          var urlvDeduc = document.getElementById('urlvDeduc');
        var urlvDeduc = urlvDeduc.className;
        nomD = $(this).find("input[name=NomD]").val();
        cash = $(this).find("input[name=Cash]").val();
        Prcentage = $(this).find("input[name=Prcentage]").val();
        TypeRetrait = $(this).find("input[name=TypeRetrait]:checked").val();
        $.post(url,{Id: Id, who: who, nomD: nomD, cash: cash, Prcentage: Prcentage, TypeRetrait: TypeRetrait, Cmnt: Cmnt},function(data){
            //alert(data);
            $('#vDeduc').load(urlvDeduc);
            msg.className = "";
            setTimeout(function() {
            msg.className="hidden";
            }, 2000);
            viderInput();
          });
      }
      else if((who == 'Taxes')||(who == 'Taxesmod')) {
        var urlvTaxes = document.getElementById('urlvTaxes');
        var urlvTaxes = urlvTaxes.className;
        NomTaxe = $(this).find("input[name=NomTaxe]").val();
        Prcentage = $(this).find("input[name=Prcentage]").val();
        $.post(url,{Id: Id, who: who, NomTaxe: NomTaxe, Prcentage: Prcentage, Cmnt: Cmnt},function(data){
            //alert(data);
            $('#vTaxes').load(urlvTaxes);
            msg.className = "";
            setTimeout(function() {
            msg.className="hidden";
            }, 2000);
            viderInput();
          });
      };
      //viderInput();
      return false;
});


function filtre(a,msg){
    //style="color: orange;"
    var el = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9]/g;
        if (el.value.search(regex) > -1) {
            //att = textmsg.getAttribute('style');
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Seulment du numérique!";
            el.value = el.value.replace(regex, "");

            setTimeout(function() {
             textmsg.innerHTML = " ";
            }, 3000);            
        }
        a=el.value;
      o=a.split(" ");
      if (o[0]==0) {
        el.value ="";
      }


}

function fltrMM(a,b,msg){
    var num = document.getElementById(a);
    var num2 = document.getElementById(b);
    var textmsg = document.getElementById(msg);
    var numer2 = num2.value;
    var numer = num.value;
var ln1=numer.length;
    var ln2=numer2.length;
if (ln1>0) {     

    if (ln2>ln1) {
          textmsg.setAttribute('style','color:red');
          textmsg.innerHTML = " Max ne peut être inferieur à Salaire Minimal!";
          num.focus();
          setTimeout(function() {
              textmsg.innerHTML = " ";
              }, 1000); 
         // num.blur(function() {
          //  fltrMM(a,b,msg);
         // });
          
   
    }else if (ln2==ln1) {
      
        if(numer < numer2 || numer == numer2){

          textmsg.setAttribute('style','color:red');
          textmsg.innerHTML = " Max ne peut être inferieur ou égale à Salaire Minimal!";
          num.focus();
          setTimeout(function() {
              textmsg.innerHTML = " ";
              }, 1000); 
      }
    }
  }
}

function filtreTel(a,msg){
    //style="color: orange;"
    var el = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9 +]/g;
        if (el.value.search(regex) > -1) {
            //att = textmsg.getAttribute('style');
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Seulment du numérique!";
            el.value = el.value.replace(regex, "");

            setTimeout(function() {
             textmsg.innerHTML = " ";
            }, 3000);            
        }

}
function filtreM(a){

    var num = document.getElementById(a);
    var regex = /[^0-9 -]/g;
    num.value = num.value.replace(regex, "");
    var numer = num.value;
    if(numer < 1 ){
        num.value = "";
    }else if( numer > 31){
        num.value = "31";
    }else{
      var num2 = document.getElementById('fnum');
      var numer2 = num2.value;
      var ln1=numer.length;
      var ln2=numer2.length;
      if (ln2==ln1) {
      if (numer2 > numer) {
        num2.value='';
      }
    }
  }

}
function filtreP(a,msg){
    var num = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9]/g;
    if (num.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Seulment du numérique!";
    num.value = num.value.replace(regex, "");

            setTimeout(function() {
             textmsg.innerHTML = " ";
            }, 3000);            
        }

    var numer = num.value;
    if(numer < 1 ){
        num.value = "";
    }else if( numer > 100){
        num.value = "100";
    }        

}
function filtreAP(a,msg){
    var num = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9 -]/g;
    if (num.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Carractère non autorisé!";
    num.value = num.value.replace(regex, "");

            setTimeout(function() {
             textmsg.innerHTML = " ";
            }, 3000);            
        }
    var numer = num.value;
     s = numer.split("");
    for (var i = 1; i < s.length; i++) {
      if (s[i] == '-') {
        s[i]= "";
      }console.log(s[i]);
    }
    if(numer < (-100) ){
        num.value = "-100";
    }else if( numer > 100){
        num.value = "100";
    }        

}
function fsal(a,msg){

    var num = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9 -]/g;
    if (num.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Seulment du numérique!";
    num.value = num.value.replace(regex, "");

            setTimeout(function() {
             textmsg.innerHTML = " ";
            }, 3000);            
        }
}

function fsal2(a,b,msg){
    var num2 = document.getElementById(b);
    var num = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var numer2 = num2.value;
    var numer = num.value;

    var ln1=numer.length;
    var ln2=numer2.length;
   
    if (ln2==ln1) {
      
      if(numer < numer2){

        textmsg.setAttribute('style','color:red');
        textmsg.innerHTML = " Salaire Maximal ne peut être inferieur à Salaire Minimal!";

        setTimeout(function() {
            textmsg.innerHTML = " ";
            }, 1000); 
    }
  }
}    



function filtreAlpha(a,msg){

    var alpha = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^a-zA-Z \- '_,.áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/g;
    if (alpha.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Numérique non autorisé!";
            alpha.value = alpha.value.replace(regex, "");
        setTimeout(function() {
            textmsg.innerHTML = " ";
            }, 3000);            
        } 
   
}

function filtreAlphaNum(a,msg){

    var alpha = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9a-zA-Z \- '_,.áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/g;
    if (alpha.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Carractères Speciaux non autorisés!";
            alpha.value = alpha.value.replace(regex, "");
        setTimeout(function() {
            textmsg.innerHTML = " ";
            }, 3000);            
        }   
}

function AffName(a,msg){

    var nom = document.getElementById(a);
    var textmsg = document.getElementById(msg);
    var regex = /[^0-9a-zA-Z \- '_,.]/g;
    if (nom.value.search(regex) > -1) {
            textmsg.setAttribute('style','color:red');
            textmsg.innerHTML = " Carractere Speciaux non autoriser!";
            nom.value = nom.value.replace(regex, "");
        setTimeout(function() {
            textmsg.innerHTML = " ";
            }, 2000);            
        }else{  
          var nomE = document.getElementById('h1NameE');
    var nomRe = document.getElementById('recal');
    var nomRe = nomRe.innerHTML;
    var nomE2 = nomE.value;
    var valnom = nom.value;

    if(valnom){
        nomE.innerHTML = valnom;
    }else{
        nomE.innerHTML = nomRe;
    }
  }
 
}
function Bud(bud, url,Annee,txt){
var Budget = prompt(txt);
//alert(Budget);
if (Budget != '' && Budget != null) {
Budget=parseInt(Budget);
bud=parseInt(bud);
//alert(Budget);
  if (!isNaN(Budget)) {
    if (bud>=Budget){

      var res = (bud-Budget);
      var Montant1 = bud;
      var Montant2 = Budget;
      var Montant3 = res;
        $.post(url,{Montant1: Montant1, Montant2: Montant2, Montant3: Montant3, Annee: Annee},function(data){
         $('#vBudget').load(urlvBudget);
        });
        refresh('Budget');
      }else{
        Bud(bud, url,Annee,'Somme trop elevée. Reessayer!');
      }
    }
  }//else(alert('no action'));
}

function focusbud(IdM,IdA,a,b) {

    a2 = a.split("-");
    b2 = b.split("-");

var dt = new Date();
var m = dt.getMonth();
var d = dt.getDay();
var An = dt.getFullYear();
var Annee = document.getElementById(IdA);
if (m>a2[1] && m>b2[1]) {console.log(m+' > '+a2[1]+' et@ '+m+' > '+b2[1]);
  Annee.value = An+'-'+(An+1);
}
if (m<a2[1] && m<b2[1]) {console.log(m+' > '+a2[1]+' et# '+m+' > '+b2[1]);
  Annee.value = (An-1)+'-'+An;
}
if (m==b2[1]) {console.log(m+' > '+a2[1]+' et$ '+m+' > '+b2[1]);
  if (d<=b2[0]) {Annee.value = (An-1)+'-'+An;}
}
if (m==a2[1]) {console.log(m+' > '+a2[1]+' et% '+m+' > '+b2[1]);
  if (d>=a2[0]) {Annee.value = An+'-'+(An+1)}
}


  
}

function filtremail(a,msg,btn) {
  el = document.getElementById(a);
  msg = document.getElementById(msg);
  btn = document.getElementById(btn);
  btn.removeAttribute('disabled');
  val = el.value;
  if (val!='') {
    lv = val.length;
    s = val.split("");
    k=false;
    y=false;
    for (var i = 0; i < s.length; i++) {
      t = s[i];
      if (t == '@') {
        k=true;
      }
    }
    h = 0;
    for (var i = 0; i < s.length; i++) {
      if (s[i]=='.'){
        h++;
      }
    }
    if (h == 1){
      y = true;
    }
    if (k==false || y==false) {
      el.focus();
      btn.setAttribute('disabled','disabled');
      msg.setAttribute('style','color:red');
              msg.innerHTML = " e-mail invalide! ";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
    }else{console.log('sinon!');
    btn.removeAttribute('disabled');}
  }
    /* else{ el.focus();
    msg.setAttribute('style','color:red');
              msg.innerHTML = " Veuillez soumettre un e-mail! ";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
  }*/
}


function filtreWb(a,msg,btn) {
  el = document.getElementById(a);
  msg = document.getElementById(msg);
  btn = document.getElementById(btn);
  btn.removeAttribute('disabled');
  val = el.value;
  lv = val.length;
  if (val!='') {
    k=false;
    y=false;
    a = val.substring(0,4);
    b = val.substring(lv-4);
    if (a=='www.') {
      k=true;
    }
    s = val.split("");
    h = 0;
    for (var i = 0; i < s.length; i++) {
      if (s[i]=='.'){
        h++;
      }
    }
    //alert(h);
    if (h == 2){
      y = true;
    }
    if (k==false || y==false) {
      el.focus();
      btn.setAttribute('disabled','disabled');
      msg.setAttribute('style','color:red');
              msg.innerHTML = " url invalide! ";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
    }else{console.log('sinon!');
    btn.removeAttribute('disabled');}
  }/*else{
      el.focus();
    msg.setAttribute('style','color:red');
              msg.innerHTML = " Veuillez soumettre un url! ";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
  }*/
}

function fisca(a,b,c,d,e){
  a = document.getElementById(a);
  b = document.getElementById(b);
  c = document.getElementById(c);
  d = document.getElementById(d);
  aa=a.className;
  bb=b.className;
  if (e=='btn') {
      if (aa == 'hidden'){
        a.removeAttribute("class");
        b.setAttribute('class','hidden');
      }
      if (bb == 'hidden'){
        b.removeAttribute('class');
        c.removeAttribute('hidden');
        c.removeAttribute('disabled');
        d.removeAttribute('hidden');
        d.removeAttribute('disabled');
        a.setAttribute('class','hidden');
      }
    }else if (e=='dflt') {
      a.removeAttribute("class");
      b.setAttribute('class','hidden');
    }else if (e=='dfn') {
      
      c.removeAttribute('hidden');
      c.removeAttribute('disabled');
      d.removeAttribute('hidden');
      d.removeAttribute('disabled');
      b.removeAttribute('class');
      a.setAttribute('class','hidden');
  }
}


function datefisc(a,b,c,d,msg){
  a = document.getElementById(a);
  b = document.getElementById(b);
  c = document.getElementById(c);
  d = document.getElementById(d);
  msg = document.getElementById(msg);
 
      cc=a.value;
      dd=b.value;
    s1 = cc.split("-");
    s2 = dd.split("-");
    console.log('1');

      if (s1[0]==s2[0]){
        b.focus();
      //c.setAttribute('disabled');
        
        msg.setAttribute('style','color:red');
              msg.innerHTML = " Mauvais choix de la date!";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
    }else{
      //bt.removeAttribute('disabled');
    }

      if ((s1[0]>s2[0])&&(s1[1]==s2[2])){
        b.focus();
      //c.setAttribute('disabled','disabled');
      //d.setAttribute('disabled','disabled');
 
        msg.setAttribute('style','color:red');
              msg.innerHTML = " Mauvais choix de la date!";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
    }else{
      //c.removeAttribute('disabled');
      //d.removeAttribute('disabled');
    }

    if ((s1[0]==s2[0])&&(s1[1]==s2[1])&&(s1[2]==s2[2])){
        b.focus();
      //c.setAttribute('disabled','disabled');
      //d.setAttribute('disabled','disabled');
 
        msg.setAttribute('style','color:red');
              msg.innerHTML = " Mauvais choix de la date!";
          setTimeout(function() {
              msg.innerHTML = " ";
              }, 2000);
    }else{
      //c.removeAttribute('disabled');
      //d.removeAttribute('disabled');
    }

}

/*
$('form :input').blur(function(){
  n=$(this)[0];
  n.value;
  if (n!=''){
    n.removeAttribute("style");
  }
});
*/


/*
  $('button').mouseover(function(){
      n=$(this);
      a=n.attr('class');
      b=n.attr('type');
      o=a.split(" ");
      no=false;
    for (var i = 0; i < o.length; i++) {
      c=o[i];
      if (c == 'no') {
        no = true;
      }
    }

      if (no!=true) {
    f=$(this)[0].form;
    p=f.getElementsByTagName('input');
    vide=false;
    j=0;
    g = [];
    for (var i = 0; i < p.length; i++) {
      c=p[i];
      k=p[i].value;
      d=p[i].getAttribute('disabled');
      h=p[i].getAttribute('hidden');
      if (d!='disabled' && h!='hidden') {

        if (k=='') {
          vide=true;
          g[j] = c;
          j++;
        }
      }
    }
      //console.log(g);

    if (vide==true) {
      n.click(function(){

         for (var i = 0; i < p.length; i++) {
            p[i].removeAttribute("style");
          }

        for (var i = 0; i < g.length; i++) {
          g[i].setAttribute("style","box-shadow: 1px 1px 1px red;");
        }
      c=a.length;
        a=n.attr('class');
        if(c==15){
          n.attr({'class': a+' disabled','type':'button'});
        }
        for (var i = 0; i < p.length; i++){
            c=p[i];
            k=p[i].value;
            d=p[i].getAttribute('disabled');
            h=p[i].getAttribute('hidden');
            if (d!='disabled' && h!='hidden') {
          }
        }

      });
    }else if (vide!=true){
        if (b=='button'){
        a=a.substring(0, a.length - 9);
        n.attr({'class': a,'type':'submit'});
      b=n.attr('type');
        a=n.attr('class');
      }
    }
  }

});

*/