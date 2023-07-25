// JavaScript
var btnvar = document.getElementsByClassName('fav');

function wishlist(event) {
  var clickedBtn = event.target; // Mendapatkan elemen yang diklik dari event
  if (clickedBtn.style.color == "red") {
    clickedBtn.style.color = "grey";
  } else {
    clickedBtn.style.color = "red";
  }
}

// Menambahkan event listener pada setiap elemen dengan kelas 'bttn'
for (var i = 0; i < btnvar.length; i++) {
  btnvar[i].addEventListener('click', wishlist);
}

