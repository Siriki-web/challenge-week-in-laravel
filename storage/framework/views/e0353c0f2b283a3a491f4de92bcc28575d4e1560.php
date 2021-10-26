

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong>Veuillez remplir tous les champs. <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>


<div class="container admin  back-create margin-create center ">
    <h2>Ajouter un étudiant</h2>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nom">Nom étudiant</label>
            <input type="text" name="nom" class="form-control" id="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prenom étudiant</label>
            <input type="text" name="prenom" class="form-control" id="prenom">
        </div>

        <div class="form-group">
            <label for="spec">Spécialité étudiant</label>
            <input type="text" name="spécialité" class="form-control" id="spec">
        </div>

        <div class="form-group">
            <label for="sexe">Sexe étudiant</label>
            <input type="text" name="sexe" class="form-control" id="sexe">
        </div>

        <div class="form-group">
            <label for="note">Note en fin de formation de l'étudiant</label>
            <input type="number" name="note_fin_formation" class="form-control" id="note">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>
    
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/Create.blade.php ENDPATH**/ ?>