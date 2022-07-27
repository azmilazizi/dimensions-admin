<?php

namespace App\Http\Livewire\Folders;

use Illuminate\Pagination\LengthAwarePaginator;
use Kreait\Firebase\Factory;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $userId;
    // pagination
    public $perPage = 10, $search = '', $orderBy = 'asset', $orderAsc = true;

    protected $listeners = ['rerender'];

    public function mount($userId) {
        $this->userId = $userId;
    }

    public function render()
    {
        $collection = collect();
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $tmp = $firestoreClient->collection('folders')->where('ownerId', '=', $this->userId)->documents();
        foreach ($tmp as $documentRef) {
            $tmp = $documentRef->data();
            $tmp['id'] = $documentRef->id();
            $collection->push($tmp);
        }
        $items = $collection->forPage($this->page, $this->perPage);

        $paginator = new LengthAwarePaginator($items, $collection->count(), $this->perPage, $this->page);
        return view('livewire.folders.show')->with('collection', $paginator);
    }

    public function gotoContent($folderId) {
        return redirect()->route('contents', ['userId' => $this->userId, 'folderId' => $folderId]);
    }

    public function rerender() {
        $this->render();
    }
}
