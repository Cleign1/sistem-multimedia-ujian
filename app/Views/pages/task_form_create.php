<main class="flex-grow">
    <div class="min-h-screen bg-gray-300">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between mb-6 items-center">
                <h1 class="text-2xl font-bold mb-6">Create A new Task</h1>
                <a href='/kanban' class="text-black bg-gray-400 hover:bg-red-700 hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kembali</a>
            </div>
            <div class="pt-10">
                <form action="/kanban/store" method="post">
                    <?= csrf_field() ?>
                    <label for="" class="">Title</label>
                    <input type="text" name="title" class="border border-gray-300 rounded-lg p-2 w-full mb-4" required>
                    <label for="" class="">Description</label>
                    <textarea name="description" cols="30" rows="10" class="border border-gray-300 rounded-lg p-2 w-full mb-4"></textarea>
                    <label for="" class="">Status</label>
                    <select name="status" class="border border-gray-300 rounded-lg p-2 w-full mb-4" required>
                        <option value="backlog">Backlog</option>
                        <option value="progress">Progress</option>
                        <option value="doing">Doing</option>
                        <option value="review">Review</option>
                        <option value="done">Done</option>
                    </select>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Task</button>
                </form>
            </div>
        </div>
    </div>
</main>