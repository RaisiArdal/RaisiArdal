function showReadMore() {
    var dots = document.getElementsByClassName("dots");
    var moreText = document.getElementsByClassName("more");
    var btnText = document.getElementsByClassName("moreBtn");

    if (dots.display === "none") {
        dots.display = "inline";
        btnText.innerHTML = "ادامه مطلب";
        moreText.display = "none";
    } else {
        dots.display = "none";
        btnText.innerHTML = "خلاصه مطلب";
        moreText.display = "inline";
    }

};

