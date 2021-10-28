<?php $this->extend('index') ?>

<?php $this->section('content') ?>

    <div class="px-4 py-4 mt-8 bg-white rounded-lg lg:px-8 lg:py-6">
      <h2 class="mb-4 text-xl font-bold text-blue-900 lg:mb-6">Team Member</h2>
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full overflow-hidden align-middle">
          <table class="min-w-full">
            <thead class="text-left bg-blue-50">
              <tr>
                <th class="px-3 py-2">No</th>
                <th class="px-3 py-2">Name</th>
                <th class="px-3 py-2">Email</th>
                <th class="px-3 py-2">Date</th>
                <th class="px-3 py-2">Status</th>
                <th class="px-3 py-2">&nbsp;</th>
              </tr>
            </thead>
            <tbody class="text-blue-900 divide-y divide-blue-100 text-opacity-80 whitespace-nowrap">

              <?php if($users): ?>
                <?php foreach($users as $index => $data): ?>

                    <tr>
                        <td class="px-3 py-3"><?php echo ++$index ?></td>
                        <td class="px-3 py-3"><?php echo $data['name'] ?></td>
                        <td class="px-3 py-3"><?php echo $data['email'] ?></td>
                        <td class="px-3 py-3"><?php echo $data['created_at'] ?></td>
                        <td class="px-3 py-3">
                            <?php if($data['role'] == 0):?>
                                <span class="inline-block w-16 px-3 py-1 text-xs text-center text-green-500 uppercase bg-green-100 rounded-full">
                                    Admin
                                </span>
                            <?php else: ?>
                                <span class="inline-block w-16 px-3 py-1 text-xs text-center text-blue-500 uppercase bg-blue-100 rounded-full">
                                    User
                                </span>
                            <?php endif; ?>
                            
                        </td>
                    </tr>

                <?php endforeach; ?>
              <?php endif; ?>

            </tbody>
          </table>
        </div>
      </div>
      <a href="#" class="inline-block mt-5 font-bold text-blue-600 hover:underline"><?php $pager->links() ?></a>
    </div>

<?php $this->endSection() ?>
