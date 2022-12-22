//tidak di muat di hal web utama, tetapi di console
var x = 10;
console.log('Hello World');
console.log('isis dari variable x adalah ' + x);

//------batas-----//
alert('Hello World'); //pop-up
alert('hallo');

var nama = prompt('masukkan nama'); //pop-up inputan, var untuk menampung nilai inputan//
alert('Welcome ' + nama);

var tes = confirm('kamu yakin?'); //pop-up untuk meminta konfirmasi dari user
if(tes == true) {
    alert('Kamu memilih iya!');
}else{
    alert('Kamu memilih tidak');
}