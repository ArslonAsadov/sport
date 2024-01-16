<div class="inner-page-banner">
    <div class="container">
    </div>
 </div>
 <div class="inner-information-text">
    <div class="container">
       <h3>{{$slot}}</h3>
       <ul class="breadcrumb">
          <li><a href='{{route('about')}}'>Home</a></li>
          <li class="active">{{$slot}}</li>
       </ul>
    </div>
 </div>