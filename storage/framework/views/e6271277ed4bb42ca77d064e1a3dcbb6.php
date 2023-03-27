<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Kullanıcı İşlemler</li>
      <?php if(Auth::user()->is_admin == '1'): ?>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Kullanıcı İşlemleri</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Kullanıcı Listesi</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('users.create')); ?>">Kullanıcı Oluştur</a></li>
          </ul>
        </div>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">CV İşlemleri</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('resumes.index')); ?>">CV Listem</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('resumes.create')); ?>">CV Oluştur</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
<?php /**PATH /var/www/html/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>