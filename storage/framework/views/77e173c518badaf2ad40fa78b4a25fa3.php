<?php $__env->startSection('page-content'); ?>
    <legend>New Book</legend>


    <form method="POST" action="<?php echo e(route('book.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Book Title" value="<?php echo e(old('title')); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Book Author" value="<?php echo e(old('author')); ?>">
            <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label  class="form-label">Isbn</label>
            <input type="text" class="form-control" name="isbn" placeholder="Book ISBN" value="<?php echo e(old('isbn')); ?>">
            <?php $__errorArgs = ['isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Stock" value="<?php echo e(old('stock')); ?>">
            <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo e(old('price')); ?>">
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="<?php echo e(route('books.index')); ?>">Back</a>
        </div>

    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout',['title'=>'New Book'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cse4222_g3\resources\views/books/create.blade.php ENDPATH**/ ?>