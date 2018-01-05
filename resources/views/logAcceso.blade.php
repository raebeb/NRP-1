@extends('layout')

@section('contenido')
<div class="col-12 content-panel">
                <div class="card">
                    <div class="card-header">
                        <i class="material-icons menu-icon align-text-bottom">description</i> Log acceso
                    </div>
                    <div class="card-body align-items-center">
                            <div class="table-responsive">
                                    <table id="csv-history" class="display table  table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Hora</th>
                                                    <th>IP</th>
                                                    <TH>Operación</TH>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Francisca Osores</td>
                                                    <td>02-01-2018</td>
                                                    <td>17:56</td>
                                                    <td>10.70.0.38</td>
                                                    <td>Descargar</td>
                                                </tr>
                                                <tr>
                                                    <td>Byron Oyarzún</td>
                                                    <td>02-01-2018</td>
                                                    <td>11:17</td>
                                                    <td>10.70.0.42</td>
                                                    <td>Subir</td>
                                                </tr>
                                                <tr>
                                                    <td>Gustavo Gatica</td>
                                                    <td>03-01-2018</td>
                                                    <td>13:04</td>
                                                    <td>10.70.0.48</td>
                                                    <td>Descargar</td>
                                                </tr>
                                                <tr>
                                                    <td>Helien Parra</td>
                                                    <td>02-01-2018</td>
                                                    <td>12:43</td>
                                                    <td>10.70.0.40</td>
                                                    <td>Subir</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                    </div>
                </div>
            </div>
@stop