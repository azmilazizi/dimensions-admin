<?php

namespace App\Http\Livewire\Users;

use Kreait\Firebase\Factory;
use Livewire\Component;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    // pagination
    public $perPage = 10, $search = '', $orderBy = 'asset', $orderAsc = true;

    protected $listeners = ['rerender'];

    // public function mount() {
        // }

    public function render()
    {
        $collection = collect();
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $tmp = $firestoreClient->collection('users')->listDocuments();
        foreach ($tmp as $documentRef) {
            $collection->push($documentRef->snapshot()->data());
        }
        $items = $collection->forPage($this->page, $this->perPage);

        $paginator = new LengthAwarePaginator($items, $collection->count(), $this->perPage, $this->page);
        return view('livewire.users.show')->with('collection', $paginator);
    }

    public function gotoFolder($userId) {
        return redirect()->route('folders', ['userId' => $userId]);
    }

    public function rerender() {
        $this->render();
    }
}
