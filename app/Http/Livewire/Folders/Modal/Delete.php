<?php

namespace App\Http\Livewire\Folders\Modal;

use App\Http\Livewire\Folders\Show;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    use LivewireAlert;

    public $folderId;

    public function mount($folderId) {
        $this->folderId = $folderId;
    }

    public function render()
    {
        return view('livewire.folders.modal.delete');
    }

    public function deleteFolder() {
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $firestoreClient->collection('folders')->document($this->folderId)->delete();

        $this->closeModalWithEvents([Show::getName() => ['rerender', [null]]]);
        $this->alert('success', 'Successfully Deleted', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
