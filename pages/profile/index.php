<?php
if(!$user = getCurrentUser()) {
    redirect('/login.php');
}

echo render('profile', ['user' => $user]);