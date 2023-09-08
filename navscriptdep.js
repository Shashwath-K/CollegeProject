const nav = document.querySelector('.navbar')
fetch("navbarau.html")
.then(res=>res.text())
.then(data=>{
    nav.innerHTML=data
})