<main>
    <div class="row mb-5 pb-2">
         @foreach ($monthwise as $franchise) 
          <div class="container">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">

              <div class="col  pr-0">
                 
                    <div class="h4 fw-light mb-0"> </div> 
                    <div class="small text-muted"> </div>
                
                    <div class="round-circle">{{$franchise -> id}}</div> 
                    


                    {{--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">try</button>--}}
              </div>

              <div class="col-7  p-0">
                <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.productDetails',['itemid' => $franchise->id])}}">
                  {{$franchise->name, 24}}</a></div>
                <div class="text-muted fs-sm text-start">
                {{$franchise->description, 24}}
                </div>  
                <div class="text-muted fs-sm text-start">{{$franchise -> price}}, {{$franchise -> salePrice}}</div>
                <div class="text-muted fs-xs text-start"> <span class="bg-primary">  <i class="bi bi-eye"></i> {{$franchise -> discount}}</span> 
                <span class="bg-primary">
                  @php
                    
                  @endphp
                  <i class="bi bi-pencil"></i> 
                </span>
                </div>
              </div>

              <div class="col-3  p-0">
                @if(is_null($franchise->image))
                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.productDetails',['itemid' => $franchise->id])}}">Add</a>
                  <a class="card-img-top d-block overflow-hidden" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="Delete({{$franchise->id}})" > 
                    <i class="bi bi-x"></i>
                @else

                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.productDetails',['itemid' => $franchise->id])}}">
                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                  <a class="card-img-top d-block overflow-hidden" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="Delete({{$franchise->id}})" > 
                    <i class="bi bi-x"></i>
                  </a>
                @endif
              </div>

             
            </div>
          </div>
          
        @endforeach 
    </div>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">

          <a class="d-table-cell handheld-toolbar-item" href="#conference">
            <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
            <span class="handheld-toolbar-label">Product</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.productlisting')}}">
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