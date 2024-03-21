<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pertemuan 4 - Latihan Javascript Latihan 18 Run Only In Htdocs Folder</title>
  </head>
  <body>
    <script language="JavaScript">
      function ckForm() {
        var str, error;
        str = "";
        error = 0;
        if (document.getElementById("txtNama").value.length <= 0) {
          str += "- Nama tidak boleh kosong.\n";
          error++;
        }
        if (
          document.getElementById("rdJenisKelamin_1").checked == false &&
          document.getElementById("rdJenisKelamin_2").checked == false
        ) {
          str += "- Jenis kelamin belum ditentukan.\n";
          error++;
        }
        if (document.getElementById("txtAlamat").value.length <= 0) {
          str += "- Alamat tidak boleh kosong.\n";
          error++;
        }
        if (error > 0) {
          alert("Terdapat kesalahan : \n" + str);
          return false;
        } else {
          return true;
        }
      }
    </script>
    <h2>Formulir Biodata</h2>
    <form action="08.latihan_18.php" method="post" onSubmit="return ckForm()">
      Nama : <input type="text" name="txtNama" id="txtNama" />
      <br />
      Jenis Kelamin :
      <input
        type="radio"
        name="rdJenisKelamin"
        id="rdJenisKelamin_1"
        value="Laki-Laki"
      />
      Laki-Laki
      <input
        type="radio"
        name="rdJenisKelamin"
        id="rdJenisKelamin_2"
        value="Perempuan"
      />
      Perempuan
      <br />
      Alamat : <textarea name="txtAlamat" id="txtAlamat"></textarea>
      <br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
