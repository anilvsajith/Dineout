<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo base_url().'admin/input_hotel'; ?>">
            <input type="text" name="hotelname" placeholder="hotel name"><br>
            <input type="text" name="hoteltype" placeholder="hotel type"><br>
            <input type="text" name="hotellat" placeholder="hotel lat"><br>
            <input type="text" name="hotellng" placeholder="hotel lng"><br>
            <input type="text" name="user" placeholder="hotel user"><br>
            <input type="submit" value="Add">
        </form>
    </body>
</html>