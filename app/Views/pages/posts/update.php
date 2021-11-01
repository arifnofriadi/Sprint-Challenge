<?php $this->extend('index') ?>

<?php $this->section('content') ?>

    <div class="px-4 py-4 mt-8 bg-white rounded-lg lg:px-8 lg:py-6">
      <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Update Post</h2>

        <?php if(isset($validation)):?>
            <div class="text text-yellow-600 bg-yellow-200 flex p-2">
               <?= $validation->listErrors() ?>
            </div>
        <?php endif;?>

      <div class="overflow-x-auto">
        <div class="inline-block min-w-full overflow-hidden align-middle">
         <form action="<?php echo base_url('admin/posts/update/'.$posts['id']) ?>" method="post" enctype="multipart/form-data">
             <div>
                 <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $posts['title'] ?>"
                 class="mt-2 mb-2 w-full h-10 pr-4 text-sm font-semibold text-blue-900 placeholder-blue-900 bg-blue-100 pl-9 placeholder-opacity-70 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:ring-opacity-60">
             </div>
             <div>
                 <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"
                    class="mt-2 mb-2 w-full text-sm font-semibold text-blue-900 placeholder-blue-900 bg-blue-100 pl-9 placeholder-opacity-70 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:ring-opacity-60">
                    <?php echo $posts['description'] ?>
                </textarea>
             </div>
             <div>
                <div>
                    <img src="<?php echo base_url('uploads/'.$posts['image']) ?>" alt="Preview Image" id="ajaxImgUpload" class="mb-3" width="300px" height="300px">
                </div>
                <div>
                    <input type="file" name="image" placeholder="Image"
                    multiple="true" onchange="onFileUpload(this);" accept="image/jpg, image/jpeg, image/png"
                    class="mt-2 mb-2 w-full h-10 pr-4 text-sm font-semibold text-blue-900 placeholder-blue-900 bg-blue-100 pl-9 placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                </div>
             </div>
             <div class="flex items-baseline justify-between mt-10">
                 <button type="submit" class="border-blue-100 p-2 rounded text-blue-700 font-semibold w-32 placeholder-blue-900 bg-blue-500 text-white hover:bg-blue-900">Update</button>
             </div>
         </form>
        </div>
      </div>
    </div>


<?php $this->endSection() ?>