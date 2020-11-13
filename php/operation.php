<?php

require_once("db.php");
require_once("component.php");

$con = createdb();


// Textfield For User Interaction
function textNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

// Button Calls
// if(isset($_POST['create'])){
    // echo "Hallo";
    // createData();
// }
if(isset($_POST['create'])){
    // echo "Hello";
    createData();
}

// Check TextBox
function textboxValue($value) {
    $textbox = mysqli_real_escape_string($GLOBALS['con'], $_POST[$value]);
    if(empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}

// ########## Insert Data to DataBase Start ##########

// Insert Data in SQL
function createData(){
    $mediaTitle = textboxValue('media_title');
    $mediaImg = textboxValue('media_img');
    $mediaIsbn = textboxValue('media_isbn');
    $mediaDescription = textboxValue('media_description');
    $mediaDate = textboxValue('media_publish_date');
    $mediaType = textboxValue('media_type');
    $mediaAvailable  = textboxValue('media_available');

    if($mediaTitle && $mediaImg && $mediaIsbn && $mediaDescription && $mediaDate && $mediaType && $mediaAvailable){
        $sql = "insert into media (media_title, media_img, media_isbn, media_description, media_publish_date, media_type, media_available ) values ('$mediaTitle','$mediaImg','$mediaIsbn','$mediaDescription', '$mediaDate', '$mediaType', '$mediaAvailable')";
        
        if(mysqli_query($GLOBALS['con'], $sql)){
             textNode("success", "Successfully inserted!");
         } else {
            textNode("error", "Something went wrong... Call the Police! Error: " . mysqli_error($GLOBALS['con']));
         }
    } else {
       textNode("error", "Fill the text box!");
    }
}
// ########## Insert Data to DataBase End ##########