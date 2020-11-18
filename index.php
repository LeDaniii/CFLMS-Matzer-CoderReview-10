<?php

require_once "../CF-CR10/php/component.php";
// require_once("../CF-CR10/php/db.php");
require_once "../CF-CR10/php/operation.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="./scss/style.css">
    <title>MediaWerk</title>
</head>

<body>
    <!-- ---------- Header Start ---------- -->
    <div class="container-fluid text-center bg-dark">
        <h1 class="py-4 text-light"><i class="fas fa-book-reader"></i> MediaWerk Libary</h1>
        <p class="py-2 text-light">Need something? We have it! maybe</p>
        <button type="button" class="btn btn-success offset-10 my-2" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@getbootstrap"><i class="fas fa-plus-square"></i> Add New Media</button>
        <form class="bg-dark" action="" method="post">
            <?php buttonElement("btn-read", "btn btn-primary offset-10 mb-2", "<i class='fas fa-sync'></i> Load", "read", "dat-toggle='tooltip' data-placement='bottom' title='read'")?>
        </form>

    </div>
    <!-- ---------- Header End ---------- -->
    <!-- ---------- Modal Insert Values Start ---------- -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title " id="exampleModalLabel">Add AWESOME stuff only</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="py-2">
                            <?php inputElement("", "Id", "media_id", "", "none")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement("<i class='fas fa-heading'></i>", "Title", "media_title", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-camera"></i>', "Img", "media_img", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-book"></i>', "ISBN", "media_isbn", "", "")?>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning">Description</span>
                            </div>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name=" media_description"></textarea>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-table"></i>', "Publishing Date", "media_publish_date", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="far fa-copy"></i>', "Which Type ?", "media_type", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-dolly-flatbed"></i>', "Available?", "media_available", "", "")?>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i> Add Data", "create", "dat-toggle='tooltip' data-placement='bottom' title='create'")?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------- Modal Insert Values End ---------- -->
    <section class="bg-light">
        <div class="container-fluid ">
            <div class="row mx-2 d-flex justify-content-around ">
                <!-- <div class="card mx-3 " style="width: 18rem;">
                    <img src="https://miro.medium.com/focal/1200/1200/48/38/1*ABSOquiAkx1zxGEHxHqvVA.jpeg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">1q84</h5>
                        <p class="card-text">A love story, a mystery, a fantasy, a novel of self-discovery, a dystopia
                            to rival George Orwell's—1</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Book</li>
                        <li class="list-group-item">ISBN: 97818465</li>
                        <li class="list-group-item">Published: 2010-10-10</li>
                        <li class="list-group-item">available: yes</li>
                    </ul>
                </div> -->
                <?php
if (isset($_POST['read'])) {
    $result = getData();
    if ($result) {
        $sql = "select * from media";
        $result = mysqli_query($GLOBALS['con'], $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo cardElement($row['media_title'], $row['media_img'], $row['media_isbn'], $row['media_description'], $row['media_publish_date'], $row['media_type'], $row['media_available'], $row['media_id']);
            }
        }
    }
}
?>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./php/main.js"></script>
</body>

</html>