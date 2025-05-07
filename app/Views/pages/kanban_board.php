<main class="flex-grow">
    <div class="min-h-screen bg-gray-300">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8">Kanban Board</h1>

            <div class="mb-4">
                <a href="<?= site_url('kanban/create') ?>"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add New Task
                </a>
            </div>

            <?php if (session()->getFlashdata('message')): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    <?= session()->getFlashdata('message') ?>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Backlog Column -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700">Backlog</h2>
                    <div id="backlog" class="space-y-3 min-h-20" data-status="backlog">
                        <?php foreach ($backlogTasks as $task): ?>
                            <div class="task bg-gray-100 p-3 rounded cursor-move" data-id="<?= $task['id'] ?>">
                                <h3 class="font-medium"><?= esc($task['title']) ?></h3>
                                <p class="text-sm text-gray-600"><?= esc($task['description']) ?></p>
                                <div class="mt-2 flex space-x-2">
                                    <a href="<?= site_url('kanban/edit/' . $task['id']) ?>"
                                        class="text-blue-500 text-sm">Edit</a>
                                    <a href="<?= site_url('kanban/delete/' . $task['id']) ?>" class="text-red-500 text-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Progress Column -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-blue-600">Progress</h2>
                    <div id="progress" class="space-y-3 min-h-20" data-status="progress">
                        <?php foreach ($progressTasks as $task): ?>
                            <div class="task bg-blue-50 p-3 rounded cursor-move" data-id="<?= $task['id'] ?>">
                                <h3 class="font-medium"><?= esc($task['title']) ?></h3>
                                <p class="text-sm text-gray-600"><?= esc($task['description']) ?></p>
                                <div class="mt-2 flex space-x-2">
                                    <a href="<?= site_url('kanban/edit/' . $task['id']) ?>"
                                        class="text-blue-500 text-sm">Edit</a>
                                    <a href="<?= site_url('kanban/delete/' . $task['id']) ?>" class="text-red-500 text-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Doing Column -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-yellow-600">Doing</h2>
                    <div id="doing" class="space-y-3 min-h-20" data-status="doing">
                        <?php foreach ($doingTasks as $task): ?>
                            <div class="task bg-yellow-50 p-3 rounded cursor-move" data-id="<?= $task['id'] ?>">
                                <h3 class="font-medium"><?= esc($task['title']) ?></h3>
                                <p class="text-sm text-gray-600"><?= esc($task['description']) ?></p>
                                <div class="mt-2 flex space-x-2">
                                    <a href="<?= site_url('kanban/edit/' . $task['id']) ?>"
                                        class="text-blue-500 text-sm">Edit</a>
                                    <a href="<?= site_url('kanban/delete/' . $task['id']) ?>" class="text-red-500 text-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Review Column -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-purple-600">Review</h2>
                    <div id="review" class="space-y-3 min-h-20" data-status="review">
                        <?php foreach ($reviewTasks as $task): ?>
                            <div class="task bg-purple-50 p-3 rounded cursor-move" data-id="<?= $task['id'] ?>">
                                <h3 class="font-medium"><?= esc($task['title']) ?></h3>
                                <p class="text-sm text-gray-600"><?= esc($task['description']) ?></p>
                                <div class="mt-2 flex space-x-2">
                                    <a href="<?= site_url('kanban/edit/' . $task['id']) ?>"
                                        class="text-blue-500 text-sm">Edit</a>
                                    <a href="<?= site_url('kanban/delete/' . $task['id']) ?>" class="text-red-500 text-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Done Column -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-green-600">Done</h2>
                    <div id="done" class="space-y-3 min-h-20" data-status="done">
                        <?php foreach ($doneTasks as $task): ?>
                            <div class="task bg-green-50 p-3 rounded cursor-move" data-id="<?= $task['id'] ?>">
                                <h3 class="font-medium"><?= esc($task['title']) ?></h3>
                                <p class="text-sm text-gray-600"><?= esc($task['description']) ?></p>
                                <div class="mt-2 flex space-x-2">
                                    <a href="<?= site_url('kanban/edit/' . $task['id']) ?>"
                                        class="text-blue-500 text-sm">Edit</a>
                                    <a href="<?= site_url('kanban/delete/' . $task['id']) ?>" class="text-red-500 text-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>