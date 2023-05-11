<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CopyDoc | Display</title>
  <link rel="icon" href="images/copydoc.ico" />
  
  <!-- Custom style:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- end style:css -->
  
  <style>
    body {
      padding: 10px;
      margin: 0;
      width: 100%;
      font-family: sans-serif;
      box-sizing: border-box;
    }
  </style>
  <script>
    window.print();
  </script>
</head>
<body>
  <table style="border-collapse: separate;">
    <tbody>
      <?php
      for ($i = 1; $i < 16; $i++) {
        ?>
          <tr>
          <?php for ($j = 1; $j < 3; $j++) { ?>
                <td>
                  <div>
                  <?php foreach ($_POST['text'] as $k => $text) {
                    $text = str_replace('<<', '<b>', $text);
                    $text = str_replace('>>', '</b>', $text);
                    $text = str_replace('<>', '<br>', $text);
                    ?>
                      <?php if ($_POST['type'][$k] == 'header'): ?>
                        <h6 class="<?php echo $_POST['sty'][$k] . ' ' . $_POST['size'][$k] ?>"><?php echo $text ?></h6>
                      <?php else: ?>
                        <p class="<?php echo $_POST['sty'][$k] . ' ' . $_POST['size'][$k] ?>"><?php echo $text ?></p>
                      <?php endif; ?>
                  <?php } ?>
                  </div>
                </td>
          <?php } ?>
          </tr>
      <?php }
      ?>
    </tbody>
  </table>
</body>
</html>