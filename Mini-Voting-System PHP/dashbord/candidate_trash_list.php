<?php 
require_once('include/admin_header.php');

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_details = "SELECT * FROM candidate WHERE deleted_at IS NOT NULL";
$final_quiry = mysqli_query($db_conect, $voter_details);
?>

<div class="col-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Voter List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                    <table id="example3" class="display min-w850 dataTable no-footer" role="grid"
                        aria-describedby="example3_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label=": activate to sort column descending"
                                    style="width: 35.25px;">SL
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 172.734px;">
                                    Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Department: activate to sort column ascending"
                                    style="width: 208.234px;">
                                    Protik Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Department: activate to sort column ascending"
                                    style="width: 208.234px;">
                                    Protik</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Department: activate to sort column ascending"
                                    style="width: 208.234px;">
                                    Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                                <?php 
                                foreach($final_quiry as $sl=>$candidate){
                                ?>
                            <tr role="row" class="odd">
                                <td><?= $sl+1 ?></td>
                                <td><?= $candidate['name'] ?></td>
                                <td><?= $candidate['protik_name'] ?></td>
                                <td>
                                    <img width="80" src="candidate/protik/<?= $candidate['protik_image'] ?>" alt="">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="candidate_restore.php?id=<?= $candidate['id'];?>" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-undo"></i></a>
                                        <a href="candidate_parmanent_delete.php?id=<?= $candidate['id'];?>" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1 to 10
                        of 30
                        entries</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>