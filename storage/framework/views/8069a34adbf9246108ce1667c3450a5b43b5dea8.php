

<?php $__env->startSection('content'); ?>

<div class="back tp">
    <div class="bd">
        <div class="pull-left">
            <h2>BASE DE DONNEES DES ETUDIANTS D'IGS</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 marge">
                <div class="pull-right">
                    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">Ajouter un étudiant</a>
                </div>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered table-hover col">
        <tr>
            <!-- <th>No</th> -->
            <th>Nom</th>
            <th>Prenom</th>
            <th>Spécialité</th>
            <th>Sexe</th>
            <th>Note fin formation</th>
            <th width="215px">Action</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!-- <td><?php echo e(++$i); ?></td> -->
            <td><?php echo e($student->nom); ?></td>
            <td><?php echo e($student->prenom); ?></td>
            <td><?php echo e($student->spécialité); ?></td>
            <td><?php echo e($student->sexe); ?></td>
            <td><?php echo e($student->note_fin_formation); ?></td>
            <td>
                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
                    <!-- <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-info">Show</a> -->
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary">Modifier</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my_project_in_laravel\resources\views/students/index.blade.php ENDPATH**/ ?>