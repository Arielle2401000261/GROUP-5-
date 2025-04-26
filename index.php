<!DOCTYPE html>
<html>
<head>
    <title>AKANYANA PHP</title>
</head>
<body>
    <h1>AKANYANA PHP</h1>

    <pre>
    A
   A A
  A   A
 AAAAAAA
A       A
    </pre>

    <p>SHA256 of your name:</p>
    <p>
        <?php
            print hash('sha256', 'AKANYANA');
        ?>
    </p>
</body>
</html>
