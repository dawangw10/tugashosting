function hapusMenu(url) {

	Swal.fire({
		title: 'Are you sure?',
				text: "Yakin ingin hapus menu?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya,hapus!'
	}).then((result) => {
		if (result.value) {
			document.location.href = url;
		}
	})
}

function deleteRole(url) {
	Swal.fire({
		title: 'Are you sure?',
				text: "Yakin ingin hapus menu?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya,hapus!'
	}).then((result) => {
		if (result.value) {
			document.location.href = url;
		}
	})
}

function hapusSubmenu(url) {
	Swal.fire({
		title: 'Are you sure?',
				text: "Yakin ingin hapus menu?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya,hapus!'
	}).then((result) => {
		if (resut.value) {
			document.location.href = url;
		}
	})
}