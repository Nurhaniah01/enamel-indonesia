function success_login(redirect) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Login Berhasil!',
    }).then(function() {
        window.location = redirect;
    });
}

function error_login(redirect) {
    Swal.fire({
        icon: 'error',
        title: 'Oppss..',
        text: 'Login Gagal!',
    }).then(function() {
        window.location = redirect;
    });
}

function success_message_add(redirect) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Data Berhasil Ditambahkan!',
    }).then(function() {
        window.location = redirect;
    });
}

function error_message_add(redirect) {
    Swal.fire({
        icon: 'error',
        title: 'Oppss..',
        text: 'Data Gagal Ditambahkan!',
    }).then(function() {
        window.location = redirect;
    });
}

function success_message_edit(redirect) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Data Berhasil Diganti!',
    }).then(function() {
        window.location = redirect;
    });
}

function error_message_edit(redirect) {
    Swal.fire({
        icon: 'error',
        title: 'Oppss..',
        text: 'Data Gagal Diganti!',
    }).then(function() {
        window.location = redirect;
    });
}

function success_message_delete(redirect) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Data Berhasil Dihapus!',
    }).then(function() {
        window.location = redirect;
    });
}

function error_message_delete(redirect) {
    Swal.fire({
        icon: 'error',
        title: 'Oppss..',
        text: 'Data Gagal Dihapus!',
    }).then(function() {
        window.location = redirect;
    });
}
