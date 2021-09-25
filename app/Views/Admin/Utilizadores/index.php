<?php echo  $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?> <?php echo $titulo; ?> <?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>

<!-- enviamos os estilos para template principal-->

<?php echo $this->endSection(); ?>



<?php echo $this->section('conteudo'); ?>


 <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo;?> </h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Bi</th>
                          <th>Ativo</th>
                        </tr>
                      </thead>
                      <tbody>



                      	<?php foreach ($utilizadores as $utilizador) : ?>

                        <tr>

                          <td><?php echo $utilizador->nome; ?></td>
                          <td><?php echo $utilizador->email; ?></td>
                          <td><?php echo $utilizador->bi; ?></td>
                          
                          <td><?php echo ($utilizador->ativo ? '<label class="badge badge-primary">Sim</label>' : '<label class="badge badge-danger">Nao</label>'); ?></td>
                        </tr>
                        
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>





<?php echo $this->endSection(); ?>






<?php echo $this->section('scripts'); ?>

<!-- enviamos os scripts para template principal-->

<?php echo $this->endSection(); ?>