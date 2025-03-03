function loadApp(appUrl) {
  fetch(appUrl)
    .then((response) => response.text())
    .then((html) => {
      document.getElementById("app-container").innerHTML = html;
    })
    .catch((error) => console.log("Gagal memuat aplikasi:", error));
}

function logout() {
  window.location.href = "logout.php";
}
