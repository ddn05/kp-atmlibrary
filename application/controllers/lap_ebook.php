<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_ebook extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');
    }

	public function index()
	{
        error_reporting(0);
 
        $pdf = new FPDF('L', 'mm','A4');
 
        $pdf->AddPage();
 
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DATA ANGGOTA',0,1,'C');
        $pdf->Cell(0,7,'ATM LIBRARY',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(100,6,'Judul',1,0,'C');
        $pdf->Cell(60,6,'Penulis',1,0,'C');
        $pdf->Cell(35,6,'Kategori',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $ebook = $this->db->get('tb_ebook')->result();
        $no=0;
        foreach ($ebook as $book){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(100,6,$book->judul,1,0);
            $pdf->Cell(60,6,$book->penulis,1,0);
            $pdf->Cell(35,6,$book->kategori,1,1);
        }
        $pdf->Output();
	}
}
