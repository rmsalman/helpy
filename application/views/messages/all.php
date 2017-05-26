<?php
//echo $this->session->userdata('user_id');
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
//
//echo '<pre>';
//print_r($messages_sent);
//echo '</pre>';

if($this->session->userdata('role_slug') !== 'admin'){
    redirect('messages');
}


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
                </tr>
                <?php
            }
        }else {

            ?>
            <tr><td colspan="5">Sorry no Messages found</td></tr>
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
            <tr><td colspan="4">Sorry no Messages found</td></tr>
            <?php
        }

        ?>
        </tbody>
    </table>
</div>