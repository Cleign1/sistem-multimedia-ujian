<main class="flex-grow">
    <div class="min-h-screen bg-gray-300">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between mb-6 items-center">
                <h1 class="text-2xl font-bold mb-6">Edit Task</h1>
                <a href='/kanban'
                class="text-black bg-gray-400 hover:bg-red-700 hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kembali</a>
            </div>
            <div class="pt-10">
                <form action="/kanban/edit/<?= $task['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <label for="title" class="">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-300 rounded-lg p-2 w-full mb-4"
                    required value="<?= esc($task['title']) ?>">
                    
                    <label for="description" class="">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"
            class="border border-gray-300 rounded-lg p-2 w-full mb-4"><?= esc($task['description']) ?></textarea>
            
            <label for="status" class="">Status</label>
            <select name="status" id="status" class="border border-gray-300 rounded-lg p-2 w-full mb-4" required>
                <option value="backlog" <?= $task['status'] === 'backlog' ? 'selected' : '' ?>>Backlog</option>
                <option value="progress" <?= $task['status'] === 'progress' ? 'selected' : '' ?>>Progress</option>
                <option value="doing" <?= $task['status'] === 'doing' ? 'selected' : '' ?>>Doing</option>
                <option value="review" <?= $task['status'] === 'review' ? 'selected' : '' ?>>Review</option>
                <option value="done" <?= $task['status'] === 'done' ? 'selected' : '' ?>>Done</option>
            </select>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                Task</button>
            </form>
        </div>
    </div>
</div>
</main>