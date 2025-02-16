<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Guardar';
$lang['added_successfully']   = '%s agregado exitosamente.';
$lang['updated_successfully'] = '%s actualizado exitosamente.';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Agregar Nuevo %s';
$lang['deleted']              = '%s eliminado';
$lang['problem_deleting']     = 'Problema al eliminar %s';
$lang['is_referenced']        = 'El ID del %s ya está en uso.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Volver';
$lang['error_uploading_file'] = 'Error al cargar el archivo';
$lang['load_more']            = 'Cargar más';
$lang['cant_delete_default']  = 'No se puede eliminar el %s por defecto';

# Invoice General
$lang['invoice_status_paid']                   = 'Pagado';
$lang['invoice_status_unpaid']                 = 'No Pagado';
$lang['invoice_status_overdue']                = 'Vencido';
$lang['invoice_status_not_paid_completely']    = 'Parcialmente Pagado';
$lang['invoice_pdf_heading']                   = 'FACTURA';
$lang['invoice_table_item_heading']            = 'Artículo';
$lang['invoice_table_quantity_heading']        = 'Cant';
$lang['invoice_table_rate_heading']            = 'Tarifa';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Cantidad';
$lang['invoice_subtotal']                      = 'Subtotal';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Facturar A';
$lang['invoice_data_date']                     = 'Fecha de la factura:';
$lang['invoice_data_duedate']                  = 'Fecha de vencimiento:';
$lang['invoice_received_payments']             = 'Transacciones';
$lang['invoice_no_payments_found']             = 'No se encontraron pagos para esta factura';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de Pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Cantidad';

# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo Anuncio';
$lang['announcement_name']            = 'Asunto';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar al personal';
$lang['announcement_show_to_clients'] = 'Mostrar a los clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi nombre';

# Clients
$lang['clients']                                 = 'Clientes';
$lang['client']                                  = 'Cliente';
$lang['new_client']                              = 'Nuevo Cliente';
$lang['client_lowercase']                        = 'cliente';
$lang['client_firstname']                        = 'Nombre';
$lang['client_lastname']                         = 'Apellido';
$lang['client_email']                            = 'Correo electrónico';
$lang['client_company']                          = 'Empresa';
$lang['client_vat_number']                       = 'DNI/NIF/CIF';
$lang['client_address']                          = 'Dirección';
$lang['client_city']                             = 'Ciudad';
$lang['client_postal_code']                      = 'Código Postal';
$lang['client_state']                            = 'Provincia';
$lang['client_password']                         = 'Contraseña';
$lang['client_password_change_populate_note']    = 'Nota: si rellenas este campo, la contraseña será cambiada en este contacto.';
$lang['client_password_last_changed']            = 'Última vez que se cambió la contraseña:';
$lang['login_as_client']                         = 'Iniciar sesión como cliente';
$lang['client_invoices_tab']                     = 'Facturas';
$lang['contracts_invoices_tab']                  = 'Contratos';
$lang['contracts_tickets_tab']                   = 'Tickets';
$lang['contracts_notes_tab']                     = 'Notas';
$lang['note_description']                        = 'Descripción de la nota';
$lang['client_do_not_send_welcome_email']        = 'No enviar correo de bienvenida';
$lang['clients_notes_table_description_heading'] = 'Descripción';
$lang['clients_notes_table_addedfrom_heading']   = 'Añadido por';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha de Adición';
$lang['clients_list_full_name']                  = 'Nombre Completo';
$lang['clients_list_last_login']                 = 'Último Ingreso';

# Contracts
$lang['contracts']                = 'Contratos';
$lang['contract']                 = 'Contrato';
$lang['new_contract']             = 'Nuevo Contrato';
$lang['contract_lowercase']       = 'contrato';
$lang['contract_start_date']      = 'Fecha de Inicio';
$lang['contract_end_date']        = 'Fecha de Finalización';
$lang['contract_subject']         = 'Asunto';
$lang['contract_description']     = 'Descripción';
$lang['contract_subject_tooltip'] = 'El asunto también es visible para el cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Adjuntar documento';
$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Asunto';
$lang['contract_list_start_date'] = 'Fecha de Inicio';
$lang['contract_list_end_date']   = 'Fecha de Finalización';

# Currencies
$lang['currencies']                    = 'Monedas';
$lang['currency']                      = 'Moneda';
$lang['new_currency']                  = 'Nueva Moneda';
$lang['currency_lowercase']            = 'moneda';
$lang['base_currency_set']             = 'Esta es ahora tu moneda base.';
$lang['make_base_currency']            = 'Establecer como moneda base';
$lang['base_currency_string']          = 'Moneda Base';
$lang['currency_list_name']            = 'Nombre';
$lang['currency_list_symbol']          = 'Símbolo';
$lang['currency_add_edit_description'] = 'Código de Moneda';
$lang['currency_add_edit_rate']        = 'Símbolo';
$lang['currency_edit_heading']         = 'Editar Moneda';
$lang['currency_add_heading']          = 'Agregar Nueva Moneda';

# Department
$lang['departments']                 = 'Departamentos';
$lang['department']                  = 'Departamento';
$lang['new_department']              = 'Nuevo Departamento';
$lang['department_lowercase']        = 'departamento';
$lang['department_name']             = 'Nombre del Departamento';
$lang['department_email']            = 'Correo electrónico del Departamento';
$lang['department_hide_from_client'] = '¿Ocultar del cliente?';
$lang['department_list_name']        = 'Nombre';

# Email Templates
$lang['email_templates']                        = 'Plantillas de Correo Electrónico';
$lang['email_template']                         = 'Plantilla de Correo Electrónico';
$lang['email_template_lowercase']               = 'plantilla de correo electrónico';
$lang['email_templates_lowercase']              = 'plantillas de correo electrónico';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                = 'Nombre de la plantilla';
$lang['template_subject']             = 'Asunto';
$lang['template_fromname']            = 'Nombre del remitente';
$lang['template_fromemail']           = 'Correo del remitente';
$lang['send_as_plain_text']           = 'Enviar como texto plano';
$lang['email_template_disabled']      = 'Deshabilitado';
$lang['email_template_email_message'] = 'Mensaje de correo electrónico';
$lang['available_merge_fields']       = 'Campos de combinación disponibles';

# Home
$lang['dashboard_string']                          = 'Panel de Control';
$lang['home_latest_todos']                         = 'Últimas tareas';
$lang['home_no_latest_todos']                      = 'No se encontraron tareas';
$lang['home_latest_finished_todos']                = 'Últimas tareas finalizadas';
$lang['home_no_finished_todos_found']              = 'No se encontraron tareas finalizadas';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tickets esperando respuesta por departamento';
$lang['home_tickets_awaiting_reply_by_status']     = 'Tickets esperando respuesta por estado';
$lang['home_this_week_events']                     = 'Eventos de esta semana';
$lang['home_upcoming_events_next_week']            = 'Próximos eventos la próxima semana';
$lang['home_event_added_by']                       = 'Evento agregado por';
$lang['home_public_event']                         = 'Evento público';
$lang['home_weekly_payment_records']               = 'Registros de pago semanal';
$lang['home_weekend_ticket_opening_statistics']    = 'Estadísticas de aperturas de tickets semanales';

# Newsfeed
$lang['whats_on_your_mind']                                 = 'Comparte documentos, ideas..';
$lang['new_post']                                           = 'Publicar';
$lang['newsfeed_upload_tooltip']                            = 'Consejo: Arrastra y suelta archivos para cargar';
$lang['newsfeed_all_departments']                           = 'Todos los Departamentos';
$lang['newsfeed_pin_post']                                  = 'Fijar publicación';
$lang['newsfeed_unpin_post']                                = 'Desfijar publicación';
$lang['newsfeed_delete_post']                               = 'Eliminar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te gusta esto';
$lang['newsfeed_like_this']                                 = 'Me gusta esto';
$lang['newsfeed_one_other']                                 = 'otro';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Tú y';
$lang['newsfeed_like_this_saying']                          = 'Te gusta esto';
$lang['newsfeed_unlike_this_saying']                        = 'Ya no me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar más comentarios';
$lang['comment_this_post_placeholder']                      = 'Comentar esta publicación..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Compañeros que les gusta esta publicación';
$lang['newsfeed_comment_likes_modal_heading']               = 'Compañeros que les gusta este comentario';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Esta publicación solo es visible para los siguientes departamentos: %s';

# Invoice Items
$lang['invoice_items']                     = 'Artículos de Factura';
$lang['invoice_item']                      = 'Artículo de Factura';
$lang['new_invoice_item']                  = 'Nuevo Artículo';
$lang['invoice_item_lowercase']            = 'artículo de factura';
$lang['invoice_items_list_description']    = 'Descripción';
$lang['invoice_items_list_rate']           = 'Tarifa';
$lang['invoice_item_add_edit_description'] = 'Descripción';
$lang['invoice_item_add_edit_rate']        = 'Tarifa';
$lang['invoice_item_edit_heading']         = 'Editar Artículo';
$lang['invoice_item_add_heading']          = 'Agregar Nuevo Artículo';

# Invoices
$lang['invoices']                                = 'Facturas';
$lang['invoice']                                 = 'Factura';
$lang['invoice_lowercase']                       = 'factura';
$lang['create_new_invoice']                      = 'Crear Nueva Factura';
$lang['view_invoice']                            = 'Ver Factura';
$lang['invoice_payment_recorded']                = 'Pago de la factura registrado';
$lang['invoice_payment_record_failed']           = 'Error al registrar el pago de la factura';
$lang['invoice_sent_to_client_success']          = 'La factura se ha enviado correctamente al cliente';
$lang['invoice_sent_to_client_fail']             = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']           = 'Problema al enviar el recordatorio de vencimiento de factura';
$lang['invoice_overdue_reminder_sent']           = 'Recordatorio de factura vencida enviado correctamente';
$lang['invoice_details']                         = 'Detalles de la factura';
$lang['invoice_view']                            = 'Ver Factura';
$lang['invoice_select_customer']                 = 'Cliente';
$lang['invoice_add_edit_number']                 = 'Número de Factura';
$lang['invoice_add_edit_date']                   = 'Fecha de Factura';
$lang['invoice_add_edit_duedate']                = 'Fecha de Vencimiento';
$lang['invoice_add_edit_currency']               = 'Moneda';
$lang['invoice_add_edit_client_note']            = 'Nota para el Cliente';
$lang['invoice_add_edit_admin_note']             = 'Nota Administrativa';
$lang['invoices_toggle_table_tooltip']           = 'Alternar Tabla';
$lang['edit_invoice_tooltip']                    = 'Editar Factura';
$lang['delete_invoice_tooltip']                  = 'Eliminar Factura. Nota: Todos los pagos relacionados con esta factura serán eliminados (si los hay).';
$lang['invoice_sent_to_email_tooltip']           = 'Enviar por Correo Electrónico';
$lang['invoice_already_send_to_client_tooltip']  = 'Esta factura ya ha sido enviada al cliente %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar Aviso de Vencimiento';
$lang['invoice_view_activity_tooltip']           = 'Registro de Actividad';
$lang['invoice_record_payment']                  = 'Registrar Pago';
$lang['invoice_send_to_client_modal_heading']    = 'Enviar factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar PDF de la Factura';
$lang['invoice_send_to_client_preview_template'] = 'Vista Previa de Plantilla de Correo Electrónico';
$lang['invoice_dt_table_heading_number']         = 'Factura #';
$lang['invoice_dt_table_heading_date']           = 'Fecha';
$lang['invoice_dt_table_heading_client']         = 'Cliente';
$lang['invoice_dt_table_heading_duedate']        = 'Fecha de Vencimiento';
$lang['invoice_dt_table_heading_amount']         = 'Cantidad';
$lang['invoice_dt_table_heading_status']         = 'Estado';
$lang['record_payment_for_invoice']              = 'Registrar Pago para';
$lang['record_payment_amount_received']          = 'Cantidad Recibido';
$lang['record_payment_date']                     = 'Fecha de Pago';
$lang['record_payment_leave_note']               = 'Deja una nota';
$lang['invoice_payments_received']               = 'Pagos Recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Nota Administrativa';
$lang['no_payments_found']                       = 'No se encontraron pagos para esta factura';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Modo de Pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Cantidad';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe';
$lang['payment_edit_for_invoice']             = 'Pago para la Factura';
$lang['payment_edit_amount_received']         = 'Cantidad Recibido';
$lang['payment_edit_date']                    = 'Fecha de Pago';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Asunto';
$lang['kb_article_add_edit_group']     = 'Grupo';
$lang['kb_string']                     = 'Base de Conocimiento';
$lang['kb_article']                    = 'Artículo';
$lang['kb_article_lowercase']          = 'artículo';
$lang['kb_article_new_article']        = 'Nuevo Artículo';
$lang['kb_article_disabled']           = 'Deshabilitado';
$lang['kb_article_description']        = 'Descripción del artículo';
$lang['kb_no_articles_found']          = 'No se encontraron artículos en la base de conocimiento';
$lang['kb_dt_article_name']            = 'Nombre del Artículo';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo Grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del Grupo';
$lang['kb_group_add_edit_description'] = 'Descripción Corta';
$lang['kb_group_add_edit_disabled']    = 'Deshabilitado';
$lang['kb_group_add_edit_note']        = 'Nota: Todos los artículos en este grupo serán ocultos si la opción de deshabilitar está marcada';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No se encontraron grupos de base de conocimiento';

# Media
$lang['media_files'] = 'Archivos';

# Payment modes
$lang['new_payment_mode']           = 'Nuevo Modo de Pago';
$lang['payment_modes']              = 'Modos de Pago';
$lang['payment_mode']               = 'Modo de Pago';
$lang['payment_mode_lowercase']     = 'modo de pago';
$lang['payment_modes_dt_name']      = 'Nombre del Modo de Pago';
$lang['payment_mode_add_edit_name'] = 'Nombre del Modo de Pago';
$lang['payment_mode_edit_heading']  = 'Editar Modo de Pago';
$lang['payment_mode_add_heading']   = 'Agregar Nuevo Modo de Pago';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nueva Respuesta Predefinida';
$lang['predefined_replies']                = 'Respuestas Predefinidas';
$lang['predefined_reply']                  = 'Respuesta Predefinida';
$lang['predefined_reply_lowercase']        = 'respuesta predefinida';
$lang['predefined_replies_dt_name']        = 'Nombre de la Respuesta Predefinida';
$lang['predefined_reply_add_edit_name']    = 'Nombre de la Respuesta Predefinida';
$lang['predefined_reply_add_edit_content'] = 'Contenido de la Respuesta';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nueva Prioridad';
$lang['ticket_priorities']             = 'Prioridades de Tickets';
$lang['ticket_priority']               = 'Prioridad de Ticket';
$lang['ticket_priority_lowercase']     = 'prioridad de ticket';
$lang['no_ticket_priorities_found']    = 'No se encontraron prioridades de tickets';
$lang['ticket_priority_dt_name']       = 'Nombre de la Prioridad';
$lang['ticket_priority_add_edit_name'] = 'Nombre de la Prioridad';

# Reports
$lang['kb_reports']                                       = 'Informes de artículos de la base de conocimiento';
$lang['sales_reports']                                    = 'Informes de Ventas';
$lang['reports_choose_kb_group']                          = 'Elegir Grupo';
$lang['report_kb_yes']                                    = 'Sí';
$lang['report_kb_no']                                     = 'No';
$lang['report_kb_no_votes']                               = 'Sin votos aún';
$lang['report_this_week_leads_conversions']               = 'Conversiones de Leads Esta Semana';
$lang['report_leads_sources_conversions']                 = 'Conversiones por Fuentes';
$lang['report_leads_monthly_conversions']                 = 'Mensual';
$lang['sales_report_heading']                             = 'Informe de Ventas';
$lang['report_sales_type_income']                         = 'Ingreso Total';
$lang['report_sales_type_customer']                       = 'Informe de Clientes';
$lang['report_sales_base_currency_select_explanation']    = 'Debe seleccionar la moneda porque tiene facturas con diferentes monedas';
$lang['report_sales_from_date']                           = 'Desde Fecha';
$lang['report_sales_to_date']                             = 'Hasta Fecha';
$lang['report_sales_months_all_time']                     = 'Todo el Tiempo';
$lang['report_sales_months_six_months']                   = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months']                = 'Últimos 12 meses';
$lang['reports_sales_generated_report']                   = 'Informe Generado';
$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total de Facturas';
$lang['reports_sales_dt_items_customers_amount']          = 'Cantidad';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Cantidad con Impuesto';

# Roles
$lang['new_role']           = 'Nuevo Rol';
$lang['all_roles']          = 'Todos los Roles';
$lang['roles']              = 'Roles de Personal';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Total de Usuarios: ';
$lang['roles_dt_name']      = 'Nombre del Rol';
$lang['role_add_edit_name'] = 'Nombre del Rol';

# Service
$lang['new_service']           = 'Nuevo Servicio';
$lang['services']              = 'Servicios';
$lang['service']               = 'Servicio';
$lang['service_lowercase']     = 'servicio';
$lang['services_dt_name']      = 'Nombre del Servicio';
$lang['service_add_edit_name'] = 'Nombre del Servicio';

# Settings
$lang['settings']                                                  = 'Configuraciones';
$lang['settings_updated']                                          = 'Configuraciones Actualizadas';
$lang['settings_save']                                             = 'Guardar Configuraciones';
$lang['settings_group_general']                                    = 'General';
$lang['settings_group_localization']                               = 'Localización';
$lang['settings_group_tickets']                                    = 'Tickets';
$lang['settings_group_sales']                                      = 'Finanzas';
$lang['settings_group_email']                                      = 'Correo Electrónico';
$lang['settings_group_clients']                                    = 'Clientes';
$lang['settings_group_newsfeed']                                   = 'Noticias';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Sí';
$lang['settings_no']                                               = 'No';
$lang['settings_clients_default_theme']                            = 'Tema predeterminado para clientes';
$lang['settings_clients_allow_registration']                       = 'Permitir que los clientes se registren';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Permitir ver la base de conocimiento sin registro';
$lang['settings_cron_send_overdue_reminder']                       = 'Enviar recordatorio de factura vencida';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Enviar correo de vencimiento al cliente cuando el estado de la factura cambie a vencido desde el Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Enviar recordatorio automáticamente después de (días)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Reenviar recordatorio automáticamente después de (días)';
$lang['settings_email_host']                                       = 'Host SMTP';
$lang['settings_email_port']                                       = 'Puerto SMTP';
$lang['settings_email']                                            = 'Correo Electrónico';
$lang['settings_email_password']                                   = 'Contraseña SMTP';
$lang['settings_email_charset']                                    = 'Juego de Caracteres del Correo';
$lang['settings_email_signature']                                  = 'Firma de Correo';
$lang['settings_general_company_logo']                             = 'Logo de la Empresa';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensiones recomendadas: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Eliminar logo de la empresa';
$lang['settings_general_company_name']                             = 'Nombre de la Empresa';
$lang['settings_general_company_main_domain']                      = 'Dominio Principal de la Empresa';
$lang['settings_general_use_knowledgebase']                        = 'Usar Base de Conocimiento';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Si permite esta opción, la base de conocimiento también será visible en el lado de los clientes';
$lang['settings_general_tables_limit']                             = 'Límite de Paginación de Tablas';
$lang['settings_general_default_staff_role']                       = 'Rol Predeterminado para el Personal';
$lang['settings_general_default_staff_role_tooltip']               = 'Cuando agregue un nuevo miembro del personal, este rol será seleccionado por defecto';
$lang['settings_localization_date_format']                         = 'Formato de Fecha';
$lang['settings_localization_default_timezone']                    = 'Zona Horaria Predeterminada';
$lang['settings_localization_default_language']                    = 'Idioma Predeterminado';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Máximo de archivos para subir en una publicación';
$lang['settings_reminders_contracts']                              = 'Recordatorio de expiración de contrato antes de';
$lang['settings_reminders_contracts_tooltip']                      = 'Notificación de expiración en días';
$lang['settings_tickets_use_services']                             = 'Usar servicios';
$lang['settings_tickets_max_attachments']                          = 'Máximo de archivos adjuntos para tickets';
$lang['settings_tickets_allow_departments_access']                 = 'Permitir que el personal acceda solo a los tickets de su departamento';
$lang['settings_tickets_allowed_file_extensions']                  = 'Extensiones de archivos permitidos para adjuntar';
$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Configuraciones generales';
$lang['settings_sales_invoice_prefix']                             = 'Prefijo de número de factura';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador de miles';
$lang['settings_sales_currency_placement']                         = 'Ubicación de la moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes de la cantidad';
$lang['settings_sales_currency_placement_after']                   = 'Después de la cantidad';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requerir que el cliente inicie sesión para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'Número de la siguiente factura';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establezca este campo a 1 si desea comenzar desde el principio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrementar el número de factura al eliminar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '¿Desea disminuir el número de factura cuando se elimine la última factura?';
$lang['settings_sales_invoice_number_format']                      = 'Formato del número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basado en el año';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado en número (000001)';
$lang['settings_sales_company_info_note']                          = 'Esta información será mostrada en facturas/presupuestos/pagos y otros documentos PDF donde se requiere la información de la empresa';
$lang['settings_sales_company_name']                               = 'Nombre de la Empresa';
$lang['settings_sales_address']                                    = 'Dirección';
$lang['settings_sales_city']                                       = 'Ciudad';
$lang['settings_sales_country_code']                               = 'Código del País';
$lang['settings_sales_postal_code']                                = 'Código Postal';
$lang['settings_sales_phonenumber']                                = 'Teléfono';

# Leads
$lang['new_lead']                          = 'Nuevo Lead';
$lang['leads']                             = 'Leads';
$lang['lead']                              = 'Lead';
$lang['lead_lowercase']                    = 'lead';
$lang['leads_all']                         = 'Todos';
$lang['leads_canban_notes']                = 'Notas: %s';
$lang['leads_canban_source']               = 'Fuente: %s';
$lang['lead_new_source']                   = 'Nueva Fuente';
$lang['lead_sources']                      = 'Fuentes de Leads';
$lang['lead_source']                       = 'Fuente de Lead';
$lang['lead_source_lowercase']             = 'fuente de lead';
$lang['leads_sources_not_found']           = 'No se encontraron fuentes de leads';
$lang['leads_sources_table_name']          = 'Nombre de la Fuente';
$lang['leads_source_add_edit_name']        = 'Nombre de la Fuente';
$lang['lead_new_status']                   = 'Nuevo Estado de Lead';
$lang['lead_status']                       = 'Estado de Lead';
$lang['lead_status_lowercase']             = 'estado de lead';
$lang['leads_status_table_name']           = 'Nombre del Estado';
$lang['leads_status_add_edit_name']        = 'Nombre del Estado';
$lang['leads_status_add_edit_order']       = 'Orden';
$lang['lead_statuses_not_found']           = 'No se encontraron estados de leads';
$lang['leads_search']                      = 'Buscar Leads';
$lang['leads_table_total']                 = 'Total de Leads: %s';
$lang['leads_dt_name']                     = 'Nombre';
$lang['leads_dt_email']                    = 'Correo Electrónico';
$lang['leads_dt_phonenumber']              = 'Teléfono';
$lang['leads_dt_assigned']                 = 'Asignado';
$lang['leads_dt_status']                   = 'Estado';
$lang['leads_dt_last_contact']             = 'Último Contacto';
$lang['lead_add_edit_name']                = 'Nombre';
$lang['lead_add_edit_email']               = 'Correo Electrónico';
$lang['lead_add_edit_phonenumber']         = 'Teléfono';
$lang['lead_add_edit_source']              = 'Fuente';
$lang['lead_add_edit_status']              = 'Estado';
$lang['lead_add_edit_assigned']            = 'Asignado';
$lang['lead_add_edit_datecontacted']       = 'Fecha de Contacto';
$lang['lead_add_edit_contacted_today']     = 'Contactado Hoy';
$lang['lead_add_edit_activity']            = 'Registro de Actividad';
$lang['lead_add_edit_notes']               = 'Notas';
$lang['lead_add_edit_add_note']            = 'Agregar Nota';
$lang['lead_not_contacted']                = 'No he contactado a este lead';
$lang['lead_add_edit_contacted_this_lead'] = 'Contacté con este lead';

# Misc
$lang['access_denied'] = 'Acceso denegado';
$lang['prev']          = 'Anterior';
$lang['next']          = 'Siguiente';

# Datatables
$lang['dt_paginate_first']    = 'Primero';
$lang['dt_paginate_last']     = 'Último';
$lang['dt_paginate_next']     = 'Siguiente';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_search']            = 'Buscar...';
$lang['dt_zero_records']      = 'No se encontraron registros';
$lang['dt_loading_records']   = 'Cargando...';
$lang['dt_length_menu']       = 'Mostrar _MENU_ entradas';
$lang['dt_info_filtered']     = '(filtrado de _MAX_ total {0})';
$lang['dt_info_empty']        = 'Mostrando 0 a 0 de 0 {0}';
$lang['dt_info']              = 'Mostrando _START_ a _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No se encontraron {0}';
$lang['dt_sort_ascending']    = 'activar para ordenar la columna ascendente';
$lang['dt_sort_descending']   = 'activar para ordenar la columna descendente';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s envió recordatorio de vencimiento de factura';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_wednesday'] = 'Miércoles';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'Sábado';
$lang['wd_sunday']    = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Panel de control';
$lang['als_clients']               = 'Clientes';
$lang['als_leads']                 = 'Leads';
$lang['als_contracts']             = 'Contratos';
$lang['als_sales']                 = 'Ventas';
$lang['als_staff']                 = 'Personal';
$lang['als_tasks']                 = 'Tareas';
$lang['als_kb']                    = 'Base de Conocimiento';
$lang['als_media']                 = 'Medios';
$lang['als_reports']               = 'Informes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Leads';
$lang['als_kb_articles_submenu']   = 'Artículos KB';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de Actividad';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioridad de Ticket';
$lang['acs_ticket_statuses_submenu']           = 'Estados de Ticket';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas Predefinidas';
$lang['acs_ticket_services_submenu']           = 'Servicios';
$lang['acs_departments']                       = 'Departamentos';
$lang['acs_leads']                             = 'Leads';
$lang['acs_leads_sources_submenu']             = 'Fuentes';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Tasas de Impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de Pago';
$lang['acs_email_templates']                   = 'Plantillas de Correo';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Configuraciones';

# Tickets
$lang['new_ticket']                                          = 'Abrir Nuevo Ticket';
$lang['tickets']                                             = 'Tickets';
$lang['ticket']                                              = 'Ticket';
$lang['ticket_lowercase']                                    = 'ticket';
$lang['support_tickets']                                     = 'Tickets de Soporte';
$lang['support_ticket']                                      = 'Ticket de Soporte';
$lang['ticket_settings_to']                                  = 'Nombre';
$lang['ticket_settings_email']                               = 'Dirección de Correo';
$lang['ticket_settings_departments']                         = 'Departamento';
$lang['ticket_settings_service']                             = 'Servicio';
$lang['ticket_settings_priority']                            = 'Prioridad';
$lang['ticket_settings_subject']                             = 'Asunto';
$lang['ticket_settings_assign_to']                           = 'Asignar ticket (el predeterminado es el usuario actual)';
$lang['ticket_add_body']                                     = 'Cuerpo del Ticket';
$lang['ticket_add_attachments']                              = 'Archivos Adjuntos';
$lang['ticket_no_reply_yet']                                 = 'Sin Respuesta Aún';
$lang['new_ticket_added_successfully']                       = 'Ticket #%s agregado correctamente';
$lang['replied_to_ticket_successfully']                      = 'Respuesta al ticket #%s enviada con éxito';
$lang['ticket_settings_updated_successfully']                = 'Configuraciones del ticket actualizadas correctamente';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Configuraciones del ticket actualizadas correctamente - reasignado al departamento %s';
$lang['ticket_dt_subject']                                   = 'Asunto';
$lang['ticket_dt_department']                                = 'Departamento';
$lang['ticket_dt_service']                                   = 'Servicio';
$lang['ticket_dt_submitter']                                 = 'Contacto';
$lang['ticket_dt_status']                                    = 'Estado';
$lang['ticket_dt_priority']                                  = 'Prioridad';
$lang['ticket_dt_last_reply']                                = 'Última Respuesta';
$lang['ticket_single_add_reply']                             = 'Agregar Respuesta';
$lang['ticket_single_add_note']                              = 'Agregar Nota';
$lang['ticket_single_other_user_tickets']                    = 'Otros Tickets';
$lang['ticket_single_settings']                              = 'Configuraciones';
$lang['ticket_single_priority']                              = 'Prioridad: %s';
$lang['ticket_single_last_reply']                            = 'Última Respuesta: %s';
$lang['ticket_single_ticket_note_by']                        = 'Nota del ticket por %s';
$lang['ticket_single_note_added']                            = 'Nota agregada: %s';
$lang['ticket_single_change_status']                         = 'Cambiar Estado';
$lang['ticket_single_assign_to_me_on_update']                = 'Asignar este ticket a mí automáticamente';
$lang['ticket_single_insert_predefined_reply']               = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link']            = 'Insertar enlace de base de conocimiento';
$lang['ticket_single_attachments']                           = 'Archivos Adjuntos';
$lang['ticket_single_add_response']                          = 'Agregar Respuesta';
$lang['ticket_single_note_heading']                          = 'Nota';
$lang['ticket_single_add_note']                              = 'Agregar Nota';
$lang['ticket_settings_none_assigned']                       = 'Ninguno';
$lang['ticket_status_changed_successfully']                  = 'Estado del ticket cambiado';
$lang['ticket_status_changed_fail']                          = 'Problema al cambiar el estado del ticket';
$lang['ticket_staff_string']                                 = 'Personal';
$lang['ticket_client_string']                                = 'Cliente';
$lang['ticket_posted']                                       = 'Publicado: %s';
$lang['ticket_access_by_department_denied']                  = 'No tienes acceso a este ticket. Este ticket pertenece a un departamento al que no estás asignado.';

# Staff
$lang['new_staff']                                     = 'Nuevo Miembro del Personal';
$lang['staff_members']                                 = 'Miembros del Personal';
$lang['staff_member']                                  = 'Miembro del Personal';
$lang['staff_member_lowercase']                        = 'miembro del personal';
$lang['staff_profile_updated']                         = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorrect']                  = 'Tu contraseña antigua es incorrecta';
$lang['staff_password_changed']                        = 'Tu contraseña ha sido cambiada';
$lang['staff_problem_changing_password']               = 'Problema al cambiar tu contraseña';
$lang['staff_profile_string']                          = 'Perfil';
$lang['staff_cant_remove_main_admin']                  = 'No puedes eliminar al administrador principal';
$lang['staff_cant_remove_yourself_from_admin']         = 'No puedes eliminarte a ti mismo del rol de administrador';
$lang['staff_dt_name']                                 = 'Nombre Completo';
$lang['staff_dt_email']                                = 'Correo Electrónico';
$lang['staff_dt_last_Login']                           = 'Último Ingreso';
$lang['staff_dt_active']                               = 'Activo';
$lang['staff_add_edit_firstname']                      = 'Nombre';
$lang['staff_add_edit_lastname']                       = 'Apellido';
$lang['staff_add_edit_email']                          = 'Correo Electrónico';
$lang['staff_add_edit_phonenumber']                    = 'Teléfono';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Departamentos del Miembro';
$lang['staff_add_edit_role']                           = 'Rol';
$lang['staff_add_edit_permissions']                    = 'Permisos';
$lang['staff_add_edit_administrator']                  = 'Administrador';
$lang['staff_add_edit_password']                       = 'Contraseña';
$lang['staff_add_edit_password_note']                  = 'Nota: Si completas este campo, la contraseña será cambiada para este miembro.';
$lang['staff_add_edit_password_last_changed']          = 'Contraseña cambiada por última vez';
$lang['staff_add_edit_notes']                          = 'Notas';
$lang['staff_add_edit_note_description']               = 'Descripción de la Nota';
$lang['staff_notes_table_description_heading']         = 'Nota';
$lang['staff_notes_table_addedfrom_heading']           = 'Añadida Desde';
$lang['staff_notes_table_dateadded_heading']           = 'Fecha Añadida';
$lang['staff_admin_profile']                           = 'Este es el perfil de administrador';
$lang['staff_profile_notifications']                   = 'Notificaciones';
$lang['staff_profile_departments']                     = 'Departamentos';
$lang['staff_edit_profile_image']                      = 'Imagen de Perfil';
$lang['staff_edit_profile_your_departments']           = 'Departamentos';
$lang['staff_edit_profile_change_your_password']       = 'Cambia tu contraseña';
$lang['staff_edit_profile_change_old_password']        = 'Contraseña antigua';
$lang['staff_edit_profile_change_new_password']        = 'Nueva contraseña';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repite la nueva contraseña';

# Staff Tasks
$lang['new_task']                           = 'Nueva Tarea';
$lang['tasks']                              = 'Tareas';
$lang['task']                               = 'Tarea';
$lang['task_lowercase']                     = 'tarea';
$lang['comment_string']                     = 'Comentario';
$lang['task_marked_as_complete']            = 'Tarea marcada como completada';
$lang['task_follower_removed']              = 'Seguidor de la tarea eliminado con éxito';
$lang['task_assignee_removed']              = 'Asignado de la tarea eliminado con éxito';
$lang['task_no_assignees']                  = 'No hay asignados para esta tarea';
$lang['task_no_followers']                  = 'No hay seguidores para esta tarea';
$lang['task_list_all']                      = 'Todos';
$lang['task_list_not_assigned']             = 'No Asignado';
$lang['task_list_duedate_passed']           = 'Fecha de Vencimiento Pasada';
$lang['tasks_dt_name']                      = 'Nombre';
$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de Inicio';
$lang['task_single_due_date']               = 'Fecha de Vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como completada';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Eliminar';
$lang['task_single_assignees']              = 'Asignados';
$lang['task_single_assignees_select_title'] = 'Asignar tarea a';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Agregar Seguidores';
$lang['task_single_add_new_comment']        = 'Agregar Comentario';
$lang['task_add_edit_subject']              = 'Asunto';
$lang['task_add_edit_priority']             = 'Prioridad';
$lang['task_priority_low']                  = 'Baja';
$lang['task_priority_medium']               = 'Media';
$lang['task_priority_high']                 = 'Alta';
$lang['task_priority_urgent']               = 'Urgente';
$lang['task_add_edit_start_date']           = 'Fecha de Inicio';
$lang['task_add_edit_due_date']             = 'Fecha de Vencimiento';
$lang['task_add_edit_description']          = 'Descripción de la Tarea';

# Taxes
$lang['new_tax']           = 'Nuevo Impuesto';
$lang['taxes']             = 'Impuestos';
$lang['tax']               = 'Impuesto';
$lang['tax_lowercase']     = 'impuesto';
$lang['tax_dt_name']       = 'Nombre del Impuesto';
$lang['tax_dt_rate']       = 'Tasa (porcentaje)';
$lang['tax_add_edit_name'] = 'Nombre del Impuesto';
$lang['tax_add_edit_rate'] = 'Tasa del Impuesto (porcentaje)';
$lang['tax_edit_title']    = 'Editar Impuesto';
$lang['tax_add_title']     = 'Agregar Nuevo Impuesto';

# Ticket Statuses
$lang['new_ticket_status']            = 'Nuevo Estado de Ticket';
$lang['ticket_statuses']              = 'Estados de Ticket';
$lang['ticket_status']                = 'Estado del Ticket';
$lang['ticket_status_lowercase']      = 'estado del ticket';
$lang['ticket_statuses_dt_name']      = 'Nombre del Estado del Ticket';
$lang['no_ticket_statuses_found']     = 'No se encontraron estados de tickets';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre del Estado del Ticket';
$lang['ticket_status_add_edit_color'] = 'Seleccionar Color';
$lang['ticket_status_add_edit_order'] = 'Orden del Estado';

# Todos
$lang['new_todo']                  = 'Nuevo To-Do';
$lang['my_todos']                  = 'Mis Tareas';
$lang['todo']                      = 'Tarea';
$lang['todo_lowercase']            = 'tarea';
$lang['todo_status_changed']       = 'Estado de la Tarea Cambiado';
$lang['todo_add_title']            = 'Agregar Nueva Tarea';
$lang['add_new_todo_description']  = 'Descripción';
$lang['no_finished_todos_found']   = 'No se encontraron tareas finalizadas';
$lang['no_unfinished_todos_found'] = 'No se encontraron tareas';
$lang['unfinished_todos_title']    = 'Tareas Incompletas';
$lang['finished_todos_title']      = 'Últimas Tareas Finalizadas';

# Utilities
$lang['utility_activity_log']                        = 'Registro de Actividad';
$lang['utility_activity_log_filter_by_date']         = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']         = 'Descripción';
$lang['utility_activity_log_dt_date']                = 'Fecha';
$lang['utility_activity_log_dt_staff']               = 'Personal';
$lang['utility_calendar_new_event_title']            = 'Agregar nuevo evento';
$lang['utility_calendar_new_event_start_date']       = 'Fecha de Inicio';
$lang['utility_calendar_new_event_end_date']         = 'Fecha de Fin';
$lang['utility_calendar_new_event_make_public']      = 'Evento Público';
$lang['utility_calendar_event_added_successfully']   = 'Evento agregado correctamente';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']      = 'Título del Evento';

# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi Perfil';
$lang['nav_edit_profile']           = 'Editar Perfil';
$lang['nav_logout']                 = 'Cerrar sesión';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_notifications_tooltip']  = 'Ver Notificaciones';

# Footer
$lang['clients_copyright'] = '© %s. Todos los derechos reservados.';

# Contracts
$lang['clients_contracts']               = 'Contratos';
$lang['clients_contracts_dt_subject']    = 'Asunto';
$lang['clients_contracts_dt_start_date'] = 'Fecha de Inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha de Fin';

# Home
$lang['clients_quick_invoice_info']           = 'Información de Facturas Rápidas';
$lang['clients_home_currency_select_tooltip'] = 'Debes seleccionar la moneda porque tienes facturas con diferentes monedas';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';
$lang['clients_my_invoices']               = 'Facturas';
$lang['clients_invoice_dt_number']         = 'Factura #';
$lang['clients_invoice_dt_date']           = 'Fecha';
$lang['clients_invoice_dt_duedate']        = 'Fecha de Vencimiento';
$lang['clients_invoice_dt_amount']         = 'Cantidad';
$lang['clients_invoice_dt_status']         = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nombre';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Correo Electrónico';
$lang['clients_company']   = 'Compañía';
$lang['clients_vat']       = 'DNI/NIF/CIF';
$lang['clients_phone']     = 'Teléfono';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Ciudad';
$lang['clients_address']   = 'Dirección';
$lang['clients_zip']       = 'Código Postal';
$lang['clients_state']     = 'Provincia';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Contraseña';
$lang['clients_register_password_repeat']             = 'Repetir Contraseña';
$lang['clients_edit_profile_update_btn']              = 'Actualizar';
$lang['clients_edit_profile_change_password_heading'] = 'Cambiar Contraseña';
$lang['clients_edit_profile_old_password']            = 'Contraseña Antigua';
$lang['clients_edit_profile_new_password']            = 'Nueva Contraseña';
$lang['clients_edit_profile_new_password_repeat']     = 'Repetir Nueva Contraseña';
$lang['clients_edit_profile_change_password_btn']     = 'Cambiar Contraseña';
$lang['clients_profile_last_changed_password']        = 'Contraseña cambiada por última vez %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Base de Conocimiento';
$lang['clients_knowledge_base_articles_not_found'] = 'No se encontraron artículos en la base de conocimiento';
$lang['clients_knowledge_base_find_useful']        = '¿Te fue útil este artículo?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Sí';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Puedes votar una vez cada 24 horas';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gracias por tu retroalimentación';

# Tickets
$lang['clients_ticket_open_subject']               = 'Abrir Ticket';
$lang['clients_ticket_open_departments']           = 'Departamento';
$lang['clients_tickets_heading']                   = 'Tickets de Soporte';
$lang['clients_ticket_open_service']               = 'Servicio';
$lang['clients_ticket_open_priority']              = 'Prioridad';
$lang['clients_ticket_open_body']                  = 'Cuerpo del Ticket';
$lang['clients_ticket_attachments']                = 'Archivos Adjuntos';
$lang['clients_single_ticket_string']              = 'Ticket';
$lang['clients_single_ticket_replied']             = 'Respondido: %s';
$lang['clients_single_ticket_information_heading'] = 'Información del Ticket';
$lang['clients_tickets_dt_number']                 = 'Ticket #';
$lang['clients_tickets_dt_subject']                = 'Asunto';
$lang['clients_tickets_dt_department']             = 'Departamento';
$lang['clients_tickets_dt_service']                = 'Servicio';
$lang['clients_tickets_dt_status']                 = 'Estado';
$lang['clients_tickets_dt_last_reply']             = 'Última Respuesta';
$lang['clients_ticket_single_department']          = 'Departamento: %s';
$lang['clients_ticket_single_submitted']           = 'Enviado: %s';
$lang['clients_ticket_single_status']              = 'Estado:';
$lang['clients_ticket_single_priority']            = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Agregar Respuesta';
$lang['clients_ticket_single_add_reply_heading']   = 'Agregar respuesta a este ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Por favor, inicia sesión';
$lang['clients_login_heading_register']    = 'Por favor, inicia sesión o regístrate';
$lang['clients_login_email']               = 'Correo Electrónico';
$lang['clients_login_password']            = 'Contraseña';
$lang['clients_login_remember']            = 'Recuérdame';
$lang['clients_login_login_string']        = 'Iniciar sesión';

# Register
$lang['clients_register_string']  = 'Registrar';
$lang['clients_register_heading'] = 'Registrar';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sesión';
$lang['clients_nav_register']  = 'Registrarse';
$lang['clients_nav_invoices']  = 'Facturas';
$lang['clients_nav_contracts'] = 'Contratos';
$lang['clients_nav_kb']        = 'Base de Conocimiento';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar sesión';

# Version 1.0.1
$lang['payment_receipt']                               = 'Recibo de Pago';
$lang['payment_for_string']                            = 'Pago para';
$lang['payment_date']                                  = 'Fecha de Pago:';
$lang['payment_view_mode']                             = 'Modo de Pago:';
$lang['payment_total_amount']                          = 'Cantidad Total';
$lang['payment_table_invoice_number']                  = 'Número de Factura';
$lang['payment_table_invoice_date']                    = 'Fecha de Factura';
$lang['payment_table_invoice_amount_total']            = 'Cantidad de Factura';
$lang['payment_table_payment_amount_total']            = 'Cantidad del Pago';
$lang['payments_table_transaction_id']                 = 'ID de Transacción: %s';
$lang['payment_getaway_token_not_found']               = 'Token No Encontrado';
$lang['online_payment_recorded_success']               = 'Pago registrado correctamente';
$lang['online_payment_recorded_success_fail_database'] = 'El pago fue exitoso pero falló al insertar el pago en la base de datos, contacta al administrador';

# Leads
$lang['lead_convert_to_client']                = 'Convertir a cliente';
$lang['lead_convert_to_email']                 = 'Correo Electrónico';
$lang['lead_convert_to_client_firstname']      = 'Nombre';
$lang['lead_convert_to_client_lastname']       = 'Apellido';
$lang['lead_email_already_exists']             = 'El correo electrónico del lead ya existe en los datos de clientes';
$lang['lead_to_client_base_converted_success'] = 'Lead convertido a cliente exitosamente';
$lang['lead_have_client_profile']              = 'Este lead tiene un perfil de cliente.';
$lang['lead_converted_edit_client_profile']    = 'Editar Perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = '¿Factura recurrente?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todas';
$lang['invoices_list_not_have_payment']                                       = 'Facturas sin registros de pago';
$lang['invoices_list_recurring']                                              = 'Facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Pago realizado por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '¿Crear nueva factura solo si la factura recurrente está pagada?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Si este campo está activado y la factura recurrente no está pagada, no se creará una nueva factura.';
$lang['view_invoice_pdf_link_pay']                                            = 'Pagar Factura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas Bancarias / Descripción';
$lang['payment_mode_add_edit_description_tooltip'] = 'Aquí puedes agregar información sobre cuentas bancarias. Se mostrará en la factura HTML';
$lang['payment_modes_dt_description']              = 'Cuentas Bancarias / Descripción';
$lang['payment_modes_add_edit_announcement']       = 'Nota: Los modos de pago que se enumeran a continuación son modos fuera de línea. Las pasarelas de pago se pueden configurar en Configuración-> Ajustes-> Pasarelas de Pago';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Contrato no encontrado. Puede que haya sido eliminado, revisa el registro de actividad';

# Settings
$lang['setting_bar_heading']                               = 'Configuración';
$lang['settings_group_online_payment_modes']               = 'Pasarelas de Pago';
$lang['settings_paymentmethod_mode_label']                 = 'Etiqueta';
$lang['settings_paymentmethod_active']                     = 'Activo';
$lang['settings_paymentmethod_currencies']                 = 'Monedas (separadas por coma)';
$lang['settings_paymentmethod_testing_mode']               = 'Habilitar Modo de Prueba';
$lang['settings_paymentmethod_paypal_username']            = 'Nombre de Usuario API PayPal';
$lang['settings_paymentmethod_paypal_password']            = 'Contraseña API PayPal';
$lang['settings_paymentmethod_paypal_signature']           = 'Firma API';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Clave Secreta API Stripe';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Clave Publicable API Stripe';
$lang['settings_limit_top_search_bar_results']             = 'Limitar Resultados de la Barra de Búsqueda Superior a';

## Clients
$lang['client_phonenumber'] = 'Teléfono';

# Main Clients
$lang['clients_register']                          = 'Registrar';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por registrarte';
$lang['clients_account_created_but_not_logged_in'] = 'Tu cuenta ha sido creada pero no has iniciado sesión automáticamente. Por favor, intenta iniciar sesión';

# Tickets
$lang['clients_tickets_heading'] = 'Tickets de Soporte';

# Payments
$lang['payment_for_invoice'] = 'Pago por Factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en Línea';
$lang['invoice_html_online_payment_button_text'] = 'Pagar Ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Por favor selecciona el modo de pago';
$lang['invoice_html_amount_blank']               = 'El monto total no puede estar vacío o ser cero';
$lang['invoice_html_offline_payment']            = 'Pago Offline';
$lang['invoice_html_amount']                     = 'Monto';

# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilidad';
$lang['dt_button_reload']            = 'Recargar';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Imprimir';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opciones Avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Modos de pago permitidos para esta factura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Facturas creadas a partir de esta factura recurrente';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la Plantilla';

# General
$lang['discount_type']            = 'Tipo de Descuento';
$lang['discount_type_after_tax']  = 'Después de Impuestos';
$lang['discount_type_before_tax'] = 'Antes de Impuestos';
$lang['terms_and_conditions']     = 'Términos y Condiciones';
$lang['reference_no']             = 'Referencia #';
$lang['no_discount']              = 'Sin descuento';
$lang['view_stats_tooltip']       = 'Ver Estadísticas Rápidas';

# Clients
$lang['zip_from_date']            = 'Desde Fecha:';
$lang['zip_to_date']              = 'Hasta Fecha:';
$lang['client_zip_payments']      = 'Pagos en ZIP';
$lang['client_zip_invoices']      = 'Facturas en ZIP';
$lang['client_zip_estimates']     = 'Presupuestos en ZIP';
$lang['client_zip_status']        = 'Estado';
$lang['client_zip_status_all']    = 'Todos';
$lang['client_zip_payment_modes'] = 'Pago realizado por';
$lang['client_zip_no_data_found'] = 'No se encontraron %s';

# Payments
$lang['payment_mode']         = 'Modo de Pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified'] = 'Permitir que el cliente modifique el monto a pagar (para pagos en línea)';

$lang['settings_delete_only_on_last_invoice']                       = 'Eliminar factura permitido solo en la última factura';
$lang['settings_sales_estimate_prefix']                             = 'Prefijo de Número de presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Siguiente Número de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establece este campo en 1 si deseas comenzar desde el principio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrementar el número de presupuesto al eliminar';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '¿Deseas decrementar el número de presupuesto cuando se elimina la último presupuesto? Ej. Si se establece esta opción en SÍ y antes de eliminar el presupuesto el próximo número de presupuesto es 15, el siguiente número de presupuesto se reducirá a 14. Si se establece en NO, el número permanecerá en 15. Si tienes configurado "eliminar solo en la último presupuesto" en NO, también debes establecer esta opción en NO para mantener el número de presupuesto sin decrementar.';
$lang['settings_sales_estimate_number_format']                      = 'Formato del Número de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Basado en Año';
$lang['settings_sales_estimate_number_format_number_based']         = 'Basado en Número (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar presupuesto permitido solo en la última factura';
$lang['settings_send_test_email_heading']                           = 'Enviar Correo de Prueba';
$lang['settings_send_test_email_subheading']                        = 'Envía un correo de prueba para asegurarte de que tu configuración SMTP es correcta.';
$lang['settings_send_test_email_string']                            = 'Dirección de Correo Electrónico';
$lang['settings_smtp_settings_heading']                             = 'Configuración SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configurar correo electrónico principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Fecha de Inicio';

# Invoice General
$lang['invoice_discount'] = 'Descuento';

# Settings
$lang['settings_rtl_support_admin']                                   = 'Área de Administración RTL (De derecha a izquierda)';
$lang['settings_rtl_support_client']                                  = 'Área de Clientes RTL (De derecha a izquierda)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertir automáticamente el presupuesto a factura cuando el cliente la acepte';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir presupuestos con estado borrador del área de clientes';

# Months
$lang['January']   = 'Enero';
$lang['February']  = 'Febrero';
$lang['March']     = 'Marzo';
$lang['April']     = 'Abril';
$lang['May']       = 'Mayo';
$lang['June']      = 'Junio';
$lang['July']      = 'Julio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Septiembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Noviembre';
$lang['December']  = 'Diciembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Justo ahora';
$lang['time_ago_minute']    = 'hace un minuto';
$lang['time_ago_minutes']   = 'hace %s minutos';
$lang['time_ago_hour']      = 'hace una hora';
$lang['time_ago_hours']     = 'hace %s horas';
$lang['time_ago_yesterday'] = 'ayer';
$lang['time_ago_days']      = 'hace %s días';
$lang['time_ago_week']      = 'hace una semana';
$lang['time_ago_weeks']     = 'hace %s semanas';
$lang['time_ago_month']     = 'hace un mes';
$lang['time_ago_months']    = 'hace %s meses';
$lang['time_ago_year']      = 'hace un año';
$lang['time_ago_years']     = 'hace %s años';

# Estimates
$lang['estimates']                                = 'Presupuestos';
$lang['estimate']                                 = 'Presupuesto';
$lang['estimate_lowercase']                       = 'presupuesto';
$lang['create_new_estimate']                      = 'Crear Nuevo presupuesto';
$lang['view_estimate']                            = 'Ver presupuesto';
$lang['estimate_sent_to_client_success']          = 'El presupuesto ha sido enviada correctamente al cliente';
$lang['estimate_sent_to_client_fail']             = 'Problema al enviar el presupuesto';
$lang['estimate_view']                            = 'Ver presupuesto';
$lang['estimate_select_customer']                 = 'Cliente';
$lang['estimate_add_edit_number']                 = 'Número de presupuesto';
$lang['estimate_add_edit_date']                   = 'Fecha de presupuesto';
$lang['estimate_add_edit_expirydate']             = 'Fecha de Expiración';
$lang['estimate_add_edit_currency']               = 'Moneda';
$lang['estimate_add_edit_client_note']            = 'Nota para el Cliente';
$lang['estimate_add_edit_admin_note']             = 'Nota del Administrador';
$lang['estimates_toggle_table_tooltip']           = 'Alternar Tabla';
$lang['estimate_add_edit_advanced_options']       = 'Opciones Avanzadas';
$lang['estimate_to']                              = 'Para';
$lang['estimates_list_all']                       = 'Todas';
$lang['estimate_invoiced_date']                   = 'Presupuesto facturado el %s';
$lang['edit_estimate_tooltip']                    = 'Editar presupuesto';
$lang['delete_estimate_tooltip']                  = 'Eliminar presupuesto';
$lang['estimate_sent_to_email_tooltip']           = 'Enviar por Correo Electrónico';
$lang['estimate_already_send_to_client_tooltip']  = 'Esta presupuesto ya ha sido enviada al cliente %s';
$lang['estimate_view_activity_tooltip']           = 'Registro de Actividad';
$lang['estimate_send_to_client_modal_heading']    = 'Enviar presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar PDF del presupuesto';
$lang['estimate_send_to_client_preview_template'] = 'Previsualizar Plantilla de Correo';
$lang['estimate_dt_table_heading_number']         = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']           = 'Fecha';
$lang['estimate_dt_table_heading_client']         = 'Cliente';
$lang['estimate_dt_table_heading_expirydate']     = 'Fecha de Expiración';
$lang['estimate_dt_table_heading_amount']         = 'Monto';
$lang['estimate_dt_table_heading_status']         = 'Estado';
$lang['estimate_convert_to_invoice']              = 'Convertir a Factura';

# Clients
$lang['client_payments_tab'] = 'Pagos';

# Estimate General
$lang['estimate_pdf_heading']            = 'PRESUPUESTO';
$lang['estimate_table_item_heading']     = 'Artículo';
$lang['estimate_table_quantity_heading'] = 'Cant';
$lang['estimate_table_rate_heading']     = 'Tarifa';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Monto';
$lang['estimate_subtotal']               = 'SubTotal';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'Para';
$lang['estimate_data_date']              = 'Fecha de presupuesto';
$lang['estimate_data_expiry_date']       = 'Fecha de Expiración';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Enviado';
$lang['estimate_status_declined']        = 'Rechazado';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto #';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de Expiración';
$lang['clients_estimate_dt_amount']             = 'Monto';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'Rechazar';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Mis Presupuestos';
$lang['clients_estimate_invoiced_successfully'] = 'Gracias por aceptar el presupuesto. Por favor, revisa la factura creada para el presupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar este presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto rechazado. Puedes aceptar el presupuesto en cualquier momento antes de la fecha de expiración';
$lang['clients_estimate_failed_action']         = 'Error al realizar la acción sobre este presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

## Custom Fields
$lang['custom_field']                          = 'Campo Personalizado';
$lang['custom_field_lowercase']                = 'campo personalizado';
$lang['custom_fields']                         = 'Campos Personalizados';
$lang['new_custom_field']                      = 'Nuevo Campo Personalizado';
$lang['custom_field_name']                     = 'Nombre del Campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'Pertenece a';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'Solo se usa para tipos de Select, Checkbox. Rellena el campo separando las opciones con comas. Ej. manzana,naranja,plátano';
$lang['custom_field_add_edit_order']           = 'Orden';
$lang['custom_field_dt_field_to']              = 'Pertenece a';
$lang['custom_field_dt_field_name']            = 'Nombre';
$lang['custom_field_dt_field_type']            = 'Tipo';
$lang['custom_field_add_edit_active']          = 'Activo';
$lang['custom_field_add_edit_disabled']        = 'Deshabilitado';

## Ticket replies
$lang['ticket_reply'] = 'Respuesta al Ticket';

## Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

## Contracts
$lang['contract_types']           = 'Tipos de Contrato';
$lang['contract_type']            = 'Tipo de Contrato';
$lang['new_contract_type']        = 'Nuevo Tipo de Contrato';
$lang['contract_type_lowercase']  = 'contrato';
$lang['contract_type_name']       = 'Nombre';
$lang['contract_types_list_name'] = 'Tipo de Contrato';

## Customizer Menu
$lang['acs_contracts']      = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de Contrato';

## Version 1.0.4
## Invoice Items
$lang['invoice_item_long_description'] = 'Descripción Larga';

## Customers
$lang['clients_list_phone']                = 'Teléfono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de Clientes';
$lang['customers_summary_active']          = 'Contactos Activos';
$lang['customers_summary_inactive']        = 'Contactos Inactivos';
$lang['customers_summary_logged_in_today'] = 'Contactos Conectados Hoy';

## Authentication
$lang['admin_auth_forgot_password_email']     = 'Correo Electrónico';
$lang['admin_auth_forgot_password_heading']   = '¿Olvidaste la Contraseña?';
$lang['admin_auth_login_heading']             = 'Iniciar Sesión';
$lang['admin_auth_login_email']               = 'Correo Electrónico';
$lang['admin_auth_login_password']            = 'Contraseña';
$lang['admin_auth_login_remember_me']         = 'Recuérdame';
$lang['admin_auth_login_button']              = 'Iniciar Sesión';
$lang['admin_auth_login_fp']                  = '¿Olvidaste la Contraseña?';
$lang['admin_auth_reset_password_heading']    = 'Restablecer Contraseña';
$lang['admin_auth_reset_password']            = 'Contraseña';
$lang['admin_auth_reset_password_repeat']     = 'Repetir Contraseña';
$lang['admin_auth_invalid_email_or_password'] = 'Correo electrónico o contraseña inválidos';
$lang['admin_auth_inactive_account']          = 'Cuenta Inactiva';

## Calender
$lang['calendar_estimate']          = 'Presupuesto';
$lang['calendar_invoice']           = 'Factura';
$lang['calendar_contract']          = 'Contrato';
$lang['calendar_customer_reminder'] = 'Recordatorio de Cliente';
$lang['calendar_event']             = 'Evento';
$lang['calendar_task']              = 'Tarea';

## Leads
$lang['lead_edit_delete_tooltip'] = 'Eliminar Lead';
$lang['lead_attachments']         = 'Archivos Adjuntos';

## Admin Customizer Sidebar
$lang['acs_finance'] = 'Finanzas';

## Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Mostrar Agente de Venta en la Factura';
$lang['settings_show_sale_agent_on_estimates']      = 'Mostrar Agente de Venta en el presupuesto';
$lang['settings_predefined_predefined_term']        = 'Términos y Condiciones Predefinidos';
$lang['settings_predefined_clientnote']             = 'Nota Predefinida para el Cliente';
$lang['settings_custom_pdf_logo_image_url']         = 'URL del Logo Personalizado en PDF';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probablemente tendrás problemas con imágenes PNG con transparencia que se manejan de manera diferente dependiendo de la versión de php-imagick o php-gd utilizada. Intenta actualizar php-imagick y deshabilitar php-gd. Si dejas este campo vacío, se usará el logo subido.';

## General
$lang['sale_agent_string']               = 'Agente de Venta';
$lang['amount_display_in_base_currency'] = 'El monto se muestra en tu moneda base - Solo usa este informe si estás usando una moneda para pagos y gastos.';

## Leads
$lang['leads_summary'] = 'Resumen de Leads';

## Contracts
$lang['contract_value']                       = 'Valor del Contrato';
$lang['contract_trash']                       = 'Papelera';
$lang['contracts_view_trash']                 = 'Ver Papelera';
$lang['contracts_view_all']                   = 'Todos';
$lang['contracts_view_exclude_trashed']       = 'Excluir Contratos en Papelera';
$lang['contract_value_tooltip']               = 'Se utilizará la moneda base.';
$lang['contract_trash_tooltip']               = 'Si agregas el contrato a la papelera, no se mostrará en la parte del cliente, no se incluirá en los gráficos y otros estados, y por defecto no se mostrará cuando listes todos los contratos.';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_renew_heading']               = 'Renovar Contrato';
$lang['contract_summary_heading']             = 'Resumen del Contrato';
$lang['contract_summary_expired']             = 'Expirado';
$lang['contract_summary_about_to_expire']     = 'A Punto de Expirar';
$lang['contract_summary_recently_added']      = 'Añadido Recientemente';
$lang['contract_summary_trash']               = 'Papelera';
$lang['contract_summary_by_type']             = 'Contratos por Tipo';
$lang['contract_summary_by_type_value']       = 'Valor de Contratos por Tipo';
$lang['contract_renewed_successfully']        = 'Contrato renovado exitosamente';
$lang['contract_renewed_fail']                = 'Hubo un problema al renovar el contrato. Contacta con el administrador';
$lang['no_contract_renewals_found']           = 'No se encontraron renovaciones para este contrato';
$lang['no_contract_renewals_history_heading'] = 'Historial de Renovaciones';
$lang['contract_renewed_by']                  = '%s renovó este contrato';
$lang['contract_renewal_deleted']             = 'Renovación eliminada exitosamente';
$lang['contract_renewal_delete_fail']         = 'Error al eliminar la renovación del contrato. Contacta con el administrador';
$lang['contract_renewal_new_value']           = 'Nuevo Valor del Contrato: %s';
$lang['contract_renewal_old_value']           = 'Antiguo Valor del Contrato: %s';
$lang['contract_renewal_new_start_date']      = 'Nueva Fecha de Inicio: %s';
$lang['contract_renewal_old_start_date']      = 'La Fecha de Inicio del Contrato Antiguo fue: %s';
$lang['contract_renewal_new_end_date']        = 'Nueva Fecha de Fin: %s';
$lang['contract_renewal_old_end_date']        = 'La Fecha de Fin del Contrato Antiguo fue: %s';
$lang['contract_attachment']                  = 'Archivo Adjunto';

## Admin Aside Menu
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Informes de Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs Ingresos';

## Invoices
$lang['invoice_attach_file']           = 'Adjuntar Archivo';
$lang['invoice_mark_as_sent']          = 'Marcar como Enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcada como enviada exitosamente';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura como enviada';

## Payments
$lang['payment_transaction_id'] = 'ID de Transacción';

# Expenses
$lang['acs_expense_categories']                       = 'Categorías de Gastos';
$lang['expense_category']                             = 'Categoría de Gasto';
$lang['expense_category_lowercase']                   = 'categoría de gasto';
$lang['new_expense']                                  = 'Registrar Gasto';
$lang['expense_add_edit_name']                        = 'Nombre de la Categoría';
$lang['expense_add_edit_description']                 = 'Descripción de la Categoría';
$lang['expense_categories']                           = 'Categorías de Gasto';
$lang['new_expense_category']                         = 'Nueva Categoría';
$lang['dt_expense_description']                       = 'Descripción';
$lang['expense']                                      = 'Gasto';
$lang['expenses']                                     = 'Gastos';
$lang['expense_lowercase']                            = 'gasto';
$lang['expense_add_edit_customer']                    = 'Cliente';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Fecha de Gasto';
$lang['expense_add_edit_amount']                      = 'Monto';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'Adjuntar Recibo';
$lang['expense_add_edit_reference_no']                = 'Referencia #';
$lang['expense_receipt']                              = 'Recibo de Gasto';
$lang['expense_receipt_lowercase']                    = 'recibo de gasto';
$lang['expense_dt_table_heading_category']            = 'Categoría';
$lang['expense_dt_table_heading_amount']              = 'Monto';
$lang['expense_dt_table_heading_date']                = 'Fecha';
$lang['expense_dt_table_heading_reference_no']        = 'Referencia #';
$lang['expense_dt_table_heading_customer']            = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']        = 'Modo de Pago';
$lang['expense_converted_to_invoice']                 = 'Gasto convertido a factura con éxito';
$lang['expense_converted_to_invoice_fail']            = 'Error al convertir este gasto en factura, revisa el registro de errores.';
$lang['expense_copy_success']                         = 'El gasto ha sido copiado con éxito.';
$lang['expense_copy_fail']                            = 'Error al copiar el gasto. Por favor revisa los campos requeridos e inténtalo de nuevo.';
$lang['expenses_list_all']                            = 'Todos';
$lang['expenses_list_billable']                       = 'Facturables';
$lang['expenses_list_non_billable']                   = 'No Facturables';
$lang['expenses_list_invoiced']                       = 'Facturados';
$lang['expenses_list_unbilled']                       = 'No Facturados';
$lang['expenses_list_recurring']                      = 'Recurrencia';
$lang['expense_invoice_delete_not_allowed']           = 'No puedes eliminar este gasto. El gasto ya ha sido facturado.';
$lang['expense_convert_to_invoice']                   = 'Convertir a Factura';
$lang['expense_edit']                                 = 'Editar Gasto';
$lang['expense_delete']                               = 'Eliminar';
$lang['expense_copy']                                 = 'Copiar';
$lang['expense_invoice_not_created']                  = 'Factura no creada';
$lang['expense_billed']                               = 'Facturado';
$lang['expense_not_billed']                           = 'Factura no Pagada';
$lang['expense_customer']                             = 'Cliente';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Fecha:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Monto:';
$lang['expense_recurring_indicator']                  = 'Recurrencia';
$lang['expense_already_invoiced']                     = 'Este gasto ya ha sido facturado';
$lang['expense_recurring_auto_create_invoice']        = 'Crear factura automáticamente';
$lang['expense_recurring_send_custom_on_renew']       = 'Enviar la factura al correo del cliente cuando el gasto se renueve';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si esta opción está seleccionada, la factura para el cliente se creará automáticamente cuando el gasto se renueve.';
$lang['expenses_yearly_by_categories']                = 'Gastos Anuales por Categorías';
$lang['total_expenses_for']                           = 'Gastos Totales para'; // año
$lang['expenses_report_for']                          = 'Gastos para'; // año

# Custom fields
$lang['custom_field_required']    = 'Requerido';
$lang['custom_field_show_on_pdf'] = 'Mostrar en PDF';
$lang['custom_field_leads']       = 'Leads';
$lang['custom_field_customers']   = 'Clientes';
$lang['custom_field_staff']       = 'Personal';
$lang['custom_field_contracts']   = 'Contratos';
$lang['custom_field_tasks']       = 'Tareas';
$lang['custom_field_expenses']    = 'Gastos';
$lang['custom_field_invoice']     = 'Factura';
$lang['custom_field_estimate']    = 'Presupuesto';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas Privadas del Personal';

# Business News
$lang['business_news'] = 'Noticias de Negocios';

# Navigation
$lang['nav_todo_items'] = 'Elementos Pendientes';

# Contracts
$lang['clients_contracts_type'] = 'Tipo de Contrato';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Sin Impuesto';
$lang['numbers_not_formatted_while_editing'] = 'El número en el campo de entrada no está formateado mientras se edita/agrega un artículo y debe permanecer sin formato, no intentes formatearlo manualmente aquí.';
# Contracts
$lang['contracts_view_expired']         = 'Expirado';
$lang['contracts_view_without_dateend'] = 'Contratos Sin Fecha de Fin';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Opciones Generales';
$lang['invoice_table_item_description']   = 'Descripción';
$lang['invoice_recurring_indicator']      = 'Recurrencia';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Presupuesto convertido a factura con éxito';
$lang['estimate_table_item_description']          = 'Descripción';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'No puedes eliminar la moneda base. Debes asignar una nueva moneda base antes de eliminarla.';
$lang['invoice_copy']              = 'Copiar Factura';
$lang['invoice_copy_success']      = 'Factura copiada con éxito';
$lang['invoice_copy_fail']         = 'Error al copiar la factura';
$lang['invoice_due_after_help']    = 'Establece cero para evitar el cálculo';
$lang['show_shipping_on_invoice']  = 'Mostrar detalles de envío en la factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar detalles de envío en el presupuesto';
$lang['is_invoiced_estimate_delete_error'] = 'Este presupuesto ya ha sido facturado. No puedes eliminar el presupuesto';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Enviar a';
$lang['customer_profile_details']           = 'Detalles del Cliente';
$lang['billing_shipping']                   = 'Facturación y Envío';
$lang['billing_address']                    = 'Dirección de Facturación';
$lang['shipping_address']                   = 'Dirección de Envío';
$lang['billing_street']                     = 'Calle';
$lang['billing_city']                       = 'Ciudad';
$lang['billing_state']                      = 'Provincia';
$lang['billing_zip']                        = 'Código Postal';
$lang['billing_country']                    = 'País';
$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Ciudad';
$lang['shipping_state']                     = 'Provincia';
$lang['shipping_zip']                       = 'Código Postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles de envío desde el perfil del cliente';

# Customer
$lang['customer_default_currency']                             = 'Moneda Predeterminada';
$lang['customer_update_address_info_on_invoices']              = 'Actualizar la información de envío/facturación en todas las facturas/presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marcas este campo, la información de envío y facturación se actualizará en todas las facturas y presupuestos. Nota: Las facturas con estado "Pagado" no se verán afectadas.';
$lang['setup_google_api_key_customer_map']                     = 'Configura la clave API de Google para ver el mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar correo electrónico para establecer la contraseña';
$lang['customer_billing_same_as_profile']                      = 'Igual que la Información del Cliente';
$lang['customer_billing_copy']                                 = 'Copiar Dirección de Facturación';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'El correo electrónico para establecer la contraseña ha sido enviado con éxito al contacto';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado y el correo electrónico para establecer la contraseña ha sido enviado con éxito al contacto';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (Google Maps)';
$lang['customer_latitude']                                     = 'Latitud (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Contraseña';
$lang['admin_auth_set_password_repeat']  = 'Repetir Contraseña';
$lang['admin_auth_set_password_heading'] = 'Establecer Contraseña';

# General
$lang['apply']                         = 'Aplicar';
$lang['department_calendar_id']        = 'ID de Calendario de Google';
$lang['localization_default_language'] = 'Idioma Predeterminado';
$lang['system_default_string']         = 'Predeterminado del Sistema';
$lang['advanced_options']              = 'Opciones Avanzadas';

# Expenses
$lang['expense_list_invoice']  = 'Facturado';
$lang['expense_list_billed']   = 'Facturado';
$lang['expense_list_unbilled'] = 'No Facturado';

# Leads
$lang['lead_merge_custom_field']          = 'Fusionar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Fusionar con campo existente';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['lost_leads']                       = 'Leads Perdidos';
$lang['junk_leads']                       = 'Leads Basura';
$lang['lead_mark_as_lost']                = 'Marcar como perdido';
$lang['lead_unmark_as_lost']              = 'Desmarcar como perdido';
$lang['lead_marked_as_lost']              = 'Lead marcado como perdido con éxito';
$lang['lead_unmarked_as_lost']            = 'Lead desmarcado como perdido con éxito';
$lang['leads_status_color']               = 'Color';
$lang['lead_mark_as_junk']                = 'Marcar como basura';
$lang['lead_unmark_as_junk']              = 'Desmarcar como basura';
$lang['lead_marked_as_junk']              = 'Lead marcado como basura con éxito';
$lang['lead_unmarked_as_junk']            = 'Lead desmarcado como basura con éxito';
$lang['lead_not_found']                   = 'Lead no encontrado';
$lang['lead_lost']                        = 'Perdido';
$lang['lead_junk']                        = 'Basura';
$lang['leads_not_assigned']               = 'No asignado';

# Contacts
$lang['contract_not_visible_to_client'] = 'Ocultar al cliente';
$lang['contract_edit_overview']         = 'Resumen del Contrato';
$lang['contract_attachments']           = 'Archivos adjuntos';

# Tasks
$lang['task_view_make_public']     = 'Hacer público';
$lang['task_is_private']           = 'Tarea Privada';
$lang['task_finished']             = 'Finalizado';
$lang['task_single_related']       = 'Relacionado';
$lang['task_unmark_as_complete']   = 'Desmarcar como completado';
$lang['task_unmarked_as_complete'] = 'Tarea desmarcada como completada';
$lang['task_relation']             = 'Relacionado';
$lang['task_public']               = 'Público';
$lang['task_public_help']          = 'Si estableces esta tarea como pública, será visible para todos los miembros del personal. De lo contrario, solo será visible para los miembros asignados, seguidores, creadores o administradores';

# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Generar PDFs para el cliente desde el área administrativa en el idioma del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opción está activada y el idioma predeterminado del sistema es inglés, pero el cliente tiene el idioma configurado en francés, los documentos PDF se generarán en el idioma del cliente.';
$lang['settings_default_tax']                                                = 'Impuesto Predeterminado';
$lang['setup_calendar_by_departments']                                       = 'Configurar el calendario por departamentos';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Fecha de vencimiento de la factura (días)';
$lang['settings_google_api']                                                 = 'Clave API de Google';
$lang['settings_gcal_main_calendar_id']                                      = 'ID del Calendario Principal de Google';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario principal de la empresa. Todos los eventos de este calendario se mostrarán. Si deseas especificar un calendario basado en departamentos, puedes agregar el ID del calendario de Google del departamento.';
$lang['show_on_calendar']                                                    = 'Mostrar en Calendario';
$lang['show_invoices_on_calendar']                                           = 'Facturas';
$lang['show_estimates_on_calendar']                                          = 'Presupuestos';
$lang['show_contracts_on_calendar']                                          = 'Contratos';
$lang['show_tasks_on_calendar']                                              = 'Tareas';
$lang['show_customer_reminders_on_calendar']                                 = 'Recordatorios de Clientes';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si alguno de los siguientes campos personalizados no existe para el cliente, se creará automáticamente con el mismo nombre. De lo contrario, solo se copiará el valor del perfil del lead.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_email_integration_folder_no_encryption']                = 'Sin encriptación';
$lang['leads_email_integration']                                     = 'Integración de Correo Electrónico';
$lang['leads_email_active']                                          = 'Activo';
$lang['leads_email_integration_imap']                                = 'Servidor IMAP';
$lang['leads_email_integration_email']                               = 'Dirección de correo electrónico (login)';
$lang['leads_email_integration_password']                            = 'Contraseña';
$lang['leads_email_integration_default_source']                      = 'Fuente predeterminada';
$lang['leads_email_integration_check_every']                         = 'Comprobar cada (minutos)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable por nuevo lead';
$lang['leads_email_encryption']                                      = 'Encriptación';
$lang['leads_email_integration_updated']                             = 'Integración de correo electrónico actualizada';
$lang['leads_email_integration_default_status']                      = 'Estado predeterminado';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el lead sea importado';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Solo comprobar correos no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El script marcará automáticamente el correo como abierto después de comprobarlo. Esto se utiliza para evitar revisar los mismos correos una y otra vez. No se recomienda desactivar esta opción si tienes muchos correos y configuraste muchos reenvíos al correo de leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar si el lead envía correos múltiples veces';
$lang['leads_email_integration_test_connection']                     = 'Probar conexión IMAP';
$lang['lead_email_connection_ok']                                    = 'La conexión IMAP está bien';
$lang['lead_email_connection_not_ok']                                = 'La conexión IMAP no está bien';
$lang['lead_email_activity']                                         = 'Actividad de Correo';
$lang['leads_email_integration_notify_roles']                        = 'Roles para notificar';
$lang['leads_email_integration_notify_staff']                        = 'Miembros del personal para notificar';
$lang['lead_public']                                                 = 'Público';

# Knowledge Base
$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Orden';

# Utilities - EXPORTACIÓN MASIVA A PDF
$lang['bulk_pdf_exporter']             = 'Exportación Masiva a PDF';
$lang['bulk_export_pdf_payments']      = 'Pagos';
$lang['bulk_export_pdf_estimates']     = 'Presupuestos';
$lang['bulk_export_pdf_invoices']      = 'Facturas';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccionar Tipo';
$lang['no_data_found_bulk_pdf_export'] = 'No se encontraron datos para exportar';
$lang['bulk_export_status_all']        = 'Todos';
$lang['bulk_export_status']            = 'Estado';
$lang['bulk_export_zip_payment_modes'] = 'Pagos realizados por';
$lang['bulk_export_include_tag']       = 'Incluir Etiqueta';
$lang['bulk_export_include_tag_help']  = 'Ej. Original o Copia. La etiqueta se mostrará en el PDF. Se recomienda usar solo 1 etiqueta';

# Versión 1.0.7
## Clientes - portal
$lang['clients_nav_proposals'] = 'Propuestas';
$lang['clients_nav_support']   = 'Soporte';

# General
$lang['more']            = 'Más';
$lang['add_item']        = 'Agregar Artículo';
$lang['goto_admin_area'] = 'Ir al área de administración';
$lang['delete']          = 'Eliminar %s';
$lang['welcome_top']     = 'Bienvenido %s';

# Clientes
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Facturas';
$lang['customer_permission_estimate'] = 'Presupuestos';
$lang['customer_permission_proposal'] = 'Propuestas';
$lang['customer_permission_contract'] = 'Contratos';
$lang['customer_permission_support']  = 'Soporte';

# Tareas
$lang['task_related_to'] = 'Relacionado con';

# Enviar archivo
$lang['custom_file_fail_send']    = 'No se pudo enviar el archivo';
$lang['custom_file_success_send'] = 'El archivo se envió correctamente a %s';
$lang['send_file_subject']        = 'Asunto del correo';
$lang['send_file_email']          = 'Dirección de correo';
$lang['send_file_message']        = 'Mensaje';
$lang['send_file']                = 'Enviar archivo';
$lang['add_checklist_item']       = 'Elemento de lista de verificación';
$lang['task_checklist_items']     = 'Elementos de la lista de verificación';

# Importar
$lang['default_pass_clients_import'] = 'Contraseña predeterminada para todos los contactos';
$lang['simulate_import']             = 'Simular Importación';
$lang['import_upload_failed']        = 'Falló la carga';
$lang['import_total_imported']       = 'Total Importado: %s';
$lang['import_leads']                = 'Importar Prospectos';
$lang['import_customers']            = 'Importar Clientes';
$lang['choose_csv_file']             = 'Elegir archivo CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Fuente';

# Exportación masiva a PDF
$lang['bulk_export_pdf_proposals'] = 'Propuestas';

# Facturas
$lang['delete_invoice'] = 'Eliminar';
$lang['items']          = 'Artículos';
$lang['support']        = 'Soporte';
$lang['new_ticket']     = 'Nuevo Ticket';

# Recordatorios
$lang['calendar_lead_reminder']  = 'Recordatorio de Prospecto';
$lang['lead_set_reminder_title'] = 'Establecer Recordatorio de Prospecto';
$lang['set_reminder_tooltip']    = 'Esta opción te permite no olvidar nada sobre tus clientes.';
$lang['client_reminders_tab']    = 'Recordatorios';
$lang['leads_reminders_tab']     = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Eliminar Respuesta';
$lang['ticket_priority_edit'] = 'Editar Prioridad';
$lang['ticket_priority_add']  = 'Agregar Prioridad';
$lang['ticket_status_edit']   = 'Editar Estado del Ticket';
$lang['ticket_service_edit']  = 'Editar Servicio del Ticket';
$lang['edit_department']      = 'Editar Departamento';

# Gastos
$lang['edit_expense_category'] = 'Editar Categoría de Gasto';

# Configuración
$lang['customer_default_country']                                 = 'País Predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requerir que el cliente inicie sesión para ver el presupuesto';
$lang['set_reminder']                                             = 'Establecer Recordatorio';
$lang['set_reminder_date']                                        = 'Fecha para notificación';
$lang['reminder_description']                                     = 'Descripción del recordatorio';
$lang['reminder_notify_me_by_email']                              = 'Enviar también un correo electrónico para este recordatorio';
$lang['reminder_added_successfully']                              = 'Recordatorio agregado exitosamente. Se te notificará a tiempo.';
$lang['reminder_description']                                     = 'Descripción';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordar';
$lang['reminder_is_notified']                                     = '¿Está notificado?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio eliminado exitosamente';
$lang['reminder_failed_to_delete']                                = 'No se pudo eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar estado de la factura/presupuesto en el PDF';
$lang['email_piping_default_priority']                            = 'Prioridad predeterminada en el ticket por correo';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de Prospectos';
$lang['tickets_piping']                                           = 'Piping de Correo';
$lang['email_piping_only_replies']                                = 'Solo se permiten respuestas por correo';
$lang['email_piping_only_registered']                             = 'Solo se permite piping para usuarios registrados';

# Presupuestos
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Estado del presupuesto cambiado';
$lang['estimate_status_changed_fail']    = 'Falló el cambio de estado del presupuesto';

# Propuestas
$lang['proposal_to']                            = 'Empresa / Nombre';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Dirección';
$lang['proposal_phone']                         = 'Teléfono';
$lang['proposal_email']                         = 'Correo electrónico';
$lang['proposal_date_created']                  = 'Fecha de Creación';
$lang['proposal_open_till']                     = 'Válido hasta';
$lang['proposal_status_open']                   = 'Abierta';
$lang['proposal_status_accepted']               = 'Aceptada';
$lang['proposal_status_declined']               = 'Rechazada';
$lang['proposal_status_sent']                   = 'Enviada';
$lang['proposal_expired']                       = 'Vencida';
$lang['proposal_subject']                       = 'Asunto';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todas';
$lang['proposals_leads_related']                = 'Relacionadas con Prospectos';
$lang['proposals_customers_related']            = 'Relacionadas con Clientes';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Prospecto';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Propuesta';
$lang['proposal_lowercase']                     = 'propuesta';
$lang['proposals']                              = 'Propuestas';
$lang['proposals_lowercase']                    = 'propuestas';
$lang['new_proposal']                           = 'Nueva Propuesta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir Comentarios';
$lang['proposal_allow_comments_help']           = 'Si marcas esta opción, se permitirán comentarios cuando tu cliente vea la propuesta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Enviar por Correo';
$lang['proposal_send_to_email_title']           = 'Enviar propuesta por correo';
$lang['proposal_attach_pdf']                    = 'Adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa de la plantilla';
$lang['proposal_view']                          = 'Ver Propuesta';
$lang['proposal_copy']                          = 'Copiar';
$lang['proposal_delete']                        = 'Eliminar';
$lang['proposal_to']                            = 'A';
$lang['proposal_add_comment']                   = 'Agregar Comentario';
$lang['proposal_sent_to_email_success']         = 'Propuesta enviada por correo exitosamente';
$lang['proposal_sent_to_email_fail']            = 'Falló el envío de la propuesta por correo';
$lang['proposal_copy_fail']                     = 'Falló la copia de la propuesta';
$lang['proposal_copy_success']                  = 'Propuesta copiada exitosamente';
$lang['proposal_status_changed_success']        = 'Estado de la propuesta cambiado exitosamente';
$lang['proposal_status_changed_fail']           = 'Falló el cambio de estado de la propuesta';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Presupuesto';
$lang['proposal_convert_invoice']               = 'Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a Presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a Factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Necesitas convertir el prospecto a cliente para crear %s';
$lang['proposal_convert_not_related_help']      = 'La propuesta debe estar relacionada con un cliente para convertirla en %s';
$lang['proposal_converted_to_estimate_success'] = 'Propuesta convertida a presupuesto exitosamente';
$lang['proposal_converted_to_invoice_success']  = 'Propuesta convertida a factura exitosamente';
$lang['proposal_converted_to_estimate_fail']    = 'Falló la conversión de la propuesta a presupuesto';
$lang['proposal_converted_to_invoice_fail']     = 'Falló la conversión de la propuesta a factura';

# Propuestas - ver plantilla de propuesta
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptar';
$lang['proposal_decline_info'] = 'Rechazar';
$lang['proposal_pdf_info']     = 'PDF';

# Portal de Clientes
$lang['customer_reset_action']            = 'Restablecer';
$lang['customer_reset_password_heading']  = 'Restablecer tu contraseña';
$lang['customer_forgot_password_heading'] = 'Olvidaste tu contraseña';
$lang['customer_forgot_password']         = '¿Olvidaste tu contraseña?';
$lang['customer_reset_password']          = 'Contraseña';
$lang['customer_reset_password_repeat']   = 'Repetir Contraseña';
$lang['customer_forgot_password_email']   = 'Dirección de Correo Electrónico';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Asunto';

# Plantillas de correo
$lang['email_template_proposals_fields_heading'] = 'Propuestas';

# Tareas
$lang['add_task_attachments']  = 'Adjunto';
$lang['task_view_attachments'] = 'Adjuntos';
$lang['task_view_description'] = 'Descripción';

# Grupos de Clientes
$lang['customer_group_add_heading']      = 'Agregar Nuevo Grupo de Clientes';
$lang['customer_group_edit_heading']     = 'Editar Grupo de Clientes';
$lang['new_customer_group']              = 'Nuevo Grupo de Clientes';
$lang['customer_group_name']             = 'Nombre';
$lang['customer_groups']                 = 'Grupos';
$lang['customer_group']                  = 'Grupo de Clientes';
$lang['customer_group_lowercase']        = 'grupo de clientes';
$lang['customer_have_invoices_by']       = 'Contiene facturas por estado %s';
$lang['customer_have_estimates_by']      = 'Contiene presupuestos por estado %s';
$lang['customer_have_contracts_by_type'] = 'Contiene contratos por tipo %s';

# Campos Personalizados
$lang['custom_field_show_on_table']              = 'Mostrar en tabla';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en portal de cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Si esta opción está marcada, también se mostrará en las tablas';
$lang['custom_field_visibility']                 = 'Visibilidad';

# Base de Conocimiento
$lang['view_articles_list']     = 'Ver Artículos';
$lang['view_articles_list_all'] = 'Todos los Artículos';
$lang['als_all_articles']       = 'Artículos';
$lang['als_kb_groups']          = 'Grupos';

# Filtro de Spam - Tickets
$lang['spam_filters']                 = 'Filtros de Spam';
$lang['spam_filter']                  = 'Filtro de Spam';
$lang['new_spam_filter']              = 'Nuevo Filtro de Spam';
$lang['spam_filter_blocked_senders']  = 'Remitentes Bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Asuntos Bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases Bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar Filtro de Spam';
$lang['spamfilter_add_heading']       = 'Agregar Filtro de Spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Asunto';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']                = 'Bloquear Remitente';
$lang['sender_blocked']              = 'Remitente Bloqueado';
$lang['sender_blocked_successfully'] = 'Remitente Bloqueado Exitosamente';
$lang['ticket_date_created']         = 'Creado';

# KB
$lang['edit_kb_group'] = 'Editar grupo';

# Prospectos
$lang['edit_source'] = 'Editar Fuente';
$lang['edit_status'] = 'Editar Estado';

# Contactos
$lang['contract_type_edit'] = 'Editar Tipo de Contrato';

# Informes
$lang['report_by_customer_groups'] = 'Valor Total por Grupos de Clientes';

# Utilidades
$lang['ticket_pipe_log']      = 'Registro del Pipe de Tickets';
$lang['ticket_pipe_name']     = 'Nombre del Remitente';
$lang['ticket_pipe_email_to'] = 'Para';
$lang['ticket_pipe_email']    = 'Correo del Remitente';
$lang['ticket_pipe_subject']  = 'Asunto';
$lang['ticket_pipe_message']  = 'Mensaje';
$lang['ticket_pipe_date']     = 'Fecha';
$lang['ticket_pipe_status']   = 'Estado';

# Inicio
$lang['home_latest_activity']   = 'Última Actividad';
$lang['home_my_tasks']          = 'Mis Tareas';
$lang['home_my_todo_items']     = 'Mis Tareas Pendientes';
$lang['home_widget_view_all']   = 'Ver Todo';
$lang['home_stats_full_report'] = 'Informe Completo';

# Validación
$lang['form_validation_required']    = 'El campo {field} es obligatorio.';
$lang['form_validation_valid_email'] = 'El campo {field} debe contener una dirección de correo electrónico válida.';
$lang['form_validation_matches']     = 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_is_unique']   = 'El campo {field} debe contener un valor único.';

# Versión 1.0.8
# Notificaciones & Actividad de Prospectos/Presupuestos/Facturas
$lang['not_event']                                                = 'Evento en el calendario hoy - %s ...';
$lang['not_event_public']                                         = 'Inicio de evento público hoy - %s ...';
$lang['not_contract_expiry_reminder']                             = 'Recordatorio de expiración de contrato - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = 'Actividad de Cron de Gastos Recurrientes';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Actividad de Cron de Facturas Recurrientes';
$lang['not_recurring_total_renewed']                              = 'Total Renovado: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Acción tomada del gasto recurrente';
$lang['not_invoice_created']                                      = 'Factura Creada:';
$lang['not_invoice_renewed']                                      = 'Factura Renovada:';
$lang['not_expense_renewed']                                      = 'Gasto Renovado:';
$lang['not_invoice_sent_to_customer']                             = 'Factura Enviada al Cliente: %s';
$lang['not_invoice_sent_yes']                                     = 'Sí';
$lang['not_invoice_sent_not']                                     = 'No';
$lang['not_action_taken_from_recurring_invoice']                  = 'Acción tomada de la factura recurrente:';
$lang['not_new_reminder_for']                                     = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead']                   = 'Recibido un mensaje más del prospecto';
$lang['not_received_lead_imported_email_integration']             = 'Prospecto importado desde integración de correo';
$lang['not_lead_imported_attachment']                             = 'Adjunto importado desde correo';
$lang['not_estimate_status_change']                               = 'Cambio de estado de presupuesto';
$lang['not_estimate_status_updated']                              = 'Estado de presupuesto actualizado: De: %s a %s';
$lang['not_assigned_lead_to_you']                                 = 'te asignó el prospecto %s';
$lang['not_lead_activity_assigned_to']                            = '%s asignó a %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Adjunto Eliminado';
$lang['not_lead_activity_status_updated']                         = '%s actualizó el estado del prospecto de %s a %s';
$lang['not_lead_activity_contacted']                              = '%s contactó a este prospecto el %s';
$lang['not_lead_activity_created']                                = '%s creó el prospecto';
$lang['not_lead_activity_marked_lost']                            = 'Marcado como perdido';
$lang['not_lead_activity_unmarked_lost']                          = 'Desmarcado como perdido';
$lang['not_lead_activity_marked_junk']                            = 'Marcado como basura';
$lang['not_lead_activity_unmarked_junk']                          = 'Desmarcado como basura';
$lang['not_lead_activity_added_attachment']                       = 'Adjunto agregado';
$lang['not_lead_activity_converted_email']                        = 'Correo del prospecto cambiado. El primer correo del prospecto fue: %s y se añadió como cliente con correo %s';
$lang['not_lead_activity_converted']                              = '%s convirtió este prospecto en cliente';
$lang['not_liked_your_post']                                      = '%s le dio me gusta a tu publicación %s ...';
$lang['not_commented_your_post']                                  = '%s comentó en tu publicación %s ...';
$lang['not_liked_your_comment']                                   = '%s le dio me gusta a tu comentario %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Propuesta asignada a ti - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nuevo comentario del cliente en la propuesta %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Propuesta Aceptada - %s';
$lang['not_proposal_proposal_declined']                           = 'Propuesta Rechazada - %s';
$lang['not_task_added_you_as_follower']                           = 'te añadió como seguidor en la tarea %s ...';
$lang['not_task_added_someone_as_follower']                       = 'añadió a %s como seguidor en la tarea %s ...';
$lang['not_task_added_himself_as_follower']                       = 'se añadió como seguidor en la tarea %s ...';
$lang['not_task_assigned_to_you']                                 = 'te asignaron una tarea %s ...';
$lang['not_task_assigned_someone']                                = 'asignaron a %s la tarea %s ...';
$lang['not_task_will_do_user']                                    = 'hará la tarea %s ...';
$lang['not_task_new_attachment']                                  = 'Nuevo Adjunto Agregado';
$lang['not_task_marked_as_complete']                              = 'marcó la tarea como completada %s';
$lang['not_task_unmarked_as_complete']                            = 'desmarcó la tarea como completada %s';
$lang['not_ticket_assigned_to_you']                               = 'Ticket asignado a ti - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Ticket reasignado a ti - %s ...';
$lang['not_estimate_customer_accepted']                           = '¡Felicidades! El cliente aceptó el presupuesto con número %s';
$lang['not_estimate_customer_declined']                           = 'El cliente rechazó el presupuesto con número %s';
$lang['estimate_activity_converted']                              = 'convirtió este presupuesto a factura.<br /> %s';
$lang['estimate_activity_created']                                = 'Creó el presupuesto';
$lang['invoice_estimate_activity_removed_item']                   = 'eliminó el ítem <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'El número del presupuesto cambió de %s a %s';
$lang['invoice_activity_number_changed']                          = 'El número de la factura cambió de %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'actualizó la descripción corta del ítem de %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'actualizó la descripción larga del ítem de <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'actualizó la tarifa del ítem de %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'actualizó la cantidad del ítem <b>%s</b> de %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'añadió un nuevo ítem <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'envió el presupuesto al cliente';
$lang['estimate_activity_client_accepted_and_converted']          = 'El cliente aceptó este presupuesto. El presupuesto se convirtió en factura con número %s';
$lang['estimate_activity_client_accepted']                        = 'El cliente aceptó este presupuesto';
$lang['estimate_activity_client_declined']                        = 'El cliente rechazó este presupuesto';
$lang['estimate_activity_marked']                                 = 'marcó el presupuesto como %s';
$lang['invoice_activity_status_updated']                          = 'El estado de la factura se actualizó de %s a %s';
$lang['invoice_activity_created']                                 = 'creó la factura';
$lang['invoice_activity_from_expense']                            = 'convertido a factura desde gasto';
$lang['invoice_activity_recurring_created']                       = '[Recurrente] Factura creada por CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura de Gasto] Factura creada por CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura enviada al cliente por CRON';
$lang['invoice_activity_sent_to_client']                          = 'envió la factura al cliente';
$lang['invoice_activity_marked_as_sent']                          = 'marcó la factura como enviada';
$lang['invoice_activity_payment_deleted']                         = 'eliminó el pago de la factura. Pago #%s, monto total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'El cliente realizó un pago de la factura de un total de <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'se registró un pago de un total de <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Añadió un adjunto';

# Navegación
$lang['top_search_placeholder'] = 'Buscar...';

# Personal
$lang['staff_profile_inactive_account'] = 'La cuenta de este miembro del personal está inactiva';

# Presupuestos
$lang['copy_estimate']                = 'Copiar Presupuesto';
$lang['estimate_copied_successfully'] = 'Presupuesto copiado exitosamente';
$lang['estimate_copied_fail']         = 'No se pudo copiar el presupuesto';

# Tareas
$lang['tasks_view_assigned_to_user'] = 'Tareas asignadas a mí';
$lang['tasks_view_follower_by_user'] = 'Tareas que sigo';
$lang['no_tasks_found']              = 'No se encontraron tareas';

# Leads
$lang['leads_dt_datecreated']       = 'Creado';
$lang['leads_sort_by']              = 'Ordenar por';
$lang['leads_sort_by_datecreated']  = 'Fecha de Creación';
$lang['leads_sort_by_kanban_order'] = 'Orden Kanban';

# Autenticación
$lang['check_email_for_resetting_password'] = 'Verifica tu correo para más instrucciones sobre el restablecimiento de tu contraseña';
$lang['inactive_account']                   = 'Cuenta Inactiva';
$lang['error_setting_new_password_key']     = 'Error al establecer la nueva clave de contraseña';
$lang['password_reset_message']             = 'Tu contraseña ha sido restablecida. ¡Inicia sesión ahora!';
$lang['password_reset_message_fail']        = 'Error al restablecer tu contraseña. Intenta nuevamente.';
$lang['password_reset_key_expired']         = 'La clave de restablecimiento de contraseña ha caducado o el usuario no es válido';
$lang['auth_reset_pass_email_not_found']    = 'Correo no encontrado';
$lang['auth_reset_password_submit']         = 'Restablecer Contraseña';

# Configuración
$lang['settings_amount_to_words']          = 'Cantidad a palabras';
$lang['settings_amount_to_words_desc']     = 'Muestra el total en palabras en la factura/presupuesto';
$lang['settings_amount_to_words_enabled']  = 'Habilitado';
$lang['settings_total_to_words_lowercase'] = 'Convertir números a minúsculas';
$lang['settings_show_tax_per_item']        = 'Mostrar el impuesto por ítem';

# Informes
$lang['report_sales_months_three_months'] = 'Últimos 3 meses';
$lang['report_invoice_number']            = 'Factura #';
$lang['report_invoice_customer']          = 'Cliente';
$lang['report_invoice_date']              = 'Fecha';
$lang['report_invoice_duedate']           = 'Fecha de Vencimiento';
$lang['report_invoice_amount']            = 'Monto';
$lang['report_invoice_amount_with_tax']   = 'Monto con impuesto';
$lang['report_invoice_amount_open']       = 'Monto abierto';
$lang['report_invoice_status']            = 'Estado';

# Versión 1.0.9

# Estadísticas de Inicio
$lang['home_stats_by_project_status'] = 'Estadísticas por Estado de Proyecto';
$lang['home_invoice_overview']        = 'Resumen de Facturas';
$lang['home_estimate_overview']       = 'Resumen de Presupuestos';
$lang['home_proposal_overview']       = 'Resumen de Propuestas';
$lang['home_lead_overview']           = 'Resumen de Prospectos';
$lang['home_my_projects']             = 'Mis Proyectos';
$lang['home_announcements']           = 'Anuncios';

# Configuración
$lang['settings_leads_kanban_limit']                                    = 'Límite de filas Kanban de prospectos por estado';
$lang['settings_group_misc']                                            = 'Misc';
$lang['show_projects_on_calendar']                                      = 'Proyectos';
$lang['settings_media_max_file_size_upload']                            = 'Tamaño máximo de archivo en Medios (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir que el cliente/personal añadan/editen/eliminar comentarios de tareas solo en la primera hora (administradores no aplican)';

# Plantillas de correo
$lang['email_template_only_domain_email'] = 'Solo correo de dominio';

# Anuncios
$lang['dismiss_announcement']   = 'Descartar anuncio';
$lang['announcement_from']      = 'De:';
$lang['announcement_date']      = 'Fecha de publicación: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recent']   = 'Anuncios recientes';

# General
$lang['zip_invoices']         = 'Facturar en Zip';
$lang['zip_estimates']        = 'Presupuestos en Zip';
$lang['zip_payments']         = 'Pagos en Zip';
$lang['setup_help']           = 'Ayuda';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export']     = 'Exportar';
$lang['dt_entries']           = 'entradas';
$lang['invoice_total_paid']   = 'Total Pagado';
$lang['invoice_amount_due']   = 'Monto Adeudado';

# Calendario
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee']     = 'Responsable (Asignado)';
$lang['customer_from_lead']        = 'Cliente de %s';
$lang['lead_kan_ban_attachments']  = 'Archivos adjuntos: %s';
$lang['leads_sort_by_lastcontact'] = 'Último contacto';

# Tareas
$lang['task_comment_added']     = 'Comentario agregado exitosamente';
$lang['task_duedate']           = 'Fecha de vencimiento';
$lang['task_view_comments']     = 'Comentarios';
$lang['task_comment_updated']   = 'Comentario actualizado';
$lang['task_visible_to_client'] = 'Visible para el cliente';
$lang['task_hourly_rate']       = 'Tarifa por hora';
$lang['hours']                  = 'Horas';
$lang['seconds']                = 'Segundos';
$lang['minutes']                = 'Minutos';
$lang['task_start_timer']       = 'Iniciar temporizador';
$lang['task_stop_timer']        = 'Detener temporizador';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'No facturable';
$lang['task_billed']            = 'Facturado';
$lang['task_billed_yes']        = 'Facturado';
$lang['task_billed_no']         = 'No facturado';
$lang['task_user_logged_time']  = 'Tu tiempo registrado:';
$lang['task_total_logged_time'] = 'Tiempo total registrado:';
$lang['task_is_billed']         = 'Esta tarea se facturó en la factura con número %s';
$lang['task_statistics']        = 'Estadísticas';
$lang['task_milestone']         = 'Hito';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mensaje actualizado exitosamente';

# Facturas
$lang['invoice_task_item_project_tasks_not_included'] = 'Las tareas del proyecto no están incluidas en esta lista.';
$lang['show_quantity_as']                             = 'Mostrar cantidad como:';
$lang['quantity_as_qty']                              = 'Cant';
$lang['quantity_as_hours']                            = 'Horas';
$lang['invoice_table_hours_heading']                  = 'Horas';
$lang['bill_tasks']                                   = 'Facturar tareas';
$lang['invoice_estimate_sent_to_email']               = 'Correo a';

# Presupuestos
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator'] = 'Cliente';
$lang['print'] = 'Imprimir';
$lang['customer_permission_projects'] = 'Proyectos';
$lang['no_timers_found'] = 'No se encontraron temporizadores iniciados';
$lang['timers_started_confirm_logout'] = '¡Se han encontrado temporizadores de tareas iniciados!<br />¿Estás seguro de que quieres cerrar sesión sin detener los temporizadores?';
$lang['confirm_logout'] = 'Cerrar sesión';
$lang['timer_top_started'] = 'Iniciado a %s';

# Proyectos
$lang['cant_change_billing_type_billed_tasks_found'] = 'No puedes cambiar el tipo de facturación. Ya se han encontrado tareas facturadas para este proyecto.';
$lang['project_customer_permission_warning'] = 'El sistema indicó que el contacto principal no tiene permiso para proyectos. El contacto principal no podrá ver el proyecto. Considera agregar el permiso en el perfil de contacto.';
$lang['project_invoice_timesheet_start_time'] = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time'] = 'Hora de finalización: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Tiempo facturable: %s';
$lang['project_view_as_client'] = 'Ver proyecto como cliente';
$lang['project_mark_all_tasks_as_completed'] = 'Marcar todas las tareas como completadas y detener todos los temporizadores (No se enviarán notificaciones a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found'] = 'Se han encontrado temporizadores de tareas para este proyecto, pero el proyecto tiene el estado "No iniciado". Se recomienda cambiar el estado del proyecto a "En progreso"';
$lang['project_status'] = 'Estado';
$lang['project_status_1'] = 'No iniciado';
$lang['project_status_2'] = 'En progreso';
$lang['project_status_3'] = 'En espera';
$lang['project_status_4'] = 'Finalizado';
$lang['project_file_dateadded'] = 'Fecha de carga';
$lang['project_file_filename'] = 'Nombre del archivo';
$lang['project_file__filetype'] = 'Tipo de archivo';
$lang['project_file_visible_to_customer'] = 'Visible para el cliente';
$lang['project_file_uploaded_by'] = 'Subido por';
$lang['edit_project'] = 'Editar proyecto';
$lang['copy_project'] = 'Copiar proyecto';
$lang['delete_project'] = 'Eliminar proyecto';
$lang['project_task_assigned_to_user'] = 'Tarea asignada a ti';
$lang['seconds'] = 'Segundos';
$lang['hours'] = 'Horas';
$lang['minutes'] = 'Minutos';
$lang['project'] = 'Proyecto';
$lang['project_lowercase'] = 'proyecto';
$lang['projects'] = 'Proyectos';
$lang['projects_lowercase'] = 'proyectos';
$lang['project_settings'] = 'Configuraciones del proyecto';
$lang['project_invoiced_successfully'] = 'Proyecto facturado con éxito';
$lang['new_project'] = 'Nuevo proyecto';
$lang['project_files'] = 'Archivos';
$lang['project_activity'] = 'Actividad';
$lang['project_name'] = 'Nombre del proyecto';
$lang['project_description'] = 'Descripción';
$lang['project_customer'] = 'Cliente';
$lang['project_start_date'] = 'Fecha de inicio';
$lang['project_datecreated'] = 'Fecha de creación';
$lang['project_deadline'] = 'Fecha límite';
$lang['project_billing_type'] = 'Tipo de facturación';
$lang['project_billing_type_fixed_cost'] = 'Costo fijo';
$lang['project_billing_type_project_hours'] = 'Horas de proyecto';
$lang['project_billing_type_project_task_hours'] = 'Horas de tareas de proyecto';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basado en tarifa horaria de tareas';
$lang['project_rate_per_hour'] = 'Tarifa por hora';
$lang['project_total_cost'] = 'Costo total';
$lang['project_members'] = 'Miembros';
$lang['project_member_removed'] = 'Miembro del proyecto eliminado con éxito';
$lang['project_overview'] = 'Resumen';
$lang['project_gant'] = 'Gantt';
$lang['project_milestones'] = 'Hitos';
$lang['project_milestone_order'] = 'Orden';
$lang['project_milestone_duedate_passed'] = 'Fecha límite pasada';
$lang['record_timesheet'] = 'Hoja de tiempo';
$lang['new_milestone'] = 'Nuevo hito';
$lang['edit_milestone'] = 'Editar hito';
$lang['milestone_name'] = 'Nombre';
$lang['milestone_due_date'] = 'Fecha de vencimiento';
$lang['project_milestone'] = 'Hito';
$lang['project_notes'] = 'Notas';
$lang['project_timesheets'] = 'Hojas de tiempo';
$lang['project_timesheet'] = 'Hoja de tiempo';
$lang['milestone_total_logged_time'] = 'Tiempo registrado';
$lang['project_overview_total_logged_hours'] = 'Total de horas registradas';
$lang['milestones_uncategorized'] = 'Sin categoría';
$lang['milestone_no_tasks_found'] = 'No se encontraron tareas';
$lang['project_copied_successfully'] = 'Datos del proyecto copiados con éxito';
$lang['failed_to_copy_project'] = 'Error al copiar el proyecto';
$lang['copy_project_task_include_check_list_items'] = 'Copiar elementos de lista de verificación';
$lang['copy_project_task_include_assignees'] = 'Copiar los mismos asignados';
$lang['copy_project_task_include_followers'] = 'Copiar los mismos seguidores';
$lang['project_days_left'] = 'Días restantes';
$lang['project_open_tasks'] = 'Tareas abiertas';
$lang['timesheet_stop_timer'] = 'Detener temporizador';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = 'Error al agregar la hoja de tiempo. La hora de finalización es menor que la hora de inicio';
$lang['project_timesheet_user'] = 'Miembro';
$lang['project_timesheet_start_time'] = 'Hora de inicio';
$lang['project_timesheet_end_time'] = 'Hora de finalización';
$lang['project_timesheet_time_spend'] = 'Tiempo invertido';
$lang['project_timesheet_task'] = 'Tarea';
$lang['project_invoices'] = 'Facturas';
$lang['total_logged_hours_by_staff'] = 'Total de horas registradas';
$lang['invoice_project'] = 'Facturar proyecto';
$lang['invoice_project_info'] = 'Información de la factura del proyecto';
$lang['invoice_project_data_single_line'] = 'Una línea';
$lang['invoice_project_data_task_per_item'] = 'Tarea por artículo';
$lang['invoice_project_data_timesheets_individually'] = 'Todas las hojas de tiempo individualmente';
$lang['invoice_project_item_name_data'] = 'Nombre del artículo';
$lang['invoice_project_description_data'] = 'Descripción';
$lang['invoice_project_projectname_taskname'] = 'Nombre del proyecto + Nombre de la tarea';
$lang['invoice_project_all_tasks_total_logged_time'] = 'Todas las tareas + tiempo total registrado por tarea';
$lang['invoice_project_project_name_data'] = 'Nombre del proyecto';
$lang['invoice_project_timesheet_individually_data'] = 'Hora de inicio + hora de finalización + tiempo total registrado';
$lang['invoice_project_total_logged_time_data'] = 'Tiempo total registrado';
$lang['project_allow_client_to'] = 'Permitir que el cliente %s';
$lang['project_setting_view_task_attachments'] = 'ver archivos adjuntos de tareas';
$lang['project_setting_view_task_checklist_items'] = 'ver elementos de lista de verificación de tareas';
$lang['project_setting_upload_files'] = 'subir archivos';
$lang['project_setting_view_task_comments'] = 'ver comentarios de tareas';
$lang['project_setting_upload_on_tasks'] = 'subir archivos adjuntos en tareas';
$lang['project_setting_view_task_total_logged_time'] = 'ver tiempo total registrado de tareas';
$lang['project_setting_open_discussions'] = 'abrir discusiones';
$lang['project_setting_comment_on_tasks'] = 'comentar en tareas del proyecto';
$lang['project_setting_view_tasks'] = 'ver tareas';
$lang['project_setting_view_milestones'] = 'ver hitos';
$lang['project_setting_view_gantt'] = 'ver Gantt';
$lang['project_setting_view_timesheets'] = 'ver hojas de tiempo';
$lang['project_setting_view_activity_log'] = 'ver registro de actividad';
$lang['project_setting_view_team_members'] = 'ver miembros del equipo';
$lang['project_discussion_visible_to_customer_yes'] = 'Visible';
$lang['project_discussion_visible_to_customer_no'] = 'No visible';
$lang['project_discussion_posted_on'] = 'Publicado el %s';
$lang['project_discussion_posted_by'] = 'Publicado por %s';
$lang['project_discussion_failed_to_delete'] = 'Error al eliminar discusión';
$lang['project_discussion_deleted'] = 'Discusión eliminada con éxito';
$lang['project_discussion_no_activity'] = 'Sin actividad';
$lang['project_discussion'] = 'Discusión';
$lang['project_discussions'] = 'Discusiones';
$lang['edit_discussion'] = 'Editar discusión';
$lang['new_project_discussion'] = 'Crear discusión';
$lang['project_discussion_subject'] = 'Asunto';
$lang['project_discussion_description'] = 'Descripción';
$lang['project_discussion_show_to_customer'] = 'Visible para el cliente';
$lang['project_discussion_total_comments'] = 'Total de comentarios';
$lang['project_discussion_last_activity'] = 'Última actividad';
$lang['discussion_add_comment'] = 'Agregar comentario';
$lang['discussion_newest'] = 'Más recientes';
$lang['discussion_oldest'] = 'Más antiguos';
$lang['discussion_attachments'] = 'Archivos adjuntos';
$lang['discussion_send'] = 'Enviar';
$lang['discussion_reply'] = 'Responder';
$lang['discussion_edit'] = 'Editar';
$lang['discussion_edited'] = 'Editado';
$lang['discussion_you'] = 'Tú';
$lang['discussion_save'] = 'Guardar';
$lang['discussion_delete'] = 'Eliminar';
$lang['discussion_view_all_replies'] = 'Ver todas las respuestas';
$lang['discussion_hide_replies'] = 'Ocultar respuestas';
$lang['discussion_no_comments'] = 'Sin comentarios';
$lang['discussion_no_attachments'] = 'Sin archivos adjuntos';
$lang['discussion_attachments_drop'] = 'Arrastra y suelta para cargar un archivo';
$lang['project_note'] = 'Nota';
$lang['project_note_private'] = 'Notas privadas';
$lang['project_save_note'] = 'Guardar nota';

# Actividad del Proyecto
$lang['project_activity_created'] = 'Creó el proyecto';
$lang['project_activity_updated'] = 'Actualizó el proyecto';
$lang['project_activity_removed_team_member'] = 'Eliminó un miembro del equipo';
$lang['project_activity_added_team_member'] = 'Añadió un nuevo miembro al equipo';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcó todas las tareas como completadas';
$lang['project_activity_recorded_timesheet'] = 'Registró una hoja de tiempo';
$lang['project_activity_task_name'] = 'Tarea:';
$lang['project_activity_deleted_discussion'] = 'Eliminó discusión';
$lang['project_activity_created_discussion'] = 'Creó discusión';
$lang['project_activity_updated_discussion'] = 'Actualizó discusión';
$lang['project_activity_commented_on_discussion'] = 'Comentó en la discusión';
$lang['project_activity_deleted_discussion_comment'] = 'Eliminó comentario de discusión';
$lang['project_activity_deleted_milestone'] = 'Eliminó hito';
$lang['project_activity_updated_milestone'] = 'Actualizó hito';
$lang['project_activity_created_milestone'] = 'Creó nuevo hito';
$lang['project_activity_invoiced_project'] = 'Facturó el proyecto';
$lang['project_activity_task_marked_complete'] = 'Tarea marcada como completada';
$lang['project_activity_task_unmarked_complete'] = 'Tarea desmarcada como completada';
$lang['project_activity_task_deleted'] = 'Tarea eliminada';
$lang['project_activity_new_task_comment'] = 'Comentó en la tarea';
$lang['project_activity_new_task_attachment'] = 'Subió archivo adjunto a la tarea';
$lang['project_activity_new_task_assignee'] = 'Añadió nuevo asignado a la tarea';
$lang['project_activity_task_assignee_removed'] = 'Eliminó asignado de la tarea';
$lang['project_activity_task_timesheet_deleted'] = 'Eliminó hoja de tiempo';
$lang['project_activity_uploaded_file'] = 'Subió archivo del proyecto';
$lang['project_activity_status_updated'] = 'Actualizó el estado del proyecto';
$lang['project_activity_visible_to_customer'] = 'Visible para el cliente';
$lang['project_activity_project_file_removed'] = 'Eliminó archivo del proyecto';

# Área de Clientes
$lang['clients_my_estimates'] = 'Presupuestos';
$lang['client_no_reply'] = 'Sin respuesta';
$lang['clients_nav_projects'] = 'Proyectos';
$lang['clients_my_projects'] = 'Mis proyectos';
$lang['client_profile_image'] = 'Imagen de perfil';
$lang['sales_report_cancelled_invoices_not_included'] = 'Las facturas canceladas no se incluyen en el informe';
$lang['invoices_merge_cancel_merged_invoices'] = 'Marcar las facturas fusionadas como canceladas en lugar de eliminarlas';
$lang['invoice_marked_as_cancelled_successfully'] = 'Factura marcada como cancelada con éxito';
$lang['invoice_unmarked_as_cancelled'] = 'Factura desmarcada como cancelada con éxito';
$lang['tasks_reminder_notification_before'] = 'Recordatorio de tarea antes (días)';
$lang['not_task_deadline_reminder'] = 'Recordatorio de fecha límite de tarea';
$lang['dt_length_menu_all'] = 'Todo';
$lang['task_not_finished'] = 'No completada';
$lang['task_billed_cant_start_timer'] = 'Tarea facturada. No se puede iniciar el temporizador';
$lang['invoice_task_billable_timers_found'] = 'Temporizadores iniciados encontrados';
$lang['project_timesheet_not_updated'] = 'Hoja de tiempo no actualizada';
$lang['project_invoice_task_no_timers_found'] = 'No se encontraron temporizadores para esta tarea';
$lang['invoice_project_tasks_not_started'] = 'No ha comenzado aún | Fecha de inicio: %s';
$lang['invoice_project_see_billed_tasks'] = 'Ver tareas que serán facturadas en esta factura';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas las tareas facturadas serán marcadas como finalizadas';
$lang['invoice_project_nothing_to_bill'] = 'No hay tareas que facturar. Siéntete libre de agregar cualquier cosa a los elementos de la factura.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Las tareas con fecha de inicio futura no pueden ser facturadas';
$lang['invoice_project_stop_all_timers'] = 'Detener todos los temporizadores';
$lang['invoice_project_stop_billable_timers_only'] = 'Detener solo los temporizadores facturables';
$lang['project_tasks_total_timers_stopped'] = 'Se detuvieron un total de %s temporizadores';
$lang['project_invoice_timers_started'] = 'Se encontraron temporizadores de tareas iniciados en tareas facturables, no se puede crear la factura. Detén los temporizadores de tareas para crear la factura.';
$lang['task_start_timer_only_assignee'] = '¡Debes estar asignado en esta tarea para iniciar el temporizador!';
$lang['task_comments'] = 'Comentarios';
$lang['invoice_total_tax'] = 'Impuesto total';
$lang['estimates_total_tax'] = 'Impuesto total';
$lang['report_invoice_total_tax'] = 'Impuesto total';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Última actividad de proyectos';
$lang['view_tracking'] = 'Seguimiento de vistas';
$lang['view_date'] = 'Fecha';
$lang['view_ip'] = 'Dirección IP';
$lang['article_total_views'] = 'Total de vistas';
$lang['leads_source'] = 'Fuente';
$lang['invoices_available_for_merging'] = 'Facturas disponibles para fusionar';
$lang['invoices_merge_discount'] = 'Deberás aplicar un descuento del total de %s manualmente a esta factura';
$lang['invoice_merge_number_warning'] = 'La fusión de facturas generará huecos en los números de factura. No fusionen facturas si desean evitar huecos en el historial de facturas. También tienes la opción de ajustar manualmente los números de las facturas si deseas llenar los huecos.';
$lang['invoice_mark_as'] = 'Marcar como %s';
$lang['invoice_unmark_as'] = 'Desmarcar como %s';
$lang['invoice_status_cancelled'] = 'Cancelada';
$lang['tasks_reminder_notification_before_help'] = 'Notificar a los asignados sobre la fecha límite antes de X días. La notificación/correo electrónico solo se envía a los asignados. Si la diferencia entre la fecha de inicio de la tarea y la fecha límite es menor que el número de días de recordatorio, no se enviará ninguna notificación.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las tareas';
$lang['lead_company']                     = 'Compañía';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmar';
$lang['task_assigned']                           = 'Asignado a';
$lang['switch_to_pipeline']                      = 'Cambiar a Pipeline';
$lang['switch_to_list_view']                     = 'Cambiar a Vista de Lista';
$lang['estimates_pipeline']                      = 'Pipeline de presupuestos';
$lang['estimates_pipeline_sort']                 = 'Ordenar por';
$lang['estimates_sort_expiry_date']              = 'Fecha de vencimiento';
$lang['estimates_sort_pipeline']                 = 'Orden de Pipeline';
$lang['estimates_sort_datecreated']              = 'Fecha de creación';
$lang['estimates_sort_estimate_date']            = 'Fecha de presupuesto';
$lang['estimate_set_reminder_title']             = 'Establecer Recordatorio de presupuesto';
$lang['invoice_set_reminder_title']              = 'Establecer Recordatorio de Factura';
$lang['estimate_reminders']                      = 'Recordatorios';
$lang['invoice_reminders']                       = 'Recordatorios';
$lang['estimate_notes']                          = 'Notas';
$lang['estimate_add_note']                       = 'Añadir Nota';
$lang['dropdown_non_selected_tex']               = 'Nada seleccionado';
$lang['auto_close_ticket_after']                 = 'Cerrar ticket automáticamente después de (Horas)';
$lang['event_description']                       = 'Descripción';
$lang['delete_event']                            = 'Eliminar';
$lang['not_new_ticket_created']                  = 'Nuevo ticket abierto en tu departamento - %s';
$lang['receive_notification_on_new_ticket']      = 'Recibir notificación de nuevo ticket abierto';
$lang['receive_notification_on_new_ticket_help'] = 'Todos los miembros del personal que pertenecen al departamento del ticket recibirán notificación de que se ha abierto un nuevo ticket';
$lang['event_updated']                           = 'Evento actualizado correctamente';
$lang['customer_contacts']                       = 'Contactos';
$lang['new_contact']                             = 'Nuevo Contacto';
$lang['contact']                                 = 'Contacto';
$lang['contact_lowercase']                       = 'contacto';
$lang['contact_primary']                         = 'Contacto Principal';
$lang['contact_position']                        = 'Posición';
$lang['contact_active']                          = 'Activo';
$lang['client_company_info']                     = 'Detalles de la compañía';
$lang['proposal_save']                           = 'Guardar Propuesta';
$lang['calendar']                                = 'Calendario';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'Fuente PDF';
$lang['settings_pdf_table_heading_color']        = 'Color de encabezado de tabla de artículos';
$lang['settings_pdf_table_heading_text_color']   = 'Color de texto del encabezado de tabla de artículos';
$lang['settings_pdf_font_size']                  = 'Tamaño de fuente por defecto';
$lang['proposal_status_draft']                   = 'Borrador';
$lang['custom_field_contacts']                   = 'Contactos';
$lang['company_primary_email']                   = 'Correo electrónico principal';
$lang['client_register_contact_info']            = 'Información del contacto principal';
$lang['client_register_company_info']            = 'Información de la compañía';
$lang['contact_permissions_info']                = 'Asegúrate de establecer los permisos adecuados para este contacto';
$lang['default_leads_kanban_sort']               = 'Orden predeterminado de leads en Kanban';
$lang['default_leads_kanban_sort_type']          = 'Ordenar';
$lang['order_ascending']                         = 'Ascendente';
$lang['order_descending']                        = 'Descendente';
$lang['calendar_expand']                         = 'Expandir';
$lang['proposal_reminders']                      = 'Recordatorios';
$lang['proposal_set_reminder_title']             = 'Establecer Recordatorio de Propuesta';
$lang['settings_allowed_upload_file_types']      = 'Tipos de archivo permitidos';
$lang['no_primary_contact']                      = 'Este cliente no tiene contacto principal. Debes configurar un contacto principal para este cliente. Se recomienda que todos los clientes tengan un contacto principal.';
$lang['leads_merge_customer']                    = 'Fusión de campos de cliente';
$lang['leads_merge_contact']                     = 'Fusión de campos de contacto';
$lang['leads_merge_as_contact_field']            = 'Fusionar como campo de contacto';
$lang['lead_convert_to_client_phone']            = 'Teléfono';
$lang['invoice_status_report_all']               = 'Todos';
$lang['import_contact_field']                    = 'Campo de contacto';
$lang['file_uploaded_success']                   = 'No hay error, el archivo se subió con éxito';
$lang['file_exceeds_max_filesize']               = 'El archivo subido excede el valor de upload_max_filesize en php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'El archivo subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML';
$lang['file_uploaded_partially']                 = 'El archivo subido fue solo parcialmente cargado';
$lang['file_not_uploaded']                       = 'No se subió ningún archivo';
$lang['file_missing_temporary_folder']           = 'Falta una carpeta temporal';
$lang['file_failed_to_write_to_disk']            = 'No se pudo escribir el archivo en el disco.';
$lang['file_php_extension_blocked']              = 'Una extensión de PHP bloqueó la carga del archivo.';
$lang['calendar_expand']                         = 'Expandir';
$lang['view_pdf']                                = 'Ver PDF';
$lang['expense_repeat_every']                    = 'Repetir cada';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Cambiar a Kanban';
$lang['contract_content']                         = 'Contenido';
$lang['contract_save']                            = 'Guardar Contrato';
$lang['contract_send_to_email']                   = 'Enviar por correo electrónico';
$lang['contract_send_to_client_modal_heading']    = 'Enviar contrato por correo electrónico';
$lang['contract_send_to']                         = 'Enviar a';
$lang['contract_send_to_client_attach_pdf']       = 'Adjuntar PDF';
$lang['contract_send_to_client_preview_template'] = 'Previsualizar plantilla de correo';
$lang['include_attachments_to_email']             = 'Incluir adjuntos en el correo';
$lang['contract_sent_to_client_success']          = 'El contrato se envió correctamente al cliente';
$lang['contract_sent_to_client_fail']             = 'No se pudo enviar el contrato';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Nombre de usuario o contraseña inválidos';
$lang['client_old_password_incorrect']       = 'Tu antigua contraseña es incorrecta';
$lang['client_password_changed']             = 'Tu contraseña ha sido cambiada';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Total de leads eliminados: %s';
$lang['total_clients_deleted']                            = 'Total de clientes eliminados: %s';
$lang['confirm_action_prompt']                            = '¿Estás seguro de que quieres realizar esta acción?';
$lang['mass_delete']                                      = 'Eliminar masivamente';
$lang['email_protocol']                                   = 'Protocolo de correo electrónico';
$lang['add_edit_members']                                 = 'Añadir/Editar Miembros';
$lang['project_overview_logged_hours']                    = 'Horas registradas:';
$lang['project_overview_billable_hours']                  = 'Horas facturables:';
$lang['project_overview_billed_hours']                    = 'Horas facturadas:';
$lang['project_overview_unbilled_hours']                  = 'Horas no facturadas:';
$lang['calendar_first_day']                               = 'Primer día';
$lang['permission_view']                                  = 'Ver';
$lang['permission_edit']                                  = 'Editar';
$lang['permission_create']                                = 'Crear';
$lang['permission_delete']                                = 'Eliminar';
$lang['permission']                                       = 'Permiso';
$lang['permissions']                                      = 'Permisos';
$lang['proposals_pipeline']                               = 'Pipeline de Propuestas';
$lang['proposals_pipeline_sort']                          = 'Ordenar por';
$lang['proposals_sort_open_till']                         = 'Abrir hasta';
$lang['proposals_sort_pipeline']                          = 'Orden de Pipeline';
$lang['proposals_sort_datecreated']                       = 'Fecha de creación';
$lang['proposals_sort_proposal_date']                     = 'Fecha de propuesta';
$lang['is_not_staff_member']                              = 'No es miembro del personal';
$lang['lead_created']                                     = 'Creado';
$lang['access_tickets_to_none_staff_members']             = 'Permitir acceso a tickets para miembros no empleados';
$lang['project_expenses']                                 = 'Gastos';
$lang['expense_currency']                                 = 'Moneda';
$lang['currency_valid_code_help']                         = 'Asegúrate de ingresar un código ISO de moneda válido.';
$lang['week']                                             = 'Semana';
$lang['weeks']                                            = 'Semanas';
$lang['month']                                            = 'Mes';
$lang['months']                                           = 'Meses';
$lang['year']                                             = 'Año';
$lang['years']                                            = 'Años';
$lang['expense_report_category']                          = 'Categoría';
$lang['expense_paid_via']                                 = 'Pagado vía %s';
$lang['item_as_expense']                                  = '[Gasto]';
$lang['show_help_on_setup_menu']                          = 'Mostrar ítem de ayuda en el menú de configuración';
$lang['customers_summary_total']                          = 'Total de clientes';
$lang['filter_by']                                        = 'Filtrar por';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Clave del sitio';
$lang['recaptcha_secret_key']                             = 'Clave secreta';
$lang['recaptcha_error']                                  = 'El campo reCAPTCHA indica que eres un robot.';
$lang['smtp_username']                                    = 'Nombre de usuario SMTP';
$lang['smtp_username_help']                               = 'Llena solo si tu cliente de correo utiliza nombre de usuario para iniciar sesión en SMTP.';
$lang['pinned_project']                                   = 'Proyecto fijado';
$lang['pin_project']                                      = 'Fijar Proyecto';
$lang['unpin_project']                                    = 'Desfijar Proyecto';
$lang['smtp_encryption']                                  = 'Cifrado de correo electrónico';
$lang['smtp_encryption_none']                             = 'Ninguno';
$lang['show_proposals_on_calendar']                       = 'Propuestas';
$lang['invoice_project_see_billed_expenses']              = 'Ver gastos que se facturarán en esta factura';
$lang['project_overview_expenses']                        = 'Total de gastos';
$lang['project_overview_expenses_billable']               = 'Gastos facturables';
$lang['project_overview_expenses_billed']                 = 'Gastos facturados';
$lang['project_overview_expenses_unbilled']               = 'Gastos no facturados';
$lang['announcement_date_list']                           = 'Fecha';
$lang['project_setting_view_finance_overview']            = 'ver visión financiera';
$lang['show_all_tasks_for_project_member']                = 'Permitir que todo el personal vea todas las tareas relacionadas con los proyectos (incluidos los no empleados)';
$lang['not_staff_added_as_project_member']                = 'Te ha añadido como miembro del proyecto';
$lang['report_expenses_base_currency_select_explanation'] = 'Necesitas seleccionar la moneda porque el sistema encontró diferentes monedas usadas en los gastos.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Gasto registrado';
$lang['save_customer_and_add_contact']       = 'Guardar y crear contacto';
$lang['tickets_chart_weekly_opening_stats']  = 'Estadísticas semanales';
$lang['related_knowledgebase_articles']      = 'Artículos relacionados';
$lang['detailed_overview']                   = 'Visión detallada de tareas';
$lang['tasks_total_checklists_finished']     = 'Total de elementos de lista de verificación marcados como terminados';
$lang['tasks_total_added_attachments']       = 'Total de adjuntos añadidos';
$lang['tasks_total_comments']                = 'Total de comentarios';
$lang['task_finished_on_time']               = '¿Terminado a tiempo?';
$lang['task_finished_on_time_indicator']     = 'Sí';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filtrar';
$lang['task_filter_detailed_all_months']     = 'Todos los meses';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si el ticket es importado con el correo electrónico y el contacto no existe en el CRM, los campos no serán reemplazados.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Detener todos los demás temporizadores iniciados al iniciar un nuevo temporizador';
$lang['notification_when_customer_pay_invoice'] = 'Recibir notificación cuando el cliente pague la factura (integrado)';
$lang['not_invoice_payment_recorded']           = 'Nuevo pago de factura - %s';
$lang['email_template_contact_warning']         = 'Si el contacto no está registrado al realizar la acción, los campos de fusión de contacto no serán reemplazados.';
$lang['change_role_permission_warning']         = 'Cambiar los permisos de rol no afectará los permisos actuales de los miembros del personal que están usando este rol.';
$lang['task_copied_successfully']               = 'Tarea copiada con éxito';
$lang['failed_to_copy_task']                    = 'Error al copiar la tarea';
$lang['not_project_file_uploaded']              = 'Nuevo archivo del proyecto cargado';
$lang['settings_calendar_color']                = 'Color de %s';
$lang['settings_calendar_colors_heading']       = 'Estilo';
$lang['reminder']                               = 'Recordatorio';
$lang['back_to_tasks_list']                     = 'Volver a la lista de tareas';
$lang['copy_task_confirm']                      = 'Confirmar';
$lang['changing_items_affect_warning']          = 'Cambiar la información del artículo no afectará las facturas/presupuestos/propuestas/notas de crédito creadas.';
$lang['tax_is_used_in_expenses_warning']        = 'No puedes actualizar este impuesto porque está siendo utilizado por transacciones de gastos.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Leads convertidos total';
$lang['leads_staff_report_created']             = 'Leads creados total';
$lang['leads_staff_report_lost']                = 'Leads perdidos total';
$lang['client_go_to_dashboard']                 = 'Volver al portal';
$lang['show_estimate_reminders_on_calendar']    = 'Recordatorios de presupuestos';
$lang['show_invoice_reminders_on_calendar']     = 'Recordatorios de facturas';
$lang['show_proposal_reminders_on_calendar']    = 'Recordatorios de propuestas';
$lang['calendar_estimate_reminder']             = 'Recordatorio de presupuesto';
$lang['calendar_invoice_reminder']              = 'Recordatorio de factura';
$lang['calendar_proposal_reminder']             = 'Recordatorio de propuesta';
$lang['proposal_due_after']                     = 'Propuesta vencida después de (días)';
$lang['project_progress']                       = 'Progreso';
$lang['calculate_progress_through_tasks']       = 'Calcular el progreso a través de las tareas';
$lang['allow_customer_to_change_ticket_status'] = 'Permitir al cliente cambiar el estado del ticket desde el área de clientes';
$lang['switch_to_general_report']               = 'Cambiar a informe general';
$lang['switch_to_staff_report']                 = 'Cambiar a informe de personal';
$lang['generate']                               = 'Generar';
$lang['from_date']                              = 'Desde la fecha';
$lang['to_date']                                = 'Hasta la fecha';
$lang['not_results_found']                      = 'No se encontraron resultados';
$lang['lead_lock_after_convert_to_customer']    = 'No permitir editar los leads después de que se conviertan en clientes (no aplica a los administradores)';
$lang['default_pipeline_sort']                  = 'Orden predeterminado del pipeline';
$lang['toggle_full_view']                       = 'Cambiar a vista completa';
$lang['not_estimate_invoice_deleted']           = 'eliminada la factura creada';
$lang['not_task_new_comment']                   = 'comentó sobre la tarea %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Este número de factura ya existe para el año en curso.';
$lang['estimate_number_exists']                 = 'Este número de presupuesto ya existe para el año en curso.';
$lang['email_exists']                           = 'El correo electrónico ya existe';
$lang['not_uploaded_project_file']              = 'Nuevo archivo cargado';
$lang['not_created_new_project_discussion']     = 'Nueva discusión de proyecto creada';
$lang['not_commented_on_project_discussion']    = 'Nuevo comentario en la discusión del proyecto';
$lang['all_staff_members']                      = 'Todos los miembros del personal';
$lang['help_project_permissions']               = 'VIEW permite que el miembro del personal vea TODOS los proyectos. Si solo quieres que vean los proyectos a los que están asignados (agregados como miembros), no les des permisos de ver.';
$lang['help_tasks_permissions']                 = 'VIEW permite que el miembro del personal vea TODAS las tareas. Si solo quieres que vean las tareas a las que están asignados o siguiendo, no les des permisos de ver.';
$lang['expense_recurring_days']                 = 'Día(s)';
$lang['expense_recurring_weeks']                = 'Semana(s)';
$lang['expense_recurring_months']               = 'Mes(es)';
$lang['expense_recurring_years']                = 'Año(s)';
$lang['reset_to_default_color']                 = 'Restablecer al color predeterminado';
$lang['pdf_logo_width']                         = 'Ancho del logo (PX)';
$lang['drop_files_here_to_upload']              = 'Suelta los archivos aquí para subir';
$lang['browser_not_support_drag_and_drop']      = 'Tu navegador no soporta la carga de archivos mediante arrastrar y soltar';
$lang['remove_file']                            = 'Eliminar archivo';
$lang['you_can_not_upload_any_more_files']      = 'No puedes subir más archivos';
$lang['custom_field_only_admin']                = 'Restringir visibilidad solo para administradores';
$lang['leads_default_source']                   = 'Fuente predeterminada';
$lang['clear_activity_log']                     = 'Borrar registro de actividad';
$lang['default_contact_permissions']            = 'Permisos predeterminados para contacto';
$lang['invoice_activity_marked_as_cancelled']   = 'factura marcada como cancelada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'factura desmarcada como cancelada';
$lang['wait_text']                              = 'Por favor espera...';
$lang['projects_summary']                       = 'Resumen de proyectos';
$lang['dept_imap_host']                         = 'Host IMAP';
$lang['dept_encryption']                        = 'Cifrado';
$lang['dept_email_password']                    = 'Contraseña';
$lang['dept_email_no_encryption']               = 'Sin cifrado';
$lang['failed_to_decrypt_password']             = 'Error al descifrar la contraseña';
$lang['delete_mail_after_import']               = '¿Eliminar el correo después de importarlo?';
$lang['expiry_reminder_enabled']                = 'Enviar recordatorio de vencimiento';
$lang['send_expiry_reminder_before']            = 'Enviar recordatorio de vencimiento antes de (DÍAS)';
$lang['not_expiry_reminder_sent']               = 'Recordatorio de vencimiento enviado';
$lang['send_expiry_reminder']                   = 'Enviar recordatorio de vencimiento';
$lang['sent_expiry_reminder_success']           = 'Recordatorio de vencimiento enviado con éxito';
$lang['sent_expiry_reminder_fail']              = 'Error al enviar recordatorio de vencimiento';
$lang['leads_default_status']                   = 'Estado predeterminado';
$lang['item_description_placeholder']           = 'Descripción';
$lang['item_long_description_placeholder']      = 'Descripción larga';
$lang['item_quantity_placeholder']              = 'Cantidad';
$lang['item_rate_placeholder']                  = 'Tarifa';
$lang['tickets_summary']                        = 'Resumen de tickets';
$lang['tasks_list_priority']                    = 'Prioridad';
$lang['ticket_status_db_2']                     = 'En progreso';
$lang['ticket_status_db_1']                     = 'Abierto';
$lang['ticket_status_db_3']                     = 'Respondido';
$lang['ticket_status_db_4']                     = 'En espera';
$lang['ticket_status_db_5']                     = 'Cerrado';
$lang['ticket_priority_db_1']                   = 'Baja';
$lang['ticket_priority_db_2']                   = 'Media';
$lang['ticket_priority_db_3']                   = 'Alta';
$lang['customer_have_projects_by']              = 'Contiene proyectos por estado %s';
$lang['customer_have_proposals_by']             = 'Contiene propuestas por estado %s';
$lang['do_not_redirect_payment']                = 'No redirigir al procesador de pagos';
$lang['project_tickets']                        = 'Tickets';
$lang['invoice_report']                         = 'Informe de facturas';
$lang['payment_modes_report']                   = 'Modos de pago (Transacciones)';
$lang['customer_admins']                        = 'Administradores del cliente';
$lang['assign_admin']                           = 'Asignar administrador';
$lang['customer_admin_date_assigned']           = 'Fecha asignada';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Has sido agregado como administrador de este cliente.';
$lang['ticket_form_validation_file_size']       = 'El tamaño del archivo debe ser menor a %s';
$lang['has_transactions_currency_base_change']  = 'Cambiar la moneda base solo es posible si no hay transacciones registradas en esa moneda. Elimina las transacciones para cambiar la moneda base';
$lang['customers_sort_all']                     = 'Todos';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Habilitar reCAPTCHA en el área de clientes (Iniciar sesión/Registrarse)';
$lang['project_marked_as_finished']      = 'Proyecto completado';
$lang['project_status_updated']          = 'Estado del proyecto actualizado';
$lang['remove_decimals_on_zero']         = 'Eliminar decimales en números/dinero con cero decimales (2.00 se convertirá en 2, 2.25 se mantendrá como 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Eliminar el nombre del impuesto de la fila de la tabla de artículos';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Gastos no facturables por categorías';
$lang['billable_expenses_by_categories']          = 'Gastos facturables por categorías';
$lang['format_letter_size']                       = 'A4 Horizontal';
$lang['pdf_formats']                              = 'Formatos de documento';
$lang['swap_pdf_info']                            = 'Intercambiar detalles de empresa/cliente (detalles de la empresa a la derecha, detalles del cliente a la izquierda)';
$lang['expenses_filter_by_categories']            = 'Por Categorías';
$lang['task_copy']                                = 'Copiar';
$lang['estimate_status']                          = 'Estado';
$lang['expenses_report_exclude_billable']         = 'Excluir gastos facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Archivo adjunto agregado';
$lang['show_to_customer']                         = 'Mostrar al cliente';
$lang['hide_from_customer']                       = 'Ocultar del cliente';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Informe de gastos';
$lang['expenses_report_total_tax']                = 'Impuesto total';
$lang['expenses_detailed_report']                 = 'Informe detallado';
$lang['expense_not_billable']                     = 'No facturable';
$lang['notification_settings']                    = 'Configuración de notificaciones';
$lang['staff_with_roles']                         = 'Miembros del personal con roles';
$lang['specific_staff_members']                   = 'Miembros específicos del personal';
$lang['proposal_mark_as']                         = 'Marcar como %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editar';
$lang['invoice_files']                            = 'Archivos de factura';
$lang['estimate_files']                           = 'Archivos de presupuesto';
$lang['proposal_files']                           = 'Archivos de propuesta';
$lang['invoices_awaiting_payment']                = 'Facturas esperando pago';
$lang['tasks_not_finished']                       = 'Tareas no terminadas';
$lang['outstanding_invoices']                     = 'Facturas pendientes';
$lang['past_due_invoices']                        = 'Facturas vencidas';
$lang['paid_invoices']                            = 'Facturas pagadas';
$lang['invoice_estimate_year']                    = 'Año';
$lang['task_stats_logged_hours']                  = 'Horas registradas';
$lang['leads_converted_to_client']                = 'Leads convertidos';
$lang['task_assigned_from']                       = 'Esta tarea te fue asignada por %s';
$lang['new_note']                                 = 'Nueva nota';
$lang['my_tickets_assigned']                      = 'Tickets asignados a mí';
$lang['filter_by_assigned']                       = 'Por miembro asignado';
$lang['staff_stats_total_logged_time']            = 'Tiempo total registrado';
$lang['staff_stats_last_month_total_logged_time'] = 'Tiempo total registrado el mes pasado';
$lang['staff_stats_this_month_total_logged_time'] = 'Tiempo total registrado este mes';
$lang['staff_stats_last_week_total_logged_time']  = 'Tiempo total registrado la semana pasada';
$lang['staff_stats_this_week_total_logged_time']  = 'Tiempo total registrado esta semana';
// No cambies estos porque ya fueron traducidos anteriormente para los tiempos de proyectos y ahora solo se usan para mayor claridad.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                  = 'Descripción';
$lang['description_visible_to_customer']        = 'Mostrar descripción al cliente';
$lang['upcoming_tasks']                         = 'Tareas próximas';
$lang['payment_credit_card_number']             = 'Número de tarjeta';
$lang['payment_credit_card_expiration_date']    = 'Fecha de expiración';
$lang['payment_billing_email']                  = 'Correo electrónico';
$lang['submit_payment']                         = 'Enviar pago';
$lang['custom_field_disallow_customer_to_edit'] = 'No permitir que el cliente edite este campo';
$lang['project_due_notice']                     = 'Este proyecto está vencido desde hace %s días';
$lang['not_lead_added_attachment']              = 'agregó un nuevo archivo adjunto al lead %s';
$lang['lead_note_date_added']                   = 'Nota añadida: %s';
$lang['recurring_custom']                       = 'Personalizado';
// No traduzcas estos, ya que ya fueron traducidos anteriormente para la función de gastos recurrentes personalizados.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Versión 1.2.4
$lang['document_direction']                                 = 'Dirección';
$lang['notify_project_members_status_change']               = 'Notificar a los miembros del proyecto que el estado ha cambiado';
$lang['not_project_status_updated']                         = 'Estado del proyecto actualizado de %s a %s';
$lang['ticket_not_found']                                   = 'Ticket no encontrado';
$lang['project_not_found']                                  = 'Proyecto no encontrado';
$lang['export_project_data']                                = 'Exportar datos del proyecto';
$lang['total_project_members']                              = 'Miembros totales del proyecto';
$lang['total_project_files']                                = 'Archivos adjuntos';
$lang['total_project_discussions_created']                  = 'Discusiones creadas';
$lang['project_member']                                     = 'Miembro';
$lang['total_project_discussions_comments']                 = 'Total de comentarios en discusiones';
$lang['staff_total_task_assigned']                          = 'Total de tareas asignadas';
$lang['staff_total_comments_on_tasks']                      = 'Comentarios en tareas';
$lang['project_members_overview']                           = 'Resumen de miembros del proyecto';
$lang['project_milestones_overview']                        = 'Resumen de hitos';
$lang['total_tasks_in_milestones']                          = 'Total de tareas asignadas';
$lang['total_task_members_assigned']                        = 'Total de miembros asignados';
$lang['total_task_members_followers']                       = 'Total de seguidores';
$lang['total_milestones']                                   = 'Total de hitos';
$lang['total_project_worked_days']                          = 'Total de días trabajados';
$lang['finance_overview']                                   = 'Resumen financiero';
$lang['project_custom_fields']                              = 'Campos personalizados';
$lang['total_tickets_related_to_project']                   = 'Total de tickets vinculados al proyecto';
$lang['projects_total_invoices_created']                    = 'Total de facturas creadas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar correo de pago de factura a los contactos del cliente';
$lang['no_preview_available_for_file']                      = 'No hay vista previa disponible para este archivo.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Comentario de discusión de archivo eliminado';
$lang['email_template_discussion_info']                     = 'Esta plantilla se usa para los correos electrónicos de comentarios de discusión de proyectos. (discusiones de archivos y discusiones regulares)';
$lang['format_a4_portrait_size']                            = 'Vertical';
$lang['only_show_contact_tickets']                          = 'En el área de clientes solo mostrar tickets relacionados con el contacto iniciado sesión (No se aplica a contactos principales)';
$lang['cancel_overdue_reminders_invoice']                   = 'Evitar el envío de recordatorios de vencimiento para esta factura';
$lang['customer_shipping_address_notice']                   = 'No complete la dirección de envío si no la va a utilizar en las facturas del cliente';
$lang['timesheets_overview']                                = 'Resumen de hojas de tiempo';
$lang['invoice_status_draft']                               = 'Borrador';
$lang['save_as_draft']                                      = 'Guardar como borrador';
$lang['convert_and_save_as_draft']                          = 'Convertir y guardar como borrador';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Excluir facturas con estado Borrador del área de clientes';
$lang['invoice_draft_status_info']                          = 'Esta factura está en estado Borrador, el estado se cambiará automáticamente cuando envíe la factura al cliente o la marque como enviada.';
$lang['task_info']                                          = 'Información de la tarea';
$lang['recurring_tasks']                                    = 'Tareas recurrentes';
// no traducir estos, ya están traducidos
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Tareas de hoy';
$lang['payment_mode_invoices_only']                = 'Solo facturas';
$lang['payment_mode_expenses_only']                = 'Solo gastos';
$lang['task_no_checklist_items_found']             = 'No se encontraron elementos de lista de verificación para esta tarea';
$lang['task_no_description']                       = 'No hay descripción para esta tarea';
$lang['expenses_reminders']                        = 'Recordatorios';
$lang['expense_set_reminder_title']                = 'Establecer recordatorio de gasto';
$lang['calendar_expense_reminder']                 = 'Recordatorios de gastos';
$lang['recurring_task']                            = 'Tarea recurrente';
$lang['disable_email_from_being_sent']             = 'Deshabilitar el envío de este correo electrónico';
$lang['not_sent_indicator']                        = 'No enviado';
$lang['proposal_status_revised']                   = 'Revisado';
$lang['customer_currency_change_notice']           = 'Si el cliente usa otra moneda que la moneda base, asegúrese de seleccionar la moneda adecuada para este cliente. No es posible cambiar la moneda después de registrar transacciones.';
$lang['click_to_add_content']                      = 'Haz clic aquí para agregar contenido';
$lang['related_to_project']                        = 'Este %s está relacionado con %s: %s';
$lang['back_to_lead']                              = 'Volver al lead';
$lang['add_task_timer_started_warning']            = 'Detén el temporizador actual iniciado para esta tarea para poder agregar un nuevo temporizador manualmente.';
$lang['sending_email_contact_permissions_warning'] = 'No se pudieron seleccionar automáticamente los contactos del cliente. Asegúrese de que el cliente tenga contactos asociados con el permiso %s';

# Versión 1.2.6
$lang['currently_supported_currencies']                       = 'Monedas actualmente soportadas';
$lang['authorize_notice']                                     = 'Se requiere SSL si estás usando la API de pagos Authorize.Net AIM. Authorize.net solo soporta una moneda por cuenta. Asegúrate de agregar solo una moneda asociada con tu cuenta de Authorize.';
$lang['settings_paymentmethod_developer_mode']                = 'Modo de Desarrollador';
$lang['payment_cardholder_name']                              = 'Nombre del titular de la tarjeta';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'ID de inicio de sesión API';
$lang['settings_paymentmethod_mollie_api_key']                = 'Clave API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'Clave de transacción API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Clave secreta';
$lang['leads_report_converted_notice']                        = 'Solo los leads que pertenecen al estado de cliente predeterminado serán considerados como leads convertidos, si el lead pertenece al estado predeterminado del cliente y no se convierte en cliente, seguirá siendo contado como lead convertido';
$lang['payment_method']                                       = 'Método de pago';
$lang['payment_method_info']                                  = 'Algunas pasarelas de pago soportan diferentes/múltiples métodos de pago como Tarjeta de Crédito, PayPal, Banco.';

# Versión 1.2.7
$lang['dropbox_app_key']                                    = 'Clave de aplicación de Dropbox';
$lang['project_invoice_select_all_expenses']                = 'Seleccionar todos los gastos';
$lang['role_update_staff_permissions']                      = 'Actualizar permisos de todos los miembros del personal que estén usando este rol';
$lang['customer_active']                                    = 'Activo';
$lang['note_updated_successfully']                          = 'Nota actualizada exitosamente';
$lang['update_note']                                        = 'Actualizar nota';
$lang['update_comment']                                     = 'Actualizar comentario';
$lang['comment_updated_successfully']                       = 'Comentario actualizado exitosamente';
$lang['staff_send_welcome_email']                           = 'Enviar correo electrónico de bienvenida';
$lang['proposal_warning_email_change']                      = 'Correo electrónico cambiado para %s. Este %s está vinculado a propuestas. ¿Deseas actualizar todos los correos electrónicos de las propuestas vinculadas a %s?';
$lang['update_proposal_email_yes']                          = 'Sí, actualizar todos los correos electrónicos vinculados.';
$lang['update_proposal_email_no']                           = 'No, lo actualizaré manualmente.';
$lang['proposals_emails_updated']                           = 'Todos los correos electrónicos de las propuestas vinculadas a este %s actualizados a %s';
$lang['custom_field_company']                               = 'Compañía';
$lang['actions']                                            = 'Acciones';
$lang['project_mark_as']                                    = 'Marcar como %s';
$lang['todo_edit_title']                                    = 'Editar tarea pendiente';
$lang['additional_action_required']                         = '¡Se requiere acción adicional!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
$lang['project_marked_as_success']                          = 'Proyecto marcado como %s exitosamente';
$lang['project_marked_as_failed']                           = 'Error al marcar el proyecto como %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Asignar automáticamente como administrador al cliente después de convertir el lead';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si esta opción se establece en SÍ, el miembro del personal que convierta un lead en cliente será asignado automáticamente como administrador del cliente. NOTA: Esta opción solo se aplicará a los miembros del personal que no tengan permiso para VER clientes';
$lang['auto_close_tickets_disable']                         = 'Establecer 0 para deshabilitar';
$lang['task_checklist_item_completed_by']                   = 'Completado por %s';
$lang['staff_email_signature_help']                         = 'Si está vacío, se usará la firma de correo electrónico predeterminada de la configuración';
$lang['default_task_priority']                              = 'Prioridad predeterminada';
$lang['project_send_created_email']                         = 'Enviar correo electrónico de proyecto creado';


# Versión 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Mostrar pagos de factura (transacciones) en PDF';
$lang['bulk_actions']                                = 'Acciones masivas';
$lang['additional_filters']                          = 'Filtros adicionales';
$lang['expenses_available_to_bill']                  = 'Gastos disponibles para facturar';
$lang['bulk_action_customers_groups_warning']        = 'Si no seleccionas ningún grupo, todos los grupos asignados a los clientes seleccionados serán eliminados.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostrar en el área de clientes';
$lang['customer_attachments_show_notice']            = 'Solo los archivos cargados desde el perfil del cliente tienen la capacidad de mostrarse/ocultarse en el área de clientes.';
$lang['customer_profile_files']                      = 'Archivos';
$lang['no_files_found']                              = 'No se encontraron archivos';
$lang['custom_field_column']                         = 'Cuadrícula (columna Bootstrap eq. 12) - El máximo es 12';
$lang['task_status']                                 = 'Estado';
$lang['task_status_1']                               = 'No iniciado';
$lang['task_status_2']                               = 'Esperando retroalimentación';
$lang['task_status_3']                               = 'En prueba';
$lang['task_status_4']                               = 'En progreso';
$lang['task_status_5']                               = 'Completado';
$lang['task_mark_as']                                = 'Marcar como %s';
$lang['task_marked_as_success']                      = 'Tarea marcada como %s exitosamente';
$lang['search_tasks']                                = 'Buscar tareas';
$lang['tasks_kanban_limit']                          = 'Limitar filas de tareas kanban por estado';
$lang['show_on_invoice_on_pdf']                      = 'Mostrar %s en PDF de factura';
$lang['show_pay_link_to_invoice_pdf']                = 'Mostrar enlace para pagar la factura en PDF (No se aplica si el estado de la factura está Cancelado)';
$lang['no_leads_found']                              = 'No se encontraron leads';
$lang['created_today']                               = 'Creado hoy';
$lang['total_tasks_deleted']                         = 'Total de tareas eliminadas: %s';
$lang['total_tickets_delete']                        = 'Total de tickets eliminados: %s';
$lang['format_letter_portrait']                      = 'Carta vertical';
$lang['format_letter_landscape']                     = 'Carta horizontal';
$lang['period_datepicker']                           = 'Período';
$lang['total_by_hourly_rate']                        = 'Total por tarifa por hora';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
$lang['remove_tax_name_from_item_table_help'] = 'Por ejemplo, el Impuesto del artículo 15&#37; se mostrará como 15&#37; sin el nombre del impuesto (No se aplica si hay varios impuestos con el mismo nombre y porcentaje para el artículo)';
$lang['back_to_project']                      = 'Volver al proyecto';
$lang['view_kanban']                          = 'Ver Kanban';
$lang['invoice_is_overdue']                   = 'Esta factura está vencida desde hace %s días';

# Versión 1.2.9
$lang['time_decimal']                            = 'Tiempo (decimal)';
$lang['time_h']                                  = 'Tiempo (h)';
$lang['proposal_number_prefix']                  = 'Prefijo del número de propuesta';
$lang['settings_number_padding_prefix']          = 'Número de relleno de ceros para el formato de prefijo <br /> <small>Ej. Si este valor es 3, el número será formateado: 005 o 025</small>';
$lang['this_week_payments']                      = 'Pagos esta semana';
$lang['last_week_payments']                      = 'Pagos la semana pasada';
$lang['not_published_new_post']                  = 'publicó una nueva publicación';
$lang['expense_name']                            = 'Nombre';
$lang['expense_name_help']                       = 'Para uso personal';
$lang['adjustments']                             = 'Ajustes';
$lang['payments_received']                       = 'Pagos recibidos';
$lang['not_lead_activity_created_proposal']      = 'Se creó una nueva propuesta - %s';
$lang['lead_title']                              = 'Título';
$lang['lead_address']                            = 'Dirección';
$lang['lead_city']                               = 'Ciudad';
$lang['lead_state']                              = 'Provincia';
$lang['lead_country']                            = 'País';
$lang['lead_zip']                                = 'Código Postal';
$lang['lead_is_public_yes']                      = 'Sí';
$lang['lead_is_public_no']                       = 'No';
$lang['lead_info']                               = 'Información del lead';
$lang['lead_general_info']                       = 'Información general';
$lang['lead_latest_activity']                    = 'Última actividad';
$lang['item_description_new_lines_notice']       = 'Las nuevas líneas no son compatibles para la descripción del artículo. Usa la descripción larga del artículo en su lugar.';
$lang['estimates_report']                        = 'Informe de presupuestos';
$lang['confirm']                                 = 'Confirmar';
$lang['delete_staff']                            = 'Eliminar miembro del personal';
$lang['delete_staff_info']                       = 'Algunos datos de este miembro del personal deben ser transferidos a otro usuario. Por favor, selecciona el usuario al que deseas transferir los datos.';
$lang['estimate_items']                          = 'Artículos de presupuesto';
$lang['no_proposals_found']                      = 'No se encontraron propuestas';
$lang['no_estimates_found']                      = 'No se encontraron presupuestos';
$lang['pipeline_limit_status']                   = 'Límite del pipeline por estado';
$lang['settings_update']                         = 'Actualización del sistema';
$lang['purchase_key']                            = 'Clave de compra';
$lang['update_now']                              = 'Actualizar ahora';
$lang['update_available']                        = 'Hay una actualización disponible';
$lang['latest_version']                          = 'Última versión';
$lang['your_version']                            = 'Tu versión';
$lang['using_latest_version']                    = 'Estás usando la última versión';
$lang['mark_as_active']                          = 'Marcar como activo';
$lang['customer_inactive_message']               = 'Este perfil de cliente está inactivo y algunas funciones pueden estar deshabilitadas';
$lang['active_customers']                        = 'Clientes activos';
$lang['inactive_active_customers']               = 'Clientes inactivos';
$lang['include_proposal_items_merge_field_help'] = 'Incluir los elementos de la propuesta con el campo de combinación en cualquier lugar del contenido de la propuesta como %s';
$lang['all_data_synced_successfully']            = 'Todos los datos sincronizados con éxito';
$lang['sync_now']                                = 'Sincronizar ahora';
$lang['sync_data']                               = 'Sincronizar datos';
$lang['sync_proposals_up_to_date']               = 'Todas las propuestas están actualizadas, no hay nada que sincronizar';
$lang['proposal_sync_1_info']                    = 'Todos los datos de la propuesta se almacenan por separado para cada propuesta después de su creación. Actualizar la información de %s no afectará a las propuestas creadas previamente para este %s.';
$lang['proposal_sync_2_info']                    = 'Si recientemente actualizaste tu información de %s, puedes sincronizar todos los nuevos datos a las propuestas asociadas. Aquí está una lista de campos que puedes sincronizar.';

# Versión 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Incluir detalles adicionales en la descripción larga del artículo tomada de este gasto.';

# Versión 1.4.0
$lang['calendar_events_limit']                              = 'Límite de eventos en el calendario (Vista de Mes y Semana)';
$lang['show_page_number_on_pdf']                            = 'Mostrar número de página en el PDF';
$lang['customer_active_inactive_help']                      = 'No se mostrará en los menús desplegables al crear nuevos registros';
$lang['item_groups']                                        = 'Grupos';
$lang['item_group']                                         = 'Grupo de artículos';
$lang['item_group_name']                                    = 'Nombre del grupo';
$lang['new_item_group']                                     = 'Nuevo grupo';
$lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar el elemento de menú de configuración solo al pasar el ratón por el área de la barra lateral principal';
$lang['internal_article']                                   = 'Artículo interno';
$lang['expenses_created_from_this_recurring_expense']       = 'Gastos creados desde este gasto recurrente';
$lang['convert_to_task']                                    = 'Convertir en tarea';
$lang['next_invoice_date']                                  = 'Fecha de la próxima factura: %s';
$lang['next_expense_date']                                  = 'Fecha del próximo gasto: %s';
$lang['invoice_recurring_from']                             = 'Esta factura se creó a partir de la factura recurrente con número: %s';
$lang['expense_recurring_from']                             = 'Este gasto se creó a partir del siguiente gasto recurrente: %s';
$lang['child_invoices']                                     = 'Facturas hijas';
$lang['child_expenses']                                     = 'Gastos hijos';
$lang['no_announcements']                                   = 'No hay anuncios';
$lang['unit']                                               = 'Unidad';
$lang['permission_view_own']                                = 'Ver (Propio)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Basado en los administradores de clientes';
$lang['permission_payments_based_on_invoices']              = 'Basado en los permisos de VER (Propio) de las facturas';
$lang['permission_projects_based_on_assignee']              = 'Si el miembro del personal no tiene permiso VER (Global), solo se mostrarán los proyectos donde el miembro del personal esté asignado como miembro del proyecto.';
$lang['permission_tasks_based_on_assignee']                 = 'Si el miembro del personal no tiene permiso VER (Global), solo se mostrarán las tareas donde el miembro del personal sea seguidor, asignado, o la tarea sea pública, o si en Configuración->Ajustes->Tareas->Permitir que todo el personal vea todas las tareas relacionadas con proyectos está habilitado cuando la tarea está vinculada a un proyecto.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Seleccionado por defecto en la factura';
$lang['paymentmethod_braintree_merchant_id']                = 'ID de comerciante';
$lang['paymentmethod_braintree_private_key']                = 'Clave privada';
$lang['paymentmethod_braintree_public_key']                 = 'Clave pública';
$lang['company_requires_vat_number_field']                  = 'La empresa requiere el uso del campo de DNI/NIF/CIF';
$lang['no_company_view_profile']                            = 'Persona - Ver perfil';
$lang['company_is_required']                                = '¿Es obligatorio el campo de la empresa?';
$lang['estimate_invoiced']                                  = 'Facturado';
$lang['file_date_uploaded']                                 = 'Fecha de carga';
$lang['allow_contact_to_delete_files']                      = 'Permitir que los contactos eliminen sus propios archivos cargados desde el área de clientes';
$lang['file']                                               = 'Archivo';
$lang['customer_contact_person_only_one_allowed']           = 'Solo se permite 1 contacto cuando el campo de empresa no está lleno. El sistema considerará a este cliente como persona';
$lang['web_to_lead']                                        = 'Web a cliente potencial';
$lang['web_to_lead_form']                                   = 'Formulario Web a cliente potencial';
$lang['new_form']                                           = 'Nuevo formulario';
$lang['form_name']                                          = 'Nombre del formulario';
$lang['cf_option_in_use']                                   = 'Una opción que has eliminado está en uso y no puede ser eliminada. La opción se añadirá automáticamente a las opciones existentes.';
$lang['form_builder']                                       = 'Constructor de formularios';
$lang['form_information']                                   = 'Información y configuración del formulario';
$lang['form_builder_create_form_first']                     = 'Crea primero un formulario para poder usar el constructor de formularios.';
$lang['notify_assigned_user']                               = 'Persona responsable';
$lang['form_recaptcha']                                     = 'Usar Google Recaptcha';
$lang['form_lang_validation']                               = 'Idioma';
$lang['form_lang_validation_help']                          = 'Para los mensajes de validación';
$lang['form_btn_submit_text']                               = 'Texto del botón de envío';
$lang['form_success_submit_msg']                            = 'Mensaje a mostrar después de enviar el formulario exitosamente';
$lang['total_submissions']                                  = 'Total de envíos';
$lang['form_integration_code']                              = 'Código de integración';
$lang['not_lead_imported_from_form']                        = 'Nuevo cliente potencial importado desde el formulario Web a cliente potencial - %s';
$lang['not_lead_activity_log_attachment']                   = 'Archivo adjunto importado desde el formulario - %s';
$lang['form_integration_code_help']                         = 'Copia y pega el código en cualquier lugar de tu sitio para mostrar el formulario. Además, puedes ajustar el ancho y la altura en px para adaptarlo a tu sitio web.';
$lang['invoice_not_found']                                  = 'Factura no encontrada';
$lang['estimate_not_found']                                 = 'Presupuesto no encontrado';
$lang['expense_not_found']                                  = 'Gasto no encontrado';
$lang['proposal_not_found']                                 = 'Propuesta no encontrada';
$lang['new_task_assigned_non_user']                         = 'Nueva tarea asignada a ti - %s';
$lang['no_child_found']                                     = 'No se encontraron hijos de %s';
$lang['company_vat_number']                                 = 'DNI/NIF/CIF';
$lang['not_lead_assigned_from_form']                        = 'Nuevo cliente potencial asignado a ti';
$lang['not_lead_activity_assigned_from_form']               = 'Cliente potencial asignado a %s';
$lang['form_allow_duplicate']                               = '¿Permitir duplicados de %s en la base de datos?';
$lang['track_duplicate_by_field']                           = 'Prevenir duplicados en el campo';
$lang['and_track_duplicate_by_field']                       = '+ campo (deja en blanco para rastrear duplicados solo por un campo)';
$lang['create_the_duplicate_form_data_as_task']             = 'Crear datos duplicados del formulario como tarea y asignar al miembro responsable';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Usado para una revisión adicional de la presentación y tomar las acciones necesarias';
$lang['currently_selected']                                 = 'Actualmente seleccionado';
$lang['search_ajax_empty']                                  = 'Selecciona y comienza a escribir';
$lang['search_ajax_placeholder']                            = 'Escribe para buscar...';
$lang['search_ajax_searching']                              = 'Buscando...';
$lang['search_ajax_initialized']                            = 'Comienza a escribir para buscar';
$lang['lead_description']                                   = 'Descripción';
$lang['lead_website']                                       = 'Sitio web';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Factura creada automáticamente desde el presupuesto con número %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hora del día para realizar operaciones automáticas';
$lang['hour_of_day_perform_auto_operations_format']         = 'Formato de 24 horas, ej. 9 para las 9 am o 15 para las 3 pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Usado para facturas recurrentes, avisos de vencimiento, etc.';
$lang['use_minified_files']                                 = 'Usar versión minificada de archivos css y js (solo archivos del sistema)';

# Versión 1.5.0
$lang['logo_favicon_changed_notice']       = 'Se detectó un cambio en el logo o favicon. Si aún ves el logo original del CRM, intenta borrar la caché de tu navegador';
$lang['kb_search_articles']                = 'Buscar artículos en la base de conocimientos';
$lang['kb_search']                         = 'Buscar';
$lang['have_a_question']                   = '¿Tienes una pregunta?';
$lang['card_expiration_year']              = 'Año de vencimiento';
$lang['card_expiration_month']             = 'Mes de vencimiento';
$lang['client_website']                    = 'Sitio web';
$lang['search_project_members']            = 'Buscar miembros del proyecto...';
$lang['cf_translate_input_link_title']     = 'Título';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Haz clic aquí para agregar un enlace';
$lang['task_edit_delete_timesheet_notice'] = 'La tarea de la hoja de tiempo es %s, no puedes %s la hoja de tiempo.';
$lang['department_username']               = 'Nombre de usuario IMAP';
$lang['department_username_help']          = 'Rellena este campo solo si tu servidor IMAP utiliza un nombre de usuario para iniciar sesión en lugar de una dirección de correo electrónico. Ten en cuenta que aún necesitarás agregar la dirección de correo electrónico.';
$lang['total_tickets_deleted']             = 'Total de tickets eliminados: %s';

# Versión 1.5.1
$lang['ticket_linked_to_project']                                = 'Este ticket está vinculado al proyecto: %s';
$lang['only_own_files_contacts']                                 = 'Los contactos solo verán sus propios archivos cargados en el área de clientes (archivos cargados en el perfil del cliente)';
$lang['only_own_files_contacts_help']                            = 'Si compartes el archivo manualmente desde el perfil del cliente con otros contactos, podrán ver el archivo.';
$lang['share_file_with']                                         = 'Compartir archivo con';
$lang['file_share_visibility_notice']                            = 'Este archivo no está compartido con contactos, cambia la visibilidad nuevamente para recargarla';
$lang['share_file_with_show']                                    = 'Este archivo está compartido con: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permitir que el contacto principal vea/edite los detalles de facturación y envío';
$lang['estimate_due_after']                                      = 'Presupuesto vencido después de (días)';

# Versión 1.6.0
$lang['my_timesheets']                                   = 'Mis hojas de tiempo';
$lang['today']                                           = 'Hoy';
$lang['open_in_dropbox']                                 = 'Abrir en Dropbox';
$lang['show_primary_contact']                            = 'Mostrar nombre completo del contacto principal en %s';
$lang['view_members_timesheets']                         = 'Ver todas las hojas de tiempo';
$lang['priority']                                        = 'Prioridad';
$lang['fetch_from_google']                               = 'Obtener desde Google';
$lang['customer_fetch_lat_lng_usage']                    = 'Rellena la dirección, ciudad y país antes de obtener para obtener el mejor resultado.';
$lang['g_search_address_not_found']                      = 'No se pudo encontrar la dirección, por favor inténtalo de nuevo';
$lang['proposals_report']                                = 'Informe de propuestas';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si el miembro del personal no tiene permiso para VER clientes, solo podrá crear nuevos tickets desde el área de administración a contactos de clientes donde esté asignado como administrador de cliente.';
$lang['staff_members_open_tickets_to_all_contacts']      = '¿Permitir que los miembros del personal abran tickets a todos los contactos?';
$lang['charts_based_report']                             = 'Informe basado en gráficos';
$lang['responsible_admin']                               = 'Administrador responsable';
$lang['tags']                                            = 'Etiquetas';
$lang['tag']                                             = 'Etiqueta';
$lang['customer_map_notice']                             = 'Agrega longitud y latitud para mostrar el mapa aquí.';
$lang['default_view']                                    = 'Vista predeterminada';
$lang['day']                                             = 'Día';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Etiquetas de hoja de tiempo';
$lang['show_more']                                       = 'Mostrar más';
$lang['show_less']                                       = 'Mostrar menos';
$lang['project_completed_date']                          = 'Fecha de finalización del proyecto';
$lang['language']                                        = 'Idioma';
$lang['this_week']                                       = 'Esta semana';
$lang['last_week']                                       = 'La semana pasada';
$lang['this_month']                                      = 'Este mes';
$lang['last_month']                                      = 'El mes pasado';
$lang['no_description_project']                          = 'No hay descripción para este proyecto';
$lang['sales_string']                                    = 'Ventas';
$lang['no_project_members']                              = 'No hay miembros para este proyecto';
$lang['search_by_tags']                                  = 'Usa # + nombre de etiqueta para buscar por etiquetas';
$lang['project_status_5']                                = 'Cancelado';

# Versión 1.7.0
$lang['not_activity_new_reminder_created']        = 'estableció un nuevo recordatorio para %s con fecha %s';
$lang['not_activity_new_task_created']            = 'Creó una nueva tarea - %s';
$lang['recurring_invoice_draft_notice']           = 'Esta factura está en estado borrador, debes marcar esta factura como enviada. Las facturas recurrentes con estado borrador no serán recreadas por el cron job.';
$lang['recurring_recreate_hour_notice']           = '%s será recreado a la hora específica del día según la configuración ubicada en Configuración->Ajustes->Trabajo cron';
$lang['invoice_project_include_timesheets_notes'] = 'Incluir cada nota de la hoja de tiempo en la descripción del artículo';
$lang['events']                                   = 'Eventos';
$lang['clear']                                    = 'Borrar';
$lang['auto_mark_as_public']                      = 'Marcar automáticamente como público';
$lang['time_format']                              = 'Formato de hora';
$lang['time_format_24']                           = '24 horas';
$lang['time_format_12']                           = '12 horas';
$lang['delete_activity_log_older_then']           = 'Eliminar el registro de actividad del sistema de más de X meses';
$lang['mark_as_read']                             = 'Marcar como leído';
$lang['mark_all_as_read']                         = 'Marcar todo como leído';
$lang['tax_1']                                    = 'Impuesto 1';
$lang['tax_2']                                    = 'Impuesto 2';
$lang['total_with_tax']                           = 'Total con impuestos';
$lang['new_task_auto_assign_current_member']      = 'Asignar automáticamente la tarea al creador cuando se cree una nueva tarea';
$lang['new_task_auto_assign_current_member_help'] = 'No se aplica si la tarea está vinculada a un proyecto y el creador no es miembro del proyecto';
$lang['copy_project_tasks_status']                = 'Estado de las tareas';
$lang['tasks_summary']                            = 'Resumen de tareas';
$lang['vault']                                    = 'Bóveda';
$lang['new_vault_entry']                          = 'Nueva entrada en la bóveda';
$lang['server_address']                           = 'Dirección del servidor';
$lang['port']                                     = 'Puerto';
$lang['vault_username']                           = 'Nombre de usuario';
$lang['vault_password']                           = 'Contraseña';
$lang['vault_description']                        = 'Descripción corta';
$lang['vault_entry']                              = 'Entrada en la bóveda';
$lang['no_port_provided']                         = 'No proporcionado';
$lang['view_password']                            = 'Ver contraseña';
$lang['security_reasons_re_enter_password']       = 'Por razones de seguridad, ingresa tu contraseña nuevamente';
$lang['password_change_fill_notice']              = 'Rellena el campo de contraseña solo si deseas cambiarla';
$lang['vault_password_user_not_correct']          = 'Tu contraseña no es correcta, por favor intenta de nuevo';
$lang['no_vault_entries']                         = 'No se encontraron entradas en la bóveda para este cliente.';
$lang['vault_entry_created_from']                 = 'Esta entrada en la bóveda fue creada por %s';
$lang['vault_entry_last_update']                  = 'Última actualización por %s';
$lang['vault_entry_visible_to_all']               = 'Visible para todos los miembros del personal que tengan acceso a este cliente';
$lang['vault_entry_visible_creator']              = 'Visible solo para mí (los administradores no están excluidos)';
$lang['vault_entry_visible_administrators']       = 'Visible solo para administradores';
$lang['my_reminders']                             = 'Mis recordatorios';
$lang['reminder_related']                         = 'Relacionado con';
$lang['event_notification']                       = 'Notificación';
$lang['days']                                     = 'Días';
$lang['reminder_notification_placeholder']        = 'Ej. 30 minutos antes';
$lang['event_color']                              = 'Color del evento';
$lang['group_by_task']                            = 'Agrupar por tarea';
$lang['save']                                     = 'Guardar';
$lang['disable_languages']                        = 'Deshabilitar idiomas';

# Versión 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Una factura con el número %s ha sido vista';
$lang['not_customer_viewed_estimate']                        = 'Un presupuesto con el número %s ha sido vista';
$lang['not_customer_viewed_proposal']                        = 'Una propuesta con el número %s ha sido vista';
$lang['display_inline']                                      = 'Mostrar en línea';
$lang['email_header']                                        = 'Encabezado predefinido';
$lang['email_footer']                                        = 'Pie de página predefinido';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excluir propuestas con estado de borrador del área de clientes';
$lang['pusher_app_key']                                      = 'Clave de la aplicación';
$lang['pusher_app_secret']                                   = 'Secreto de la aplicación';
$lang['pusher_app_id']                                       = 'ID de la aplicación';
$lang['pusher_cluster_notice']                               = 'Deja en blanco para usar el clúster predeterminado de pusher.';
$lang['pusher_enable_realtime_notifications']                = 'Habilitar notificaciones en tiempo real';
$lang['task_is_overdue']                                     = 'Esta tarea está vencida';
$lang['this_year']                                           = 'Este año';
$lang['last_year']                                           = 'El año pasado';
$lang['customer_statement']                                  = 'Estado de cuenta';
$lang['customer_statement_for']                              = 'Estado de cuenta del cliente para %s';
$lang['account_summary']                                     = 'Resumen de la cuenta';
$lang['statement_beginning_balance']                         = 'Saldo inicial';
$lang['invoiced_amount']                                     = 'Monto facturado';
$lang['amount_paid']                                         = 'Monto pagado';
$lang['statement_from_to']                                   = '%s a %s';
$lang['customer_statement_info']                             = 'Mostrando todas las facturas y pagos entre %s y %s';
$lang['balance_due']                                         = 'Saldo pendiente';
$lang['statement_heading_date']                              = 'Fecha';
$lang['statement_heading_details']                           = 'Detalles';
$lang['statement_heading_amount']                            = 'Monto';
$lang['statement_heading_payments']                          = 'Pagos';
$lang['statement_heading_balance']                           = 'Saldo';
$lang['statement_invoice_details']                           = 'Factura %s - vencida el %s';
$lang['statement_payment_details']                           = 'Pago (%s) a la factura %s';
$lang['statement_bill_to']                                   = 'Facturado a';
$lang['send_to_email']                                       = 'Enviar por correo electrónico';
$lang['statement_sent_to_client_success']                    = 'El estado de cuenta se envió con éxito al cliente';
$lang['statement_sent_to_client_fail']                       = 'Hubo un problema al enviar el estado de cuenta';
$lang['view_account_statement']                              = 'Ver estado de cuenta';
$lang['text_not_recommended_for_servers_limited_resources']  = 'No recomendado si el servidor tiene recursos limitados, como en alojamiento compartido';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la tarea está vinculada a un proyecto y el miembro del personal al que le asignas la tarea no es miembro del proyecto, este miembro será agregado automáticamente como miembro.';
$lang['company_information']                                 = 'Información de la empresa';
$lang['ticket_form']                                         = 'Formulario de ticket';
$lang['ticket_form_subject']                                 = 'Asunto';
$lang['ticket_form_name']                                    = 'Tu nombre';
$lang['ticket_form_email']                                   = 'Dirección de correo electrónico';
$lang['ticket_form_department']                              = 'Departamento';
$lang['ticket_form_message']                                 = 'Mensaje';
$lang['ticket_form_priority']                                = 'Prioridad';
$lang['ticket_form_service']                                 = 'Servicio';
$lang['ticket_form_submit']                                  = 'Enviar';
$lang['ticket_form_attachments']                             = 'Archivos adjuntos';
$lang['success_submit_msg']                                  = 'Gracias por contactarnos. Nos pondremos en contacto contigo pronto.';
$lang['vault_entry_share_on_projects']                       = 'Compartir esta entrada de bóveda en proyectos con miembros del proyecto';
$lang['project_shared_vault_entry_login_details']            = 'Ver detalles de inicio de sesión del sitio del cliente';
$lang['iso_code']                                            = 'Código ISO';
$lang['estimates_not_invoiced']                              = 'No facturado';
$lang['show_on_ticket_form']                                 = 'Mostrar en el formulario de ticket';
$lang['cancel_upload']                                       = 'Cancelar carga';
$lang['show_table_export_button']                            = 'Mostrar botón de exportación de tabla';
$lang['show_table_export_all']                               = 'A todos los miembros del personal';
$lang['show_table_export_admins']                            = 'Solo a los administradores';
$lang['show_table_export_hide']                              = 'Ocultar el botón de exportación para todos los miembros del personal';
$lang['task_created_by']                                     = 'Creado por %s';
$lang['validation_extension_not_allowed']                    = 'Extensión de archivo no permitida';
$lang['allow_staff_view_proposals_assigned']                 = 'Permitir que los miembros del personal vean las propuestas a las que están asignados';
$lang['task_users_working_on_tasks_multiple']                = 'Actualmente %s están trabajando en esta tarea';
$lang['task_users_working_on_tasks_single']                  = 'Actualmente %s está trabajando en esta tarea';

# Versión 1.9.0
$lang['estimated_hours']                               = 'Horas estimadas';
$lang['two_factor_auth_failed_to_send_code']           = 'No se pudo enviar el código de autenticación de dos pasos por correo electrónico, es posible que la configuración de SMTP no esté correctamente configurada';
$lang['two_factor_auth_code_sent_successfully']        = 'Se ha enviado un correo electrónico a %s con el código de verificación para verificar tu inicio de sesión';
$lang['enable_two_factor_authentication']              = 'Habilitar autenticación de dos factores por correo electrónico';
$lang['two_factor_authentication_info']                = 'La autenticación de dos factores se proporciona por correo electrónico. Antes de habilitarla, asegúrate de que la configuración SMTP esté configurada correctamente y que el sistema pueda enviar un correo electrónico. Se enviará una clave de autenticación única por correo electrónico al iniciar sesión.';
$lang['timesheets_overview_all_members_notice_admins'] = 'La vista general de hojas de tiempo para todos los miembros del personal está disponible solo para administradores.';
$lang['two_factor_authentication']                     = 'Autenticación de dos factores';
$lang['two_factor_authentication_code']                = 'Código';
$lang['admin_two_factor_auth_heading']                 = 'Código de autenticación';
$lang['two_factor_code_not_valid']                     = 'El código de autenticación no es válido';
$lang['back_to_login']                                 = 'Volver al inicio de sesión';
$lang['enter_activity']                                = 'Ingresar actividad';
$lang['attach_files']                                  = 'Adjuntar archivos';
$lang['no_tags_used']                                  = 'No se han utilizado etiquetas por el sistema';
$lang['exclude_completed_tasks']                       = 'Excluir tareas completadas';
$lang['modal_width_class']                             = 'Clase de ancho modal';
$lang['contract_copy']                                 = 'Copiar';
$lang['contract_copied_successfully']                  = 'Contrato copiado con éxito';
$lang['contract_copied_fail']                          = 'No se pudo copiar el contrato';
$lang['project_marked_as_finished_to_contacts']        = 'Enviar correo electrónico de <b>Proyecto marcado como finalizado</b> a los contactos del cliente';
$lang['only_admins']                                   = 'Solo administradores';
$lang['new_notification']                              = '¡Nueva notificación!';
$lang['enable_desktop_notifications']                  = 'Habilitar notificaciones de escritorio';
$lang['save_and_send']                                 = 'Guardar y enviar';
$lang['private']                                       = 'Privado';
$lang['task_created_at']                               = 'Creado en %s';
$lang['hide_notified_reminders_from_calendar']         = 'Ocultar recordatorios notificados del calendario';
$lang['last_active']                                   = 'Última actividad';
$lang['open_ticket']                                   = 'Abrir ticket';
$lang['task_add_description']                          = 'Agregar descripción';
$lang['project_setting_create_tasks']                  = 'Crear tareas';
$lang['project_setting_edit_tasks']                    = 'Editar tareas (solo tareas creadas desde el contacto)';

# Versión 1.9.2
$lang['items_report']                            = 'Informe de artículos';
$lang['reports_item']                            = 'Artículo';
$lang['quantity_sold']                           = 'Cantidad vendida';
$lang['total_amount']                            = 'Monto total';
$lang['avg_price']                               = 'Precio promedio';
$lang['item_report_paid_invoices_notice']        = 'El informe de artículos se genera solo a partir de facturas pagadas antes de descuentos e impuestos.';
$lang['overview']                                = 'Resumen';
$lang['timer_started_change_status_in_progress'] = 'Cambiar el estado de la tarea a En progreso cuando se inicia el temporizador (solo si el estado de la tarea es No iniciado)';
$lang['company_info_format']                     = 'Formato de información de la empresa (PDF y HTML)';
$lang['customer_info_format']                    = 'Formato de información del cliente (PDF y HTML)';
$lang['custom_field_info_format_embed_info']     = 'Los campos personalizados para %s se pueden incrustar fácilmente en documentos PDF y HTML agregando los campos de combinación en el formato de página en la siguiente página: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transferir notas de prospecto al perfil del cliente';
$lang['authorized_signature_text']               = 'Firma autorizada';
$lang['show_pdf_signature_invoice']              = 'Mostrar firma en PDF en la factura';
$lang['show_pdf_signature_estimate']             = 'Mostrar firma en PDF en el presupuesto';
$lang['signature']                               = 'Firma';
$lang['signature_image']                         = 'Imagen de firma';
$lang['insert_checklist_templates']              = 'Insertar plantillas de lista de verificación';
$lang['save_as_template']                        = 'Guardar como plantilla';
$lang['invoice_item_add_edit_rate_currency']     = 'Tasa - %s';
$lang['total_files_deleted']                     = 'Archivos eliminados: %s';
$lang['invalid_transaction']                     = 'Transacción inválida. Intenta de nuevo.';
$lang['payment_gateway_payu_money_key']          = 'Clave de PayU Money';
$lang['payment_gateway_payu_money_salt']         = 'Salmón de PayU Money';
$lang['settings_paymentmethod_description']      = 'Descripción del método de pago en el panel de control';

# Versión 1.9.3
$lang['default_ticket_reply_status']          = 'Estado predeterminado cuando se responde a un ticket';
$lang['ticket_add_response_and_back_to_list'] = 'Volver a la lista de tickets después de enviar la respuesta';

# Versión 1.9.4
$lang['default_task_status']                               = 'Estado predeterminado cuando se crea una nueva tarea';
$lang['custom_field_pdf_html_help']                        = 'Asegúrate de marcar el campo ' . $lang['custom_field_show_on_client_portal'] . ' si deseas que los campos personalizados sean visibles en el área de clientes y cuando el cliente descargue el PDF o reciba el PDF por correo electrónico.';
$lang['auto']                                              = 'Automático';
$lang['email_queue']                                       = 'Cola de correos electrónicos';
$lang['email_queue_enabled']                               = 'Habilitar cola de correos electrónicos';
$lang['email_queue_skip_attachments']                      = '¿No agregar correos electrónicos con archivos adjuntos en la cola?';
$lang['disable']                                           = 'Deshabilitar';
$lang['enable']                                            = 'Habilitar';
$lang['auto_dismiss_desktop_notifications_after']          = 'Descartar automáticamente las notificaciones de escritorio después de X segundos (0 para desactivar)';
$lang['proposal_info_format']                              = 'Formato de información de la propuesta (PDF y HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Ocultar tareas de proyecto en la tabla principal de tareas (área de administración)';
$lang['ticket_replies_order']                              = 'Orden de las respuestas del ticket';
$lang['ticket_replies_order_notice']                       = 'El mensaje inicial del ticket siempre se mostrará primero.';
$lang['invoice_cancelled_email_disabled']                  = 'La factura está cancelada. Desmarca como cancelada para habilitar el correo electrónico al cliente';
$lang['email_notifications']                               = 'Notificaciones por correo electrónico';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Pago registrado, correo enviado a: %s';
$lang['exclude_inactive']                                  = 'Excluir inactivos';
$lang['disable_all']                                       = 'Desactivar todo';
$lang['enable_all']                                        = 'Activar todo';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generar y enviar automáticamente la factura renovada al cliente';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generar una factura no pagada';
$lang['reccuring_invoice_option_gen_draft']                = 'Generar una factura en borrador';
$lang['event_created_by']                                  = 'Este evento fue creado por %s';

# Versión 1.9.5
$lang['customers_assigned_to_me']              = 'Clientes asignados a mí';
$lang['bcc_all_emails']                        = 'CCO a todos los correos electrónicos a';
$lang['confirmation_of_identity']              = 'Confirmación de identidad';
$lang['accept_identity_confirmation']          = 'Requerir confirmación de identidad al aceptar';
$lang['accepted_identity_info']                = 'Este %s fue aceptado por %s el %s desde la dirección IP %s';
$lang['clear_this_information']                = 'Borrar esta información';
$lang['new_task_auto_follower_current_member'] = 'Agregar automáticamente al creador de tareas como seguidor cuando se crea una nueva tarea';
$lang['expenses_report_net']                   = 'Monto neto (subtotal)';
$lang['expense_field_billable_help']           = 'Si es facturable, %s se puede agregar a la descripción larga de la factura.';
$lang['task_biillable_checked_on_creation']    = 'La opción de ser facturable está seleccionada por defecto cuando se crea una nueva tarea (solo desde el área de administración)';
$lang['pause_overdue_reminders']               = 'Pausar recordatorios vencidos';
$lang['resume_overdue_reminders']              = 'Reanudar recordatorios vencidos';
# Notas de Crédito
$lang['credit_notes']                                            = 'Notas de Crédito';
$lang['credit_note']                                             = 'Nota de Crédito';
$lang['credit_note_lowercase']                                   = 'nota de crédito';
$lang['credit_note_not_found']                                   = 'Nota de crédito no encontrada';
$lang['credit_note_date']                                        = 'Fecha de la Nota de Crédito';
$lang['credit_date']                                             = 'Fecha';
$lang['settings_sales_next_credit_note_number']                  = 'Número de la siguiente Nota de Crédito';
$lang['credit_note_number_prefix']                               = 'Prefijo del Número de Nota de Crédito';
$lang['credit_note_number']                                      = 'Nota de Crédito #';
$lang['credit_note_number_exists']                               = 'El número de la nota de crédito ya existe';
$lang['show_shipping_on_credit_note']                            = 'Mostrar detalles de envío en la nota de crédito';
$lang['credit_note_number_decrement_on_delete']                  = 'Decrementar el número de la nota de crédito al eliminar';
$lang['credit_note_number_decrement_on_delete_help']             = 'El número solo se decrementará si es la última nota de crédito creada.';
$lang['credit_note_status']                                      = 'Estado';
$lang['credit_note_status_open']                                 = 'Abierta';
$lang['credit_note_status_closed']                               = 'Cerrada';
$lang['credit_note_status_void']                                 = 'Anulada';
$lang['credit_note_mark_as_open']                                = 'Marcar como abierta';
$lang['new_credit_note']                                         = 'Nueva Nota de Crédito';
$lang['credit_note_amount']                                      = 'Monto';
$lang['credit_note_remaining_credits']                           = 'Monto restante';
$lang['credit_note_client_note']                                 = 'Nota';
$lang['invoices_credited']                                       = 'Facturas acreditadas';
$lang['apply_credits']                                           = 'Aplicar Créditos';
$lang['x_credits_available']                                     = '%s créditos disponibles.';
$lang['credit_amount']                                           = 'Monto de Crédito';
$lang['credits_available']                                       = 'Créditos Disponibles';
$lang['amount_to_credit']                                        = 'Monto a acreditar';
$lang['invoice_credits_applied']                                 = 'Créditos aplicados con éxito a la factura';
$lang['applied_credits']                                         = 'Créditos aplicados';
$lang['credit_amount_bigger_then_invoice_balance']               = 'El monto total de los créditos es mayor que el saldo de la factura';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'El monto total de los créditos es mayor que el saldo restante de los créditos';
$lang['credited_invoices_not_found']                             = 'Facturas acreditadas no encontradas';
$lang['credit_invoice_number']                                   = 'Número de factura';
$lang['credits_used']                                            = 'Créditos usados';
$lang['credits_remaining']                                       = 'Créditos restantes';
$lang['amount_credited']                                         = 'Monto acreditado';
$lang['credits_applied_cant_delete_status_closed']               = 'Esta nota de crédito está cerrada, debes eliminar primero los créditos para poder eliminar la nota de crédito.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Esta nota de crédito tiene créditos aplicados, debes eliminar primero los créditos para poder eliminar la nota de crédito.';
$lang['credit_note_pdf_heading']                                 = 'NOTA DE CRÉDITO';
$lang['show_status_on_pdf']                                      = 'Mostrar el estado de %s en los documentos PDF';
$lang['show_pdf_signature_credit_note']                          = 'Mostrar firma en PDF en la Nota de Crédito';
$lang['calendar_credit_note_reminder']                           = 'Recordatorio de Nota de Crédito';
$lang['show_credit_note_reminders_on_calendar']                  = 'Recordatorios de Nota de Crédito';
$lang['reminders']                                               = 'Recordatorios';
$lang['invoice_activity_applied_credits']                        = 'créditos aplicados de %s de %s';
$lang['create_credit_note']                                      = 'Crear Nota de Crédito';
$lang['confirm_invoice_credits_from_credit_note']                = 'Al crear la nota de crédito desde una factura no pagada, el monto de la nota de crédito se aplicará a esta factura. ¿Estás seguro de que deseas crear la nota de crédito?';
$lang['credit_invoice_date']                                     = 'Fecha de la factura';
$lang['apply_to_invoice']                                        = 'Aplicar a la factura';
$lang['apply_credits_from']                                      = 'Aplicar Créditos desde %s';
$lang['credits_successfully_applied_to_invoices']                = 'Créditos aplicados con éxito a las facturas';
$lang['credit_note_send_to_client_modal_heading']                = 'Enviar Nota de Crédito al Cliente';
$lang['credit_note_sent_to_client_success']                      = 'Nota de crédito enviada con éxito al cliente';
$lang['credit_note_sent_to_client_fail']                         = 'Hubo un problema al enviar la nota de crédito al correo electrónico';
$lang['credit_note_no_invoices_available']                       = 'No hay facturas disponibles para este cliente.';
$lang['show_total_paid_on_invoice']                              = 'Mostrar Total Pagado en la Factura';
$lang['show_credits_applied_on_invoice']                         = 'Mostrar Créditos Aplicados en la Factura';
$lang['show_amount_due_on_invoice']                              = 'Mostrar Monto Adeudado en la Factura';
$lang['customer_profile_update_credit_notes']                    = 'Actualizar la información de envío/facturación en todas las notas de crédito anteriores (las notas de crédito cerradas no se verán afectadas)';
$lang['zip_credit_notes']                                        = 'Comprimir Notas de Crédito';
$lang['statement_credit_note_details']                           = 'Detalles de la Nota de Crédito %s';
$lang['statement_credits_applied_details']                       = 'Créditos aplicados desde la Nota de Crédito %s - %s para el pago de %s';
$lang['credit_note_files']                                       = 'Archivos de la Nota de Crédito';
$lang['credit_notes_report']                                     = 'Informe de Notas de Crédito';

$lang['credit_note_set_reminder_title']     = 'Establecer Recordatorio de Nota de Crédito';
$lang['credit_note_add_edit_client_note']   = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                 = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']             = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                  = $lang['invoice_total'];
$lang['credit_note_adjustment']             = $lang['invoice_adjustment'];
$lang['credit_note_discount']               = $lang['invoice_discount'];
$lang['credit_note_subtotal']               = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']    = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']     = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']     = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading']      = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading']   = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']              = $lang['invoices_list_all'];

# Versión 1.9.7
$lang['ticket_assigned']                          = 'Asignado';
$lang['dashboard_options']                        = 'Opciones del Panel de Control';
$lang['reset_dashboard']                          = 'Restablecer Panel de control';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = 'Gráfico de %s';
$lang['quick_stats']                              = 'Estadísticas Rápidas';
$lang['user_widget']                              = 'Widget de Usuario';
$lang['widgets_visibility_help_text']             = 'Los widgets que solo se muestran si tienen suficiente información no tienen opciones para ser ocultados o mostrados.';
$lang['show_project_on_estimate']                 = 'Mostrar nombre del proyecto en el presupuesto';
$lang['show_project_on_invoice']                  = 'Mostrar nombre del proyecto en la factura';
$lang['show_project_on_credit_note']              = 'Mostrar nombre del proyecto en la nota de crédito';
$lang['visible_tabs']                             = 'Pestañas visibles';
$lang['all']                                      = 'Todas';
$lang['view_widgetable_area']                     = 'Ver área de widgets';
$lang['hide_widgetable_area']                     = 'Ocultar área de widgets';
$lang['no_items_warning']                         = 'Introduce al menos un artículo.';
$lang['item_forgotten_in_preview']                = '¿Has olvidado añadir este artículo?';
$lang['not_task_status_changed']                  = '%s - el estado de la tarea cambió a %s';
$lang['not_project_activity_task_status_changed'] = 'Estado de tarea cambiado';
$lang['reset']                                    = 'Restablecer';
$lang['save_message_as_predefined_reply']         = 'Guardar mensaje como respuesta predefinida';
$lang['inline_create_option']                     = '¿Permitir que los miembros del personal no administradores creen %s en el área de creación/edición de %s?';
$lang['inline_create']                            = 'Crear en línea';
$lang['inline_create_option_predefined_replies']  = '¿Permitir que los miembros del personal no administradores guarden respuestas predefinidas desde el mensaje del ticket?';
$lang['reminders_view_none_admin']                = 'Mostrando tus recordatorios y los recordatorios creados por ti.';
$lang['show_tabs_and_options']                    = 'Mostrar pestañas y opciones';
$lang['no_milestones_found']                      = 'Este proyecto no tiene hitos';
$lang['lead_is_contact_create_task']              = 'Crear tarea si el remitente del correo electrónico ya es cliente y asignarla al miembro del personal responsable.';
$lang['existing_customer']                        = 'Cliente Existente';
$lang['use_company_name_instead']                 = 'Usar el nombre de la empresa en su lugar';
$lang['customer_delete_transactions_warning']     = 'Este cliente tiene transacciones, %s, debes eliminar las transacciones o moverlas a otro cliente para poder realizar esta acción.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'No se pudieron seleccionar automáticamente los contactos del cliente. Asegúrate de que el cliente tenga contactos activos y que los contactos asociados tengan habilitadas las notificaciones por correo electrónico para %s.';
$lang['help_leads_create_permission']              = 'Todo el personal puede crear leads, excepto los miembros marcados como no miembros del personal';
$lang['help_leads_edit_permission']                = 'Cualquier persona que tenga acceso a un lead específico puede editar la mayor parte de la información del lead';
$lang['triggers']                                  = 'Disparadores';
$lang['notice_only_one_active_sms_gateway']        = 'Solo se permite una puerta de enlace SMS activa';
$lang['sms_trigger_disable_tip']                   = 'Deja el contenido en blanco para desactivar un disparador específico.';
$lang['tables']                                    = 'Tablas';
$lang['only_project_tasks']                        = 'Solo tareas relacionadas con proyectos';
$lang['download_all']                              = 'Descargar todo';
$lang['settings_sales_credit_note_number_format']  = 'Formato del número de Nota de Crédito';
$lang['sms_reminder_sent_to']                      = 'Recordatorio SMS enviado a %s';
$lang['ideal_customer_statement_descriptor']       = 'Descriptor de estado (mostrado en el estado bancario del cliente)';
$lang['payment_received_awaiting_confirmation']    = 'Tu pago ha sido recibido y está esperando confirmación.';
$lang['discount_fixed_amount']                     = 'Monto fijo';
$lang['timesheet_duration_instead']                = 'Introduce la duración en lugar de';
$lang['timesheet_date_instead']                    = 'Establece la hora de inicio y fin en su lugar';
$lang['allow_non_admin_members_to_import_leads']   = 'Permitir que los miembros del personal no administradores importen leads';
$lang['project_hide_tasks_settings_info']          = 'Las tareas se excluyen de la tabla principal de tareas para este proyecto, solo puedes ver las tareas del proyecto en esta área.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Ticket sin contacto';
$lang['ticket_create_to_contact']            = 'Ticket a contacto';
$lang['showing_billable_tasks_from_project'] = 'Mostrando tareas facturables del proyecto';
$lang['no_billable_tasks_found']             = 'No se encontraron tareas facturables';
$lang['help_leads_permission_view']          = 'Si este permiso no está marcado, un miembro del personal solo podrá ver los leads a los que está asignado, los leads creados por el miembro del personal y los leads marcados como públicos';

# Version 2.0.0
$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Plantillas de lista de verificación de tareas';
$lang['emails_tracking']                                        = 'Seguimiento de correos electrónicos';
$lang['no_tracked_emails_sent']                                 = 'No se enviaron correos electrónicos rastreados';
$lang['tracked_emails_sent']                                    = 'Correos electrónicos rastreados enviados';
$lang['tracked_email_date']                                     = 'Fecha';
$lang['tracked_email_subject']                                  = 'Asunto';
$lang['tracked_email_to']                                       = 'Para';
$lang['tracked_email_opened']                                   = 'Abierto';
$lang['tracked_email_not_opened']                               = 'No abierto';
$lang['not_viewed_yet']                                         = 'Este %s aún no ha sido visto por el cliente';
$lang['undo']                                                   = 'Deshacer';
$lang['sign_document_validation']                               = 'Por favor, firme el documento.';
$lang['document_customer_signature_text']                       = 'Firma (Cliente)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Requiere firma digital y confirmación de identidad para aceptar';
$lang['legal_bound_text']                                       = 'Texto vinculante legal';
$lang['e_signature_sign']                                       = 'Firmar';
$lang['is_signed']                                              = 'Firmado';
$lang['is_not_signed']                                          = 'No firmado';
$lang['download']                                               = 'Descargar';
$lang['view_pdf_in_new_window']                                 = 'Ver PDF en nueva ventana';
$lang['show_pdf_signature_contract']                            = 'Mostrar firma en PDF en el contrato';
$lang['document_signed_successfully']                           = 'Has firmado este documento con éxito';
$lang['document_signed_info']                                   = 'Este documento fue firmado por %s el %s desde la dirección IP %s';
$lang['keep_signature']                                         = 'Conservar firma del cliente';
$lang['view_contract']                                          = 'Ver contrato';
$lang['summary']                                                = 'Resumen';
$lang['discussion']                                             = 'Discusión';
$lang['general_information']                                    = 'Información general';
$lang['proposal_information']                                   = 'Información de propuesta';
$lang['contract_comments']                                      = 'Comentarios';
$lang['not_contract_comment_from_client']                       = 'Nuevo comentario del cliente en el contrato %s ...';
$lang['contract_files']                                         = 'Archivos del contrato';
$lang['date_signed']                                            = 'Fecha de firma';
$lang['clear_signature']                                        = 'Eliminar firma';
$lang['recurring_has_ended']                                    = 'Este %s recurrente ha finalizado.';
$lang['cycles_remaining']                                       = 'Ciclos restantes';
$lang['cycles_infinity']                                        = 'Infinito';
$lang['recurring_total_cycles']                                 = 'Ciclos totales';
$lang['cycles_passed']                                          = 'Ciclos pasados %s';
$lang['api_key_not_set_error_message']                          = 'Clave API no configurada, haz clic en el siguiente enlace para configurar la clave API: %s';
$lang['subscription']                                           = 'Suscripción';
$lang['subscription_lowercase']                                 = 'suscripción';
$lang['subscriptions']                                          = 'Suscripciones';
$lang['tax_is_used_in_subscriptions_warning']                   = 'No puedes actualizar este impuesto porque está siendo utilizado por suscripciones.';
$lang['credit_card']                                            = 'Tarjeta de crédito';
$lang['update_credit_card']                                     = 'Actualizar tarjeta de crédito';
$lang['credit_card_update_info']                                = '¿Quieres actualizar la tarjeta de crédito que tenemos registrada? Proporciona los nuevos detalles aquí. La información de tu tarjeta nunca tocará directamente nuestro servidor.';
$lang['update_card_details']                                    = 'Actualizar detalles de la tarjeta';
$lang['update_card_btn']                                        = 'Actualizar tarjeta';
$lang['subscription_name']                                      = 'Nombre de la suscripción';
$lang['subscriptions_description']                              = 'Descripción';
$lang['subscribe']                                              = 'Suscribirse';
$lang['subscription_date']                                      = 'Fecha';
$lang['first_billing_date']                                     = 'Fecha de facturación inicial';
$lang['allow_primary_contact_to_update_credit_card']            = '¿Permitir que el contacto principal actualice el token de tarjeta de crédito almacenado?';
$lang['show_subscriptions_in_customers_area']                   = '¿Mostrar suscripciones en el área de clientes?';
$lang['show_subscriptions_in_customers_area_help']              = 'Esta opción es válida solo para el contacto principal del cliente.';
$lang['subscription_sent_to_email_success']                     = 'Suscripción enviada al correo electrónico con éxito';
$lang['subscription_sent_to_email_fail']                        = 'Error al enviar la suscripción al correo electrónico';
$lang['new_subscription']                                       = 'Nueva suscripción';
$lang['subscription_status']                                    = 'Estado';
$lang['next_billing_cycle']                                     = 'Próximo ciclo de facturación';
$lang['subscription_not_subscribed']                            = 'No suscrito';
$lang['send_subscription']                                      = 'Enviar suscripción';
$lang['subscription_will_send_to_primary_contact']              = 'La suscripción será enviada al contacto principal.';
$lang['subscription_resumed']                                   = 'La suscripción se ha activado con éxito';
$lang['subscription_canceled']                                  = 'Suscripción cancelada con éxito';
$lang['no_credit_card_found']                                   = 'No se encontró tarjeta de crédito';
$lang['cancel_immediately']                                     = 'Cancelar inmediatamente';
$lang['cancel_at_end_of_billing_period']                        = 'Cancelar al final del período de facturación';
$lang['view_subscription']                                      = 'Ver suscripción';
$lang['subscription_future']                                    = 'Futuro';
$lang['subscription_active']                                    = 'Activa';
$lang['subscription_past_due']                                  = 'Vencida';
$lang['subscription_canceled']                                  = 'Cancelada';
$lang['subscription_unpaid']                                    = 'No pagada';
$lang['billing_plan']                                           = 'Plan de facturación';
$lang['upcoming_invoice']                                       = 'Factura próxima';
$lang['resume_now']                                             = 'Reanudar ahora';
$lang['subscription_not_yet_subscribed']                        = 'El cliente aún no está suscrito a esta suscripción.';
$lang['subscription_is_canceled_no_resume']                     = 'Esta suscripción está cancelada y no puede reanudarse.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Esta suscripción se cancelará al final del período de facturación.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Gracias por suscribirte a %s';
$lang['date_subscribed']                                        = 'Fecha de suscripción';
$lang['reports']                                                = 'Informes';
$lang['subscriptions_summary']                                  = 'Resumen de suscripciones';
$lang['calendar_only_assigned_tasks']                           = 'Mostrar solo tareas asignadas al miembro del personal conectado';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Pago de suscripción exitoso, correo enviado a: %s';
$lang['mail_engine']                                            = 'Motor de correo';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Requerir que el cliente inicie sesión para ver el contrato';
$lang['privacy_policy']                                         = 'Política de privacidad';
$lang['gdpr_terms_agree']                                       = 'Acepto los <a href="%s" target="_blank">Términos y condiciones</a>';
$lang['terms_and_conditions_validation']                        = 'Debes aceptar los términos y condiciones para continuar.';
$lang['gdpr']                                                   = 'Reglamento General de Protección de Datos (GDPR)';
$lang['data_removal_request_sent']                              = 'Solicitud de eliminación de datos enviada con éxito';
$lang['gdpr_consents']                                          = 'Consentimientos';
$lang['gdpr_consent']                                           = 'Consentimiento';
$lang['gdpr_consent_purpose']                                   = 'Propósito';
$lang['gdpr_consent_opt_in']                                    = 'Aceptar';
$lang['gdpr_consent_opt_out']                                   = 'Rechazar';
$lang['gdpr_consent_agree']                                     = 'Estoy de acuerdo';
$lang['gdpr_consent_disagree']                                  = 'No estoy de acuerdo';
$lang['view_consent']                                           = 'Ver consentimiento';
$lang['transfer_consent']                                       = 'Transferir consentimiento';
$lang['view_public_form']                                       = 'Ver formulario público';
$lang['update_consent']                                         = 'Actualizar consentimiento';
$lang['consent_last_updated']                                   = 'Última actualización: %s';
$lang['showing_search_result']                                  = 'Mostrando resultados de búsqueda para: %s';
$lang['per_page']                                               = 'Por página';
$lang['allow_staff_view_invoices_assigned']                     = 'Permitir que el personal vea las facturas asignadas a ellos';
$lang['allow_staff_view_estimates_assigned']                    = 'Permitir que el personal vea las presupuestos asignadas a ellos';
$lang['gdpr_right_to_be_informed']                              = 'Derecho a ser informado';
$lang['gdpr_right_of_access']                                   = 'Derecho de acceso';
$lang['gdpr_right_to_data_portability']                         = 'Derecho a la portabilidad de datos';
$lang['gdpr_right_to_erasure']                                  = 'Derecho a la eliminación';
$lang['edit_my_information']                                    = 'Editar mi información';
$lang['export_my_data']                                         = 'Exportar mis datos';
$lang['request_data_removal']                                   = 'Solicitar eliminación de datos';
$lang['explanation_for_data_removal']                           = 'Explicación para la eliminación de datos';
$lang['briefly_describe_why_remove_data']                       = 'Describe brevemente por qué deseas eliminar los datos';
$lang['date_published']                                         = 'Fecha de publicación';
$lang['view']                                                   = 'Ver';
$lang['customer_is_subscribed_to_subscription_info']            = 'El cliente está suscrito a esta suscripción';
$lang['save_last_order_for_tables']                             = 'Guardar último pedido para las tablas';
$lang['date_created']                                           = 'Fecha de creación';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Logo oscuro de la empresa';
$lang['customers_register_require_confirmation']                = 'Requiere confirmación de registro por parte del administrador después de que el cliente se registre';
$lang['customer_requires_registration_confirmation']            = 'Requiere confirmación de registro';
$lang['confirm_registration']                                   = 'Confirmar registro';
$lang['customer_registration_successfully_confirmed']           = 'Registro del cliente confirmado con éxito';
$lang['customer_register_account_confirmation_approval_notice'] = 'Gracias por registrarte, tu cuenta está pendiente de aprobación y será confirmada pronto.';
$lang['after_subscription_payment_succeeded']                   = 'Después de que el pago de la suscripción haya sido exitoso';
$lang['subscription_option_send_invoice']                       = 'Enviar factura';
$lang['subscription_option_send_payment_receipt']               = 'Enviar recibo de pago';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Enviar factura y recibo de pago';
$lang['subscription_option_do_nothing']                         = 'No hacer nada';
$lang['gdpr_not_enabled']                                       = 'GDPR no habilitado';
$lang['enable_gdpr']                                            = 'Habilitar GDPR';
$lang['gdpr_right_to_rectification']                            = 'Derecho a la rectificación';
$lang['test_sms_config']                                        = 'Configurar SMS de prueba';
$lang['test_sms_message']                                       = 'Mensaje de prueba';
$lang['send_test_sms']                                          = 'Enviar SMS de prueba';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Permitir que el personal no administrador elimine archivos adjuntos de tickets';

# Version 2.1.0
$lang['contract_number']                                = 'Número de contrato';
$lang['project_changing_status_recurring_tasks_notice'] = 'Estás cambiando el estado a {0}, todas las tareas recurrentes serán canceladas';
$lang['not_contract_signed']                            = 'El contrato con el asunto %s ha sido firmado por el cliente';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'El cliente respondió al ticket - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Recibir notificación cuando el cliente responda a un ticket';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Todos los miembros del personal que pertenezcan al departamento del ticket recibirán notificación cuando el cliente responda a un ticket';
$lang['payment_gateway_enable_paypal']                  = 'Habilitar pagos por PayPal';
$lang['project_member']                                 = 'Miembro del proyecto';
$lang['contract_notes']                                 = 'Notas del contrato';
$lang['contract_add_note']                              = 'Agregar nota';

# Version 2.1.1
$lang['frequency']              = 'Frecuencia';
$lang['frequency_every']        = 'Cada %s';
$lang['last_invoice_date']      = 'Fecha de la última factura';
$lang['next_invoice_date_list'] = 'Fecha de la siguiente factura';
$lang['enter_new_card']         = 'Ingresar nueva tarjeta';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Guardar y registrar pago';
$lang['choose_from_google_drive']                                    = 'Elegir desde Google Drive';
$lang['open_in_google']                                              = 'Abrir en Google';
$lang['google_picker']                                               = 'Selector de Google';
$lang['enable_google_picker']                                        = 'Habilitar selector de Google';
$lang['google_api_client_id']                                        = 'ID de cliente de Google API';
$lang['subtract_tax_total_from_amount']                              = 'Restar el total del impuesto (%s) del monto';
$lang['expense_subtract_info_text']                                  = 'Usa esta opción para restar el monto total de impuestos del monto de los gastos, útil cuando ingresaste el monto de los gastos con impuestos incluidos (impuesto incluido).';
$lang['company_exists_info']                                         = 'Parece que ya existe un cliente con el nombre %s, si aún deseas crear el cliente puedes ignorar este mensaje.';
$lang['import_items']                                                = 'Importar elementos';
$lang['total_items_deleted']                                         = 'Total de elementos eliminados: %s';
$lang['billable_amount']                                             = 'Monto facturable';
$lang['last_child_invoice_date']                                     = 'Fecha de la última factura hija';
$lang['good_morning']                                                = 'Buenos días';
$lang['good_afternoon']                                              = 'Buenas tardes';
$lang['good_evening']                                                = 'Buenas noches';
$lang['description_in_invoice_item']                                 = 'Incluir descripción en el ítem de la factura';
$lang['description_in_invoice_item_help']                            = 'Útil si deseas incluir información adicional en la factura de suscripción, por ejemplo, qué incluye esta suscripción.';
$lang['ticket_reminders']                                            = 'Recordatorios';
$lang['ticket_set_reminder_title']                                   = 'Establecer recordatorio de ticket';
$lang['calendar_ticket_reminder']                                    = 'Recordatorios de tickets';
$lang['email_verification_required']                                 = 'Se requiere verificación de correo electrónico';
$lang['email_verification_required_message']                         = 'Para acceder a todas las funciones disponibles en el portal, primero debes verificar tu correo electrónico.';
$lang['email_verification_required_message_mail']                    = 'Te hemos enviado un correo electrónico con las instrucciones de verificación, si no lo has recibido, revisa la carpeta de spam o haz clic <a href="%s">aquí</a> para reenviar el correo de verificación.';
$lang['email_already_verified']                                      = 'Tu correo electrónico ya está verificado';
$lang['invalid_verification_key']                                    = 'Clave de verificación inválida';
$lang['verification_key_expired']                                    = 'Clave de verificación caducada';
$lang['email_successfully_verified']                                 = 'Tu correo electrónico ha sido verificado con éxito.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Tu correo electrónico ha sido verificado con éxito, podrás iniciar sesión una vez que el administrador confirme tu cuenta manualmente.';
$lang['email_verification_mail_sent_successully']                    = 'Te hemos enviado un correo electrónico con las instrucciones de verificación';
$lang['create_reminder']                                             = 'Crear recordatorio';
$lang['no_reminders_for_this_task']                                  = 'No hay recordatorios para esta tarea';
$lang['reminder_for']                                                = 'Recordatorio para %s el %s';
$lang['no_description_provided']                                     = 'No se proporcionó descripción';
$lang['pay_with_card']                                               = 'Pagar con tarjeta';
$lang['not_customer_uploaded_file']                                  = 'Nuevo archivo(s) cargado en el perfil';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Los archivos de proyectos y tareas vinculados al cliente no se muestran en esta tabla.';
$lang['ticket_import_reply_only']    = 'Intentar importar solo la respuesta actual del ticket (sin el mensaje citado/reenviado)';
$lang['learn_more']                  = 'Aprender más';
$lang['sales_item']                  = 'Artículo';

# Version 2.3.0
$lang['modules']                                 = 'Módulos';
$lang['module']                                  = 'Módulo';
$lang['module_description']                      = 'Descripción';
$lang['module_activate']                         = 'Activar';
$lang['module_deactivate']                       = 'Desactivar';
$lang['module_uninstall']                        = 'Desinstalar';
$lang['module_upgrade_database']                 = 'Actualizar base de datos';
$lang['module_settings']                         = 'Configuraciones';
$lang['module_version']                          = 'Versión %s';
$lang['module_by']                               = 'Por %s';
$lang['staff_which_are_using_role']              = 'Miembros del personal que están utilizando este rol';
$lang['copy']                                    = 'Copiar';
$lang['read_more']                               = 'Leer más';
$lang['show_less']                               = 'Mostrar menos';
$lang['project_progress_text']                   = 'Progreso del proyecto';
$lang['timer_not_stopped_yet']                   = 'Este temporizador aún no se ha detenido';
$lang['refunds']                                 = 'Reembolsos';
$lang['refund']                                  = 'Reembolso';
$lang['refund_amount']                           = 'Monto reembolsado';
$lang['not_refunds_found']                       = 'No se encontraron reembolsos';
$lang['refunds_applied_cant_delete_credit_note'] = 'Este comprobante de crédito tiene reembolsos aplicados, debes primero eliminar los reembolsos para poder eliminar el comprobante de crédito.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'No puedes configurar este %s como recurrente porque este %s es hijo de otro recurrente %s.';
$lang['statement_credit_note_refund']              = 'Reembolso de nota de crédito - %s';
$lang['no_validation']                             = 'Sin validación';
$lang['lead_unique_validation_on']                 = 'Realizar validación para duplicados de prospectos en los siguientes campos:';
$lang['phonenumber_exists']                        = 'El número de teléfono ya existe';
$lang['company_exists']                            = 'La empresa ya existe';
$lang['website_exists']                            = 'El sitio web ya existe';
$lang['send_payment_receipt_to_client']            = 'Enviar recibo de pago al cliente';
$lang['payment_sent_successfully']                 = 'Recibo de pago enviado con éxito.';
$lang['payment_sent_failed']                       = 'No se pudo enviar el recibo de pago.';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Algunas etiquetas no se actualizan porque el nombre de la etiqueta ya existe';
$lang['attach_statement']            = 'Adjuntar estado de cuenta del cliente';

# Version 2.4.0
$lang['delete_credit_card']                        = 'Eliminar tarjeta';
$lang['delete_credit_card_info']                   = 'No puedes eliminar la tarjeta de crédito porque tienes suscripciones activas.';
$lang['credit_card_successfully_deleted']          = 'Tarjeta de crédito eliminada con éxito.';
$lang['subscription_incomplete']                   = 'Incompleta';
$lang['subscription_incomplete_expired']           = 'Incompleta Expirada';
$lang['credit_card_short']                         = 'Tarjeta';
$lang['webhook_created']                           = 'Webhook creado con éxito.';
$lang['subscriptions_terms_info']                  = 'Ingresa los términos y condiciones del cliente para que se muestren antes de que se suscriba a la suscripción.';
$lang['subscription_complete_payment']             = 'Completar pago';
$lang['subscription_is_subscription_is_expired']   = 'Esta suscripción ha expirado.';
$lang['subscription_plan_currency_does_not_match'] = 'La moneda del plan seleccionado no coincide con la moneda seleccionada abajo.';
$lang['subscription_first_billing_date_info']      = 'Deja en blanco para usar la fecha en que el cliente se suscribió a la suscripción. Este campo debe ser una fecha futura. Si seleccionas una fecha pasada y el cliente no se ha suscrito aún, se usará la fecha en que se suscribirá el cliente.';
$lang['stripe_subscription_select_plan']           = 'Seleccionar plan de Stripe';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Tus permisos actuales no te permiten editar el contenido del contrato. Consulta con un administrador para permitirte permisos para editar contratos.';
$lang['mark_as_signed']                 = 'Marcar como firmado';
$lang['unmark_as_signed']               = 'Desmarcar como firmado';
$lang['marked_as_signed']               = 'Marcado como firmado';
$lang['contract_marked_as_signed_info'] = 'Este contrato ha sido marcado manualmente como firmado.';
$lang['save_and_send_later']            = 'Guardar y enviar más tarde';
$lang['schedule']                       = 'Programar';
$lang['schedule_email_for']             = 'Programar correo para %s';
$lang['schedule_date']                  = '¿Cuándo te gustaría enviar el correo?';
$lang['email_scheduled_successfully']   = 'Correo programado con éxito';
$lang['invoice_will_be_sent_at']        = 'La factura será enviada a las %s';

# Version 2.5.0
$lang['recaptcha_ignore_ips']            = 'Direcciones IP ignoradas';
$lang['recaptcha_ignore_ips_info']       = 'Ingresa las direcciones IP separadas por coma que deseas que reCaptcha omita la validación.';
$lang['show_task_reminders_on_calendar'] = 'Recordatorios de tareas';
$lang['contracts_about_to_expire']       = 'Contratos que están a punto de expirar';
$lang['no_contracts_about_to_expire']    = 'No hay contratos que vayan a expirar en los próximos %s días.';
$lang['lead_value']                      = 'Valor del prospecto';
$lang['lead_value_tooltip']              = 'Se usará la moneda base.';
$lang['leads_dt_lead_value']             = 'Valor';
$lang['leads_canban_lead_value']         = 'Valor del prospecto: %s';
$lang['lead_add_edit_lead_value']        = 'Valor del prospecto';

# Version 2.6.0
$lang['gantt_view_day']   = 'Vista por días';
$lang['gantt_view_week']  = 'Vista por semanas';
$lang['gantt_view_month'] = 'Vista por meses';
$lang['gantt_view_year']  = 'Vista por años';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = 'Formato de 24 horas, ej. 9 para las 9am o 15 para las 3pm. Se utiliza para tareas recurrentes, recordatorios de tareas, etc.';
$lang['clients_nav_contacts']                                 = 'Contactos';
$lang['clients_my_contacts']                                  = 'Mis Contactos';
$lang['clients_my_contact']                                   = 'Contacto';
$lang['new_contact']                                          = 'Nuevo Contacto';
$lang['customer_contact']                                     = 'Mis Contactos';
$lang['clients_contact_added']                                = 'Contacto agregado con éxito';
$lang['clients_contact_updated']                              = 'Contacto actualizado con éxito';
$lang['allow_primary_contact_to_manage_other_contacts']       = 'Permitir al contacto principal gestionar otros contactos del cliente';
$lang['contact_form_validation_is_unique']                    = 'Ya existe un contacto con este {field} en nuestro sistema';
$lang['invoice_number_not_applied_on_draft']                  = 'Si la factura se guarda como borrador, el número no se aplicará. En su lugar, se asignará el siguiente número de factura cuando se envíe al cliente o se marque como enviada.';
$lang['two_factor_authentication_disabed']                    = 'Desactivado';
$lang['enable_google_two_factor_authentication']              = 'Habilitar Google Authenticator';
$lang['set_google_two_factor_authentication_failed']          = 'Error al guardar la autenticación, por favor intenta nuevamente';
$lang['enter_two_factor_auth_code_from_mobile']               = 'Ingresa el código de autenticación desde la aplicación Authenticator';
$lang['staff_two_factor_authentication']                      = 'Autenticación de dos factores';
$lang['google_authentication_code']                           = 'Ingresa el código desde la aplicación Authenticator';
$lang['set_two_factor_authentication_successful']             = 'Configuración de autenticación de dos factores actualizada con éxito';
$lang['set_two_factor_authentication_failed']                 = 'No se pudo actualizar la configuración de autenticación de dos factores';
$lang['google_2fa_code_valid']                                = 'Autenticación verificada con éxito';
$lang['google_2fa_code_invalid']                              = 'Código de autenticación inválido ingresado, por favor intenta nuevamente.';
$lang['google_2fa_scan_qr_guide']                             = 'Escanea el código QR de abajo con la aplicación Google Authenticator en tu dispositivo móvil, luego ingresa el código generado en la aplicación';
$lang['google_2fa_manul_input_secret']                        = 'Clave secreta para ingreso manual';

# Version 2.7.1
$lang['templates']                                   = 'Plantillas';
$lang['add_template']                                = 'Agregar Plantilla';
$lang['edit_template']                               = 'Editar Plantilla';
$lang['template_added']                              = 'Plantilla agregada con éxito';
$lang['template_updated']                            = 'Plantilla actualizada con éxito';
$lang['template_name']                               = 'Título de la plantilla';
$lang['template_content']                            = 'Contenido de la plantilla';
$lang['insert_template']                             = 'Insertar';
$lang['items_table_amounts_exclude_currency_symbol'] = 'Excluir símbolo de moneda en la tabla de montos de los ítems';

$lang['multiplies_of']               = 'Múltiplos de';
$lang['round_off_task_timer_option'] = 'Redondear temporizador de tarea';
$lang['task_timer_dont_round_off']   = 'No redondear';
$lang['task_timer_round_up']         = 'Redondear hacia arriba';
$lang['task_timer_round_down']       = 'Redondear hacia abajo';
$lang['task_timer_round_nearest']    = 'Redondear al más cercano';
$lang['calendar_task_reminder']      = 'Recordatorio de tarea';
$lang['projects_chart']              = 'Gráfico de proyectos';
$lang['overdue_by_days']             = 'VENCIDO POR %s DÍAS';

$lang['two_checkout_payment_processing'] = 'El pago está siendo procesado, serás notificado si es exitoso';
$lang['two_checkout_payment_cancelled']  = 'Pago cancelado';
$lang['two_checkout_merchant_code']      = 'Código de comerciante';
$lang['two_checkout_secret_Key']         = 'Clave secreta';
$lang['two_gateway_webhook_notice']      = 'El punto final IPN para 2Checkout es ( %s )';
$lang['something_went_wrong']            = 'Algo salió mal. Intenta de nuevo';
$lang['imap_folder']                     = 'Carpeta';
$lang['retrieve_folders']                = 'Recuperar carpetas';
$lang['email_to_ticket_config']          = 'Configuración de correo a ticket';

# Version 2.8.0
$lang['enable_support_menu_badges']              = 'Habilitar insignia del ítem del menú de soporte';
$lang['item_copy_success']                       = 'Artículo copiado con éxito';
$lang['item_copy_fail']                          = 'Error al copiar el artículo';
$lang['attach_invoice_to_payment_receipt_email'] = 'Adjuntar el PDF de la factura al enviar el recibo de pago por correo';

$lang['estimate_request']                                  = 'Solicitud de presupuesto';
$lang['estimate_requests']                                 = 'Solicitudes de presupuesto';
$lang['estimate_request_form']                             = 'Formulario de solicitud de presupuesto';
$lang['acs_estimate_request']                              = 'Solicitud de presupuesto';
$lang['acs_estimate_request_forms']                        = 'Formularios';
$lang['estimate_request_forms']                            = 'Formularios de solicitud de presupuesto';
$lang['estimate_request_notify_staff']                     = 'Miembros del personal para notificar';
$lang['estimate_request_notify_when_submitted']            = 'Notificar cuando se envíe la solicitud de presupuesto';
$lang['estimate_request_assignee']                         = 'Responsable (Asignado)';
$lang['estimate_request_notify_roles']                     = 'Roles a notificar';
$lang['custom_field_estimate_request']                     = 'Solicitud de presupuesto';
$lang['new_estimate_request_submitted_from_form']          = 'Nueva solicitud de presupuesto enviada desde el formulario - %s';
$lang['acs_estimate_request_statuses_submenu']             = 'Estados';
$lang['estimate_request_dt_email']                         = 'Correo electrónico';
$lang['estimate_request_dt_assigned']                      = 'Asignado';
$lang['estimate_request_dt_status']                        = 'Estado';
$lang['estimate_request_dt_datecreated']                   = 'Creado';
$lang['estimate_request_attachments']                      = 'Archivos adjuntos';
$lang['estimate_request_new_status']                       = 'Nuevo estado';
$lang['estimate_request_status_table_name']                = 'Nombre del estado';
$lang['estimate_request_table_total']                      = 'Total de solicitudes: %s';
$lang['estimate_request_statuses_not_found']               = 'No se encontraron estados de solicitud de presupuesto';
$lang['estimate_request_status_add_edit_name']             = 'Nombre del estado';
$lang['estimate_request_status_color']                     = 'Color';
$lang['estimate_request_status_add_edit_order']            = 'Orden del estado';
$lang['estimate_request_status']                           = 'Estado';
$lang['estimate_request_date_added']                       = 'Fecha de creación';
$lang['estmate_request_tags_updated']                      = 'Etiquetas actualizadas';
$lang['not_estimate_request_activity_status_updated']      = '%s actualizó el estado de la solicitud de presupuesto de %s a %s';
$lang['estimate_request_lowercase']                        = 'solicitud de presupuesto';
$lang['estimate_request_form_email_field_is_required']     = 'El campo de correo electrónico debe añadirse en el formulario';
$lang['estimate_request_form_email_field_set_to_required'] = 'Marcar el campo de correo electrónico como obligatorio';
$lang['not_delete_estimate_request_default_status']        = 'No se puede eliminar el estado predeterminado de solicitud de presupuesto';
$lang['mark_estimate_request_as']                          = 'Marcar como %s';
$lang['estimate_request_updated']                          = 'Solicitud de presupuesto actualizada';
$lang['convert_estimate_request']                          = 'Convertir solicitud de presupuesto';
$lang['estimate_request_client_firstname']                 = 'Nombre';
$lang['estimate_request_client_lastname']                  = 'Apellido';
$lang['estimate_request_email']                            = 'Correo electrónico';
$lang['estimate_request_for_lead']                         = 'Prospecto';
$lang['estimate_request_for_customer']                     = 'Cliente';
$lang['estimate_request_related']                          = 'Relacionado con';
$lang['estimate_request_client_created_success']           = 'Cliente de solicitud de presupuesto creado con éxito';
$lang['estimate_request_assigned']                         = 'Personal asignado';
$lang['not_estimate_request_activity_assigned_updated']    = 'Solicitud de presupuesto asignada a %s';
$lang['estimate_request_status_lowercase']                 = 'estado de solicitud de presupuesto';
$lang['estimate_request_assigned_to_staff']                = 'La solicitud de presupuesto ha sido asignada a ti';

$lang['activity_due_reminder_is_sent']   = '%s envió recordatorio de vencimiento de la factura';
$lang['invoice_due_notice_before']       = 'Enviar recordatorio de vencimiento X días antes de la fecha de vencimiento';
$lang['overdue_notices']                 = 'Avisos de vencimiento';
$lang['invoice_overdue_notices_info']    = 'Los avisos de vencimiento se envían cuando la factura queda vencida.';
$lang['due_reminders']                   = 'Recordatorios de vencimiento';
$lang['due_reminders_for_invoices_info'] = 'Los recordatorios de vencimiento se envían a facturas no pagadas o parcialmente pagadas como recordatorio al cliente para que pague la factura antes de su vencimiento.';
$lang['expenses_list_made_payment_by']   = 'Pago realizado por %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed'] = 'Ocultar ítems completados';
$lang['show_task_checklist_items_completed'] = 'Mostrar ítems completados %s';
$lang['task_checklist_assign']               = 'Asignar personal';
$lang['task_checklist_assigned']             = 'Asignado a %s';

# Version 2.8.2
$lang['custom_field_add_edit_default_value'] = 'Valor predeterminado';

# Version 2.8.3
$lang['projects_send_contact_notification']                   = 'Enviar notificaciones de contacto';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'A todos los contactos con notificaciones para proyectos habilitadas';
$lang['project_do_not_send_contacts_notifications']           = 'No enviar notificaciones';
$lang['project_send_specific_contacts_with_notification']     = 'Contactos específicos';
$lang['project_contacts_to_notify']                           = 'Seleccionar contactos para notificar';
$lang['contract_signed_by']                                   = 'Nombre del firmante';
$lang['contract_signed_date']                                 = 'Fecha de firma';
$lang['contract_signed_ip']                                   = 'Dirección IP';
$lang['show_estimate_request_in_customers_area']              = '¿Mostrar el enlace de solicitud de presupuesto en el área del cliente?';
$lang['customers_estimate_request_link_text']                 = 'Solicitar presupuesto';
$lang['total_expenses_deleted']                               = 'Total de gastos eliminados: %s';
$lang['estimate_convert_to_project']                          = 'Convertir a proyecto';
$lang['estimate_items_convert_to_tasks']                      = 'Ítems que se convertirán en tareas';

$lang['proposal_signed_by']                        = 'Nombre del firmante';
$lang['proposal_signed_date']                      = 'Fecha de firma';
$lang['proposal_signed_ip']                        = 'Dirección IP';
$lang['hide_milestone_from_customer']              = 'Ocultar al cliente';
$lang['hide_milestone_from_customer_help']         = 'Cuando decidas ocultar un hito al cliente, el hito completo y sus tareas estarán ocultos';
$lang['automatically_stop_task_timer_after_hours'] = 'Detener automáticamente los temporizadores de tareas después de (horas)';

# Version 2.9.0
$lang['home_payment_records']                                  = 'Registros de pagos';
$lang['weekly']                                                = 'Semanal';
$lang['monthly']                                               = 'Mensual';
$lang['failed_to_update_timesheet']                            = 'No se pudo actualizar la hoja de tiempos';
$lang['permission_create_timesheets']                          = 'Crear hojas de tiempos';
$lang['permission_edit_timesheets']                            = 'Editar hojas de tiempos (Global)';
$lang['permission_edit_own_timesheets']                        = 'Editar mis hojas de tiempos';
$lang['permission_delete_timesheets']                          = 'Eliminar hojas de tiempos (Global)';
$lang['permission_delete_own_timesheets']                      = 'Eliminar mis hojas de tiempos';
$lang['permission_edit_milestones']                            = 'Editar hitos';
$lang['permission_delete_milestones']                          = 'Eliminar hitos';
$lang['add_timesheet']                                         = 'Añadir hoja de tiempos';
$lang['submit_button_bg_color']                                = 'Color de fondo del botón de envío';
$lang['submit_button_text_color']                              = 'Color de texto del botón de envío';
$lang['automatically_assign_ticket_to_first_staff_responding'] = '¿Asignar automáticamente el ticket al primer miembro del personal que responda?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = 'Este contrato está firmado, por lo que no todos los campos se pueden editar hasta que se elimine la firma.';
$lang['form_submit_success_action']              = 'Qué debe ocurrir después de que un visitante envíe este formulario';
$lang['form_submit_success_display_thank_you']   = 'Mostrar mensaje de agradecimiento';
$lang['form_submit_success_redirect_to_website'] = 'Redirigir a otro sitio web';
$lang['form_submit_website_url']                 = 'URL del sitio web';
$lang['lead_name_prefix']                        = 'Prefijo del título de la oportunidad';
$lang['lead_name_prefix_help']                   = 'Para cada oportunidad creada a través del formulario, el nombre de la oportunidad tendrá el prefijo del texto añadido en el campo para facilitar su reconocimiento.';

# Version 2.9.2
$lang['open_google_map']                                  = 'Abrir en Google Maps';
$lang['milestone_start_date']                             = 'Fecha de inicio';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = 'Enviar recordatorio por correo electrónico de las tareas completadas pero no facturadas';
$lang['staff_to_notify_completed_but_not_billed_tasks']   = 'Seleccionar qué miembros del personal deben recibir el recordatorio';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = 'Seleccionar los días de la semana en que se debe enviar el recordatorio';
$lang['notifications']                                    = 'Notificaciones';
$lang['merged']                                           = 'Fusionado';
$lang['ticket_merged_notice']                             = 'Este ticket se ha fusionado con el ticket con ID';
$lang['view_primary_ticket']                              = 'Ver ticket principal';
$lang['merge_tickets']                                    = 'Fusionar tickets';
$lang['primary_ticket']                                   = 'Ticket principal';
$lang['primary_ticket_status']                            = 'Estado del ticket principal';
$lang['tickets_merged']                                   = 'Tickets fusionados con éxito';
$lang['cannot_merge_into_merged_ticket']                  = 'No se puede fusionar un ticket que ya ha sido fusionado con otro ticket';
$lang['merge_ticket_ids_field_label']                     = 'Fusionar ticket #';
$lang['merge_ticket_ids_field_placeholder']               = 'Ejemplo: 5 o 5,6';
$lang['cannot_merge_tickets_with_ids']                    = 'El ticket %s ya ha sido fusionado en otro ticket';
$lang['ticket_merged_tickets_header']                     = 'Este ticket contiene %s tickets fusionados';
$lang['batch_payments_table_invoice_number_heading']      = 'Número de factura';
$lang['batch_payments_table_payment_date_heading']        = 'Fecha de pago';
$lang['batch_payments_table_payment_mode_heading']        = 'Modo de pago';
$lang['batch_payments_table_transaction_id_heading']      = 'ID de transacción';
$lang['batch_payments_table_amount_received_heading']     = 'Cantidad recibida';
$lang['batch_payments_table_invoice_balance_due']         = 'Saldo pendiente de la factura';
$lang['add_batch_payments']                               = 'Añadir pagos';
$lang['batch_payment_filter_by_customer']                 = 'Filtrar facturas por cliente';
$lang['batch_payments']                                   = 'Pagos por lotes';
$lang['batch_payment_added_successfully']                 = 'Has añadido con éxito %s pagos';
$lang['batch_payments_send_invoice_payment_recorded']     = 'No enviar correo electrónico de pago de factura grabado a los contactos del cliente';
$lang['invoice_batch_payments']                           = 'Pago por lote';
$lang['staff_is_currently_replying']                      = '%s está respondiendo actualmente al ticket.';

# Version 2.9.4
$lang['permission_view_timesheet_report']                  = 'Ver informe de hojas de tiempo';
$lang['timesheets_overview_all_members_notice_permission'] = 'La vista general de las hojas de tiempo de todos los miembros del personal solo está disponible para el personal con permiso para ver los informes de hojas de tiempo y administradores.';
$lang['show_project_on_proposal']                          = 'Mostrar nombre del proyecto en la propuesta';
$lang['ticket_reports_staff']                              = 'Miembro del personal';
$lang['ticket_reports_total_assigned']                     = 'Total de tickets asignados';
$lang['ticket_reports_open_tickets']                       = 'Tickets abiertos';
$lang['ticket_reports_closed_tickets']                     = 'Tickets cerrados';
$lang['ticket_reports_replies_to_tickets']                 = 'Respuestas a tickets';
$lang['ticket_reports_average_reply_time']                 = 'Tiempo de respuesta promedio';
$lang['home_tickets_report']                               = 'Informe de tickets del personal';
$lang['ticket_reports_average_reply_time_help']            = 'Tiempo de respuesta promedio de los tickets asignados.';
$lang['created_by']                                        = 'Creado por';

$lang['staff_related_ticket_notification_to_assignee_only']      = 'Enviar notificaciones de tickets relacionadas con el personal solo al asignado';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = 'Si esta opción está activada y el ticket no tiene asignado un miembro del personal, la notificación se enviará a todos los miembros del personal que pertenezcan al departamento del ticket';
$lang['import_expenses']                                         = 'Importar gastos';
$lang['show_pdf_signature_proposal']                             = 'Mostrar firma en PDF en la propuesta';
$lang['enable_honeypot_spam_validation']                         = 'Habilitar validación de spam con Honeypot';

# Version 3.0.0
$lang['contracts_view_marked_as_signed'] = 'Marcado como firmado';
$lang['contracts_view_signed']           = 'Firmado';
$lang['contracts_view_not_expired']      = 'No caducado';
$lang['contract_information']            = 'Información del contrato';
$lang['receipt']                         = 'Recibo';
$lang['search_proposals']                = 'Buscar propuestas';
$lang['search_estimates']                = 'Buscar presupuestos';
$lang['quick_create']                    = 'Creación rápida';

# Version 3.0.5
$lang['subscription_last_sent']                             = 'Último enviado';
$lang['automatically_set_logged_in_staff_sales_agent']      = 'Asignar automáticamente al personal conectado como agente de ventas';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = 'Aplicable para: Presupuestos, facturas, propuestas';
$lang['permission_view_all_templates']                      = 'Ver todas las plantillas';
$lang['settings_contract_sign_reminder_every_days_info']    = 'Los recordatorios de firma se envían a los contactos del cliente después de que se envíe el contrato por primera vez y se detienen automáticamente cuando el contrato es firmado.';
$lang['contract_sign_reminder_every_days']                  = 'Enviar recordatorio de firma cada (días)';
$lang['contract_sign_reminders']                            = 'Recordatorios de firma';
$lang['payment_gateway_fee_percentage']                     = 'Porcentaje de la tarifa';
$lang['payment_gateway_fee_fixed']                          = 'Tarifa fija';
$lang['payment_attempt_amount']                             = 'Total de la factura';
$lang['payment_attempt_fee']                                = 'Tarifa de pago';
$lang['feature']                                            = 'Característica';
$lang['capabilities']                                       = 'Capacidades';

# Version 3.1.0
$lang['filter_boolean_yes'] = 'Sí';
$lang['filter_boolean_no'] = 'No';
$lang['filter_matchtype_and'] = 'y';
$lang['filter_matchtype_or'] = 'o';
$lang['filter_share'] = '¿Compartir con otros miembros del equipo?';
$lang['filter_mark_as_default'] = 'Marcar como predeterminado';
$lang['filter_unmark_as_default'] = 'Desmarcar como predeterminado';
$lang['filter_save'] = 'Guardar';
$lang['filter_name'] = 'Nombre del filtro';
$lang['filter_apply'] = 'Aplicar';
$lang['filter_apply_and_save'] = 'Aplicar y guardar';
$lang['filter_use_dynamic_dates'] = 'Usar fechas dinámicas';
$lang['filter_new'] = 'Nuevo filtro';
$lang['filter_clear_active'] = 'Limpiar filtro';
$lang['filter_edit'] = 'Editar';
$lang['filter_create'] = 'Crear filtro';
$lang['filter_update'] = 'Actualizar filtro';
$lang['filter_delete'] = 'Eliminar filtro';
$lang['filter_cannot_be_shared'] = 'Este filtro no puede ser compartido con otros miembros del equipo ya que contiene reglas que pueden no estar disponibles para todos los usuarios.';
$lang['filter_add_rule'] = 'Añadir regla';

$lang['filter_operator_is_empty'] = 'es desconocido';
$lang['filter_operator_is_not_empty'] = 'es conocido';
$lang['filter_operator_equal'] = 'es igual a';
$lang['filter_operator_not_equal'] = 'no es igual a';
$lang['filter_operator_begins_with'] = 'comienza con';
$lang['filter_operator_not_begins_with'] = 'no comienza con';
$lang['filter_operator_contains'] = 'contiene';
$lang['filter_operator_not_contains'] = 'no contiene';
$lang['filter_operator_ends_with'] = 'termina con';
$lang['filter_operator_not_ends_with'] = 'no termina con';
$lang['filter_operator_in'] = 'en';
$lang['filter_operator_not_in'] = 'no en';
$lang['filter_operator_between'] = 'entre';
$lang['filter_operator_not_between'] = 'no entre';
$lang['filter_operator_dynamic'] = 'dinámico';
$lang['filter_operator_greater'] = 'mayor que';
$lang['filter_operator_greater_or_equal'] = 'mayor o igual que';
$lang['filter_operator_less'] = 'menor que';
$lang['filter_operator_less_or_equal'] = 'menor o igual que';
$lang['no_filters_found'] = 'No se encontraron filtros guardados, empieza creando un nuevo filtro.';

$lang['staff_logged_in_public_ticket_warning'] = 'Estás conectado como miembro del personal, si deseas responder al ticket como personal, debes hacerlo desde el área de administración.';

# Version 3.1.2
$lang['allow_non_admin_members_to_delete_tickets_and_replies'] = 'Permitir que los miembros del personal no administradores eliminen tickets y respuestas';
$lang['default_filter_info'] = 'El filtro se marcará como predeterminado solo para tu cuenta.';
$lang['required_register_fields'] = 'Campos obligatorios para el registro (área de clientes)';

# Version 3.1.6
$lang['allow_non_admin_members_to_edit_ticket_messages'] = 'Permitir que los miembros del personal no administradores editen mensajes de tickets';
$lang['proposal_auto_convert_to_invoice_on_client_accept'] = 'Convertir automáticamente la propuesta en factura después de que el cliente la acepte (solo para propuestas relacionadas con clientes)';
$lang['invoice_activity_auto_converted_from_proposal']      = 'Factura creada automáticamente a partir de la propuesta con el número %s';
$lang['clients_proposal_invoiced_successfully'] = 'Gracias por aceptar la propuesta. Por favor, revisa la factura creada para la propuesta';

# Version 3.2.0
$lang['ideal_payment_failure_message'] = 'El pago falló o fue cancelado.';
$lang['ideal_api_publishable_key'] = 'Clave publicable de Stripe';
$lang['ideal_api_secret_key'] = 'Clave secreta API de Stripe';
$lang['filters'] = 'Filtros';
$lang['view_financial_stats'] = 'Ver estadísticas financieras';
$lang['timesheet_summary'] = 'Resumen de hojas de tiempo';
$lang['timesheet_detailed_overview'] = 'Visión detallada de las hojas de tiempo registradas y horas';
$lang['ticket_request_history'] = 'Historial de solicitudes';
$lang['integrations'] = 'Integraciones';
$lang['settings_group_other'] = 'Otros';
$lang['settings_group_configure_features'] = 'Configurar características';
$lang['disable_ticket_public_url'] = 'Deshabilitar URL pública del ticket';

# Version 3.2.1
$lang['ideal_gateway_keys_not_configured'] = 'La API del Gateway de pagos iDEAL no está configurada.';
$lang['ideal_gateway_cannot_be_activated_keys_not_configured'] = 'El Gateway de pagos iDEAL no se puede activar porque la clave publicable/API de Stripe no está configurada.';
$lang['company_logo_light'] = 'Logo de la empresa (claro)';
$lang['welcome_back_sign_in'] = 'Bienvenido, por favor inicia sesión en tu panel de control';