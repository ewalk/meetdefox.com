let popUp = document.getElementById("cookiePopup");
//When user clicks the accept button
document.getElementById("acceptCookie").addEventListener("click", () => {
  //Create date object
  let d = new Date();
  //Increment the current time by 1 minute (cookie will expire after 1 minute)
  d.setMinutes(129600 + d.getMinutes());
  //Create Cookie withname = myCookieName, value = thisIsMyCookie and expiry time=1 minute
  document.cookie = "consentCookie=1; expires = " + d + ";";
  //Hide the popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});
//Check if cookie is already present
const checkCookie = () => {
  //Read the cookie and split on "="
  let input = document.cookie.split("=");
  let cookie_exist = false;
  //Check for our cookie
  input.some((cookie) => {
    if (cookie == "consentCookie") {
        //Hide the popup
        popUp.classList.add("hide");
        popUp.classList.remove("show");
        cookie_exist = true;
        return;
      } 
  });
  if(!cookie_exist) {
    //Show the popup
    popUp.classList.add("show");
    popUp.classList.remove("hide");
  }   

};
//Check if cookie exists when page loads
window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};