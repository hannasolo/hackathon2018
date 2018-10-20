<?php
    include "PetApplication.php";
    session_start();

    if ($_GET["session"] == 1)
    {
        $petApplication = new PetApplication();
    }
    else
    {
        $petApplication = $_SESSION["petApplication"];
    }

    switch($_GET["section"])
    {
        case "1":
            $petApplication->resident = $_POST["resident"];
            $petApplication->vetVisit = $_POST["vetVisit"];
            $petApplication->goFundMe = $_POST["goFundMe"];
            $petApplication->spay = $_POST["spay"];
            $petApplication->care = $_POST["care"];

            $_SESSION["petApplication"] = $petApplication;
            header('Location: index2.html');
            break;

        default:
            print_r($_POST);
    }
