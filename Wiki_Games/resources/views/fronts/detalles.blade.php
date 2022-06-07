@extends('fronts.layouts.main', ['titulo' => 'Giki_Games'])
@section('contenido')
        <div class="container"> 
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="./img/Genshin Impact.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Aventura, Rol</div>
                            <h2 class="card-title">Genshin Impact</h2>
                            <p class="card-text">Genshin Impact es un videojuego de rol de acción de mundo abierto y gratuito, 
                                con una mecánica de monetización de Gacha para conseguir elementos adicionales como personajes especiales y armas.</p>
                            <a class="btn btn-primary" href="/detalles">Leer más →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Dark Souls -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/personajes.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <!--<div class="small text-muted">Accion, Aventura</div>-->
                                    <h2 class="card-title h4">Personajes</h2>
                                    <p class="card-text">El juego consta de una gran cantidad de personajes muy llamativos y carismaticos, los cuales son
                                        poseedores de poderedes elementales llamados visiones los cuales le otorga un poder elemental con los cuales desempeñan
                                        diferentes roles a la hora de jugar ...
                                    </p>
                                </div>
                            </div>
                            <!-- Super Smash Bros Ultimate -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/visiones.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <!--<div class="small text-muted">Battle Royal</div>-->
                                    <h2 class="card-title h4">Visiones</h2>
                                    <p class="card-text">Las Visiones son dones otorgados a los humanos a quienes los dioses reconocen. Otorgan al portador 
                                        habilidades elementales basadas en el elemento de su Visión dada. Se dice que aquellos con éstas tienen la posibilidad 
                                        de ascender a Celestia y alcanzar la divinidad ellos mismos.​​</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Call of Duty -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/mapa.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <!--<div class="small text-muted">Pelea</div>-->
                                    <!--el sabe cosas we-->
                                    <h2 class="card-title h4">Mapa</h2>
                                    <p class="card-text">Teyvat es el continente donde el Viajero comienza su aventura en Genshin Impact.</p>
                                </div>
                            </div>
                            <!-- Free Fire -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/jefes.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <!--<div class="small text-muted">Battle Royal</div>-->
                                    <h2 class="card-title h4">Jefes</h2>
                                    <p class="card-text">...</p>
               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
@endsection
