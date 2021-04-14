<div class="row mt-3">
    <form  wire:submit.prevent="save" class="col-md-6">
        <div class="form-group mb-2"> 
            <label for="floatingInput">Email address</label>
            <input type="text" class="form-control"  placeholder="Name"  wire:model.defer="name">
            @error('name') <small class="text-sm text-danger">{{ $message }}</small>   @enderror
          </div>
          <div class="form-group mb-2">
            <label for="floatingPassword">Designation</label>
            <input type="text" class="form-control"  placeholder="Password" wire:model.defer="designation">
            @error('designation')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
          </div>
          <div class="form-group mb-2">
            <label for="floatingPassword">Image</label>
            <input type="file" class="form-control"  wire:model.defer="image">
            @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
          </div>
          <div class="form-group mb-2" wire:ignore>
            <label for="floatingPassword"></label>
            <textarea name="description" id="description" rows="10"  wire:model.defer="description"></textarea>
            @error('description')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Add Member</button>
          </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'description' , {
        height : 200,
    } );
</script>
