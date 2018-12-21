



@extends('frontend.fragement.layout')
@section('content1')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 20px">
                <h2 style="color: #79bb2a;">Product Detail</h2>
                <hr style="background-color: #79bb2a;">

            </div>

        </div>
    </div>


    <div class="container product_detail">
            <div class="row">
                @foreach($pro_details as $detail)
                <aside class="col-sm-5">

                    <div class="mx-auto d-block image_detail"> <a href="#"><img src="{{$detail->photo->file}}"></a></div>
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body" style="margin-top: -10px;">
                        <h3 class="title mb-3">{{$detail->pro_name}}</h3>

                        <p class="price-detail-wrap">
                    <span class="price h3 text-warning">
                        <span class="currency">US $</span><span class="num">{{$detail->prices}}</span>
                    </span>
                        </p>
                        <dl class="param param-feature">
                            <dt>Product Code: #{{$detail->pro_code}}</dt>
                        </dl>
                        @foreach($brand as $bra)
                            <dl class="param param-feature">
                                <dt>Brand: {{$bra->brand_name}}</dt>
                            </dl>
                        @endforeach
                        @foreach($category as $cat)
                        <dl class="param param-feature">
                            <dt>Type: {{$cat->category_name}}</dt>
                        </dl>
                        @endforeach
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p style="font-family: 'Khmer OS Battambang', sans-serif">{{$detail->desc}}</p></dd>
                        </dl>


                        <dl class="item-property">
                            <dt>How to use</dt>
                            <dd> <iframe width="auto" height="220px" @if($detail->video=='') src="/no-video" @else src="{{$detail->video}}" @endif  allow="autoplay;" >
                                </iframe></dd>

                        </dl>


                    </article>
                </aside> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->
    </div>
    <!--container.//-->


@stop

