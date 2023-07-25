<main>
    <div class="container">
      <form wire:submit.prevent="addProduct">  
       <input class="form-control" type="text" placeholder="name" wire.model="name">
       <input class="form-control" type="text" placeholder="description" wire.model="description">
       <input class="form-control" type="text" placeholder="price" wire.model="price">
       <input class="form-control" type="text" placeholder="discount" wire.model="discount">
       <input class="form-control" type="text" placeholder="salePrice" wire.model="salePrice">
      
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</main>