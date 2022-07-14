$(document).ready(function () {
    const flashdata = document.querySelector('.flashdata');
    if (flashdata) {
        const message = flashdata.children;
        Swal.fire({
            icon: message[0].innerHTML,
            title: message[1].innerHTML,
            text: message[2].innerHTML,
            showConfirmButton: false,
            timer: 1500
        });
    }

    const tombolHapus = document.querySelectorAll('.tombol-hapus');
    if (tombolHapus) {
        tombolHapus.forEach((el) => {
            el.addEventListener('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Hapus Data',
                    text: "data yang dihapus akan hilang permanen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#000',
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.value) {
                        this.submit();
                    }
                });
            });
        });
    }

    $('#table').DataTable();
});
