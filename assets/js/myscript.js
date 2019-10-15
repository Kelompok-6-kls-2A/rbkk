const flashData = $('.flash-data').data('flash');

if (flashData) {
	Swal.fire({
		tittle: 'Data berhasil ',
		text: 'berhasil' + flashData,
		type: 'success'
	});
}
