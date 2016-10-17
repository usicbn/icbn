
var min=8;
var max=18;
function increaseFontSize() {
 
   var p = document.getElementsByTagName('p');
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
         var s = 12;
      }
      if(s!=max) {
 
         s += 1;
      }
      p[i].style.fontSize = s+"px"
 
   }
}
function decreaseFontSize() {
   var p = document.getElementsByTagName('body');
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
         var s = 12;
      }
      if(s!=min) {
 
         s -= 1;
      }
      p[i].style.fontSize = s+"px"
 
   }
}

function changeFontSize(inc)
{
  var p = document.getElementsByTagName('p');
  for(n=0; n<p.length; n++) {
    if(p[n].style.fontSize) {
       var size = parseInt(p[n].style.fontSize.replace("px", ""));
    } else {
       var size = 12;
    }
    p[n].style.fontSize = size+inc + 'px';
   }
}
