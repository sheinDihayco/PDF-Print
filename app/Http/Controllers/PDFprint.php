<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PDFprint extends Controller
{
    public static function print(Request $Request){
        $fpdf = new Fpdf('P', 'mm', 'A4');
        $fpdf->AddPage();
        $fpdf->SetTitle("Company Letter Head");
        
        $fpdf->SetFont('Arial', '' , 14);
        $fpdf->Text(80, 15, "Comapany Letter Head", 'C');
        $fpdf->SetFont('Arial', 'BU', 12);
        $fpdf->Text(75, 30, "Salary Pay Slip of Miss.XYZ");
        $fpdf->Ln(30);

        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', '' , 12);
        $fpdf->Cell(180, 12, "Description", 1, 1 , 'C');
        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Date of Joining", 1, 'L');
        $fpdf->Cell(45, 10, "Pay Period", 1, 'L');
        $fpdf->Cell(45, 10, "Worked Day", 1, 'L');
        
        $fpdf->SetY(52);
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "18th October 2019", 1, 'L');
        $fpdf->Cell(45, 10, "3 Months", 1, 'L');
        $fpdf->Cell(45, 10, "90", 1, 'L');

        $fpdf->SetY(52);
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "Employee Name", 1, 'L');
        $fpdf->Cell(45, 10, "Designation", 1, 'L');
        $fpdf->Cell(45, 10, "Department", 1, 'L');

        $fpdf->SetY(52);
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "Mr. XYZ", 1, 'L');
        $fpdf->Cell(45, 10, "Your Designation", 1, 'L');
        $fpdf->Cell(45, 10, "Your Designation", 1, 'L');
        
        $fpdf->Ln(20);
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Text(55, 93, "Date of Payment Period: 2022 April to 2022 June");
       
        $fpdf->SetFont('Arial', '', 12);

        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Earnings", 1, 1,'C');
        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Basic Salary", 1, 1,'C');
        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Incentive for XYZ", 1, 1,'C');
        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Other", 1, 1,'C'); 
        $fpdf->SetX(15);
        $fpdf->Cell(45, 10, "Total Salary", 1, 1,'C');

        $fpdf->SetY(102);
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "No. of Months", 1, 1, 'C');
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "3 ", 1, 1, 'C');
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "3", 1, 1, 'C');
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "0", 1, 1, 'C');
        $fpdf->SetX(60);
        $fpdf->Cell(45, 10, "", 1, 1, 'C');

        $fpdf->SetY(102);
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "Rate", 1, 1, 'C');
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "30200.00", 1, 1, 'C');
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "3500", 1, 1, 'C');
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "0", 1, 1, 'C');
        $fpdf->SetX(105);
        $fpdf->Cell(45, 10, "", 1, 1, 'C');

        $fpdf->SetY(102);
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "Amount", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "90600.00", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "10500.00", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "0", 1,1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "101,100.00", 1, 1, 'C');

        $fpdf->Ln(12);

        $fpdf->SetX(15);
        $fpdf->Cell(135, 10, "Deduction", 1, 'L');
        $fpdf->Cell(135, 10, "Professional Tax", 1, 'L');
        $fpdf->Cell(135, 10, "Other", 1, 'L');
        $fpdf->Cell(135, 10, "Total Deduction", 1, 'L');
        $fpdf->Cell(135, 10, "Net Pay                                             (NRS) ", 1, 'L');

        $fpdf->SetY(164);
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "Amount", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "1011.00", 1,  1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "0", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "1011.00", 1, 1, 'C');
        $fpdf->SetX(150);
        $fpdf->Cell(45, 10, "100,089.00", 1, 1, 'C');

        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Text(50, 225, "Amount in Words: One Lakh and Eighty Nine Rupees Only.");

        $fpdf->SetFont('Arial', '', 12);

        $fpdf->Line(15, 250, 80, 250); 
        $fpdf->Text(30, 255, "Employer Signature.");
        $fpdf->Line(130, 250, 195, 250); 
        $fpdf->Text(145, 255, "Employee Signature."); 


        
        //$fpdf->Image("https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg", 10, 25, 50);
        

        $fpdf->Output();
        exit;
    }
}
