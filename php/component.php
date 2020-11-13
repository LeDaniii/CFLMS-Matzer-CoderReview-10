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