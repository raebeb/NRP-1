@extends('layout')

@section('contenido')

<div class="col-12 content-panel">
                <div class="card">
                    <div class="card-header">
                        <i class="material-icons menu-icon align-text-bottom">history</i> Historial
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="csv-history" class="display table  table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Archivo</th>
                                            <th>Autor</th>
                                            <th>Fecha de creación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#">4645465.csv</a></td>
                                            <td>Francisca Osores</td>
                                            <td>27/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="#">4645466.csv</a></td>
                                            <td>Byron Oyarzún</td>
                                            <td>29/10/2017</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="#">4645467.csv</a></td>
                                            <td>Gustavo Gatica</td>
                                            <td>31/10/2017</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="#">4645468.csv</a></td>
                                            <td>Helien Parra</td>
                                            <td>31/12/2017</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>

@stop