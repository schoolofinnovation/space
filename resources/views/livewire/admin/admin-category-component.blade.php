<main>

    <div class="container my-5">
      <small class="my-5">Create category</small>
      <form wire:submit.prevent="createCategory">

        <input type="text" class="form-control" placeholder="Category" wire:model.lazy="category" required="">
        @error('category')    
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
        <button type="submit"  class=" form-control btn btn-primary">Submit</button>

      </form>
    </div>


    <div class="container">
       @foreach( $category as $findNew)
        {
              <a href="" class="">     <i class="bi bi-x"></i> </a>

              <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="delete({{$findNew->id}})">
                  {{$findNew->category}} <i class="bi bi-x me-2"></i>
                    </a>
        }
       @endforeach
    </div>



    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">

          <a class="d-table-cell handheld-toolbar-item" href="#conference">
            <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
            <span class="handheld-toolbar-label">Category</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="#awards">
            <span class="handheld-toolbar-icon"><i class=" bi bi-trophy"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
          
          

          <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
          </a>
      </div>
    </div>
</main>