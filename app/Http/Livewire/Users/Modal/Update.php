<?php

namespace App\Http\Livewire\Users\Modal;

use App\Http\Livewire\Users\Show;
use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Update extends ModalComponent
{
    use LivewireAlert;

    public $userId, $firstname, $lastname;

    public function mount($userId, $firstname, $lastname) {
        $this->userId = $userId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function render()
    {
        return view('livewire.users.modal.update');
    }

    public function updateUser() {
        $factory = (new Factory)->withServiceAccount(storage_path('app/FirebaseKey.json'));
        $firestore = $factory->createFirestore();
        $firestoreClient = $firestore->database();

        $firestoreClient->collection('users')->document($this->userId)->update(array(['path' => 'firstname', 'value' => $this->firstname], ['path' => 'lastname', 'value' => $this->lastname]));

        $this->closeModalWithEvents([Show::getName() => ['rerender', [null]]]);
        $this->alert('success', 'Successfully Updated', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}
