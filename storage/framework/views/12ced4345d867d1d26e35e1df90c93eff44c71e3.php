

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
    <h2>Modifier les informations d'un étudiant</h2>
    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nom">Nom étudiant</label>
                <input type="text" class="form-control" name="nom" value="<?php echo e($student->nom); ?>" id="nom">
            </div>
        
            <div class="form-group">
                <label for="prenom">Prénom étudiant</label>
                <input type="text" class="form-control" name="prenom" value="<?php echo e($student->prenom); ?>" id="prenom">
            </div>

            <div class="form-group">
                <label for="spec">Spécialité étudiant</label>
                <input type="text" class="form-control" name="spécialité" value="<?php echo e($student->spécialité); ?>" id="spec">
            </div>

            
            <div class="form-group">
                <label for="sexe">Sexe étudiant</label>
                <input type="text" class="form-control" name="sexe" value="<?php echo e($student->sexe); ?>" id="sexe">
            </div>
        
            <div class="form-group">
                <label for="note">Note en fin de la formation</label>
                <input type="number" class="form-control" name="note_fin_formation" value="<?php echo e($student->note_fin_formation); ?>" id="note">
            </div>
           
            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Retour</a>
            
            
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/edit.blade.php ENDPATH**/ ?>