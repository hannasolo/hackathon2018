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

            $_SESSION["petApplication"] = $petApplication;
            header('Location: index4.html');
            break;

        case "4":
            $petApplication->vetEmail = $_POST["vetEmail"];
            $petApplication->sig = $_POST["sig"];
            $petApplication->date = $_POST["date"];
            $petApplication->agree = $_POST["agree"];

            $_SESSION["petApplication"] = $petApplication;

            $fp = fopen('submissions/'.session_id().'.json', 'w');
            fwrite($fp, json_encode($petApplication));
            fclose($fp);

            // the message
            $msg = "Please click the following link to complete your patients financial assistance form:http://hackathon01.cs.csusm.edu/guest-hack014/loadProgress.php?session=".session_id();

            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);

            // send email
            mail($petApplication->vetEmail,"FACE Foundation - Financial Assistance Form Request",$msg);

            header('Location: thankUser.html');
            break;

        case "5":
            $petApplication->vetName = $_POST["vetName"];
            $petApplication->hospName = $_POST["hospName"];
            $petApplication->hospNum = $_POST["hospNum"];
            $petApplication->diagnosis = $_POST["diagnosis"];
            $petApplication->prog = $_POST["prog"];
            $petApplication->recProc = $_POST["recProc"];
            $petApplication->treatEst = $_POST["treatEst"];
            $petApplication->sig = $_POST["sig"];
            $petApplication->date = $_POST["date"];
            $petApplication->agree = $_POST["agree"];

            $_SESSION["petApplication"] = $petApplication;
            // email to FACE Foundation
            header('Location: thankVet.html');
            break;

        default:
            print_r($_POST);
    }
