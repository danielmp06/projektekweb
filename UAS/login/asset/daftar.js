$(document).ready(function() {
	$('#formdaftar').submit(function(e) {
		daftar();
		e.preventDefault();
	});
});

function daftar() {
	gagal(0);
	sukses(0);		
	$.ajax({
		type: "POST",
		url: "register.php",
		data: $('#formdaftar').serialize(),
		dataType: "json",
		success: function(pesan) {
			if(parseInt(pesan.status)==1) {
			   sukses(1,pesan.teks);
			   $("#name").val('');
			   $("#phone").val('');
			   $("#email").val('');
			   $("#pass").val('');			
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
