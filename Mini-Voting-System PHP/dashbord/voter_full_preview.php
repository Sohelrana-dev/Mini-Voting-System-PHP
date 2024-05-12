<?php 
require_once('include/admin_header.php');
$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');

$voter_id = $_GET['id'];
$voter_details = "SELECT * FROM `voters`  WHERE id = $voter_id";
$final_quiry = mysqli_query($db_conect, $voter_details);
$after_fetch = mysqli_fetch_assoc($final_quiry);

?>

<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h2>Voter Details</h2>
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
                    <th>Date Of Birth</th>
                    <td><?= $after_fetch['date_of_birth']; ?></td>
                </tr>
                <tr>
                    <th>5</th>
                    <th>NID Number</th>
                    <td><?= $after_fetch['nid_number']; ?></td>
                </tr>
                <tr>
                    <th>6</th>
                    <th>Father Name</th>
                    <td><?= $after_fetch['father_name']; ?></td>
                </tr>
                <tr>
                    <th>7</th>
                    <th>Mother Name</th>
                    <td><?= $after_fetch['mother_name']; ?></td>
                </tr>
                <tr>
                    <th>8</th>
                    <th>Union Porishad</th>
                    <td><?= $after_fetch['up']; ?></td>
                </tr>
                <tr>
                    <th>9</th>
                    <th>Sub District</th>
                    <td><?= $after_fetch['sub_district']; ?></td>
                </tr>
                <tr>
                    <th>10</th>
                    <th>District</th>
                    <td><?= $after_fetch['district']; ?></td>
                </tr>
                <tr>
                    <th>11</th>
                    <th>Division</th>
                    <td><?= $after_fetch['division']; ?></td>
                </tr>
                <tr>
                    <th>12</th>
                    <th>Blood Group</th>
                    <td><?= $after_fetch['blood_group']; ?></td>
                </tr>
                <tr>
                    <th>13</th>
                    <th>Gender</th>
                    <td><?= $after_fetch['gender']; ?></td>
                </tr>
                <tr>
                    <th>14</th>
                    <th>Photo</th>
                    <td>
                        <img width="100" src="../votar/votar_image/<?= $after_fetch['image']; ?>" alt="">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>