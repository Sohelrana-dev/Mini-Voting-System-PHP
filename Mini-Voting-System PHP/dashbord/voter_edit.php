<?php 
require_once('include/admin_header.php');
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');

$voter_id = $_GET['id'];
$voter_details = "SELECT * FROM `voters`  WHERE id = $voter_id";
$final_quiry = mysqli_query($db_conect, $voter_details);
$after_fetch = mysqli_fetch_assoc($final_quiry);

?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header bg-blue-light">
            <h2 class="text-white">Voter Edit</h2>
        </div>
        <div class="card-body bg-blue-dark">
            <form action="voter_edit_post.php?id=<?= $after_fetch['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Name</label>
                            <input type="text" class="form-control" name="name" value="<?= $after_fetch['name']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $after_fetch['email']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number"
                                value="<?='0'.$after_fetch['phone_number']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">NID Number</label>
                            <input type="number" class="form-control" name="nid_number"
                                value="<?= $after_fetch['nid_number']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Father Name</label>
                            <input type="text" class="form-control" name="father_name"
                                value="<?= $after_fetch['father_name']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Mother Name</label>
                            <input type="text" class="form-control" name="mother_name"
                                value="<?= $after_fetch['mother_name']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Sub District</label>
                            <input type="text" class="form-control" name="sub_district"
                                value="<?= $after_fetch['sub_district']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">District</label>
                            <input type="text" class="form-control" name="district"
                                value="<?= $after_fetch['district']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Division</label>
                            <input type="text" class="form-control" name="division"
                                value="<?= $after_fetch['division']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Image</label>
                            <input type="file" class="form-control" name="image"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img src="" class="mt-3 ml-3" width="70" id="blah" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 d-flex justify-content-end">
                           <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>