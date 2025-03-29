<?php
session_start();
function errrorMessage()
{
    if (isset($_SESSION['errorMessage'])) {
        $output = '<div class="text-danger">';
        $output .= htmlentities($_SESSION['errorMessage']);
        $output .= '</div>';
        $_SESSION['errorMessage'] = null;
        return $output;
    }
}


function successMessage()
{
    if (isset($_SESSION['successMessage'])) {
        $output = '<div class="alert alert-success">';
        $output .= htmlentities($_SESSION['successMessage']);
        $output .= '</div>';
        $_SESSION['successMessage'] = null;
        return $output;
    }
}


function errrorUser()
{
    if (isset($_SESSION['errorUser'])) {
        $output = '<div >';
        $output .= htmlentities($_SESSION['errorUser']);
        $output .= '</div>';
        $_SESSION['errorUser'] = null;
        return $output;
    }
}


function successUser()
{
    if (isset($_SESSION['successUser'])) {
        $output = '<div style="color:white;background-color:teal;padding:5px 15px;border-radius:5px 10px">';
        $output .= htmlentities($_SESSION['successUser']);
        $output .= '</div>';
        $_SESSION['successUser'] = null;
        return $output;
    }
}
