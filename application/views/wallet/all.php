<?php
if($this->session->userdata('role_slug') !== 'admin'){
    redirect('wallet');
}
?>



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

<div class="container">
    <h2 class="text-center">All Transections</h2>
    <table class="table dattable table-default table-bordered ">
        <thead>
        <tr>
            <th>#ID</th>
            <th>#, Name</th>
            <th>Tansfered by </th>
            <th>Tansfered At</th>
            <th>Ammount</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!empty($all_wallet)){
            foreach ($all_wallet as $all_walletz){
                ?>
                <tr>
                    <td><?= $all_walletz['wal_id']?></td>
                    <td><?= $all_walletz['id'] .',  '. $all_walletz['first_name'].'  '. $all_walletz['last_name'] ?></td>
                    <td><?=$all_walletz['wal_by'] . ', ' . $all_walletz['by_first_name'] . ' ' . $all_walletz['by_last_name']?></td>
                    <td><?= $all_walletz['wallet_date']?></td>
                    <td><?= $all_walletz['wal_currency']?> <small>dhr</small></td>
                </tr>
                <?php
            }
        }else {
            ?>
            <tr><td colspan="5">Sorry no Transaction found</td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        $('.dattable').DataTable();
    } );
</script>