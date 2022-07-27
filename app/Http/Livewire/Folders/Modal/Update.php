<?php

namespace App\Http\Livewire\Folders\Modal;

use App\Http\Livewire\Folders\Show;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;

class Update extends ModalComponent
{

    use LivewireAlert;

    public $folderName, $folderId;

    public function mount($folderId, $folderName) {
        $this->folderId = $folderId;
        $this->folderName = $folderName;
    }

    public function render()
    {
        return view('livewire.folders.modal.update');
    }

    public function updateFolder() {
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $firestoreClient->collection('folders')->document($this->folderId)->update(array(['path' => 'foldername', 'value' => $this->folderName]));

        $this->closeModalWithEvents([Show::getName() => ['rerender', [null]]]);
        $this->alert('success', 'Successfully Updated', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
