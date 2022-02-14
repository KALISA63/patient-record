document.getElementById('login').addEventListener('click', function (e) {
    e.preventDefault();
    const email = document.getElementById('exampleInputEmail1').value;
    const password = document.getElementById('exampleInputPassword1').value;

    if (email !== "" || password !== "") {
        if (email === "kaljama63@gmail.com" && password === "218014573") {
            sessionStorage.setItem("email",email);
            sessionStorage.setItem("password",password);
            location.href='manage.html';
        }else {
            alert("Incorrect email or password!")
        }
    }else {
        alert("Provide all information")
    }

});