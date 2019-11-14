<div class="row">
	 <div class="col-lg-11">
	 	<div class="container">
	 		<h2>FAQ</h2>
	 		<?php foreach($data->result_array() as $row ) : 

	 		$judul = $row['inbox_judul'];
	 		$pesan = $row['inbox_pesan'];
	 		$balas = $row['inbox_reply'];

	 		?>
      		<b style="margin-top: -30px;">Question : </b>
                <br/>
                <p style="margin-bottom:1px;"><?php echo $pesan; ?></p>
                <b>Answer : </b>
      		<p><?php echo $balas; ?></p>	
                <br/>
      		<?php endforeach; ?>

        </div>
    </div>
</div>