<?php 
require_once('include/admin_header.php');

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_details = "SELECT * FROM candidate WHERE deleted_at IS NULL AND disqualify_status IS NULL";
$final_quiry = mysqli_query($db_conect, $voter_details);


$voter_details = "SELECT * FROM candidate WHERE deleted_at IS NULL AND disqualify_status IS NULL";
$final_quiry = mysqli_query($db_conect, $voter_details);

// $voter_details = "SELECT COUNT(*) FROM vote WHERE ";
// $final_quiry = mysqli_query($db_conect, $voter_details);
?>

<div class="col-8">
    <div class="card">
        <div class="card-header bg-blue-dark">
            <h2 class="text-white">Candidate List</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive table-bordered">
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
                                    aria-label="Name: activate to sort column ascending" style="width: 172.734px;">
                                    Area</th>
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
                                    Total Vote</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                                <?php 
                                foreach($final_quiry as $sl=>$candidate){
                                    $candidate_id = $candidate['id'];
                                    $vote_count = "SELECT COUNT(*) AS result FROM `vote` WHERE candidate_id = $candidate_id";
                                    $quiry = mysqli_query($db_conect, $vote_count);
                                    $count_assoc = mysqli_fetch_assoc($quiry);
                                ?>
                            <tr role="row" class="odd">
                                <td><?= $sl+1 ?></td>
                                <td><?= $candidate['name'] ?></td>
                                <td><?= $candidate['area'] ?></td>
                                <td><?= $candidate['protik_name'] ?></td>
                                <td>
                                    <img width="80" src="candidate/protik/<?= $candidate['protik_image'] ?>" alt="">
                                </td>
                                
                                <td>
                                    <?= $count_assoc['result'] ?>
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