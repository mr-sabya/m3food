<?php

namespace App\Livewire\Backend\Product;

use App\Models\Facility as ModelsFacility;
use App\Models\FacilityItem;
use Livewire\Component;

class Facility extends Component
{
    public $page = "Facility";
    public $productId;
    public $title;

    public $facility_id, $facility_title, $text, $isItemAdd = false;

    public $facilityId, $facilityEdit = false;

    public $itemId, $itemEditMode = false;

    public function mount($productId)
    {
        $this->productId = $productId;
    }

    public function saveFacility()
    {
        $this->validate([
            'title' => 'required|string|max:255',
        ]);

        $facility = new ModelsFacility();
        $facility->product_id = $this->productId;
        $facility->title = $this->title;
        $facility->save();

        $this->title = '';

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);
    }


    // edit facility
    public function editFacility($id)
    {
        $facility = ModelsFacility::find($id);
        $this->facilityId = $facility->id;
        $this->title = $facility->title;

        $this->facilityEdit = true;
    }


    public function updateFacility()
    {
        $this->validate([
            'title' => 'required|string|max:255',
        ]);

        $facility = ModelsFacility::find($this->facilityId);
        $facility->title = $this->title;
        $facility->save();

        $this->title = '';
        $this->facilityEdit = false;

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);
    }

    public function addItem($id)
    {
        $facility = ModelsFacility::find($id);
        $this->facility_title = $facility->title;

        $this->isItemAdd = true;
        $this->facility_id = $facility->id;
    }

    public function resetItemForm()
    {
        $this->facility_title = '';
        $this->facility_id = '';
        $this->text = '';
    }

    public function cancelItemForm()
    {
        $this->resetItemForm();
        $this->itemId = '';
        $this->isItemAdd = false;
        $this->itemEditMode = false;
    }

    public function saveItem()
    {
        $this->validate([
            'text' => 'required|string|max:255',
        ]);

        $item = new FacilityItem();
        $item->facility_id = $this->facility_id;
        $item->text = $this->text;
        $item->save();

        $this->resetItemForm();
        $this->isItemAdd = false;

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);
    }


    public function editItem($id)
    {
        $item = FacilityItem::find($id);

        $facility = ModelsFacility::find($item->facility_id);
        $this->facility_title = $facility->title;

        $this->itemId = $item->id;
        $this->facility_id = $item->facility_id;
        $this->text = $item->text;

        $this->isItemAdd = true;
        $this->itemEditMode = true;
    }


    public function updateItem()
    {
        $this->validate([
            'text' => 'required|string|max:255',
        ]);

        $item = FacilityItem::find($this->itemId);
        $item->text = $this->text;
        $item->save();

        $this->resetItemForm();
        $this->isItemAdd = false;
        $this->itemEditMode = false;

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.product.facility', [
            'facilities' => ModelsFacility::where('product_id', $this->productId)->get(),
        ]);
    }
}
