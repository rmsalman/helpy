<?php
//echo $this->session->userdata('user_id');
//echo '<pre>';
//print_r($messages);
//echo '</pre>';
//
//echo '<pre>';
//print_r($messages_sent);
//echo '</pre>';

?>
<div class="container">


    <h2 class="text-center">Messages Recieved</h2>

<table class="table table-default table-bordered ">
    <thead>
    <tr>
        <th>#ID</th>
        <th>#, Name</th>
        <th>Message </th>
        <th>Message At</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php

    if(!empty($messages_sent)){
        foreach ($messages_sent as $message){
            ?>
    <tr>
        <td><?= $message['mes_id']?></td>
        <td><?= $message['mes_to'] .',  '. $message['first_name'].'  '. $message['last_name'] ?></td>
        <td><?= $message['mes_messages']?></td>
        <td><?= $message['mes_created_at']?></td>
        <td><a href="<?= base_url() ?>messages/send/<?= $message['id'] ?>">Reply</a></td>
    </tr>
    <?php
        }
    }else {

        ?>
        <tr><td colspan="5"><center>Sorry no Messages found</center></td></tr>
        <?php
    }
    ?>
    </tbody>
    </table>


    <br>


    <h2 class="text-center">Messages Sent</h2>

    <table class="table table-default table-bordered ">
        <thead>
        <tr>
            <th>#ID</th>
            <th>#, Name</th>
            <th>Message </th>
            <th>Message At</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if(!empty($messages)){
            foreach ($messages as $message){
                ?>
                <tr>
                    <td><?= $message['mes_id']?></td>
                    <td><?= $message['mes_to'] .',  '. $message['first_name'].'  '. $message['last_name'] ?></td>
                    <td><?= $message['mes_messages']?></td>
                    <td><?= $message['mes_created_at']?></td>
                </tr>
                <?php
            }
        }else {

            ?>
            <tr><td colspan="4"><center>Sorry no Messages found</center></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>