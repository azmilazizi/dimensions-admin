<?php

namespace App\Http\Livewire\Contents\Modal;

use App\Http\Livewire\Contents\Show;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    use LivewireAlert;

    public $folderId, $imageDetailId;

    public function mount($folderId, $imageDetailId)
    {
        $this->folderId = $folderId;
        $this->imageDetailId = $imageDetailId;
    }

    public function render()
    {
        return view('livewire.contents.modal.delete');
    }

    public function deleteContent() {
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $firestoreClient->collection('folders')->document($this->folderId)->collection('image_details')->document($this->imageDetailId)->delete();

        $this->closeModalWithEvents([Show::getName() => ['rerender', [null]]]);
        $this->alert('success', 'Successfully Deleted', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
