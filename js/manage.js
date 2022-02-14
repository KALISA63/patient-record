const email=sessionStorage.getItem("email");

if(!email){
    location.href='index.html';
}