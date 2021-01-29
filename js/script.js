if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    document.querySelector(".apps").style.display = "flex";
    alert(test(navigator.userAgent));
} 
if (/Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    document.querySelector(".desktop_btn").style.display = "none";
    document.querySelector(".apps").style.display = "none";
    } else {
    document.querySelector(".apps").style.display = "none";
    document.querySelector(".android_btn").style.display = "none";
}