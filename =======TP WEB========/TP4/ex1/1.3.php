<?Php



?>

<table border="1">
    <tr>
        <th>$SERVER_ADDR</th>
        <td><?php echo $_SERVER['SERVER_ADDR'] ; ?></td>
    </tr>

    <tr>
        <th>$HTTP_HOST</th>
        <td><?php echo $_SERVER['HTTP_HOST'] ; ?></td>
    </tr>

    <tr>
        <th>$REMOTE_ADDR</th>
        <td><?php echo $_SERVER['REMOTE_ADDR'] ; ?></td>
    </tr>

    <tr>
        <th>gethostbyAddr($REMOTE_ADDR)</th>
        <td><?php echo gethostbyAddr($_SERVER['SERVER_ADDR']) ; ?></td>
    </tr>

    <tr>
        <th>$HTTP_USER_AGENT</th>
        <td><?php echo $_SERVER['HTTP_USER_AGENT'] ; ?></td>
    </tr>

</table>