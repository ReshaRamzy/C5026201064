<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("h1").addClass("red");
    $("h2").removeClass("red");
    $("h1, h2, div").toggleClass("important");
  });
});
</script>
<style>
.important {
  font-weight: bold;
  font-size: xx-large;
}

.red {
  color: red;
}
</style>
</head>
<body>

<h1>Heading 1</h1>
<h2 class="red">Heading 2</h2>

<div>This is some important text!</div><br>

<button>KLIK!!</button>

<p>contoh add: heading 1 akan ditambah warna merah<p>
<p>contoh remove: heading 2 akan hilang warna merahnya<p>
<p>contoh toggle: semua tulisan akan menjadi bold<p>

</body>
</html>
