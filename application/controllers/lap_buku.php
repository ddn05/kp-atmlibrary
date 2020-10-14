<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_buku extends CI_Controller {

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
        $pdf->Cell(0,7,'DATA BUKU',0,1,'C');
        $pdf->Cell(0,7,'ATM LIBRARY',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Kode',1,0,'C');
        $pdf->Cell(90,6,'Judul',1,0,'C');
        $pdf->Cell(35,6,'Penulis',1,0,'C');
        $pdf->Cell(20,6,'Penerbit',1,0,'C');
        $pdf->Cell(40,6,'Stok',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $buku = $this->db->get('tb_buku')->result();
        $no=0;
        foreach ($buku as $buk){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(40,6,$buk->kode,1,0);
            $pdf->Cell(90,6,$buk->judul,1,0);
            $pdf->Cell(35,6,$buk->penulis,1,0);
            $pdf->Cell(20,6,$buk->penerbit,1,0,'C');
            $pdf->Cell(40,6,$buk->stok,1,1);
        }
        $pdf->Output();
	}
}
