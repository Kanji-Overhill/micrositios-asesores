<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	    <script>
	        var e = ("abbr,article,aside,audio,canvas,datalist,details," +
	        "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
	        "progress,section,time,video").split(',');
	        for (var i = 0; i < e.length; i++) {
	            document.createElement(e[i]);
	        }
	    </script>
	<![endif]-->
	<title>Micrositio Asesores</title>

	<!-- TALWIND CSS -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>
<body>
	<header class="fixed w-full inse-x-0 top-0 z-50">
		<div class="container mx-auto max-w-4xl rounded-b-lg bg-primary text-white py-4 md:pl-14 md:pr-6 px-2">
			<div class="flex justify-between items-center">
				<figure class="md:w-auto w-2/5"><img class="h-11 md:w-auto w-full object-contain" src="{{ URL::asset('assets/logo-soc-acerta.png') }}" alt=""></figure>
				<div>
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

				<div class="flex flex-wrap md:-mx-4 -mx-8 justify-center">
					<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
						<figure class="overflow-hidden rounded-full bg-white mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/people.png') }}" alt=""></figure>
						<h4 class="font-semibold text-base text-center">+1,000 <br> asesorías</h4>
					</div>
					<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
						<figure class="overflow-hidden rounded-full bg-white mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/edit-2.png') }}" alt=""></figure>
						<h4 class="font-semibold text-base text-center">300 créditos firmados</h4>
					</div>
					<div class="md:px-4 px-8 md:mb-0 mb-8 md:w-1/3 w-1/2">
						<figure class="overflow-hidden rounded-full bg-white mx-auto w-24 h-24 flex items-center justify-center mb-3"><img class="" src="{{ URL::asset('assets/like.png') }}" alt=""></figure>
						<h4 class="font-semibold text-base text-center">500 sueños cumplidos</h4>
					</div>
				</div>
			</div>
		</section>

		<section class="my-16 py-2">
			<h2 class="text-center text-primary text-lg font-bold md:mb-9 mb-4">Créditos disponibles</h2>
			<div class="grid md:grid-cols-2 gap-4 mx-auto max-w-lg">
				<div class="px-4 py-2 rounded-md text-md text-center bg-secundary text-white">
					<span>Adquisición de vivienda</span>
				</div>
				<div class="px-4 py-2 rounded-md text-md text-center bg-secundary text-white">
					<span>Adquisición de terreno</span>
				</div>
				<div class="px-4 py-2 rounded-md text-md text-center bg-secundary text-white">
					<span>Cambio de hipoteca</span>
				</div>
				<div class="px-4 py-2 rounded-md text-md text-center bg-secundary text-white">
					<span>Liquidez</span>
				</div>
				<div class="px-4 py-2 rounded-md text-md text-center bg-white-smoke text-wet-asphalt">
					<span>Crédito PyME Simple</span>
				</div>
				<?php /*
				<div class="px-4 py-2 rounded-md text-md text-center bg-white-smoke text-wet-asphalt">
					<span>Terminal Punto de Venta</span>
				</div>
				 */ ?>
			</div>
		</section>
	
		<section class="my-16">
			<div class="grid md:grid-cols-2 md:gap-14 gap-8 mx-auto max-w-2xl">
				<figure class="p-4 rounded-lg bg-white-smoke flex items-center justify-center flex-col">
					<img src="{{ URL::asset('assets/logo-acerta.png') }}" />
					<a href="#" class="leading-none py-2 mt-2">Visita nuestra oficina</a>
				</figure>
				<figure class="p-4 rounded-lg bg-primary text-white flex items-center justify-center flex-col">
					<img src="{{ URL::asset('assets/house.png') }}" />
					<a href="#" class="leading-none py-2 mt-2">Simula tu crédito</a>
				</figure>
			</div>
		</section>
	
		<section class="my-16">
			<h2 class="font-bold text-center text-lg text-primary mb-8">SOC Tips</h2>
			<div class="grid md:grid-cols-2 md:gap-14 gap-8 mx-auto max-w-2xl">
				<div>
					<figure class="rounded-3xl overflow-hidden w-full relative">
						<img class="w-full" src="http://img.youtube.com/vi/Iv3zufZ1jPo/mqdefault.jpg" alt="Carlos Muñoz" />
						<a data-type="iframe" data-fancybox href="https://youtu.be/Iv3zufZ1jPo" class="absolute inset-0 flex items-center justify-center">
							<span class="absolute inset-0 opacity-30 bg-black"></span>
							<img class="relative" src="{{ URL::asset('assets/vuesax-twotone') }}-video-circle-1.png" />
						</a>
					</figure>
				</div>
				<div>
					<figure class="rounded-3xl overflow-hidden w-full relative">
						<img class="w-full" src="http://img.youtube.com/vi/QvLlT6j6vtQ/mqdefault.jpg" alt="Frio Martínez" />
						<a data-type="iframe" data-fancybox href="https://youtu.be/QvLlT6j6vtQ" class="absolute inset-0 flex items-center justify-center">
							<span class="absolute inset-0 opacity-30 bg-black"></span>
							<img class="relative" src="{{ URL::asset('assets/vuesax-twotone') }}-video-circle-1.png" />
						</a>
					</figure>
				</div>
			</div>
		</section>
	
		<section class="my-16">
			<h2 class="font-bold text-center text-lg text-primary mb-8">Te puede interesar</h2>

			<div class="grid md:gap-4 gap-8 md:grid-cols-3 text-wet-asphalt">
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1282624945.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<p>Las tendencias del crédito hipotecario para el 2022</p>
					</div>
				</div>
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1282624945.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<p>Las tendencias del crédito hipotecario para el 2022</p>
					</div>
				</div>
				<div>
					<figure class="overflow-hidden rounded-lg md:mb-3 mb-2">
						<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1282624945.png') }}" alt="">
					</figure>
					<div class="md:px-3 md:pt-3 px-2">
						<p>Las tendencias del crédito hipotecario para el 2022</p>
					</div>
				</div>
			</div>
		</section>
	
		<section class="my-16">
			<h2 class="font-bold text-center text-lg text-primary mb-8">Clientes satisfechos</h2>

			<div class="gallery-slider md:-mx-4 mx-8">
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>

				<?php /* "Elementos duplicados para activar el carrusel"  */ ?>
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>
				<figure class="md:w-1/3 sm:1/2 md:px-4 px-1">
					<img class="w-full rounded-lg object-cover" src="{{ URL::asset('assets/iStock-1280508000.png') }}" alt="">
				</figure>
			</div>
		</section>

		<section>
			<strong class="text-primary text-center mb-8 block">Déjame acompañarte en las decisiones financieras más importantes de tu vida</strong>
			<div class="advisor-map w-full md:h-72 h-56 overflow-hidden rounded-lg">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7264045480892!2d-99.171519149595!3d19.424223745917576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff49be2ac85f%3A0x7d276c9b54f05f7!2sHamburgo%20227%2C%20Ju%C3%A1rez%2C%20Cuauht%C3%A9moc%2C%2006600%20Col%20Ju%C3%A1rez%2C%20CDMX!5e0!3m2!1ses!2smx!4v1645139159754!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

			<div class="text-center mt-8">
				Hamburgo 227, Juárez, Cuauhtémoc C.P. 06600, CDMX, CDMX.
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
	<script type="text/javascript" src="js/custom.js"></script>

	<!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $('.gallery-slider').slick({
                autoplay        :   true,
                autoplaySpeed   :   5000,
                infinite        :   true,
                speed           :   800,
                arrows          :   true,
                dots            :   false,
                slidesToShow    :   3,
                slidesToScroll  :   1,
                responsive: [{
                  breakpoint: 740,
                  settings: {slidesToShow: 2,slidesToScroll: 1,infinite: true, } },
                 {
                  breakpoint: 485,
                  settings: {slidesToShow: 1,slidesToScroll: 1,infinite: true, }
                }]
            });
        });
    </script>
</body>
</html>