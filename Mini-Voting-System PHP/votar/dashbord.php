<?php 
    require_once('include/header.php');
  
    $voter_id = $_SESSION['voter_id'];
    $db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');


    $candidate_details = "SELECT * FROM candidate WHERE deleted_at IS NULL AND disqualify_status IS NULL";
    $final_quiry = mysqli_query($db_conect, $candidate_details);

    $vote_details = "SELECT COUNT(*) AS result FROM `vote` WHERE voter_id = $voter_id";
    $final_quiry2 = mysqli_query($db_conect, $vote_details);
    $vote_fetch2 = mysqli_fetch_assoc($final_quiry2);

   if($vote_fetch2['result'] == 1){
        $vote_details4 = "SELECT candidate_id FROM vote WHERE voter_id = '$voter_id'";
        $final_quiry4 = mysqli_query($db_conect, $vote_details4);
        $candidate_id = mysqli_fetch_assoc($final_quiry4)['candidate_id'];

         $vote_detail = "SELECT * FROM candidate WHERE id = '$candidate_id'";
        $final_quiry3 = mysqli_query($db_conect, $vote_detail);
        $vote_fetch3 = mysqli_fetch_assoc($final_quiry3);
   }

   
    
?>
<?php 
if($vote_fetch2['result'] == 1){
    ?>

<div class="col-lg-6">
    <div class="card">
    <div class="card-header m-auto">
        <h2 class="text-success">Congratulations</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <tr>
                <th>1</th>
                <th>Vote Status</th>
                <td class="text-success">Successful</td>
            </tr>
            <tr>
                <th>2</th>
                <th>Candidate Name</th>
                <td><?= $vote_fetch3['name'] ?></td>
            </tr>
            <tr>
                <th>3</th>
                <th>Protik Name</th>
                <td><?= $vote_fetch3['protik_name'] ?></td>
            </tr>
            <tr>
                <th>4</th>
                <th>Area</th>
                <td><?= $vote_fetch3['area'] ?></td>
            </tr>
            <tr>
                <th>5</th>
                <th>Protik Image</th>
                <td>
                    <img width="200" src="../dashbord/candidate/protik/<?= $vote_fetch3['protik_image'] ?>" alt="">
                </td>
            </tr>
        </table>
    </div>
</div>
</div>

<?php
}

else{
    ?>
    <div class="col-lg-7">
    <h1 class="text-primary bg-light mb-4"> Welcome Mr,<strong
            class="text-success"> <?= $after_fetch['name']; ?></strong> </h1>
    <div class="card">
        <div class="card-header">
            <h2>Candidate List</h2>
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
                                    aria-label="Name: activate to sort column ascending" style="width: 172.734px;">
                                    Area</th>
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
                                <td><?= $candidate['area'] ?></td>
                                <td>
                                    <img width="80" src="../dashbord/candidate/protik/<?= $candidate['protik_image'] ?>"
                                        alt="">
                                </td>
                                <td>
                                    <a href="voting.php?id=<?= $candidate['id'] ?>" class="btn btn-secondary">Vote Now</a>
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
}

?>

<div class="col-lg-5">
    <div class="card" style="height: 500px">
        <div class="card-header m-auto">
            <h2>Your Short Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
               <tr>
                    <th>1</th>
                    <th>Name</th>
                    <td><?= $after_fetch['name']; ?></td>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Email</th>
                    <td><?= $after_fetch['email']; ?></td>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Phone Number</th>
                    <td><?= '0'.$after_fetch['phone_number']; ?></td>
                </tr>
                <tr>
                    <th>4</th>
                    <th>NID Number</th>
                    <td><?= $after_fetch['nid_number']; ?></td>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Photo</th>
                    <td>
                        <img width="100" src="votar_image/<?= $after_fetch['image']; ?>" alt="">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
    require_once('include/footer.php');
?>