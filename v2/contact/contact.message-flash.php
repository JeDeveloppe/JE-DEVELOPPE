<?php
if(isset($_SESSION['alertMessage-contact'])){
    echo '<div class="mt-1 alert-'.$_SESSION['alertMessageConfig-contact'].' col-auto text-center p-2">'.$_SESSION['alertMessage-contact'].'</div>';

    unset($_SESSION['alertMessage-contact']);
    unset($_SESSION['alertMessageConfig']);
}
?>