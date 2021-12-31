<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/recta/dist/recta.js"></script>
</head>
<body>
    <button onclick="onClick()">Print</button>

<script type="text/javascript">
  var printer = new Recta('123456789', '3000')

  function onClick () {
    printer.open().then(function () {
      printer.align('center')
        .text('Hello World !!')
        .print()
    })
  }
</script>
</body>
</html><?php /**PATH C:\laragon\www\pos\resources\views/print.blade.php ENDPATH**/ ?>