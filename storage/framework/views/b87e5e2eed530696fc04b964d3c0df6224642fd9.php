

<?php $__env->startSection('contenido'); ?>
<h2>EDITAR REGISTROS</h2>

<form action="/articulos/<?php echo e($articulo->id); ?>" method="POST">
    <?php echo csrf_field(); ?>    
    <?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="<?php echo e($articulo->codigo); ?>">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="<?php echo e($articulo->descripcion); ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="<?php echo e($articulo->cantidad); ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="<?php echo e($articulo->precio); ?>">
  </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8crud\resources\views/articulo/edit.blade.php ENDPATH**/ ?>