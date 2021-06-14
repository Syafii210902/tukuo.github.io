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
                @foreach (Auth::user()->transactions as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href={{'product-detail/'.$item->id}}>
                                <img src="/assets/img/products/p5.png" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href={{'product-detail/'.$item->id}}>{{$item->product->name}}</a></h3>
                            <div class="product-desc overflow-ellipsis">
                                <span>{{ Str::limit($item->product->description, 40, $end='.......')}}</span>

                            </div>
                            <div class="d-flex product-button">
                                <a href="#" class=" demo"><span><i class="fa fa-desktop"></i> Demo</span></a>
                                <a href="#" class=" download bg-green"><span><i
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