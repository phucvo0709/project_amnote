<?php
include ("check_permission.php");
include ("./../m_prices.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_prices = new M_prices();
//sanitize data
$id_price = $_POST['id_price'];
$location = $sanitize->sanitize_input($_POST['location']);

$add = $m_prices->add_location($id_price, $location);
if($add){
    echo "
        <div class='form-group' id='delete_price{$add->id}'>
            <div class='row'>
                <div class='col-6'>
                    <input type='text' class='form-control'  id='location_input{$add->id}' name='location'
                           value='$add->location' placeholder='Enter Location'>
                </div>
                <div class='col-6'>
                    <i class='fe-check text-success'></i>
                </div>
            </div>
        </div>
    ";
};