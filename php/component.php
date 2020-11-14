<?php

    // Form Input
    function inputElement($icon, $placeholder, $name, $value, $display){
        $element = "
        <div class=\"input-group\" style=\"display: $display \">
        <div class=\"input-group-prepend\">
        <div class=\"input-group-text bg-warning\">$icon</div>
        </div>
        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\">
        </div>
        ";
        echo $element;
    }

    // Buttons
    function buttonElement($btnid, $styleclass, $text, $name, $attr) {
        $btn = "
        <button name = '$name' '$attr' class='$styleclass' id='$btnid'>$text</button>";
        echo $btn;
    }

    // Card Element
    function cardElement($title, $img, $isbn, $description, $date, $type, $available, $id) {
        $card = " <div class=\"card mx-3 my-2\" data-id=\" $id \" style=\"width: 18rem;\">
                    <img  src=\" $img \"
                    class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                    <h5 class=\"card-title\" data-id=\" $id \">$title</h5>
                    <p class=\"card-text\" data-id=\" $id \">$description</p>
                    <p data-id=\" $id \" style=\"display: none;\"> $id </p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\" data-id=\" $id \">$type</li>
                    <li class=\"list-group-item\" data-id=\" $id \">ISBN: $isbn</li>
                    <li class=\"list-group-item\" data-id=\" $id \">Published: $date</li>
                    <li class=\"list-group-item\" data-id=\" $id \">availability: $available <div class=\"$available\"></div>
                    </li>
                    </ul>
                    </div>";
    echo $card;
    }