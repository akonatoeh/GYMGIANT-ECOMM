<!DOCTYPE html>
<html>

<head>
  
@include('home.css')

<style type="text/css">

.div_center
{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.detail-box
{
    padding: 15px;
}



</style>

</head>

<body>
  <div class="hero_area">
    
    @include ('home.header')
  </div>

{{-- product details start --}}

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Products
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            
              <div class="div_center">
                <img src="/products/{{$data->image}}" alt="">
              </div>


              <div class="detail-box">
                <h6>{{$data->title}}</h6>
                <h6>Price:
                  <span>${{$data->price}}</span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>Category: {{$data->category}}</h6>
                <h6>Avaiilable Quantity:
                  <span>{{$data->quantity}}</span>
                </h6>
              </div>
            
              <div class="detail-box">
                  <p>{{$data->description}}</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- product details end --}}

  @include('home.footer')

</body>

</html>