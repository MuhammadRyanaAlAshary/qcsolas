const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Sukses',
        text: '' + flashData,
        type: 'success'
    });
}

// // tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
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

// Tombol print user lhu
$('.tombol-print').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
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