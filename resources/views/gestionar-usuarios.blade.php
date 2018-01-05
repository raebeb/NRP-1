@extends('layout')

@section('contenido')

<div class="col-12 content-panel">
                <div class="card">
                    <div class="card-header">
                        <i class="material-icons menu-icon align-text-bottom">supervisor_account</i> Gestionar usuarios
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                            <table id="csv-history" class="display table  table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Nombre</th>
                                            <th>Cargo</th>
                                            <th>E-mail</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td>Francisca Osores</td>
                                            <td>Enfermera jefe</td>
                                            <td>f.osoresortiz@uandresbello.edu</td>
                                            <td><a href="#"><i class="material-icons">mode_edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><i class="material-icons">lock</i></td>
                                            <td>Byron Oyarzún</td>
                                            <td>Administrador</td>
                                            <td>b.oyarznvenegas@uandresbello.edu</td>
                                            <td><a href="#"><i class="material-icons">mode_edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td>Gustavo Gatica</td>
                                            <td>Administrador</td>
                                            <td>ggatica@unab.cl</td>
                                            <td><a href="#"><i class="material-icons">mode_edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td></td>
                                            <td>Helien Parra</td>
                                            <td>Administrador</td>
                                            <td>hparrar@unal.edu.co</td>
                                            <td><a href="#"><i class="material-icons">mode_edit</i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                    </div>
                </div>
            </div>

@stop