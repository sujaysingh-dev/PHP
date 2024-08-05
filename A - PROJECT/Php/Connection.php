<?php

    $Conn = mysqli_connect('localhost', 'root', '', 'college');

    if(!$Conn)
    {
        ?>
            <script>
                alert('Server Lost');
            </script>
        <?php
    }

?>