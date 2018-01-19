<?php
    if(session_status()== PHP_SESSION_NONE){
        session_start();
    }
    function debug($variable){
        echo '<pre>' . print_r($variable,true) . '</pre>';
    }
    debug($_SESSION);
    if($_SESSION['login']) {
        echo '<div class="button">
                    <button class="button btn-5 pop-up-button-sign-in" style="margin: 20px auto; width:100%">
                        New Article
                    </button> 
            </div>';
    } else {
        echo '<div class="button">
                    <button class="button btn-5 pop-up-button-sign-in" style="margin: 20px auto; width:100%">
                        Sign Up
                    </button> 
            </div>';
    }







