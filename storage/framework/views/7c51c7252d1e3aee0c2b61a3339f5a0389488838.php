

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter un étudiant</h2>
        </div>
        <div class="pull-right">
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input. <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom étudiant:</strong>
                <input type="text" name="nom" class="form-control" placeholder="Nom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom étudiant:</strong>
                <input type="text" name="prenom" class="form-control" placeholder="Preom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spécialité étudiant:</strong>
                <input type="text" name="spécialité" class="form-control" placeholder="Spécialité étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexe étudiant:</strong>
                <input type="text" name="sexe" class="form-control" placeholder="Sexe étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note en fin de formation de l'étudiant:</strong>
                <input type="number" name="note_fin_formation" class="form-control" placeholder="Nom étudiant">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/create.blade.php ENDPATH**/ ?>