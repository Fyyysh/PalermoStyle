function toggleFilter(filterId, iconId) {
    var filter = document.getElementById(filterId);
    var icon = document.getElementById(iconId);
    if (filter.style.display === "none") {
        filter.style.display = "block";
        icon.src = "./img/productos/boxicon/bx-chevron-up.svg";
    } else {
        filter.style.display = "none";
        icon.src = "./img/productos/boxicon/bx-chevron-down.svg";
    }
}