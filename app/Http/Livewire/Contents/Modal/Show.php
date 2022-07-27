<?php

namespace App\Http\Livewire\Contents\Modal;

use Kreait\Firebase\Factory;
use LivewireUI\Modal\ModalComponent;

class Show extends ModalComponent
{
    public $imageurl, $imageDetailId, $folderId;

    public function mount($imageurl, $folderId, $imageDetailId) {
        $this->imageurl = $imageurl;
        $this->imageDetailId = $imageDetailId;
        $this->folderId = $folderId;
    }

    public function render()
    {
        $data = collect();
            $factory = (new Factory())->withServiceAccount(storage_path('app/FirebaseKey.json'));
            $firestore = $factory->createFirestore();
            $firestoreClient = $firestore->database();

            $tmp = $firestoreClient->collection('folders')->document($this->folderId)->collection('image_details')->document($this->imageDetailId)->snapshot();
            $data->push($tmp->data());
        return view('livewire.contents.modal.show')->with('collection', $data[0]);
    }

    public function getCircumference($diameter) {
        return 3.142 * $diameter;
    }

    public function getAreaCircle($diameter) {
        return 3.142 * pow(($diameter / 2), 2);
    }

    public function getAreaSide($diameter, $height) {
        return $diameter * ($height * 2);
    }

    public function getLengthHeightArea($length, $height) {
        return $length * $height;
    }

    public function getDepthHeightArea($depth, $height) {
        return $depth * $height;
    }

    public function getLengthDepthArea($length, $depth) {
        return $length * $depth;
    }

    public function getTotalArea($method, $length = null, $depth = null, $height = null, $diameter = null) {
        if ($method == "Cube") return ($this->getLengthHeightArea($length, $height) * 2) + ($this->getLengthDepthArea($length, $depth) * 2) + ($this->getDepthHeightArea($depth, $height) * 2);
        else return $this->getAreaCircle($diameter) + $this->getAreaSide($diameter, $height) * 2;
    }

    public function getParameter($method, $length = null, $depth = null, $height = null, $diameter = null) {
        if ($method == "Cube") return ($length * 4) + ($height * 4) + ($depth * 4);
        else if ($method == "Cylinder") return $this->getCircumference($diameter) * 2;
    }

    public function getVolume($method, $length = null, $depth = null, $height = null, $diameter = null) {
        if ($method == "Cube") return $length * $depth * $height;
        else return $this->getAreaCircle($diameter) * ($height * 2);
    }
}
