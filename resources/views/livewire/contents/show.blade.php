<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="inline-flex m-2 xs:mt-0">
        <button class="gap-2 btn">
            Filter
        </button>
    </div>
    <table class="table w-full table-compact">
        <thead>
            <tr>
                <th class="text-center ">
                    <input type="checkbox" class="checkbox checkbox-sm" />
                </th>
                <th>
                    Image
                </th>
                <th>
                    Content ID
                </th>
                <th>
                    Method Name
                </th>
                <th>
                    Created At
                </th>
                <th class="text-center">
                    <button>
                        Actions
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
            <tr class="cursor-pointer hover"
                wire:click="$emit('openModal', 'contents.modal.show', {{ json_encode(['imageurl' => $item['imageurl'], 'imageDetailId' => $item['id'], 'folderId' => $folderId]) }})">
                <td class="text-center ">
                    <input type="checkbox" class="checkbox checkbox-sm" />
                </td>
                <td>
                    <img src="{{ $item['imageurl'] }}" alt="" style="height: 40px; width: auto; margin: auto">
                </td>
                <td>
                    {{ $item['id'] }}
                </td>
                <td>
                    {{ $item['method_name'] }}
                </td>
                <td>
                    {{ $item['created_at'] }}
                </td>
                <td>
                    <div class="flex flex-row justify-center space-x-4">
                        <button class="btn btn-sm btn-error"
                            wire:click.stop="$emit('openModal', 'contents.modal.delete', {{ json_encode(['folderId' => $folderId, 'imageDetailId' => $item['id']]) }})">Delete</button>
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
