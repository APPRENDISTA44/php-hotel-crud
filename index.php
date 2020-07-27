<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/partials/header.php';
?>

    <main>
      <table class="room-list">
        <thead>
          <tr>
            <th>ID</th>
            <th>Numero Stanze</th>
            <th>Piano</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($rooms as $room) {?>
          <tr>
            <td> <?php echo $room['id']; ?></td>
            <td> <?php echo $room['room_number']; ?></td>
            <td> <?php echo $room['floor']; ?></td>
          </tr>
        <?php }?>

        </tbody>
      </table>
    </main>

  </body>
</html>
