<?php 
require_once('include/admin_header.php');


$db_conect = mysqli_connect('localhost', 'root', '', 'voting_system');
    $voters = "SELECT COUNT(*) AS result FROM voters";
    $final_quiry = mysqli_query($db_conect, $voters); 
    $voters_fetch = mysqli_fetch_assoc($final_quiry);

    $vote_details = "SELECT COUNT(*) AS result FROM vote";
    $final_quiry2 = mysqli_query($db_conect, $vote_details);
    $vote_fetch2 = mysqli_fetch_assoc($final_quiry2);

    $candidate = "SELECT COUNT(*) AS result FROM candidate";
    $final_quiry3 = mysqli_query($db_conect, $candidate);
    $vote_fetch3 = mysqli_fetch_assoc($final_quiry3);

    $disq_candidate = "SELECT COUNT(*) AS result FROM candidate WHERE disqualify_status = '1'";
    $final_quiry4 = mysqli_query($db_conect, $disq_candidate);
    $vote_fetch4 = mysqli_fetch_assoc($final_quiry4);
    
?>


<h1>Welcome Mr, <strong>Commissioner</strong> </h1>

<div class="row">
    <div class="col-sm-6">
        <div class="card avtivity-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <span class="activity-icon bgl-success mr-md-4 mr-3">
                        <img width="60" src="asset/images/logo-sohel.png" alt="">
                    </span>
                    <div class="media-body">
                        <h4>Total voters</h4>
                        <span class="title text-black font-w600"><?= $voters_fetch['result'];?></span>
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-success" style="width: 42%; height:5px;" role="progressbar">
                        <span class="sr-only"><?= $voters_fetch['result'];?></span>
                    </div>
                </div>
            </div>
            <div class="effect bg-success" style="top: 281px; left: 303px;"></div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card avtivity-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <span class="activity-icon bgl-secondary  mr-md-4 mr-3">
                       <img width="60" src="asset/images/election.png" alt="">
                    </span>
                    <div class="media-body">
                        <h4>Total Vote</h4>
                        <span class="title text-black font-w600"><?= $vote_fetch2['result'];?></span>
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
                        <span class="sr-only"><?= $vote_fetch2['result'];?></span>
                    </div>
                </div>
            </div>
            <div class="effect bg-secondary" style="top: 38px; left: -30px;"></div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card avtivity-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <span class="activity-icon bgl-danger mr-md-4 mr-3">
                        <img width="60" src="asset/images/candidate.png" alt="">
                    </span>
                    <div class="media-body">
                        <h4>Total Candidate</h4>
                        <span class="title text-black font-w600"><?= $vote_fetch3['result'];?></span>
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
                        <span class="sr-only">42% Complete</span>
                    </div>
                </div>
            </div>
            <div class="effect bg-danger" style="top: 149px; left: 292px;"></div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card avtivity-card">
            <div class="card-body">
                <div class="media align-items-center">
                    <span class="activity-icon bgl-warning  mr-md-4 mr-3">
                        <img width="70" src="asset/images/disqualified.png" alt="">
                    </span>
                    <div class="media-body">
                        <p class="fs-14 mb-2">Disqualified Candidate</p>
                        <span class="title text-black font-w600"><?=$vote_fetch4['result'];?></span>
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                        <span class="sr-only">42% Complete</span>
                    </div>
                </div>
            </div>
            <div class="effect bg-warning" style="top: 14px; left: -1px;"></div>
        </div>
    </div>
</div>

<?php 
require_once('include/admin_footer.php');
?>