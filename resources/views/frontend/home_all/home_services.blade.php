
@php 
$services = App\Models\Services::latest()->get();
@endphp

<section class="services">
    <div class="container">
        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Creates amazing digital experiences</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div>
        <div class="row gx-0 services__active">


        @foreach($services as $service)
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a target="_blank" href="{{ route('service.details',$service->id) }}"><img src="{{ asset($service->services_image) }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="{{ asset($service->services_icon) }}" alt="">
                        </div>
                        <h3 class="title"><a target="_blank" href="{{ route('service.details',$service->id) }}">{{ $service->services_title }}</a></h3>

                        <h5 >Selling Price <strong style="color:#0054ff;">{{ $service->selling_price }}$</strong> </h5> 
                        <h5 >Discount Price 
                            @if($service->discount_price == NULL)
                            <strong style="color:#0054ff;">0$</strong> 
                            @else
                            <strong style="color:#0054ff;">{{ $service->discount_price }}$</strong> 
                            @endif
                        </h5> 
                        <h5 >Total Price <strong style="color:#0054ff;">{{ $service->selling_price - $service->discount_price }}$</strong> </h5> <br>



                        <p>{{ Str::limit($service->service_description,100) }}</p>
                        <ul class="services__list">
                            <li>{{ $service->services__list_desc_1 }}</li>
                            <li>{{ $service->services__list_desc_2 }}</li>
                            <li>{{ $service->services__list_desc_3 }}</li>
                            <li>{{ $service->services__list_desc_4 }}</li>

                            @if($service->services__list_desc_5 )
                            <li>{{ $service->services__list_desc_5 }}</li>
                            @endif

                            @if($service->services__list_desc_6 )
                            <li>{{ $service->services__list_desc_6 }}</li>
                            @endif         
                            
                        </ul>
                        <a target="_blank" href="{{ route('service.payment',$service->id) }}" class="btn border-btn">Pay Now</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>