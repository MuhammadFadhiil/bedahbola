//smoothScroll

var posY  = 0;
var jarak = 15;

function smoothScroll(id){
  var target = document.getElementById(id).offsetTop; // jarak antara atas dan div

  var scrollAnimate = setTimeout(function(){
    smoothScroll(id);
  }, 5) // fungsi menscroll selama 5 detik

posY = posY + jarak;

  if (posY >= target){ // menghentikan fungsi scrollAnimate
    clearTimeout(scrollAnimate);
    posY = 0;
  }else {
    window.scroll(0, posY) //vertical dan horizontal (x,y)
  }
  return false;
}

// fungsi untuk validasi formular

function validasi(form){
  var lolos = true;
  var errortext = '';

  for(i=0; i<3; i++){
    if(form[i].value.trim().length <= 0){

      switch (i) {
        case 0:
          errortext = 'Nama';
          break;
          case 1:
            errortext = 'Email';
            break;
            case 2:
              errortext = 'Kritik & Saran';
              break;
        default:

      }

      //kalau belum ada error
      if(form[i].nextElementSibling.className != 'error'){
        form[i].style.borderColor = 'red';
        form[i].insertAdjacentHTML('afterend', "<div class='error'>"+errortext+" tidak boleh kosong </div>");
      }

      lolos = false;

    }else {
      // hapus error
      if(form[i].nextElementSibling.className == 'error'){
        form[i].style.borderColor = '#00a651';
        form[i].nextElementSibling.remove();
      }
    }
  }//end for
  return lolos;
} // end fungsi untuk validasi formular


// fungsi untuk galeri gambar

var target_gambar = document.getElementById('target_gambar');
var array_gambar  = document.getElementById('artikel_lain').children;
var nom_sekarang = 0;

function ganti_gambar(gambar) {
  target_gambar.src = gambar.getAttribute('src');
  nom_sekarang = gambar.className;
}

function ganti_sebelum() {
  nom_sekarang = nom_sekarang - 1;
  if (nom_sekarang < 0) nom_sekarang = 2;

  target_gambar.src = array_gambar[nom_sekarang].getAttribute("src");
}

function ganti_berikut() {
  nom_sekarang = nom_sekarang + 1;
  if (nom_sekarang > 2) nom_sekarang = 0;

  target_gambar.src = array_gambar[nom_sekarang].getAttribute("src");
}
