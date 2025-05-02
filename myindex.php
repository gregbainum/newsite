<!--
    Learning PHP, MySQL & JavaScript, 6th Edition
    Chapter 5, 6
    
    Project Phone Bill Calculatr
    Author: Greg Bainum
    Date:   5 April 2025
    Filename: myindex.php

-->

<?php
$title = 'Phone Bill Cal';
include 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getSpecialties();


?>

<div class="card text-white bg-info mb-3" style="width: 40rem; margin: auto;">

    <div class="card-body">

        <h1 class="text-center">Calculate Your Mobile Phone Bill</h1>

        <form method="post" action="phonebill.php">
            <div class="form-group">
                <label for="minutesused">Mobile Plan</label>
                <select class="form-control" name="phoneplan">

                    <!--<?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['specialty_id']; ?>"><?php echo $r['name']; ?></option>
                <?php } ?>
                -->

                    <option value="none">Select Phone Plan</option>
                    <option value="A">Package A: For $20 per month, 400 minutes are provided. Additional minutes are $0.50 per minute.</option>
                    <option value="B">Package B: For $30 per month, 600 minutes are provided. Additional minutes are $0.40 per minute.</option>
                    <option value="C">Package C: For $40 per month, 900 minutes are provided. Additional minutes are $0.30 per minute.</option>
                    <option value="D">Package D: For $50 per month, unlimited minutes are provided.</option>
                </select>
            </div>
            <div class="form-group">
                <label for="minutesused">Minutes Used</label>
                <input type="text" class="form-control" name="minutesused" placeholder="100">
            </div>
            <div class="form-group">
                <label for="statetax">State Tax</label>
                <input type="text" class="form-control" name="statetax" placeholder="5">
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
            </div>

        </form>
    </div>
</div>

<br>

<?php
include 'includes/footer.php';
?>