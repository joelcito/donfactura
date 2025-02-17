<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
    <?php init_head(); ?>
    <div id="wrapper">
        <div class="content">
            <h4 class="tw-mt-0 tw-font-bold tw-text-lg tw-text-neutral-700 section-heading section-heading-invoices">
                <?= _l('nombre_listado'); ?>
                <?php if (has_contact_permission('invoices')) { ?>
                <span class="tw-text-sm">
                    <a href="<?= site_url('clients/statement'); ?>"
                        class="view-account-statement">
                        <?= _l('view_account_statement'); ?>
                    </a>
                </span>
                <?php } ?>
            </h4>

            <div class="row">
                <div class="col-md-12">
                    <?php if (staff_can('create', 'facturas')) { ?>
                    <div class="tw-mb-2">
                        <a href="<?php echo admin_url('facturacion/factura'); ?>" class="btn btn-primary">
                            <i class="fa-regular fa-plus tw-mr-1"></i>
                            <?php echo _l('nombre_boton_crear_nuevo'); ?>
                        </a>
                    </div>
                    <?php } ?>
                    <div class="panel_s">
                        <div class="panel-body panel-table-full">
                            <?php
                            render_datatable([
                                _l('numero_factura'),
                                _l('cantidad_factura'),
                                _l('impuesto_total'),
                                _l('fecha_factura'),
                                _l('nombre_cliente'),
                                _l('estado_factura')
                            ], 'facturas'); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  init_tail(); ?>
    <script>
        $(function() {

            initDataTable('.table-facturas', window.location.href, [4], [4]);
            $('.table-facturas').DataTable().on('draw', function() {
                var rows = $('.table-facturas').find('tr');

                console.log(rows);
                

            });
        });
    </script>
</body>
</html>
