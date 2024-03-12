<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container nt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Murid</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Murid" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Pelajaran</label>
                    <div class="col-8">
                        <select id="pelajaran" name="pelajaran" class="custom-select">
                            <option value="">Pilih Mata Pelajaran</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                            <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="midterm" class="col-4 col-form-label">Nilai Midterm</label>
                    <div class="col-8">
                        <input id="midterm" name="midterm" placeholder="Nilai Midterm" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai Final</label>
                    <div class="col-8">
                        <input id="final" name="final" placeholder="Nilai Final" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label>
                    <div class="col-8">
                        <input id="praktikum" name="praktikum" placeholder="Nilai Praktikum" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>