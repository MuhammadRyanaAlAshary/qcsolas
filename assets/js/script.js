const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        icon: "success",
        title: "Success",
        text: "" + flashData,
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin?',
        text: "Data akan Dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

// Tombol print user COVER
$('.tombol-print').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin ingin print dokumen?',
        text: "Data akan di print",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Print Dokumen!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});
