<?php
$total_sisa=$tagihan['harga']- $total_tagihan['jumlah_transaksi'];
$this->uri->segment(4);
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<section class="content-header">
     <h1>
       Data Tables
       <small>User tables</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Tables</a></li>
       <li class="active">Data tables</li>
     </ol>
   </section>
   <section class="content">
     <div class="row">
       <div class="col-xs-12 col-md-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">List user</h3>
             <div class="text-right">
               <a href="<?php echo base_url('admin/User/tambah')?>" class="btn btn-info">
                 Tambah
               </a>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                     <th>Tanggal Transfer</th>
                     <th>Bukti</th>
                     <th>status</th>
                     <th>keterangan</th>
                     <th>jumlah_transfer</th>
                     <th>action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php foreach ($daftar_list as $row_daftar): ?>


                   <tr>
                     <td><?php echo $row_daftar['tanggal_transaksi']?></td>
                     <td><img  class="img-responsive" src="<?php echo $this->config->item('frontend') ?>/img/transaksi/<?php echo $row_daftar['foto_transaksi']?>" ></td>
                     <td><?php echo $row_daftar['status']?></td>
                     <td><?php echo $row_daftar['keterangan']?></td>
                     <td><?php echo $row_daftar['jumlah_transaksi']?></td>

                     <td>
                       <?php if ($this->uri->segment(4)=="Transfer"): if ($row_daftar['status']=='Menunggu Konfirmasi Admin') {?>


                         <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row_daftar['id_transaksi']?>">
                          Konfirmasi
                        </button>
                      <?php } else{?>
                        <button disabled  type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row_daftar['id_transaksi']?>">
                         Sudah Dikonfirmasi  </button>
                    <?php  }?>
                       <?php else: ?>
                         <button disabled  type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row_daftar['id_transaksi']?>">
                          Konfirmasi  </button>
                       <?php endif; ?>
                     </td>

                   </tr>
                   <div class="modal fade" id="exampleModal<?php echo $row_daftar['id_transaksi']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel<?php echo $row_daftar['id_transaksi']?>">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form class="" action="<?php echo base_url('admin/Transaksi/update')?>" method="post">
                          <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah transaksi</label>
                           <div class="col-sm-9">
                             <select class="form-control" name="status">
                               <option value="Berhasil">Berhasil</option>
                               <option value="Transaksi Dibatalkan">transaksi Dibatalkan</option>
                             </select>
                             <input type="hidden" name="id_transaksi" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $row_daftar['id_transaksi']?>">
                           </div>
                         </div>
                         <!-- <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 control-label">keterangan</label>
                           <div class="col-sm-9">
                              <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                         </div> -->

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
</div>
                   <?php endforeach; ?>

               </tbody>
               <tfoot>
                 <tr>
                   <th  >Total</th>
                     <th><?php echo $tagihan['harga'] ?></th>
                   <th  >-</th>
                   <th  ><?php echo $total_tagihan['jumlah_transaksi'] ?></th></th>
                   <?php
                     if ($total_sisa<=0) {?>
                       <th><button type="button" class="btn btn-success">
                         Lunas
                       </button></th>
                   <?php  } else{

                   ?>
                   <th><button type="button" class="btn btn-danger">
                     <?php
                     echo "Sisa:".$total_sisa ?>
                   </button>
                     </th><?php } ?>
                     <td></td>
                 </tr>

               </tfoot>
             </table>
           </div>
           </div>
       </div>
     </div>
   </section>

 <!-- /.content-wrapper -->
