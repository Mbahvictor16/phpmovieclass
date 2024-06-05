/*const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");
    
arrows.forEach((arrow, i) => {
    arrow.addEventListener("click", () => {
        movieLists[i].style.transform = "translateX(${
          console.log(movieLists[i].computedStyleMap().get ("transform")[0].x.value)

   });
   
 });
*/
 
console.log(window.innerWidth);

 const ball = document.querySelector(".toggle-ball");
 const items = document.querySelectorAll(

  ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toogle"
 );


 ball.addEventListener("click",()=>{
   items .forEach(items=>{
      items.classList.toggle("active")
     
   })
   ball.classList.toggle("active")
 })




 
 
 
//   function getCookie(name) {
//  let cname = name + "=";
//   let decodedCookie = decodeURIComponent(document.cookie);
//   let ca = decodedCookie.split(";");
//   for (let i = 0; i < ca.length; i++) {
//     let c = ca[i];
//     while (c.charAt(0) == " ") {
//       c = c.substring(1);
//      }
//    if (c.indexOf(name) == 0) {
//      return c.substring(cname.length, c.length);
//     }
//    }  
//    return "";
//  }

//  document.addEventListener("loadstart", checkCookie)

//  function checkCookie() {
//    let cookieid = getCookie("name");
//    if (cookieid != "") {
//      alert("Welcome again " + username);
//      //alert("Welcome again " + cookieid);
//    } else {
//      console.log("No cookies");
//      location.href = "./login.html"
//    }
//  }
//  getCookie(name)
//  console.log(getCookie(name));
 // checkCookie()



 