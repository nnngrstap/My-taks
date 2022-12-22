<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Ajax</title>
</head>
<body>
<form id="form_mahasiswa">
    <select name="prodi" id="prodi" class="select_filter">
        <option value="" disabled selected> Pilih Prodi </option>
        <option value="IF"> Teknik Informatika </option>
        <option value="TG"> Teknik Geofisika </option>
        <option value="SI"> Teknik Sipil </option>
        <option value="TA"> Teknik Pertambangan </option>
        <option value="TB"> Teknik Biomedis</option>
        <option value="MT"> Teknik Mesin</option>
        <option value="TP"> Teknologi Pangan</option>
        <option value="PWK"> Perencanaan Wilayah dan Kota</option>
    </select>
</form>
<button id="btn_tampil"> Tampilkan </button>
<br>
<div id="tampil_data"></div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {
        $("#tampil_data").load("tampil.php");
        $("#btn_tampil").click(function() {
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
                type: "POST",
                url: "tambah.php",
                data: data,
                success: function(response) {
                    $("#tampil_data").load("tampil.php");
                }
            });
        });
    });
</script>
</body>
</html>