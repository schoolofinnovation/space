<main>
    <div class="container">
        <form wire:submit.prevent="addProduct">  
            <input class="form-control" type="text" placeholder="name" wire:model.lazy="name">
            <input class="form-control" type="text" placeholder="description" wire:model.lazy="description">
            <input class="form-control" type="text" placeholder="price" wire:model.lazy="price">
            <input class="form-control" type="text" placeholder="discount" wire:model.lazy="discount">
            <input class="form-control" type="text" placeholder="salePrice" wire:model.lazy="salePrice">
            
            <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
        </form>                 
        

        <form wire:submit.prevent="multiImage">
            <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
            <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_logo"  multiple="multiple">
            <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
        </form>

      </div>
</main>