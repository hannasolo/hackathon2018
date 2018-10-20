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

        case "2":
            $petApplication->firstName = $_POST["firstName"];
            $petApplication->lastName = $_POST["lastName"];
            $petApplication->emailAdd = $_POST["emailAdd"];
            $petApplication->address = $_POST["address"];
            $petApplication->phone = $_POST["phone"];
            $petApplication->employer = $_POST["employer"];
            $petApplication->workPhone = $_POST["workPhone"];
            $petApplication->income = $_POST["income"];
            $petApplication->adultsHouse = $_POST["adultsHouse"];
            $petApplication->childHouse = $_POST["childHouse"];
            $petApplication->housePayment = $_POST["housePayment"];
            $petApplication->hardship = $_POST["hardship"];
            $petApplication->finAss = $_POST["finAss"];
            $petApplication->incomeProof = $_POST["incomeProof"];

            $_SESSION["petApplication"] = $petApplication;
            header('Location: index_3.html');
            break;

        case "3":
            $petApplication->petName = $_POST["petName"];
            $petApplication->petBreed = $_POST["petBreed"];
            $petApplication->petSex = $_POST["petSex"];
            $petApplication->petVaccines = $_POST["petVaccines"];
            $petApplication->hospital = $_POST["hospital"];
            $petApplication->hospitalNum = $_POST["hospitalNum"];
            $petApplication->petMedCond = $_POST["petMedCond"];
            $petApplication->ownDuration = $_POST["ownDuration"];
            $petApplication->DOB = $_POST["DOB"];
            $petApplication->petFrom = $_POST["petFrom"];
            $petApplication->petInsurance = $_POST["petInsurance"];
            $petApplication->policyNum = $_POST["policyNum"];
            $petApplication->medFile = $_POST["medFile"];
            $petApplication->petImage = $_POST["petImage"];


        default:
            print_r($_POST);
    }
