<div class="wrapper">
    <div class="container mt-4">
  		<h3 class="display" id="daftarebook">HASIL PENELUSURAN</h3>
        <p>Telusuri : <?php echo $kunci?></p>

		<div class="row">

		<?php foreach($cari as $book) { ?>
			<div class="card m-2 mt-5" style="width: 8rem;">
				<span class="badge badge-light mb-2"><?php echo $book->kategori?></span>
				<img src="<?php echo base_url().'uploads/img/'.$book->cover;?>" class="card-img-top my-img-feature" alt="...">

				<h6 class="card-title mt-1"><strong><?php echo $book->judul?></strong></h6>
				<small>Penulis : <?php echo $book->penulis ?></small><br>
				<?php echo anchor ('user/baca/'.$book->id,'<div class="btn btn-primary btn-sm m-0">Baca Ebook</div>')?>
			</div>
		<?php } ?>

		</div>
	</div>
</div>