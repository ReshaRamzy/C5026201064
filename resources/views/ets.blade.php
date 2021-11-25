<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Form Registrasi</title>
    <style>
        body{
            padding-top: 20px;
            padding-bottom: 40px;
        }

        #nama,
        #nik,
        #vaksin,
        #batch{
            border-radius: 0;
        }

    </style>

    <script>
        (function validate() {
            ;
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function () {
            $("#batch").on('input', function () {
                var expression = /[^0-9a-zA-z]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#nik").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#nama").on('input', function () {
                var expression = /[^a-zA-z ]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })


    </script>

  </head>
  <body style="background-color: rgb(209, 198, 138);">
    <div class="container pl-sm-2 pr-sm-2 pb-sm-4 pt-sm-3 border" style="background-color: white;">
        <p>Resha Ramzy Arkansa<br>
            Ramzy<br>
            5026201064</p>
        <h1 style="text-align: center;">Form Input Peserta Vaksinasi</h1>
        <form action="https://my.its.ac.id/" class="needs-validation" novalidate = method>
        <div class="form-group row pt-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Peserta :</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="nama" value="" required minlength="10">
                <div class="valid-feedback">Sesuai!</div>
                <div class="invalid-feedback">Minimal 10 kata</div>
            </div>
        </div>
        <div class="form-group row pt-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" required minlength="16" maxlength="16">
                <div class="valid-feedback">Sesuai!</div>
                <div class="invalid-feedback">Harus 16 angka</div>
            </div>
        </div>

        <div class="form-group row pt-3">
                <label for="select" class="col-sm-2 col-form-label">Jenis Vaksin :</label>
            <div class="col-sm-10">
                <select class="custom-select" name="select" id="select">
                    <option selected disabled value="">Choose</option>
                    <option>AZ</option>
                    <option>Sinovac</option>
                    <option>Moderna</option>
                </select>
                <div class="valid-feedback">Sesuai!</div>
                <div class="invalid-feedback">Harus diisi</div>
            </div>
        </div>

        <div class="form-group row pt-3">
                <label for="batch" class="col-sm-2 col-form-label">No Batch :</label>
            <div class="col-sm-10 pb-5">
                <input type="text" class="form-control" id="batch" required minlength="5">
                <div class="valid-feedback">Sesuai!</div>
                <div class="invalid-feedback">Harus diisi</div>
            </div>

            <div class="col-sm-10">
                <input style="background: rgb(245, 22, 67); font-weight: bold;" type="reset" value="Reset">
                <input style="background: rgb(28, 219, 28); font-weight: bold;" type="submit" value="Submit">
            </div>

        </div>
      </form>
  </body>
</html>
