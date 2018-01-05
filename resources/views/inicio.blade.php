@extends('layout')
@section('contenido')

<div class="col-lg-4 content-panel">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <i class="material-icons login-profile">account_circle</i>
                <h4>Bienvenida Francisca</h4>
                <p>Último acceso: 28/12/2017 17:53</p>
                <a class="dropdown-item" href="login.html"><i class="material-icons menu-icon align-text-bottom">power_settings_new</i> Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8 content-panel">
    <div class="card">
        <div class="card-header">
            <i class="material-icons menu-icon align-text-bottom">event</i> Últimas planificaciones
        </div>
        <div class="card-body align-items-center">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Archivo</th>
                            <th>Autor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="#">02-09-2017.csv</a></td>
                            <td>Francisca Osores</td>
                            <td><a href="#"><i class="material-icons menu-icon align-text-bottom">file_download</i></a> </td>
                                            
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="#">05-10-2017.csv</a></td>
                            <td>Byron Oyarzún</td>
                            <td><a href="#"><i class="material-icons menu-icon align-text-bottom">file_download</i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="#">01-11-2017.csv</a></td>
                            <td>Helien Parra</td>
                            <td><a href="#"><i class="material-icons menu-icon align-text-bottom">file_download</i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a href="#">02-12-2017.csv</a></td>
                            <td>Gustavo Gatica</td>
                            <td><a href="#"><i class="material-icons menu-icon align-text-bottom">file_download</i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop