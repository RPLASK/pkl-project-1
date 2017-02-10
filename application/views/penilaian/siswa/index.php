<style>
.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 75%;
    padding-top: 4px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
            <li><a href="<?php echo site_url('index')?>">Home</a></li>
            <li class="active"><a href="<?php echo site_url('penilaian')?>">Penilaian</a></li>
            </ol>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                    Penilaian
                    </h3>
                    <a href="<?php echo site_url('penilaian/add')?>" class="btn btn-default btn-sm pull-right"><i class="glyphicon glyphicon-user"></i> Tambah Aspek Penilaian</a>
                    <?php { ?>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php $this->load->view('layouts/alert')?>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               <th width="10px">No</th>
                                <th>Kelompok Penilaian</th>
                                <th>Aspek Penilaian</th>
                                <th>Nilai Angka</th>
                                <th>Nilai Huruf</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($penilaian as $pe)
                            {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pe->nama_kelompok_penilaian ?></td>
                                <td><?php echo $pe->nama_aspek_penilaian ?></td>
                                <td><?php echo $pe->nilai_angka ?></td>
                                <td><?php echo $pe->nilai_huruf ?></td>
                                <td><?php echo $pe->keterangan ?></td>

                                <td>
                                    <a href="<?php echo site_url('penilaian/edit')?>/<?php echo $pe->id ?>" class="label label-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                    <a onclick="return confirm('Anda Yakin akan menghapus?')" class="label label-danger" href="<?php echo site_url('penilaian/delete')?>/<?php echo $pe->id ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();
    $('#example1').DataTable();
} );
</script>
