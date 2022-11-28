<div>
    {{-- modal for roles --}}
    <div wire:ignore.self class="modal fade" id="modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title1" id="exampleModalLabel">Adding new role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="addRoles">
            <div class="modal-body">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Role</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Submit</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- modal update for roles --}}
    <div wire:ignore.self class="modal fade" id="update-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Update Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateRoles">
            <div class="modal-body">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Role</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="modal-footer">
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- delete roles modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to delete this role?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" wire:click="deleteRoles()">Delete</button>
            </div>
            </div>
        </div>
    </div>
    {{-- modal for permissions --}}
    <div wire:ignore.self class="modal fade" id="modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title1" id="exampleModalLabel">Add Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
               
                <button type="submit" class="btn btn-primary">Add Permissions</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- modal update for permissions --}}
    <div wire:ignore.self class="modal fade" id="update-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Edit Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">

                <button type="submit" class="btn btn-primary" wire:click="updatePermissions()">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- delete permissions modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Are you sure you want to delete this permissions?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-footer">
    
                <button type="submit" class="btn btn-primary" wire:click="deletePermissions()">Delete</button>
            </div>
            </div>
        </div>
    </div>
    {{-- modal update for users --}}
    <div wire:ignore.self class="modal fade" id="update-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title title2" id="exampleModalLabel">Edit Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="updateUsers">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="recipient-name" wire:model.defer="email" required="">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <select wire:model.defer="gender" class="mt-2 float-center" id="" required="">
                            <option hidden="true">Gender</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
               
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- delete users modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-footer">
             
                <button type="submit" class="btn btn-primary" wire:click="deleteUsers()">Delete</button>
            </div>
            </div>
        </div>
    </div>
</div>
