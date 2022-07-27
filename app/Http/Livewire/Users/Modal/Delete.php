<?php

namespace App\Http\Livewire\Users\Modal;

use App\Http\Livewire\Contents\Show;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    use LivewireAlert;

    public $userId;

    public function mount($userId) {
        $this->userId = $userId;
    }

    public function render()
    {
        return view('livewire.users.modal.delete');
    }

    public function deleteUser() {
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $firestoreClient->collection('users')->document($this->userId)->delete();

        $this->closeModalWithEvents([Show::getName() => ['rerender', [null]]]);
        $this->alert('success', 'Successfully Deleted', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
