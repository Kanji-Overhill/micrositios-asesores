<!DOCTYPE html>
<html lang="es">
<head>
	{{ @include('structure.head'); }}
</head>
<body>
	<header class="fixed w-full inse-x-0 top-0 z-50">
		<div class="container mx-auto max-w-4xl rounded-b-lg bg-primary text-white py-4 md:pl-14 md:pr-6 px-2">
			<div class="flex justify-between items-center">
				<figure class="md:w-auto w-2/5"><img class="h-11 md:w-auto w-full object-contain" src="{{ URL::asset('assets/logo-soc-acerta.png') }}" alt=""></figure>
				<div class="">
					<a href="#" class="inline-block rounded-full bg-secundary p-2 ml-2"><img class="object-contain w-6 h-6" src="{{ URL::asset('assets/sms.png') }}" alt=""></a>
					<a href="#" class="inline-block rounded-full bg-secundary p-2 ml-2"><img class="object-contain w-6 h-6" src="{{ URL::asset('assets/call-calling.png') }}" alt=""></a>
					<a href="#" class="inline-block rounded-full bg-secundary p-2 ml-2"><img class="object-contain w-6 h-6" src="{{ URL::asset('assets/whatsapp.png') }}" alt=""></a>
				</div>
			</div>
		</div>
	</header>
	<div class="container mx-auto max-w-4xl mt-24 shadow-lg pb-16 mb-16 md:px-14 px-4 rounded-b-lg">
		<section class="flex justify-end items-end md:h-44 gradient md:-mx-14 -mx-4 md:pt-16 pt-7 pb-7 md:px-0 px-4 relative rounded-t-lg">
			<span class="bg-cover absolute inset-0 z-0" style="background-image:url({{ '\''.URL::asset('assets/header-bg.png').'\'' }});"></span>
			<div class="md:w-2/3 w-full text-white relative">
				<h1 class="md:text-2xl text-xl">Alberto Ibarra Zuñiga C.</h1>
				<h2 class="font-light md:text-lg">Asesor SOC</h2>
			</div>
		</section>
		<section class="flex flex-wrap">
			<div class="md:w-1/3 md:inline-block flex md:flex-nowrap flex-wrap items-center">
				<figure class="block md:-mt-28 -mt-5 relative z-20"><img class="md:w-56 md:h-56 w-40 h-40 object-cover rounded-full md:border-8 border-4 border-white bg-white" src="{{ URL::asset('assets/perfil.png') }}" alt=""></figure>
				<div class="mx-auto block w-40">
					<strong class="text-nobel block leading-none md:text-xl text-lg">
						Advanced
						<i class="fa fa-star"></i>
					</strong>
					<small>Hipotecario</small>
				</div>
				<div class="text-center md:w-56 w-full mt-4">
					<figure class="inline-block mb-4"><img src="{{ URL::asset('assets/qr-code.png') }}" alt=""></figure>
					<small class="text-wet-asphalt block">Guarda mi contacto</small>
				</div>
			</div>
			<div class="md:w-2/3 rounded-lg mt-10 p-9 bg-white-smoke text-wet-asphalt md:text-lg main-description">
				<p><strong>Soy experto en asesoría hipotecaria y empresarial. Me ubico en la CDMX.</strong></p>
				<p>Te puedo ayudar a elegir la mejor alternativa financiera, te acompañare durante todo el proceso, inclusive, aun cuando tu trámite haya concluido, te apoyaré a resolver cualquier inquietud que pueda surgir.</p>
			</div>
		</section>


		<section class="my-16">
			<h2 class="font-bold text-center text-lg text-primary mb-8">Mi experiencia</h2>
			<div class="flex flex-wrap md:-mx-4 -mx-8 justify-center">
				<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
					<figure class="overflow-hidden rounded-full bg-white-smoke mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/people.png') }}" alt=""></figure>
					<h4 class="text-base text-center">+1,000 asesorías</h4>
				</div>
				<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
					<figure class="overflow-hidden rounded-full bg-white-smoke mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/edit-2.png') }}" alt=""></figure>
					<h4 class="text-base text-center">300 créditos firmados</h4>
				</div>
				<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
					<figure class="overflow-hidden rounded-full bg-white-smoke mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/like.png') }}" alt=""></figure>
					<h4 class="text-base text-center">500 sueños cumplidos</h4>
				</div>
			</div>
		</section>
	
		<section class="my-16">
			<div class="grid md:grid-cols-2 md:gap-14 gap-8 mx-auto max-w-2xl">
				<figure class="px-4 md:py-4 py-8 rounded-lg bg-white-smoke flex items-center justify-center flex-col">
					<img src="{{ URL::asset('assets/logo-acerta.png') }}" />
					<a href="#" class="leading-none py-2 mt-2">Visita nuestra oficina</a>
				</figure>
				<figure class="px-4 md:py-4 py-8 rounded-lg bg-primary text-white flex items-center justify-center flex-col">
					<img src="{{ URL::asset('assets/house.png') }}" />
					<a href="#" class="leading-none py-2 mt-2">Simula tu crédito</a>
				</figure>
			</div>
		</section>
	
		<section class="my-16">
			<h2 class="font-bold text-center text-lg text-primary mb-8">Mis certificaciones y habilidades</h2>
			<div class="flex md:-mx-4 mt-8 items-start justify-center">
				<div class="lg:w-1/4 sm:w-1/2 px-4 text-center">
					<figure><img class="inline-block" src="{{ URL::asset('assets/Grupo-1573.png') }}" alt=""></figure>
				</div>
				<div class="lg:w-1/4 sm:w-1/2 px-4 text-center">
					<figure><img class="inline-block" src="{{ URL::asset('assets/Grupo-1573.png') }}" alt=""></figure>
				</div>
			</div>
		</section>
	
		<section class="my-16">
			<div class="grid md:gap-4 gap-8 md:grid-cols-3 text-wet-asphalt">
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280098959.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<h4 class="font-semibold text-primary mb-4">Conocimiento del crédito</h4>
						<p>Evaluar y perfilar de manera adecuada al cliente para ofrecer el mejor producto de acuerdo a sus características. Además de llevar de manera adecuada el proceso de otorgamiento del crédito hipotecario y su formalización.</p>
					</div>
				</div>
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1314534661.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<h4 class="font-semibold text-primary mb-4">Conocimiento comercial</h4>
						<p>Habilidades sobre la calidad del servicio con la finalidad de que proporcione un servicio profesional y de calidad.</p>
					</div>
				</div>
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1286693192.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<h4 class="font-semibold text-primary mb-4">Prevención de fraudes</h4>
						<p>Conoce las principales causas y las consecuencias de un fraude. Además, cómo prevenirlo y sus responsabilidades como asesor financiero.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="rounded-lg mt-16 px-9 lg:py-20 md:py-12 py-8 bg-white-smoke md:text-lg main-description">
			<h2 class="font-bold text-primary text-center mb-8">Mis redes sociales</h2>
			<div class="flex justify-center">
				<a href="" target="_blank" class="rounded-full bg-skyblue mx-4"><img src="{{ URL::asset('assets/twitter.png') }}" /></a>
				<a href="" target="_blank" class="rounded-full bg-skyblue mx-4"><img src="{{ URL::asset('assets/linkedin.png') }}" /></a>
				<a href="" target="_blank" class="rounded-full bg-skyblue mx-4"><img src="{{ URL::asset('assets/facebook.png') }}" /></a>
				<a href="" target="_blank" class="rounded-full bg-skyblue mx-4"><img src="{{ URL::asset('assets/instagram.png') }}" /></a>
			</div>
		</section>
	</div>

	<!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<!-- Custom JS -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>