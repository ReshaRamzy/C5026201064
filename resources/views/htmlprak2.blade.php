<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Form REgistrasi</title>
    <style>
        body{
            padding-bottom: 40px;
            padding-top: 20px;
        }
        #name,
        #address,
        #email,
        #pass,
        #zip
        #tele,
        #select{
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
            $("#tele").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#zip").on('input', function () {
                var expression = /[^0-9]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })

        $(document).ready(function () {
            $("#name").on('input', function () {
                var expression = /[^a-zA-z ]/g;
                if ($(this).val().match(expression)) {
                    $(this).val($(this).val().replace(expression, ""));
                }
            })
        })
    </script>
</head>
<body style="background-color: cornsilk;">
    <div class="container pl-sm-2 pr-sm-2 pb-sm-4 border" style="background-color: white;">
        <h1 style="text-align: center;">FORM REGISTRASI</h1>
        <form action="https://my.its.ac.id/" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Input anda salah</div>
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Input anda salah</div>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" class="form-control" id="email" placeholder="">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Input anda salah</div>
        </div>
        <div class="form-group">
            <label for="pass" class="form-label">Password:</label>
            <input type="Password" class="form-control" id="pass" placeholder="" required minlength="8" maxlength="16">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Password harus 8 s.d. 16 karakter</div>
        </div>
        <div class="form-group">
            <label for="tele" class="form-label">Telephone:</label>
            <input type="text" class="form-control" id="tele" placeholder="" required minlength="7">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">No telepon minimal 7 angka</div>
        </div>
        <div class="form-group">
            <label for="select">Select Your Course:</label>
            <select class="custom-select" name="select" id="select">
                <option selected disabled value="">Choose</option>
                <option>BTECH</option>
                <option>BBA</option>
                <option>BCA</option>
                <option>BCOM</option>
                <option>GEEKFORGEEKS</option>
            </select>
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Input anda salah</div>
        </div>
        <div class="form-group">
            <label for="zip" class="form-label">Zip Code:</label>
            <input type="text" class="form-control" id="zip" placeholder="" required minlength="6" maxlength="6">
            <div class="valid-feedback">Sesuai!</div>
            <div class="invalid-feedback">Zip code harus 6 angka</div>
        </div>
        <div>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </div>
    </div>

    </form>

</body>
</html>
