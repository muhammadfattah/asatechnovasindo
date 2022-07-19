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
                    text: "Data yang dihapus akan hilang permanen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#000',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.value) {
                        this.submit();
                    }
                });
            });
        });
    }

    $('#table').DataTable({
        "paging": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $('#table2').DataTable({
        "paging": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    let limit = 2;
    $('input.duo-checkbox').on('change', function (evt) {
        if ($('input.duo-checkbox:checked').length >= limit + 1) {
            this.checked = false
        }
    });

    const btnSwp = document.querySelector('.btn-swap');
    if (btnSwp) {
        btnSwp.addEventListener('submit', function (e) {
            e.preventDefault();
            let checkbox = $('input.duo-checkbox:checked');
            if (checkbox.length == limit) {
                this.action = this.action + '/' + checkbox[0].value + '/' + checkbox[1].value;
                this.submit();
            }
        });
    }

    const btnSwp2 = document.querySelector('.btn-swap2');
    if (btnSwp2) {
        btnSwp2.addEventListener('submit', function (e) {
            e.preventDefault();
            let checkbox = $('input.duo-checkbox2:checked');
            if (checkbox.length == limit) {
                this.action = this.action + '/' + checkbox[0].value + '/' + checkbox[1].value;
                this.submit();
            }
        });
    }

    const fileInput = document.querySelector('.custom-file-input');
    if (fileInput) {
        fileInput.addEventListener('input', function (e) {
            let fileName = this.files[0].name;
            let nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    }

    $('.summernote').summernote({
        height: 500,
        minHeight: 500,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
        ]
    });
});
