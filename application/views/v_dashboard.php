        <?php
          $buku    = $this->db->get('tb_buku')->num_rows();
          $anggota = $this->db->get('tb_anggota')->num_rows();
          $ebook   = $this->db->get('tb_ebook')->num_rows();
          $peminjaman      = $this->db->query('select * from tb_transaksi where status IS NULL')->num_rows();
          $pengembalian    = $this->db->get_where('tb_transaksi',array('status' => 'selesai'))->num_rows();

          $umum    = $this->db->get_where('tb_ebook',array('kategori' => 'umum'))->num_rows();
          $pemasaran     = $this->db->get_where('tb_ebook',array('kategori' => 'pemasaran'))->num_rows();
          $pariwisata    = $this->db->get_where('tb_ebook',array('kategori' => 'pariwisata'))->num_rows();
          $peternakan    = $this->db->get_where('tb_ebook',array('kategori' => 'peternakan'))->num_rows();
          $vokasi        = $this->db->get_where('tb_ebook',array('kategori' => 'vokasi'))->num_rows();
          $inspirasi     = $this->db->get_where('tb_ebook',array('kategori' => 'inspirasi'))->num_rows();
        ?>

<div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><strong>DASHBOARD</strong></h1>
          </div>
          <h6 class="mb-3">OFFLINE LIBRARY</h6>
          <!-- Content Row -->

          <div class="row">
            <!-- Anggota -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2 text-right">
                <div class="card-body text-left">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 font-weight-bold text-danger text-uppercase mb-2">Jumlah Anggota</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $anggota?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <hr class="m-0 mb-3">
                <a href="<?php echo base_url()?>anggota/laporan_anggota" class="float-right mr-4 h6">Lihat rincian <i class="fas fa-arrow-circle-right ml-1"></i></a>
              </div>
            </div>

            <!-- Anggota -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2 text-right">
                <div class="card-body text-left">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 font-weight-bold text-success text-uppercase mb-2">Jumlah Buku</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $buku?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <hr class="m-0 mb-3">
                <a href="<?php echo base_url()?>buku/laporan_buku" class="float-right mr-4 h6">Lihat rincian <i class="fas fa-arrow-circle-right ml-1"></i></a>
              </div>
            </div>

            <!-- Anggota -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2 text-right">
                <div class="card-body text-left">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 font-weight-bold text-secondary text-uppercase mb-2">Jumlah Peminjaman</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $peminjaman?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <hr class="m-0 mb-3">
                <a href="<?php echo base_url()?>transaksi/lappinjam" class="float-right mr-4 h6">Lihat rincian <i class="fas fa-arrow-circle-right ml-1"></i></a>
              </div>
            </div>

            <!-- Anggota -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2 text-right">
                <div class="card-body text-left">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 font-weight-bold text-warning text-uppercase mb-2">Jumlah pengembalian</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $pengembalian?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <hr class="m-0 mb-3">
                <a href="<?php echo base_url()?>transaksi/lapkembali" class="float-right mr-4 h6">Lihat rincian <i class="fas fa-arrow-circle-right ml-1"></i></a>
              </div>
            </div>

          </div>
          <hr>
          <h6 class="mb-3">ONLINE LIBRARY</h6>
          <!-- Content Row -->
          <div class="row">

          <!-- Anggota -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 text-right">
                <div class="card-body text-left">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 font-weight-bold text-primary text-uppercase mb-2">Jumlah Ebook</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $ebook?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <hr class="m-0 mb-3">
                <a href="<?php echo base_url()?>ebook" class="float-right mr-4 h6">Lihat rincian <i class="fas fa-arrow-circle-right ml-1"></i></a>
          </div>

          </div>

</div>