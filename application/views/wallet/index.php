<div class="container">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

    <h1 class="text-center text-red"><?=  $this->session->flashdata('error')?></h1>

<h2 class="text-center">Money Sent <small><?= $cur->currency ?> dhr</small></h2>
<table class="table table-default table-bordered ">
    <thead>
    <tr>
        <th>#ID</th>
        <th>#, Name</th>
        <th>Money </th>
        <th>Sent At</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php

    if(!empty($messages)){
        foreach ($messages as $message){
            ?>
    <tr>
        <td><?= $message['wal_id']?></td>
        <td><?= $message['wal_of'] .',  '. $message['first_name'].'  '. $message['last_name'] ?></td>
        <td><?= $message['wal_currency']?></td>
        <td><?= $message['wallet_date']?></td>
        <td><a href="<?= base_url() ?>wallet/transfer/<?= $message['id'] ?>">Transfer Again</a></td>
    </tr>
    <?php
        }
    }else {

        ?>
        <tr><td colspan="5"><center>Sorry No Transfer Made</center></td></tr>
        <?php
    }
    ?>
    </tbody>
    </table>


    <br>


    <h2 class="text-center">Money Recieved <small><?= $cur_rec_total->currency?> dhr</small></h2>

    <table class="table table-default table-bordered ">
        <thead>
        <tr>
            <th>#ID</th>
            <th>#, Name</th>
            <th>Money </th>
            <th>Recieved At</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if(!empty($cur_rec)){
            foreach ($cur_rec as $message){
                ?>
                <tr>
                    <td><?= $message['wal_id']?></td>
                    <td><?= $message['wal_by'] .',  '. $message['first_name'].'  '. $message['last_name'] ?></td>
                    <td><?= $message['wal_currency']?></td>
                    <td><?= $message['wallet_date']?></td>
                </tr>
                <?php
            }
        }else {
            ?>
            <tr><td colspan="4"><center>Sorry No Transfer Made</center></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <br><br><br>
    <h1 class="text-center">
        Total  <small> <?= $cur_rec_total->currency - $cur->currency; ?> dhr </small>
    </h1>
</div>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        $('table').DataTable();
    } );
</script>