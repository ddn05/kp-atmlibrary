<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_anggota extends CI_Controller {

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
        $pdf->Cell(40,6,'NIS',1,0,'C');
        $pdf->Cell(90,6,'Nama',1,0,'C');
        $pdf->Cell(35,6,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(20,6,'Kelas',1,0,'C');
        $pdf->Cell(40,6,'Jurusan',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $anggota = $this->db->get('tb_anggota')->result();
        $no=0;
        foreach ($anggota as $ang){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(40,6,$ang->nis,1,0);
            $pdf->Cell(90,6,$ang->nama,1,0);
            $pdf->Cell(35,6,$ang->jk,1,0);
            $pdf->Cell(20,6,$ang->kelas,1,0,'C');
            $pdf->Cell(40,6,$ang->jurusan,1,1);
        }
        $pdf->Output();
	}
}
