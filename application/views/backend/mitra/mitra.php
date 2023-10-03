<?php $this->load->view('backend/layouts/headers'); ?>
                <div class="page-title">
                    <h3>Mitra</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Mitra</a></li>
                            <li class="active">List</li>
                        </ol>
                    </div>
                </div> 
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <a href="<?php echo site_url('backend/mitra/add_new');?>" class="btn btn-success m-b-sm">Tambah Data Baru</a>
                                    
                                    <div class="table-responsive">
                                        <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 100px;">No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Publish Date</th>
                                                    <th style="text-align: center;width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $no=0;
                                                foreach ($data->result() as $row):
                                                    $no++;
                                            ?> 
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td> <img class="img-circle avatar" src="<?php echo base_url().'assets/mitra/'.$row->foto;?>" width="40" height="40" alt=""></td>
                                                    <td><?php echo $row->judul;?></td>
                                                    <td><?php echo $row->create_date;?></td>
                                                    <td style="text-align: center;">
                                                        <a href="<?php echo site_url('backend/mitra/edit/'.$row->id);?>" class="btn btn-xs"><span class="fa fa-pencil"></span></a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->id;?>"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="<?php echo site_url('backend/visi/delete');?>" method="post">
                    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Delete Visi</h4>
                            </div>
                                <div class="modal-body">
                                    <div class="alert alert-info">
                                        Anda yakin mau menghapus data ini?
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" required>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
<?php $this->load->view('backend/layouts/footers'); ?>
        