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
                                <a href="#!"><img class="card-img-top" src="./img/Dark Souls.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Accion, Aventura</div>
                                    <h2 class="card-title h4">Dark Souls</h2>
                                    <p class="card-text">‘Dark Souls: Prepare to Die Edition’, el juego de PC, es exactamente igual 
                                        al ‘Dark Souls’ de consola, pero con unos cuantos contenidos extra: dos nuevos jefes finales, 
                                        un nuevo capítulo, nuevas zonas explorables, nuevos personajes no controlables y nuevos ítems (armaduras, etc.).</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                            <!-- Super Smash Bros Ultimate -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/Call of Duty.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Battle Royal</div>
                                    <h2 class="card-title h4">Call of Duty</h2>
                                    <p class="card-text">Call of Duty: Mobile es un videojuego de disparos en primera persona desarrollado 
                                        por Activision y TiMi Studios de Tencent Games para la plataforma de Android e IOS. Fue lanzado el 
                                        1 de octubre de 2019. En su primer mes el juego tuvo más de 148 millones de descargas y generó casi 
                                        US$ 54 millones en ingresos.​​</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Call of Duty -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/Super Smash Bros Ultimate.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Pelea</div>
                                    <h2 class="card-title h4">Super Smash Bros Ultimate</h2>
                                    <p class="card-text">Super Smash Bros. Ultimate es un videojuego de lucha desarrollado por Sora Ltd. 
                                        y Bandai Namco Entertainment y distribuido por Nintendo para la consola Nintendo Switch. Fue lanzado 
                                        a nivel mundial el 7 de diciembre de 2018 y se trata del quinto título de la serie Super Smash Bros.</p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
                                </div>
                            </div>
                            <!-- Free Fire -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="./img/Free Fire.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Battle Royal</div>
                                    <h2 class="card-title h4">Free Fire</h2>
                                    <p class="card-text">Garena Free Fire es un videojuego battle royale, desarrollado por 111dots studio​ y 
                                        publicado por Garena para Android e IOS.​​Se convirtió en el juego móvil más descargado a nivel global en 2019.​ </p>
                                    <a class="btn btn-primary" href="#!">Leer más →</a>
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
