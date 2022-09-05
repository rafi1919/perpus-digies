function login(){ 
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if (user=="admin" && pass=="123"){
        alert("Selamat anda berhasil login");
        window.location.href = "../anggota/view.php";
        
    }else{
        alert("Username dan password anda salah!");
    }
}