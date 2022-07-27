<?php

namespace App\Http\Livewire\Contents;

use Kreait\Firebase\Factory;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $folderId, $data;
    // pagination
    public $perPage = 10, $search = '', $orderBy = 'asset', $orderAsc = true;

    protected $listeners = ['rerender'];

    public function mount($folderId) {
        $this->data = collect();
        $this->folderId = $folderId;

        $factory = (new Factory())->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $tmp = $firestoreClient->collection('folders')->document($this->folderId)->collection('image_details')->documents();
        foreach ($tmp as $documentRef) {
            $tmp = $documentRef->data();
            $tmp['id'] = $documentRef->id();
            $this->data->push($tmp);
        }
        $this->rerender();
    }

    public function render()
    {
        $collection = $this->data;

        $items = $collection->forPage($this->page, $this->perPage);

        $paginator = new LengthAwarePaginator($items, $collection->count(), $this->perPage, $this->page);
        return view('livewire.contents.show')->with('collection', $paginator);
    }

    public function rerender() {
        $this->render();
    }
}
