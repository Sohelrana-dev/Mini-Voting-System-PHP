<?php 
require_once('include/admin_header.php');

$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_details = "SELECT * FROM candidate WHERE deleted_at IS NULL";
$final_quiry = mysqli_query($db_conect, $voter_details);
?>

<div class="col-8">
    <div class="card">
        <div class="card-header bg-blue-dark">
            <h2 class="text-white">Candidate List</h2>
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
                                    Protik Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Department: activate to sort column ascending"
                                    style="width: 208.234px;">
                                    Status</th>
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
                                <td><?= $candidate['protik_name'] ?></td>
                                <td>
                                    <?php if($candidate['disqualify_status'] == null){
                                        ?>
                                    <a dis href="Disqualified.php?id=<?= $candidate['id'];?>" class="btn btn-success  ">Disqualify</a>
                                        <?php
                                    } 

                                    elseif($candidate['disqualify_status'] == 1){
                                        ?>
                                        <a dis href="qualify.php?id=<?= $candidate['id'];?>" class=" btn btn-warning ">Qualify</a>
                                        <?php
                                    }
                                    ?>
                                    
                                </td>
                                <td>
                                    <img width="80" src="candidate/protik/<?= $candidate['protik_image'] ?>" alt="">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="candidate_edit.php?id=<?= $candidate['id'];?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="candidate_delete.php?id=<?= $candidate['id'];?>" class="btn btn-danger shadow btn-xs sharp"><i
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

<div class="col-lg-4">
    <div class="card">
        <div class="card-header bg-blue-dark">
            <h2 class="text-white">Add Candidate</h2>
        </div>
        <div class="card-body bg-blue-light">
            <form action="candidate_add_post.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label text-white">Candidate Name</label>
                    <input type="text" class="form-control" name="name" placeholder="enter candidate name">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Protik Name</label>
                    <input type="text" class="form-control" name="protik_name" placeholder="enter protik name">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Area</label>
                    <input type="text" class="form-control" name="area" placeholder="enter area">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Candidate Protik</label>
                    <input type="file" class="form-control" name="protik_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <img src="" class="mt-2" width="100" id="blah" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>