<?php
include('inc/database.php');
include('inc/form.php');

// i need to select data
include('inc/select.php');

include('inc/colseDatabase.php');;
?>

<?php include('parts/header.php'); ?>

<div class="position-relative1 overflow-hidden p-3 mb-5 text-center">
    <div class="container-fluid py-5 mt-5">

        <!-- <img src="images/image.jpg"> -->
        
        <h1 class="display-5 fw-bold" id="text">Win with Us</h1>
        <p class="lead fw-normal">Remaining in the clouds</p>
        <p id="countdown"></p>
        <p class="lead fw-normal">To win a free copy of software malware</p>
    </div>
</div>

<div class="position-relative mb-5 text-left">
    <div class="container-fluid py-5 mt-5">
        <form class="mt-5" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
            <h3>Please add your data...</h3>

            <div class="mb-3">
                <label for="    " class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName" id="firstName">
                <div class="text-danger error"> <?php echo $erros['firstName']; ?> </div>
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
                <div class="text-danger error"> <?php echo $erros['lastName']; ?> </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
                <div class="text-danger error"> <?php echo $erros['email']; ?> </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" id="submit">Send Data</button>
        </form>
    </div>
</div>

<!-- i need to add counter or timer by loader -->
<div class="loader-contaner">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<div class="d-grid col-6 mx-auto">
    <!-- Button trigger modal -->
    <button id="winner" type="button" class="btn btn-primary">
        Show the Winner
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">The Winner is</h1>
            </div>
            <div class="modal-body">
                <?php foreach ($users as $user) : ?>
                    <h1 class="display-1 text-center modal-title fs-5" id="exampleModalLabel"><?php echo htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) ?></h1>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>


<!-- <div id="cards" class="row m-5 pb-5">

    <?php foreach ($users as $user) : ?>

        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title"> <?php echo htmlspecialchars($user['firstName'] . $user['lastName']) ?> </h4>
                    <p class="card-text"> <?php echo htmlspecialchars($user['email']) ?> </p>
                </div>
            </div>
        </div>

    <?php endforeach ?>

</div> -->

<!-- i need to use foreach to select the data -->
<!-- <?php foreach ($users as $user) {

            echo ' first name : ' . $user['firstName'] . ' - last name : ' . $user['lastName'] . '<br>' . $user['email'] . '<br>';
        } ?> -->

<!-- <?php foreach ($users as $user) :
            echo ' first name : ' . $user['firstName'] . ' - last name : ' . $user['lastName'] . '<br>';
        endforeach ?> -->

<?php include('parts/footer.php'); ?>