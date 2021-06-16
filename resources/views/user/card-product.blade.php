<div class="card center">
    <section class="products-grid trending pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Your Downloaded Template</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">

                @foreach (Auth::user()->transactions->where('status','1') as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href={{'/product-detail/'.$item->product->id}}>
                                <img src="{{'/assets/img/seller/'.$item->product->main_image}}" class="img-fluid"
                                    style='height:330px' />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href={{'/product-detail/'.$item->id}}>{{$item->product->name}}</a></h3>
                            <div class="product-desc overflow-ellipsis">
                                <span>{{ Str::limit($item->product->description, 40, $end='.......')}}</span>

                            </div>
                            <div class="d-flex product-button">
                                <a href='{{$item->product->link}}' target='blank' class=" demo"><span><i
                                            class="fa fa-desktop"></i>
                                        Demo</span></a>
                                <a href="{{'/assets/img/seller/'.$item->product->main_image}}"
                                    class=" download bg-green" download><span><i
                                            class="fa fa-download"></i>Download</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
