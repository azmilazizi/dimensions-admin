<div class="flex flex-col p-6 space-y-4 bg-base-100">
    <article class="prose sm:prose-sm">
        <h3>Delete</h3>
        <p>Are you sure to delete this user and all its data</p>
    </article>
    <div class="self-end">
        <button class="btn btn-sm btn-error" wire:loading.class="loading" wire:click="deleteUser">Delete</button>
    </div>
</div>
