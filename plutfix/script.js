// script.js atau bagian dalam tag <script>
window.onscroll = function() {
    var button = document.getElementById("whatsapp-button");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
};
