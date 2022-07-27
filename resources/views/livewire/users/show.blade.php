<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="inline-flex m-2 xs:mt-0">
        <button class="gap-2 btn">
            Filter
        </button>
    </div>
    <table class="table w-full table-compact">
        <thead>
            <tr class="hover">
                <th class="text-center ">
                    <input type="checkbox" class="checkbox checkbox-sm" />
                </th>
                <th>
                    UUID
                </th>
                <th s>
                    Email
                </th>
                <th>
                    Firstname
                </th>
                <th>
                    Lastname
                </th>
                <th>
                    Created At
                </th>
                <th class="text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
            <tr>
                <td class="text-center">
                    <input type="checkbox" class="checkbox checkbox-sm" />
                </td>
                <td>
                    {{ $item['id'] }}
                </td>
                <td>
                    {{ $item['email'] }}
                </td>
                <td>
                    {{ $item['firstname'] }}
                </td>
                <td>
                    {{ $item['lastname'] }}
                </td>
                <td>
                    {{ $item['created_at'] }}
                </td>
                <td>
                    <div class="flex flex-row justify-center space-x-4">
                        <button class="btn btn-sm btn-ghost"
                            wire:click.stop="gotoFolder('{{ $item['id'] }}')">Folders</button>
                        <button class="btn btn-sm btn-ghost"
                            wire:click.stop="$emit('openModal', 'users.modal.update', {{ json_encode(['userId' => $item['id'], 'firstname' => $item['firstname'], 'lastname' => $item['lastname']]) }})">Update</button>
                        <button class="btn btn-sm btn-error"
                            wire:click.stop="$emit('openModal', 'users.modal.delete', {{ json_encode(['userId' => $item['id']]) }})">Delete</button>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex justify-end">
        {{ $collection->links('livewire.links') }}
    </div>
</div>
