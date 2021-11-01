<?php $this->extend('index') ?>

<?php $this->section('content') ?>

    <div class="px-4 py-4 mt-8 bg-white rounded-lg lg:px-8 lg:py-6">
      <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Team Member</h2>
        <a href="<?php echo base_url('admin/posts/create') ?>" class="inline-flex flex-col items-center justify-center w-26 mb-4 px-2 py-2 border border-blue-100 rounded-lg hover:bg-blue-50">
          <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"></path>
          </svg>
          <span class="text-blue-900 opacity-70">
            Create Post
          </span>
        </a>

        <?php if(session()->getFlashdata('msg')):?>
            <div class="text-blue-900 bg-blue-50 flex p-6 mb-6">
               <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>

      <div class="overflow-x-auto">
        <div class="inline-block min-w-full overflow-hidden align-middle">
          <table class="min-w-full mt-6">
            <thead class="text-left bg-blue-50">
              <tr>
                <th class="px-3 py-2">No</th>
                <th class="px-3 py-2">Title</th>
                <th class="px-3 py-2">Image</th>
                <th class="px-3 py-2">Date</th>
                <th class="px-3 py-2">Action</th>
                <th class="px-3 py-2">&nbsp;</th>
              </tr>
            </thead>
            <tbody class="text-blue-900 divide-y divide-blue-100 text-opacity-80 whitespace-nowrap">

              <?php if($posts): ?>
                <?php foreach($posts as $index => $data): ?>

                    <tr>
                        <td class="px-3 py-3"><?php echo ++$index ?></td>
                        <td class="px-3 py-3"><?php echo $data['title'] ?></td>
                        <td class="px-3 py-3">
                          <img src="<?php echo base_url() . "/uploads/" .$data['image']; ?>" 
                               alt="<?php echo base_url() . "/uploads/" .$data['image']; ?>"
                               class="rounded w-14 h-14">
                        </td>
                        <td class="px-3 py-3"><?php echo $data['created_at'] ?></td>
                        <td class="px-3 py-3">
                            <a href="<?php echo base_url('admin/posts/view/'.$data['id']) ?>" class="font-bold text-blue-900 p-2 rounded hover:bg-blue-50" title="view">
                              <i class="bi bi-view-list"></i>
                            </a>
                            <a href="<?php echo base_url('admin/posts/update/'.$data['id']) ?>" class="font-bold text-blue-900 p-2 rounded hover:bg-blue-50" title="edit">
                              <i class="bi bi-pen-fill"></i>
                            </a>
                            <a href="<?php echo base_url('admin/posts/delete/'.$data['id']) ?>" class="font-bold text-blue-900 p-2 rounded hover:bg-blue-50" title="delete">
                              <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td class="px-3 py-3 text-center" colspan="5">No data found.</td>
                    </tr>
              <?php endif; ?>

            </tbody>
          </table>
          <span class="font-bold p-4"><?= $pager->links() ?></span>
        </div>
      </div>
    </div>

<?php $this->endSection() ?>