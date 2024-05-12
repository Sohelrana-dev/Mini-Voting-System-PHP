<?php 
require_once('include/admin_header.php');

$candidate_id = $_GET['id'];
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
$voter_details = "SELECT * FROM candidate WHERE id = $candidate_id";
$final_quiry = mysqli_query($db_conect, $voter_details);
$after_fetch = mysqli_fetch_assoc($final_quiry);
?>
<div class="col-lg-8 m-auto">
    <div class="card">
        <div class="card-header bg-blue-light">
            <h2 class="text-white">Candidate Edit Form</h2>
        </div>
        <div class="card-body bg-blue-dark">
            <form action="candidate_edit_post.php?id=<?= $after_fetch['id']; ?>" method="post"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label text-white">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $after_fetch['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Protik Name</label>
                    <input type="text" class="form-control" name="protik_name" value="<?= $after_fetch['protik_name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Area</label>
                    <input type="text" class="form-control" name="area" value="<?= $after_fetch['area']; ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Protik Image</label>
                    <input type="file" class="form-control" name="protik_image" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                    <img width="100" src="" id="blah2" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>