window.addEventListener("load",function (){
   var containerMurliimg=document.getElementById("containerMur li img");
    var containerMur2liimg=document.getElementById("containerMur2 li img");
    var containerMur3liimg=document.getElementById("containerMur3 li img");
    

   
    if (window.matchMedia("(max-width:480px)").matches)
    {
      containerMurliimg.style.marginTop="-20px",
      containerMur2liimg.style.marginTop="-20px",
      containerMur3liimg.style.marginTop="-20px"
    }
    
  }
  );