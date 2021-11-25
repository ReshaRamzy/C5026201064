<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>MENGHITUNG ENERGI POTENSIAL</title>
  <style>
      body {
          font-family: monospace;
          background-color: coral;
            }

  </style>

</head>
<body>
    <div class="container pt-sm-3 pb-1">
    <h1>Hitung energi potensial suatu benda!!</h1>
    </div>
    <div class="container pt-sm-2 pb-1">
    <h2>Masukkan angka-angka yang ingin dihitung</h2>
    </div>
    <div class="container">
    <form action="hasil" method="post" name="formulir">
        @csrf
        <label for="fname">Massa Benda (kg):</label><br>
        <input type="number" id="massa" name="massa"><br>
        <label for="lname">Ketinggian Benda (cm):</label><br>
        <input type="number" id="tinggi" name="tinggi"><br><br>
        <input type="submit" name="hasil" id="Hasil" value="Hasil">
    </form>
</body>

</html>
