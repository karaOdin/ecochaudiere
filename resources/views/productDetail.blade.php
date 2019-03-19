@extends('layouts.app')
@section('content')

<style type="text/css">
	.nameprd
	{
		padding-top: 40px
	}
</style>
<main>
	<!-- Heading page -->
        <section class="heading-page">
            <img src="/images/product/banner/background-comming-soon.jpg" alt="">
            <div class="heading-page-content position-center">
                <div class="page-title">
                    <h1>{{$product->name}}</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produits</li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="nameprd">
        	<div class="cotainer">
				<div class="row">
					<div class="col-sm-6">
						<img src="/storage/{{$product->image}}">
					</div>
					<div class="col-sm-6">
						<div class="section-title-left">
							<h2>{{$product->name}}</h2>	
						</div>
			        	<p>
			        		{!! $product->description !!}
			        	</p>			
					</div>
				</div>        		
        	</div>
        </section>
	
</main>

@endsection