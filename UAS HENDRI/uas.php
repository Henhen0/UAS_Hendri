<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <form action="validasiuas.php" class="bg-white" method="post">
    <center>
        <img src="yayasan.png" alt="" style="width: 170px;">
    <h4>PENGGAJIHAN</h4>
    <h4>GURU/KARYAWAN YAYASAN ASSALAAM</h4>
     
     <table class="bg-white shadow">
        <tr>
            <td class="bg-light pt-2 ps-5 pb-2">
                Data Penggajihan
            </td>
        </tr>
     <tr>
        <td class="ps-5">No</td><br>
    </tr>
    <tr>
        <td class="ps-5"><input type="text" name="no" placeholder="No" class="pe-5" required></td>
     </tr>
     <tr>
        <td class="ps-5">Nama</td><br>
    </tr>
    <tr>
        <td class="ps-5"><input type="text" name="nama" placeholder="Nama" class="pe-5" required></td>
     </tr>
     <tr>
        <td class="ps-5">Unit Pendidikan</td>
     </tr>
     <tr>
        <td class="ps-5"><select name="unit" class="pe-5">
            <option>pilih unit pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMK">SMK</option>
        </select></td>
     </tr>
     <tr>
        <td class="ps-5">Tanggal Gaji</td>
     </tr>
     <tr>
        <td class="ps-5"><input type="date" name="date" class="pe-5"></td>
     </tr>

     <tr>
        <td class="ps-3">
            <h4 class="pt-4 ps-5">GAJI</h4>
            <td>
            <h4 class="pt-4 ps-2">POTONGAN</h4>
            </td>
            </tr>
        </td>
     </tr>

     <tr>
        <td class="ps-5"><i>Jabatan</i><br>
        <select name="jabatan">
            <option>Pilih Jabatan</option>
            <option value="Kepala Sekolah">Kepala Sekolah</option>
            <option value="Wakasek">Wakasek</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select> <br>
    Lama Kerja <br> <input type="number" name="lamakerja" placeholder="Lama Kerja" required> <br>

    Status Kerja <br> <select name="Status">
        <option>Pilih Status</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
    </select>
    </td>

    <td class="pe-5">
        BPJS <br> <input type="number" name="bpjs" required> <br> Pinjaman <br> <input type="number" name="pinjaman" placeholder="Pinjaman" required> <br> Cicilan <br> <input type="number" name="cicilan" placeholder="Tabungan" required><br>
        Infaq <br> <input name="infaq" type="number" placeholder="Lainnya" required> <br><br> <input type="submit" class="btn btn-primary" name="proses" value="Proses">
    </td>
     </tr>

     </table>

     


     </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

   </form>
  </body>
</html>