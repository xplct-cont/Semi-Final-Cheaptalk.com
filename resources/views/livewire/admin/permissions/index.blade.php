<div>
    <div class="container mt-2">
        <h1 style="font-size: 25px; font-weight: 400;">Permissions</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn  btn-sm float-end mb-2' style="background-color: #2c70b1; color:white;" data-toggle="modal" data-target="#modal-permissions">Create New Permission</div>
        <input type="search" class="form-control float-start mx-2 mb-3" style="width: 250px;" placeholder="Search" wire:model.lazy="search">
        <div class="card-body">
            <table class="table table-striped shadow text-center">
                <thead style="background-color: red; color:white;">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="" class="btn btn-primary" id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-permissions" wire:click="editPermissions({{ $permission->id }})"><i class=" fa fa-gear"></i></a>
                            <a href="" class="btn btn-danger" id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-permissions" wire:click="delete({{ $permission->id }})"><i class=" fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @if($permissions->count() == 0)
                        <td colspan="2" class="text-center">
                            No permissions found in this table.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $permissions->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }
    .close span {
        color: black;
    }
    .close:hover {
        background-color: rgb(214, 211, 211);
    }
    .title3 {
        margin-left: 8%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
</style>
