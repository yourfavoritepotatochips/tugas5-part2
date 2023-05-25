<table class="table table-bordered table-hover table-striped mb-0 bg-white">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Position</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employee->firstname); ?></td>
                <td><?php echo e($employee->lastname); ?></td>
                <td><?php echo e($employee->email); ?></td>
                <td><?php echo e($employee->age); ?></td>
                <td><?php echo e($employee->position_name); ?></td>
                <td>
                    <div class="d-flex">
                        <a href="<?php echo e(route('employees.show', ['employee' => $employee->employee_id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                        <a href="<?php echo e(route('employees.edit', ['employee' => $employee->employee_id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                        <div>
                            <form action="<?php echo e(route('employees.destroy', ['employee' => $employee->employee_id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\User\tugas-5\resources\views/employee\index.blade.php ENDPATH**/ ?>