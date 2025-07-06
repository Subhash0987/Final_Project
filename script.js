document.addEventListener("DOMContentLoaded", function () {
  fetch("get_pg.php")
    .then(res => res.text())
    .then(data => {
      document.getElementById("pg-list").innerHTML = data;
    });
});
