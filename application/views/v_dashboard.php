        <?php
          $buku    = $this->db->get('tb_buku')->num_rows();
          $anggota = $this->db->get('tb_anggota')->num_rows();
          $ebook   = $this->db->get('tb_ebook')->num_rows(); 
          $umum    = $this->db->get_where('tb_ebook',array('kategori' => 'umum'))->num_rows();
          $pemasaran     = $this->db->get_where('tb_ebook',array('kategori' => 'pemasaran'))->num_rows();
          $pariwisata    = $this->db->get_where('tb_ebook',array('kategori' => 'pariwisata'))->num_rows();
          $peternakan    = $this->db->get_where('tb_ebook',array('kategori' => 'peternakan'))->num_rows();
          $vokasi        = $this->db->get_where('tb_ebook',array('kategori' => 'vokasi'))->num_rows();
          $inspirasi     = $this->db->get_where('tb_ebook',array('kategori' => 'inspirasi'))->num_rows();
        ?>

<div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <?php
            
            $kode_buku='1920022';


            $this->db->where('kode', $kode_buku);
            $this->db->select('stok');
            $this->db->from('tb_buku');
            $data = $this->db->get();

            $stok = $data->row_array();

            // print_r($stok['stok']);
            // die;
            echo $stok['stok'];
            // print_r($stok);
            // die();

            // echo $stok;

            // $this->db->select('stok');
            // $this->db->from('tb_buku');
            // $this->db->where('kode', $kode_buku);

            // $stok = $this->db->get()->result();
            
            // print_r($stok);
            // print_r($stok->result()); die;
            // print_r($stok[0]->stok);
            // echo $stok;
          ?>

          <h6 class="mb-3">OFFLINE LIBRARY</h6>
          <!-- Content Row -->

          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $anggota?> Anggota</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Buku</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $buku?> Buku</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Peminjaman</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">88</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengembalian</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h6 class="mb-3">ONLINE LIBRARY</h6>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ebook</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ebook?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Umum</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $umum ?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemasaran</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pemasaran?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pariwisata</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pariwisata ?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Peternakan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $peternakan ?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Vokasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $vokasi ?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Inspirasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $inspirasi ?> Modul</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>

</div>