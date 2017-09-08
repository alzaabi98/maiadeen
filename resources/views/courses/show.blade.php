@extends('layouts.app')

@section('content')
		

		<div class="columns m-t-10">

			<div class="column is-6 is-offset-1">
				
				<div class="card">

					<div class="card-header">
						<div class="card-header-title">
							{{$course->title}}
						</div>
						<div class="card-header-icon"></div>
					</div>
			
				
					<div class="card-content">

						<section class="hero is-info is-medium is-fullwidth">

						<div class="hero-body ">
						

								<h1 class="title">
									{{ $course->title}}
								</h1>
								<h3 class="subtitle">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nostrum, dignissimos ab? Temporibus in omnis tempore optio exercitationem. Repudiandae, illum.
								</h3>
							
						</div>
						</section>
					

							<div class="column">
								<div class="box">
									<h3 class="subtitle">What you will learn?</h3>
									<div class="columns">
										<div class="column">
											<ul>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												
											</ul>

		
										</div>
										<div class="column">
											<ul>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												<li> <span class="m-r-5 check-list" > <i class="fa fa-check"></i></span>the baiscs of programming</li>
												
											</ul>
										</div>
									</div>
								
								</div>
							</div>

							<div class="column">
								<div class="box">
									<h3 class="subtitle"> Requirments</h3>
									
									<ul>
										<li> <span class="m-r-5 check-list" > <i class="fa fa-anchor"></i></span>the baiscs of programming</li>
										<li> <span class="m-r-5 check-list" > <i class="fa fa-anchor"></i></span>the baiscs of programming</li>
										<li> <span class="m-r-5 check-list" > <i class="fa fa-anchor"></i></span>the baiscs of programming</li>
										
									</ul>
								</div>
								<hr>

								<div class="column">

									@foreach($lectures as $lecture)

										<my-panel :lecture="{{ json_encode($lecture)}}"></my-panel>
													
									@endforeach	
						
						
								</div>
							</div>
						
					</div>
					<div class="card-footer">
						<div class="card-footer-item">
							<i class="fa fa-facebook"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="column is-4">
				<div class="box">
					<img src="{{ asset('images/hero-1.png')}}" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus at quis, quibusdam repellendus magni alias voluptatum praesentium quo voluptas nobis iste beatae dolorum necessitatibus veniam animi accusantium, error excepturi expedita.</p>
					<hr>
					
					<h3 class="title">20 OMR</h3>
					<button class="button is-primary is-outlined">Buy the course</button>

				</div>
			</div>
		</div>
		
		
		<div class="columns">

		<div class="column is-6 is-offset-1">
			<div class="box">

			 <my-rating :rating= "{{json_encode($rating)}}"></my-rating>
				
				
			</div>
		</div>
		
			
		</div>	

		<div class="columns">
			<div class="column is-6 is-offset-1">
				<h2 class="title">Comments</h2>
				<hr>
				
					<user-comment :users="{{json_encode($users)}}"></user-comment>
				
			</div>
		</div>
		
		

{{-- 		<div class="columns">
			<p>requirements and decription</p>
		</div>

		<div class="columns">
			<p> lecturrs</p>
		</div>

		<div class="columns">
			about the teacher
		</div>

		<div class="columns"> 
			studnet feedback
		</div>

		<div class="columns">
			reveiws
		</div> --}}





@endsection