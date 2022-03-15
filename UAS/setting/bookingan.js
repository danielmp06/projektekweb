$(document).ready(function() {
	$('#formorder').submit(function(e) {
        bookingan();
        e.preventDefault();
	});
});

function bookingan() {
	gagal(0);
	sukses(0);		
	$.ajax({
		type: "POST",
		url: "../orderan.php",
		data: $('#formorder').serialize(),
		dataType: "json",
		success: function(pesan) {
			if(parseInt(pesan.status)==1) {
			   sukses(1,pesan.teks);
			   $("#durasi_order").val('');
               $("#tanggal_order").val('');
			   $("#id_user").val('');
			   $("#id_lapangan").val('');
			}
			else if(parseInt(pesan.status)==0) {
				gagal(1,pesan.teks);
			}					
	 	}
	});
}

function visible(seleksi,status) {
	if(status) $('#'+seleksi).css('visibility','visible');
	else $('#'+seleksi).css('visibility','hidden');
}

function gagal(status,teks) {
	visible('keterangan',status);
	if(teks) $('#keterangan').html(teks);
	$('#keterangan').removeClass('sukses').addClass('gagal');
}

function sukses(status,teks) {
	visible('keterangan',status);
	if(teks) $('#keterangan').html(teks);
	$('#keterangan').removeClass('gagal').addClass('sukses');
}
