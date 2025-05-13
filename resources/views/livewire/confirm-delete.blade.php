<div>
    <div class="text-center">
        <p>Do you really want to delete this contact?</p>
        <p>Name: <br><strong class="text-white">{{ $contact->name }}</strong></p>
        <p>Email: <br><strong class="text-white">{{ $contact->email }}</strong></p>
        <p>Phone: <br><strong class="text-white">{{ $contact->phone }}</strong></p>
        <button class="btn btn-primary px-5" wire:click="cancel">No</button>
        <button class="btn btn-danger px-5"wire:click="delete">Yes</button>
    </div>
</div>
