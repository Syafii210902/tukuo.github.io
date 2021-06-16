<div class="single-product">
    <div class="product-img">
        <a href={{'/product-detail/'.$item->id}}>
            <img src="{{asset('/assets/img/seller/'. $item->main_image)}}" class="img-fluid" style='height:330px' />
        </a>
    </div>
    <div class="product-content">
        <h3><a href={{'/product-detail/'.$item->id}}>{{$item->name}}</a></h3>
        <div class="product-desc">
            <span>{{ Str::limit($item->description, 40, $end='.......')}}</span>
        </div>
        <div class="d-flex product-button">
            <a href={{$item->link}} class=" demo" target='_blank'><span><i class="fa fa-desktop"></i> Demo</span></a>
            {{-- <a href="{{asset('/assets/img/seller/'. $item->main_image)}}" class=" download" download><span><i
                    class="fa fa-download"></i> Download</span></a> --}}
            <a href="/cart/{{$item->id}}" class=" download bg-green"><span><i class="fa fa-download"></i>
                    Buy</span></a>
        </div>
    </div>
</div>
