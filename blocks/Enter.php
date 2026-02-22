<?php
         if($_COOKIE['user'] == 'True'):
        ?>
        <a class="btn btn-outline-light me-2" href="/auth.php">Шығу</a>
        <?php else: ?>
          <a class="btn btn-outline-light me-2" href="/login.php">Кіру</a>
          <?php endif; ?>