// ambil elemen butuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// tambahkan event ketika keywoard di tulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  var $xhr = new XMLHttpRequest();

  // kesiapan ajax
  $xhr.onreadystatechange = function () {
    if ($xhr.readyState == 4 && $xhr.status == 200) {
      container.innerHTML = $xhr.responseText;
    }
  };

  // ekstensi ajax
  $xhr.open("GET", "../ajax/item.php?keyword=" + keyword.value, true);
  $xhr.send();
});
