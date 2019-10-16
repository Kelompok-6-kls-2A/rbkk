const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		tittle: 'Data berhasil ',
		text: 'berhasil' + flashData,
		type: 'success'
	});
}
