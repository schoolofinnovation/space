<main>
    <div class="container my-5">
      <form wire:submit.prevent="addProduct">  
       <input class="form-control" type="text" placeholder="name" wire:model.lazy="name">
       <div class="col-sm-3">
        <label class="form-label" for="seniority">Category</label>
        <select class="form-control" type="text"   wire:model.lazy="category"  placeholder="choose category">
            <option >Choose</option>
            @foreach($catego as $fino)
              <option value="{{$fino -> category}}">{{$fino -> category}}</option>
            @endforeach
            </select>
            @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
        </div>
       <input class="form-control" type="text" placeholder="description" wire:model.lazy="description">
       <input class="form-control" type="text" placeholder="price" wire:model.lazy="price">
       <input class="form-control" type="text" placeholder="discount" wire:model.lazy="discount">
       <input class="form-control" type="text" placeholder="salePrice" wire:model.lazy="salePrice">
      
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</main>