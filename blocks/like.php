<?php
         if($_COOKIE['user'] == 'True'):
        ?>
        <p><a class="btn btn-success" href="#">лайк</a></p>
        <?php else: ?>
         <p><a class="btn btn-secondary" href="/login.php">лайк</a></p>
          <?php endif; ?>