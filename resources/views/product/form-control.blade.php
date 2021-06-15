<div class="form-group">
    <label for="name">Name</label>
    {{-- {{dd($product->name)}} --}}
    <input name="name" class="form-control text-dark" id="name" placeholder="Name your product"
        value="{{old('name') ?? $product->name}}">
</div>
<div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id" class=" form-control text-dark">
        @foreach ($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input name="price" value="{{old('price')??$product->price}}" class="form-control text-dark" id="price"
        placeholder="Set price of product">
</div>
<div class="form-group">
    <label for="link">Link</label>
    <input name="link" value="{{old('link')??$product->link}}" class="form-control text-dark" id="link"
        placeholder="Set link of product">
</div>
<div class="form-group">
    <label for="desc">Description</label>
    <textarea name="description" class="form-control text-dark" id="desc"
        placeholder="Descript you product"> {{old('description')??$product->description}}</textarea>
</div>

{{-- <div class="form-group">
    <label for="desc">Main Image</label>
    <div class=" input-group">
        <input type="file" name="main_image" class="file" accept="image/*">
        <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
        <button type="button" class="browse btn btn-outline-primary">Browse...</button>
    </div>
    <div class=" col-sm-6 pl-0 mt-2">
        <img src="" id="preview" class="img-thumbnail" style="max-width: 200px">
    </div>
</div> --}}

<div class=" form-group">
    <label class="form-label" for="customFile1">Main Image</label>
    <input name="main_image" type="file" class="form-control btn btn-outline-primary" id="customFile1" />
</div>
<div class=" form-group">
    <label class="form-label" for="customFile2">Slide Image 1</label>
    <input name="slide_image1" type="file" class="form-control btn btn-outline-primary" id="customFile2" />
</div>
<div class=" form-group">
    <label class="form-label" for="customFile3">Slide Image 2</label>
    <input name="slide_image2" type="file" class="form-control btn btn-outline-primary" id="customFile3" />
</div>
<div class=" form-group">
    <label class="form-label" for="customFile4">Slide Image 3</label>
    <input name="slide_image3" type="file" class="form-control btn btn-outline-primary" id="customFile4" />
</div>

<input type="hidden" name="seller_nrp" value="{{Auth::user()->seller->nrp}}">
{{-- <input type="hidden" name="created_at" value="{{now()}}"> --}}
<div class="float-right">
    <a href="/dashboard/products" class="btn btn-secondary">Close</a>
    <button type="submit" class="btn btn-primary" onclick="">Submit</button>
</div>
