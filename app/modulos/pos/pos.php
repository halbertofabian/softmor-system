<!-- <div class="">
    <div class="card-body">
        <h4 class="card-title">Punto de venta <strong>CAJA: 00001</strong></h4>
        <div class="row">
            <div class="col-12">

                <h4 class="float-right"><strong><span id="relojPOS"></strong> </span></h4>

            </div>
            <div class="col-12">
                <button onclick="openFullscreen()" class="btn btnFullSc btn-light float-right"> Full Screan <i class="fas fa-expand"></i></button>

            </div>
        </div>
        <fieldset id="contentPos_venta">
            <div class="row">


                <div class="col-md-3 col-6">
                    <div class="form-group">
                        <label for="vts_id_venta"># Venta</label>
                        <input type="text" name="vts_id_venta" id="vts_id_venta" class="form-control" placeholder="" readonly>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="form-group">
                        <label for="vts_id_cliente">Cliente</label>
                        <select name="vts_id_cliente" class="form-control" id="vts_id_cliente">
                            <option value="1">General</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="form-group">
                        <label for="vts_tipo_venta">Tipo de venta</label>
                        <select name="vts_tipo_venta" class="form-control" id="vts_tipo_venta">
                            <option value="Menudeo">Menudeo</option>
                            <option value="Mayoreo">Mayoreo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="form-group">
                        <label for="vts_usuario_registro">Atiende:</label>
                        <input type="text" class="form-control" id="vts_usuario_registro" readonly value="<?php echo $_SESSION['session_usr']['usr_nombre'] ?>">
                    </div>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-dark float-right " id="btnEmpezarVenta">Empezar a marcar (ESPACE)</button>
                </div>
            </div>
        </fieldset>


        <fieldset id="contentPos" class="d-none" disabled>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form method="post" id="FormScanpds">
                        <input type="text" id="pds_sku" style="border: none; border-bottom: 1px solid #000;" class="form-control" placeholder="Introduce o escanea el código de barras aquí">
                    </form>
                </div>
                <div class="col-md-6 col-12">
                    <button class="btn btn-primary float-right mt-1 btnBuscarProducto">Buscar producto (F1)</button>
                </div>
            </div>

            <div class="row mt-1" style="overflow-y: scroll; height: 400px;">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr class="mb-1">
                            <th>#SKU</th>
                            <th>Descrpción</th>
                            <th>Costo</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="mb-1">
                            <td>7633465343</td>
                            <td>Coca cola</td>
                            <td>12.50</td>
                            <td><button class="btn btn-warning mb-1"> <strong>2 +/- </strong></button></td>
                            <td>37.50</td>
                            <th> <button class="btn btn-light btn-xl"><i class="fas fa-times text-danger" style="font-size: 20px;"></i></button> </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <button class="btn btn-dark btn-block btn-lg mt-1" style="height: 100px;"><strong style="font-size: 20px;">MANDAR A CAJA (F1) </strong></button>
                    <button class="btn btn-danger btn-block btn-lg" style="height: 100px;"><strong style="font-size: 20px;">CANCELAR (ESC) </strong></button>

                </div>
                <div class="col-md-4 col-12">
                    <h1 class="float-right"><strong></strong></h1>
                </div>
                <div class="col-md-4 col-12">
                    <button class="btn btn-success btn-block btn-lg float-right" style="height: 100px;"><strong style="font-size: 20px;"> $ 300.00 MXN <br> </strong> <strong> COBRAR AHORA (SHIFT)</strong></button>
                </div>
            </div>
        </fieldset>
    </div>
</div> -->


<div class="row">

    <div class="col-md-9 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="" id="" class="form-control " readonly value="<?php echo $_SESSION['session_usr']['usr_caja'] ?>">
                    </div>
                    <div class="col-md-6 form-group">

                        <input type="text" name="" id="" class="form-control " readonly value="<?php echo $_SESSION['session_usr']['usr_nombre'] ?>">
                    </div>
                    <div class="col-md-6 form-group">

                        <select class="form-control select2" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">

                        <input type="text" name="" id="" class="form-control " readonly value="<?php echo $_SESSION['session_suc']['scl_nombre'] ?>">
                    </div>
                    <div class="col-md-6 form-group">

                        <select class="form-control select2" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-5 form-group">
                        <input type="text" name="" id="" class="form-control " placeholder="SCAN / PRODUCTO / CÓDIGO">
                    </div>
                    <div class="col-md-1 form-group">
                        <button class="btn btn-primary btnBuscarProducto"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>

                </div>
                <div class="row" style="height:250px; overflow-x:scroll;">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto / Codigo</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped table-inverse">
                            <thead class="thead-inverse">
                                <tr class="text-center">
                                    <th>Productos</th>
                                    <th>Sub Total</th>
                                    <th>Descuento</th>
                                    <th>Cupón</th>
                                    <th>Inpuesto</th>
                                    <th>Envio</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><strong>4</strong></td>
                                    <td><strong>3,200.00</strong></td>
                                    <td><strong>0.00</strong></td>
                                    <td><strong>0.00</strong></td>
                                    <td><strong>0.00</strong></td>
                                    <td><strong>0.00</strong></td>
                                    <td><strong style="font-size:24px" class="text-danger">3,200.00</strong></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3 mt-1">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-success btn-lg">EFECTIVO</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-info btn-lg">TARJETA DÉBITO / CRÉDITO</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-secondary btn-lg">DEPOSITO</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-warning btn-lg">TRANSFERENCIA</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-pink btn-lg">CHEQUE</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-primary btn-lg">PAYPAL</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-info btn-lg">MERCADO PAGO</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-purple btn-lg">GUARDAR</button>

                    </div>
                    <div class="col-12">

                        <button class="btn btn-block mt-1 btn-danger btn-lg">CANCELAR</button>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>






<div class="modal fade" id="mdlBuscarProductos" tabindex="-1" aria-labelledby="mdlBuscarProductosLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlBuscarProductosLabel">Buscar Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">

                        <?php $productos = ProductosModelo::mdlMostrarProductosActivos(); ?>

                        <div class="table-responsive">
                            <table class="table tablas ">
                                <thead>
                                    <tr>
                                        <th>Agregar</th>
                                        <th>Nombre</th>
                                        <th>SKU</th>
                                        <th>stok</th>
                                        <th>Precio</th>
                                        <th>Precio mayoreo</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Caracteristicas</th>
                                        <th>Categorías</th>
                                        <th>Descripción</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php foreach ($productos as $key => $pds) : 
                                        $pds_sku = explode("/",$pds['pds_sku']);
                                        
                                        ?>
                                        <tr>
                                            <td><button class="btn btn-dark"><i class="fa fa-plus"></i></button></td>
                                            <td><?php echo $pds['pds_nombre'] ?></td>

                                            <td><?php echo $pds_sku[0]; ?></td>
                                            <td>
                                                <?php
                                                if ($pds['pds_stok'] <= $pds['pds_stok_min'] || $pds['pds_stok'] == 0) :

                                                    echo '<strong class="text-danger">' . $pds['pds_stok'] . '</strong>';

                                                else :
                                                    echo '<strong class="text-success">' . $pds['pds_stok'] . '</strong>';
                                                endif;
                                                ?>
                                            </td>
                                            <td> <strong><?php echo $pds['pds_precio_publico'] ?></strong> </td>
                                            <td><?php echo $pds['pds_precio_mayoreo'] ?></td>
                                            <td><?php echo $pds['pds_marca'] ?></td>
                                            <td><?php echo $pds['pds_modelo'] ?></td>
                                            <td><?php echo $pds['pds_caracteristicas'] ?></td>
                                            <td><?php echo $pds['pds_categoria'] ?></td>
                                            <td><?php echo $pds['pds_descripcion_corta'] ?></td>


                                        </tr>
                                    <?php endforeach; ?>
                                    <hr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>