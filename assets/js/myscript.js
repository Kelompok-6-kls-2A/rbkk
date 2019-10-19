const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		// position: 'top-end',
		type: "success",
		title: "Data berhasil " + flashData,
		showConfirmButton: false,
		timer: 1500
	});
}

//hapus
$(".tombol-hapus").on("click", function(e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah yakin ?",
		text: "anda ingin menghapus data ini?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!"
	}).then(result => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
