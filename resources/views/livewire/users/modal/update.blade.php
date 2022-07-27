<div class="flex flex-col p-6 space-y-4 bg-base-100">
    <article class="prose sm:prose-sm">
        <h3>Update</h3>
    </article>
    <div class="mb-6">
        <label for="firstname" class="label">Firstname</label>
        <input wire:model="firstname" type="text" id="firstname" class="w-full input input-bordered" required="">
    </div>
    <div class="mb-6">
        <label for="lastname" class="label">Lastname</label>
        <input wire:model="lastname" type="text" id="lastname" class="w-full input input-bordered" required="">
    </div>
    <div class="flex justify-end">
        <button wire:click="updateUser" class="btn btn-md" wire:loading.class="loading">
            Submit
        </button>
    </div>
</div>
