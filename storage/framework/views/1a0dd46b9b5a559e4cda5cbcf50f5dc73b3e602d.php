<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">Aurellia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo e(( $title === 'Home') ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(( $title === 'About') ? 'active' : ''); ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(( $title === 'Gallery') ? 'active' : ''); ?>" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(( $title === 'Contacts') ? 'active' : ''); ?>" href="<?php echo e(route('contacts.create')); ?>">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route ('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route ('register')); ?>">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH D:\KK4 -A\modul\3-10-Aurellia\resources\views/partials/navbar.blade.php ENDPATH**/ ?>