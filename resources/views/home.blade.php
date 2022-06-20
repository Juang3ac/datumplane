@extends('layouts.app')

@section('titulo')
Desarrollo web | SEO | Analítica
@endsection

@section('contenido')

{{-- HERO --}}
    <div class="bg-background dark:bg-transparent xl:h-5/6">
        <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
                <h1 class="text-headline text-center">
                    Lo que necesitas para 
                    <span class="text-highlight">hacer brillar </span>
                    tu negocio en Internet
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12 font-body text-paragraph font-normal text-center text-xl leading-8 sm:text-4xl ">Servicios especializados de marketing digital 
                    <br> 
                    <br>
                    <span class="text-button font-bold content-center">
                        <ion-icon name="code-slash" class=""></ion-icon> Desarrollo web 
                        | <ion-icon name="search-circle"></ion-icon> SEO 
                        | <ion-icon name="bar-chart"></ion-icon> Analítica</span>
                </p>
            </div>
            <div class="flex justify-center items-center">
                <button class="button-main mx-2">Conócenos</button>
                <button class="button-secondary mx-2">Portafolio</button>
            </div>
        </div>
    </div>

    {{-- SEGUNDA SECCIÓN --}}
    <div>
        <h1>Heading 1</h1>
        <br>
        <h2>Heading 2</h2>
        <br>
        <h3>Heading 3</h3>
        <br>
        <h4>Heading 4</h4>
        <br>
        <h5>Heading 5</h5>
        <h6>Header 6</h6>
        <br>
        <p class="sub-heading text-background">Sub heading text</p>
        <p class="first-letter:text-4xl text-paragraph-b">At is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less <a href="#">Y esto es un URL <ion-icon name="home"></ion-icon></a> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <br>
        <button class="button-main">Botón main <ion-icon name="home"></ion-icon></button>
        <br>
        <button class="button-secondary">Boton secundario</button>
        <hr class="my-4">
        <div class="flex xl:flex-row flex-wrap content-center justify-center sm:flex-col">
            <div id="card" class="w-1/4 p-8 border m-8 border-background rounded-xl bg-background flex flex-col">
                <p class="sub-heading">Sub heading de card</p>
                <p class="">Párrafo del la tarjeta así nada más como debería ser. 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like) texto de prueba</p>

                <a href="#" class="text-right">Saber más alv <ion-icon name="bandage" class="text-button w-6 h-6"></ion-icon></a>
            </div>

            <div id="card" class="w-1/4 p-8 border m-8 border-background rounded-xl bg-background">
                
                <p class="sub-heading"><ion-icon name="bandage" class="text-button w-6 h-6"></ion-icon> Sub heading de card</p>
                <p class="">Párrafo del la tarjeta así nada más como debería ser. 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for </p>
            </div>

            <div id="card" class="w-1/4 p-8 border m-8 border-background rounded-xl bg-background">
                <p class="sub-heading">Sub heading de card</p>
                <p class="">Párrafo del la tarjeta así nada más como debería ser. 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
            </div>

            <div id="card" class="w-1/4 p-8 border m-8 border-background rounded-xl bg-background">
                <p class="sub-heading">Sub heading de card</p>
                <p class="">Párrafo del la tarjeta así nada más como debería ser. 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
            </div>

            <div id="card" class="w-1/4 p-8 border m-8 border-background rounded-xl bg-background">
                <p class="sub-heading">Sub heading de card</p>
                <p class="">Párrafo del la tarjeta así nada más como debería ser. 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions otro cambio agregado s by accident, sometimes on purpose (injected humour and the like)</p>
            </div>
        </div>
    </div>


@endsection