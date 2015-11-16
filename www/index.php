<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World!!</title>

    <script src="js/clipboard.min.js"></script>

    <script>

        function copyURL(){

            var copy = document.getElementById('copy');
            var clipboard = new Clipboard(copy);

        }

        document.addEventListener("DOMContentLoaded", copyURL);

    </script>

</head>
<body>

<h1>
    H1 Заголовок
</h1>
<p>
    создаем новую ветку<br>
    еще одна строчка для branch1<br>


    <a href="https://zenorocha.github.io/clipboard.js/">описание clipboard.js</a>

</p>

<!-- Target -->
<input id="btn" value="http://minutta.ru/?cid=<?php echo $_GET['val'];?>">

<!-- Trigger -->
<button id="copy" class="btn" data-clipboard-target="#btn">
    <img src="img/clippy.svg" alt="Copy to clipboard" width="13px">
</button>

</body>
</html>