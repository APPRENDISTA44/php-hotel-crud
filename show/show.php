<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php';?>

<main>


<?php if (!empty($room)) { ?>

  <h2>Stanza numero: <?php echo $room['room_number'] ?></h2>
  <ul>
    <li>ID : <?php echo $room['id'] ?></li>
    <li>Numero stanza : <?php echo $room['room_number'] ?></li>
    <li>Piano : <?php echo $room['floor'] ?></li>
    <li>Letti : <?php echo $room['beds'] ?></li>
    <li>data di creazione <?php echo $room['created_at'] ?></li>
  </ul>

<?php }else { ?>
<p>la stanza non esiste</p>
<?php } ?>

</main>
