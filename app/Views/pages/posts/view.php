<?php $this->extend('index') ?>

<?php $this->section('content') ?>

<div class="px-4 py-4 mt-8 bg-white rounded-lg lg:px-8 lg:py-6">
      <h2 class="mb-4 text-xl font-bold text-blue-900 text-center lg:mb-6"><?php echo $post['title'] ?></h2>
        
      <div class="overflow-x-auto">
        <img src="<?php echo base_url('uploads/'.$post['image']) ?>" alt="Preview Image" class="mx-auto mb-4 mt-4">    

        <p><?php echo $post['description'] ?></p>
      </div>
    </div>

<?php $this->endSection() ?>