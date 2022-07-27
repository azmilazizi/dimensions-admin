<div class="flex flex-col p-6 space-y-4 bg-base-100">
    <article class="prose sm:prose-sm">
        <h3>Update</h3>
    </article>
    <div class="mb-6">
        <label for="foldername" class="label">Folder
            Name</label>
        <input wire:model="folderName" type="text" id="foldername" class="w-full input input-bordered" required="">
    </div>
    <div class="flex justify-end">
        <button wire:click="updateFolder" class="btn btn-md" wire:loading.class="loading">
            Submit
        </button>
    </div>
</div>
