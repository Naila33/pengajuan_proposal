<<<<<<< HEAD
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");

    if (window.innerWidth <= 768) {
        sidebar.classList.toggle("active");
    } else {
        sidebar.classList.toggle("collapsed");
    }
}
</script>
</body>
</html>
=======
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Web programing UNPAS <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src="<?= base_url('assets/');  ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/');  ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<script src="<?= base_url('assets/');  ?>js/sb-admin-2.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
<script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>


<script>
    $('#datatable-datados').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        
        ajax: {
            url: "<?= site_url('data/getdatados') ?>",
            type: "POST"
        },
        
        columnDefs: [{
            targets: [0, 4], 
            orderable: false
        }],
        
        columns: [{
                data: 'no'
            },
            {
                data: 'nidn'
            },
            {
                data: 'nama_dos'
            },
            {
                data: 'gelar'
            },
            {
                data: 'aksi'
            }
        ]
    });

    $('#formAddDosen').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: "<?= site_url('data/datados') ?>",
        type: "POST",
        data: $(this).serialize() + '&ajax=1',
        dataType: "json",
        success: function(res){
            if(res.status){
                $('#newDosenModal').modal('hide');
                $('#formAddDosen')[0].reset();
                $('#datatable-datados').DataTable().ajax.reload(null, false);
            } else if(res.errors){
                $('#err_o_nidn').text(res.errors.nidn || '');
                $('#err_o_nama_dos').text(res.errors.nama_dos || '');
                $('#err_o_gelar').text(res.errors.gelar || '');
            }
        },
        error: function(xhr){
            console.log(xhr.responseText);
        }
    });
});

    // data dosen: Edit -  modal
    $(document).on('click', '.btn-edit-dosen', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.post('<?= site_url('data/getdatadosrow') ?>', { id: id }, function(res) {
            if (!res || !res.id_dosen) return;
            $('#e_id_dosen').val(res.id_dosen);
            $('#e_nidn').val(res.nidn);
            $('#e_nama_dos').val(res.nama_dos);
            $('#e_gelar').val(res.gelar);
            $('#err_e_nidn, #err_e_nama_dos, #err_e_gelar').text('');
            $('#editdosModal').modal('show');
        }, 'json');
    });

    // dosen: Edit - submit 
    $('#formEditDos').on('submit', function(e) {
        e.preventDefault();
        $('#err_e_nidn, #err_e_nama_dos, #err_e_gelar').text('');
        $.post('<?= site_url('data/updatedos') ?>', $(this).serialize(), function(res) {
            if (res && res.status) {
                $('#editdosModal').modal('hide');
                $('#datatable-datados').DataTable().ajax.reload(null, false);
            } else if (res && res.errors) {
                $('#err_e_nidn').text(res.errors.nidn || '');
                $('#err_e_nama_dos').text(res.errors.nama_dos || '');
                $('#err_e_gelar').text(res.errors.gelar || '');
            }
        }, 'json');
    });

    // dosen: Delete
    $(document).on('click', '.btn-delete-dosen', function(e) {
        e.preventDefault();
        if (!confirm('Yakin hapus dosen ini?')) return;
        const id = $(this).data('id');
        $.post('<?= site_url('data/deletedatadosrow') ?>', { id: id }, function(res) {
            if (res && res.status) {
                $('#datatable-datados').DataTable().ajax.reload(null, false);
            } else {
                alert(res && res.message ? res.message : 'Gagal menghapus');
            }
        }, 'json');
    });


        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/toggleaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });



        $('#datatable-datasiswa').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        
        ajax: {
            url: "<?= site_url('data/getdatasiswa') ?>",
            type: "POST"
        },
        
        columnDefs: [{
            targets: [0, 4], 
            orderable: false
        }],
        
        columns: [{
                data: 'no'
            },
            {
                data: 'nim'
            },
            {
                data: 'nama'
            },
            {
                data: 'nama_prodi'
            },
            {
                data: 'aksi'
            }
        ]
    });

    $('#formAddsiswa').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: "<?= site_url('data/datasiswa') ?>",
        type: "POST",
        data: $(this).serialize() + '&ajax=1',
        dataType: "json",
        success: function(res){
            if(res.status){
                $('#newsiswaModal').modal('hide');
                $('#formAddsiswa')[0].reset();
                $('#datatable-datasiswa').DataTable().ajax.reload(null, false);
            } else if(res.errors){
                $('#err_o_nim').text(res.errors.nim || '');
                $('#err_o_nama_siswa').text(res.errors.nama || '');
                $('#err_o_prodi_id').text(res.errors.prodi_id || '');
            }
        },
        error: function(xhr){
            console.log(xhr.responseText);
        }
    });
});

    // data mahasiswa: Edit -  modal
    $(document).on('click', '.btn-edit-siswa', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.post('<?= site_url('data/getdatamahasiswarow') ?>', { id: id }, function(res) {
            if (!res || !res.id_mahasiswa) return;
            $('#e_id_siswa').val(res.id_mahasiswa);
            $('#e_nim').val(res.nim);
            $('#e_nama_siswa').val(res.nama);
           $('#e_prodi_id option').prop('selected', false);

        $('#e_prodi_id option').each(function() {
            if ($(this).val() == res.prodi_id) {
                $(this).prop('selected', true);
            }
        });
            $('#err_e_nim, #err_e_nama_siswa, #err_e_prodi_id').text('');
            $('#editsiswaModal').modal('show');
        }, 'json');
    });

    // mahasiswa: Edit - submit 
    $('#formEditSiswa').on('submit', function(e) {
        e.preventDefault();
        $('#err_e_nim, #err_e_nama_siswa, #err_e_prodi_id').text('');
        let formData = $(this).serialize(); 
    $.post('<?= site_url('data/updatemahasiswa') ?>', formData, function(res) {
            if (res && res.status) {
                $('#editsiswaModal').modal('hide');
                $('#datatable-datasiswa').DataTable().ajax.reload(null, false);
            } else if (res && res.errors) {
                $('#err_e_nim').text(res.errors.nim || '');
                $('#err_e_nama_siswa').text(res.errors.nama || '');
                $('#err_e_prodi_id').text(res.errors.prodi_id || '');
            }
        }, 'json');
    });

    // mahasiswa: Delete
    $(document).on('click', '.btn-delete-siswa', function(e) {
        e.preventDefault();
        if (!confirm('Yakin hapus siswa ini?')) return;
        const id = $(this).data('id');
        $.post('<?= site_url('data/deletedatasiswarow') ?>', { id: id }, function(res) {
            if (res && res.status) {
                $('#datatable-datasiswa').DataTable().ajax.reload(null, false);
            } else {
                alert(res && res.message ? res.message : 'Gagal menghapus');
            }
        }, 'json');
    });


        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/toggleaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });


        $('#datatable-daftar').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        
        ajax: {
            url: "<?= site_url('pengajuan/getdaftar') ?>",
            type: "POST"
        },
        
        columnDefs: [{
            targets: [0, 9], 
            orderable: false
        }],
        
        columns: [{
                data: 'no'
            },
            {
                data: 'nim'
            },
            {
                data: 'judul'
            },
            {
                data: 'link'
            },
            {
                data: 'dosen1'
            },
            {
                data: 'dosen2'
            },
            {
                data: 'dosen3'
            },
            {
                data: 'status'
            },
            {
                data: 'tanggal'
            },
            {
                data: 'aksi'
            }
        ]
    });

    $('#formAdddaftar').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: "<?= site_url('pengajuan/updatedaftar') ?>",
        type: "POST",
        data: $(this).serialize() + '&ajax=1',
        dataType: "json",
        success: function(res){
            if(res.status){
                $('#newdaftarModal').modal('hide');
                $('#formAdddaftar')[0].reset();
                $('#datatable-daftar').DataTable().ajax.reload(null, false);
            } else if(res.errors){
                $('#err_o_nim').text(res.errors.nim || '');
                $('#err_o_judul').text(res.errors.judul || '');
                $('#err_o_link').text(res.errors.link || '');
                $('#err_o_dosen1').text(res.errors.dosen1 || '');
                $('#err_o_dosen2').text(res.errors.dosen2 || '');
                $('#err_o_dosen3').text(res.errors.dosen3 || '');
                $('#err_o_status').text(res.errors.status || '');
                $('#err_o_tanggal').text(res.errors.tanggal || '');
            }
        },
        error: function(xhr){
            console.log(xhr.responseText);
        }
    });
});

    // daftar : Edit -  modal
    $(document).on('click', '.btn-edit-daftar', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        $.post('<?= site_url('pengajuan/getdaftarrow') ?>', { id: id }, function(res) {
            if (!res || !res.id) return;
            $('#e_id').val(res.id);
            $('#e_nim').val(res.nim);
            $('#e_judul').val(res.judul);
            $('#e_link').val(res.link);
            $('#e_dosen1_id').val(res.dosen1);
            $('#e_dosen2_id').val(res.dosen2);
            $('#e_dosen3_id').val(res.dosen3);
            $('#err_e_nim, #err_e_judul, #err_e_link, #err_e_dosen1_id, #err_e_dosen2_id, #err_e_dosen3_id, #err_e_status, #err_e_tanggal').text('');
            $('#editdaftarModal').modal('show');
        }, 'json');
    });

    // mahasiswa: Edit - submit 
    $('#formEditdaftar').on('submit', function(e) {
        e.preventDefault();
        $('#err_e_nim, #err_e_judul, #err_e_link, #err_e_dosen1_id, #err_e_dosen2_id, #err_e_dosen3_id, #err_e_status, #err_e_tanggal').text('');
        let formData = $(this).serialize(); 
    $.post('<?= site_url('pengajuan/updatedaftar') ?>', formData, function(res) {
            if (res && res.status) {
                $('#editdaftarModal').modal('hide');
                $('#datatable-daftar').DataTable().ajax.reload(null, false);
            } else if (res && res.errors) {
                $('#err_e_nim').text(res.errors.nim || '');
                $('#err_e_judul').text(res.errors.judul || '');
                $('#err_e_link').text(res.errors.link || '');
                $('#err_e_dosen1_id').text(res.errors.dosen1_id || '');
                $('#err_e_dosen2_id').text(res.errors.dosen2_id || '');
                $('#err_e_dosen3_id').text(res.errors.dosen3_id || '');
            }
        }, 'json');
    });

    // daftar : Delete
    $(document).on('click', '.btn-delete-daftar', function(e) {
        e.preventDefault();
        if (!confirm('Yakin hapus pengajuan ini?')) return;
        const id = $(this).data('id');
        $.post('<?= site_url('pengajuan/deletedaftarrow') ?>', { id: id }, function(res) {
            if (res && res.status) {
                $('#datatable-daftar').DataTable().ajax.reload(null, false);
            } else {
                alert(res && res.message ? res.message : 'Gagal menghapus');
            }
        }, 'json');
    });


        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/toggleaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });

        $('#datatable-verif').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        
        ajax: {
            url: "<?= site_url('pengajuan/getverif') ?>",
            type: "POST"
        },
        
        columnDefs: [{
            targets: [0], 
            orderable: false
        }],
        
        columns: [{
                data: 'no'
            },
            {
                data: 'nim'
            },
            {
                data: 'nama'
            },
            {
                data: 'judul'
            },
            {
                data: 'link'
            },
            {
                data: 'tanggal'
            },
            {
                data: 'status'
            },
        ]
    });

    $('#formAddverif').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: "<?= site_url('pengajuan/updateverif') ?>",
        type: "POST",
        data: $(this).serialize() + '&ajax=1',
        dataType: "json",
        success: function(res){
            if(res.status){
                $('#newverifModal').modal('hide');
                $('#formAdddverif')[0].reset();
                $('#datatable-daftar').DataTable().ajax.reload(null, false);
            } else if(res.errors){
                $('#err_o_nim').text(res.errors.nim || '');
                $('#err_o_judul').text(res.errors.judul || '');
                $('#err_o_link').text(res.errors.link || '');
                $('#err_o_dosen1').text(res.errors.dosen1 || '');
                $('#err_o_dosen2').text(res.errors.dosen2 || '');
                $('#err_o_dosen3').text(res.errors.dosen3 || '');
                $('#err_o_status').text(res.errors.status || '');
                $('#err_o_tanggal').text(res.errors.tanggal || '');
            }
        },
        error: function(xhr){
            console.log(xhr.responseText);
        }
    });
});


function updateStatus(status){
    let id = $('#status_id').val();

    $.ajax({
        url: "<?= site_url('pengajuan/updatestatus') ?>",
        type: "POST",
        data: {
            id: id,
            status: status
        },
        dataType: "json",
        success: function(res){
            if(res.status){
                $('#statusModal').modal('hide');
                $('#datatable-verif').DataTable().ajax.reload(null, false);
            }
        }
    });
}
    $(document).on('click', '.btn-status', function(){
    let id = $(this).data('id');
    $('#status_id').val(id);
    $('#statusModal').modal('show');
});


        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/toggleaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });
</script>