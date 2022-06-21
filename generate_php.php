<?php

    $numero = $_POST['numero'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    require ("fpdf183/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","",14);
    $pdf->Cell(0,10,"Affichage des informations",1,1,'C');

    $pdf->Cell(30,10,"Numero",1,0);
    $pdf->Cell(40,10,"Nom",1,0);
    $pdf->Cell(40,10,"Prenom",1,0);
    $pdf->Cell(0,10,"E-mail",1,1);

    
    $pdf->Cell(30,10,$numero,1,0);
    $pdf->Cell(40,10,$prenom,1,0);
    $pdf->Cell(40,10,$nom,1,0);
    $pdf->Cell(0,10,$email,1,0);

    $pdf->output();


?>