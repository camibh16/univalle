{{--@extends('layouts.app')--}}
@extends('web.taz.layout')

@section('content')

<section id="catagorie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                            <h2>COMIDAS RAPIDAS</h2>
                        </div>  
                        <div class="row">
                            @foreach($empresas as $empresa)
                            
                                
                           {{--  <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="{{route('producto',$empresa->id)}}">
                                        <img width="210px" height="280px" src="{{$empresa->img}}" alt="...">
                                        <h3>{{$empresa->nombre}}</h3>
                                    </a>
                                    <div class="caption">
                                        <p>{{$empresa->eslogan}}</p>
                                        <p>
                                            <a href="#" class="btn btn-default btn-transparent" role="button">
                                                <span>Ver</span>
                                            </a>
                                        </p>
                                    </div>  <!-- End of /.caption -->
                                </div>  <!-- End of /.thumbnail -->
                            </div>  <!-- End of /.col-sm-6 col-md-4 --> --}}

        <div class="col-md-6">
            <div class="card m-2 text-center">
                <div class="card-body">
                    <a class="catagotie-head" href="productos/{{$empresa->id}}">
                        <img width="280px" height="280px" src="{{$empresa->img}}" class="img-circle" alt="...">
                        <h3>{{$empresa->nombre}}</h3>
                    </a>
                     <div class="caption">
                                        <p>{{$empresa->eslogan}}</p>
                                        <p>
                                            <a href="productos/{{$empresa->id}}" class="card-footer btn btn-default btn-transparent" role="button">
                                                <span>Ver</span>
                                            </a>
                                        </p>
                                    </div>  <!-- End of /.caption -->
                </div>
                    {{-- <a href="{{route('mesa',$i)}}"  class="card-footer float-right">
                        <i class="fa fa-info float-right"></i>
                    </a> --}}

            </div>
        </div>

                        {{-- <hr class="col-md-12"> --}}
                    
                            @endforeach

                           
                            
                            {{-- <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="blog-single.html">
                                        <img src="images/frutycom.jpg" alt="...">
                                        <h3>FrutyCom</h3>
                                    </a>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
                                        <p>
                                            <a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
                                                <span>Check Items</span>
                                            </a>
                                        </p>
                                    </div>  <!-- End of /.caption -->
                                </div>  <!-- End of /.thumbnail -->
                            </div>  <!-- End of /.col-sm-6 col-md-4 -->



                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="blog-single.html">
                                        <img src="images/qbano.png" alt="...">
                                        <h3>Q'bano</h3>
                                    </a>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
                                        <p>
                                            <a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
                                                <span>Check Items</span>
                                            </a>
                                        </p>
                                    </div>  <!-- End of /.caption -->
                                </div>  <!-- End of /.thumbnail -->
                            </div>  <!-- End of /.col-sm-6 col-md-4 --> --}}




                        </div>  <!-- End of /.row -->
                    </div>  <!-- End of /.block --> 
                </div>  <!-- End of /.col-md-12 -->
            </div>  <!-- End of /.row -->
        </div>  <!-- End of /.container -->
    </section>  <!-- End of Section -->

<!-- CALL TO ACTION Start
    ================================================== -->

   {{--  <section id="call-to-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                            <h2>Our Partners</h2>
                        </div>
                    </div>  <!-- End of /.block -->
                    <div id="owl-example" class="owl-carousel">
                        <div> <img src="images/company-1.png" alt=""></div>
                        <div> <img src="images/company-2.png" alt=""></div>
                        <div> <img src="images/company-3.png" alt=""></div>
                        <div> <img src="images/company-4.png" alt=""></div>
                        <div> <img src="images/company-5.png" alt=""></div>
                        <div> <img src="images/company-6.png" alt=""></div>
                        <div> <img src="images/company-8.png" alt=""></div>
                        <div> <img src="images/company-9.png" alt=""></div>
                    </div>  <!-- End of /.Owl-Slider -->
                </div>  <!-- End of /.col-md-12 -->
            </div> <!-- End Of /.Row -->
        </div> <!-- End Of /.Container -->
    </section>  <!-- End of Section --> --}}
    
 <div style="padding-top: 40px;"></div>
@endsection
