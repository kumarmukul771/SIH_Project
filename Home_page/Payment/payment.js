function preloader() {
    // document.querySelector(".container").style.display = "block";
    document.querySelector("#an").style.display = "none";
    alert("You have successfully paid the amount");
}

function verify() {
    var no = document.getElementById("no");
    var cv = document.getElementById("cv");
    if (no.value.length != 16) {
        alert("Please Enter a valid card no");
    } else if (cv.value.length != 3) {
        alert("Wrong CV");
    } else {
        document.querySelector(".container").style.display = "none";
        document.querySelector("#an").style.display = "block";
        setInterval(() => {
            preloader();
        }, 10000);
        clearInterval(preloader);
    }

}