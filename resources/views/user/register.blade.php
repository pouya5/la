@extends('layouts.app')
@section('title', 'Register')

@section('vendorStyles')
	@parent
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/app/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/persian-datepicker@1.1.3/dist/css/persian-datepicker.min.css">
	<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
	@yield('baseStyles')
@endsection

@section('content')

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			@yield('title')
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<!--map--
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>
				end map section-->
				<div class="col-md-6 p-b-30">
					<form class="leave-comment" method="post" action="{{ url('register') }}">
						{{ csrf_field() }}
						<h4 class="m-text26 p-b-36 p-t-15">
							@yield('title')
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="firstname" placeholder="First Name">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="family" placeholder="Family Name">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Your Password">
						</div>


						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password_confirmation" placeholder="Repeat your Password">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							Register to our news feed?  Yes <input class="" type="radio" name="news_feed" value="1">
							No <input class="" type="radio" name="news_feed" value="0" checked>
						</div>

						<div class="bo4 of-hidden size15 m-b-20 radio">
							Gender : 
							<label><input class="" type="radio" name="gender" value="male"> Male</label>
							<label><input class="" type="radio" name="gender" value="female"> Female</label>

						</div>


						<div class="bo4 of-hidden size15 m-b-20">
							Upload your profile picture
							<input class="sizefull s-text7 p-l-22 p-r-22" type="file" name="profile-picture"> 
						</div>


						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22 dataofbirth" type="text" name="dateofbirth" placeholder="Your Birth day">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="g-recaptcha" data-sitekey="6Ldv1mkUAAAAACxo91Ylw3zq3lkNChhaT-mgwcJe"></div>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('footerScripts')
	@parent
	<script type="text/javascript" src="https://unpkg.com/persian-date@1.0.5/dist/persian-date.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/persian-datepicker@1.1.3/dist/js/persian-datepicker.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".dataofbirth").pDatepicker({
				format:"dddd ,D MMMM, YYYY",
				responsive:true,
			});
		});
	</script>
<!--===============================================================================================-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script type="text/javascript" src="{{ URL::asset('js/app/map-custom.js') }}"></script>-->
<!--===============================================================================================-->
	@yield('baseScripts')
@endsection
