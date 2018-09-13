/* Скрипт для раздвижения кнопки меню */

var btn = document.getElementById("mainButton");

btn.addEventListener("mouseover", function (e) {
  var nav = document.getElementById("main-nav");
  var sub_btns = document.getElementsByClassName("sub-btn");
  var pos = [];

  // e.className += "main-hover";
  // console.log(e)

  nav.addEventListener("mouseover", function (e) {
      
      for(var x = 0; x < sub_btns.length; x++) {
        if(x < 3) {
          sub_btns[x].style.left = "-"+((x+1)*27)+"%";
          pos[x] = ((x+1)*20);
        } else {
           sub_btns[x].style.right = "-"+((x-2)*27)+"%";
           pos[x] = ((x-1)*280);
        }
        sub_btns[x].style.opacity = "1";
      }
      nav.style.width = 65+"%";
  });
  
  nav.addEventListener("mouseout", function(){
    nav.style.width = "100px";

    for(var x = 0; x<sub_btns.length; x++) {
      sub_btns[x].style.left = "0";
      sub_btns[x].style.right = "0";
      sub_btns[x].style.opacity = "0";
    }
  })
});