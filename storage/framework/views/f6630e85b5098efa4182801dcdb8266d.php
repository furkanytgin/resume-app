<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('resumes.update', $resume->id)); ?>">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="container">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

            <input type="text" id="form6Example1" class="form-control" name="user_id" value="<?php echo e(auth()->user()->id); ?>"hidden/>

            <div class="col mb-4">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Başlık</label>
                <input type="text" id="form6Example1" class="form-control" name="title" value="<?php echo e($resume->title); ?>"/>
              </div>
            </div>

            <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Kısa Tanıtım</label>
                  <input type="text" id="form6Example2" class="form-control" name="summary" value="<?php echo e($resume->summary); ?>" />
                </div>
              </div>

            <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Yetenekler</label>
                  <input type="text" id="form6Example2" class="form-control" name="skills" value="<?php echo e($resume->skills); ?>" />
                </div>
              </div>

              <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Eğitim</label>
                  <input type="text" id="form6Example2" class="form-control" name="education" value="<?php echo e($resume->education); ?>" />
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Deneyimler</label>
                  <input type="text" id="form6Example2" class="form-control" name="experience" value="<?php echo e($resume->experience); ?>" />
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Hobiler</label>
                  <input type="text" id="form6Example2" class="form-control" name="interest" value="<?php echo e($resume->interest); ?>" />
                </div>
              </div>

             <div class="row">
                <div class="col-md-6 mt-4">
                    <select class="form-select form-select-lg mb-3" name="theme" id="section" onchange="showImage()">
                            <option value="<?php echo e(null); ?>">Cv için tasarım seçiniz</option>
                        <?php $__currentLoopData = App\Enums\CvBlade::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($blade->value); ?>" <?php if($resume->theme == $blade->value): echo 'selected'; endif; ?>><?php echo e($blade->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>

                <div class="col-md-6 mt-4">
                    <img id="resim" src="">

                </div>
             </div>



        <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Oluştur</button>

    </div>
  </form>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    var section = document.getElementById("section");
    function showImage() {
        var selectedSection = section.value;
        var image = document.getElementById("resim");

        if (selectedSection == "section1") {
        image.src = "<?php echo e(asset('js/images/sections/section1.png')); ?>";
        } else if (selectedSection == "section2") {
        image.src = "<?php echo e(asset('js/images/sections/section2.png')); ?>";
        }
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/resumes/edit.blade.php ENDPATH**/ ?>