

<?php $__env->startSection('contenido'); ?>

<a href="articulos/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($articulo->id); ?></td>
        <td><?php echo e($articulo->codigo); ?></td>
        <td><?php echo e($articulo->descripcion); ?></td>
        <td><?php echo e($articulo->cantidad); ?></td>
        <td><?php echo e($articulo->precio); ?></td>
        <td>
         <form action="<?php echo e(route('articulos.destroy',$articulo->id)); ?>" method="POST">
          <a href="/articulos/<?php echo e($articulo->id); ?>/edit" class="btn btn-info">Editar</a>         
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>          
        </td>        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8crud\resources\views/articulo/index.blade.php ENDPATH**/ ?>