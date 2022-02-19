<?php
if(isset($_SESSION['alertMessage'])){
    echo '<div class="alertDiv alert-'.$_SESSION['alertMessageConfig'].' col-auto text-center p-4">'.$_SESSION['alertMessage'];
        if(isset($_SESSION['alertMessage-details'])){
            print_r($_SESSION['alertMessage-details']);
        }
    echo '</div>';

    unset($_SESSION['alertMessage']);
    
    if(isset($_SESSION['alertMessage-details'])){
        unset($_SESSION['alertMessage-details']);
    }
unset($_SESSION['alertMessageConfig']);
}
?>