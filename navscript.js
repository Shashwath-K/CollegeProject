const nav = document.querySelector('.navbar')
fetch("/navbar.php")
.then(res=>res.text())
.then(data=>{
    nav.innerHTML=data
})