<?php

# Versión 2.3.0
$lang['survey_submit']                                    = 'Enviar';
$lang['new_survey']                                       = 'Nueva encuesta';
$lang['surveys']                                          = 'Encuestas';
$lang['survey']                                           = 'Encuesta';
$lang['survey_lowercase']                                 = 'encuesta';
$lang['survey_no_mail_lists_selected']                    = 'No se han seleccionado listas de correos';
$lang['survey_send_success_note']                         = 'Todos los correos electrónicos de la encuesta (%s) serán enviados a través de CRON';
$lang['survey_result']                                    = 'Resultado para la encuesta: %s';
$lang['question_string']                                  = 'Pregunta';
$lang['question_field_string']                            = 'Campo';
$lang['survey_list_view_tooltip']                         = 'Ver encuesta';
$lang['survey_list_view_results_tooltip']                 = 'Ver resultados';
$lang['survey_add_edit_subject']                          = 'Asunto de la encuesta';
$lang['survey_add_edit_email_description']                = 'Descripción de la encuesta (Descripción en correo electrónico)';
$lang['survey_include_survey_link']                       = 'Incluir enlace de encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields']        = 'Campos personalizados disponibles desde listas de correos';
$lang['survey_mail_lists_custom_fields_tooltip']          = 'Los campos personalizados se pueden usar en el editor de correo electrónico.';
$lang['survey_add_edit_short_description_view']           = 'Descripción corta de la encuesta (Descripción de vista)';
$lang['survey_add_edit_from']                             = 'De (aparece en el correo)';
$lang['survey_add_edit_redirect_url']                     = 'URL de redirección de la encuesta';
$lang['survey_add_edit_red_url_note']                     = 'Cuando el usuario termine la encuesta, ¿a dónde se debe redirigir? (dejar en blanco para usar la URL del sitio)';
$lang['survey_add_edit_disabled']                         = 'Deshabilitado';
$lang['survey_add_edit_only_for_logged_in']               = 'Solo para participantes registrados (personal, clientes)';
$lang['send_survey_string']                               = 'Enviar encuesta';
$lang['survey_send_mail_list_clients']                    = 'Clientes';
$lang['survey_send_mail_list_staff']                      = 'Personal';
$lang['survey_send_mail_lists_string']                    = 'Listas de correo';
$lang['survey_send_mail_lists_note_logged_in']            = 'Nota: Si envías la encuesta a listas de correos, "Solo para participantes registrados" debe desmarcarse';
$lang['survey_send_string']                               = 'Enviar';
$lang['survey_send_to_total']                             = 'Enviar a un total de %s correos electrónicos';
$lang['survey_send_till_now']                             = 'Hasta ahora';
$lang['survey_send_finished']                             = 'Encuesta enviada finalizada: %s';
$lang['survey_added_to_queue']                            = 'Esta encuesta ha sido añadida a la cola de cron en %s';
$lang['survey_questions_string']                          = 'Preguntas';
$lang['survey_insert_field']                              = 'Insertar campo';
$lang['survey_field_checkbox']                            = 'Casilla de verificación';
$lang['survey_field_radio']                               = 'Radio';
$lang['survey_field_input']                               = 'Campo de entrada';
$lang['survey_field_textarea']                            = 'Área de texto';
$lang['survey_question_required']                         = 'Requerido';
$lang['survey_question_only_for_preview']                 = 'Solo para vista previa';
$lang['survey_create_first']                              = 'Primero debes crear la encuesta, luego podrás insertar las preguntas.';
$lang['survey_dt_name']                                   = 'Nombre';
$lang['survey_dt_total_questions']                        = 'Total de preguntas';
$lang['survey_dt_total_participants']                     = 'Total de participantes';
$lang['survey_dt_date_created']                           = 'Fecha de creación';
$lang['survey_dt_active']                                 = 'Activo';
$lang['survey_text_questions_results']                    = 'Resultado de preguntas de texto';
$lang['survey_view_all_answers']                          = 'Ver todas las respuestas';
$lang['settings_survey_send_emails_per_cron_run']         = 'Cuántos correos electrónicos enviar por hora';
$lang['settings_survey_send_emails_per_cron_run_tooltip'] = 'Esta opción se utiliza cuando se envían encuestas. El cron de la encuesta enviará X correos electrónicos por hora. Algunos proveedores de alojamiento tienen límites para el envío de correos electrónicos por hora.';
$lang['settings_cron_surveys']                            = 'Encuestas';
$lang['survey_no_questions']                              = 'Esta encuesta aún no tiene preguntas agregadas.';
$lang['survey_send_to_lists']                             = 'Enviar encuesta a listas';
$lang['survey_send_notice']                               = 'Los correos electrónicos se enviarán a través de CRON JOB por hora.';
$lang['survey_customers_all']                             = 'Todos los clientes';

# Listas de correo
$lang['mail_lists']                            = 'Listas de correo';
$lang['mail_list']                             = 'Lista de correo';
$lang['new_mail_list']                         = 'Nueva lista de correo';
$lang['mail_list_lowercase']                   = 'lista de correo';
$lang['custom_field_deleted_success']          = 'Campo personalizado eliminado';
$lang['custom_field_deleted_fail']             = 'Error al eliminar el campo personalizado';
$lang['email_removed_from_list']               = 'Correo electrónico eliminado de la lista';
$lang['email_remove_fail']                     = 'No se pudo eliminar el correo electrónico de la lista';
$lang['staff_mail_lists']                      = 'Lista de correo del personal';
$lang['clients_mail_lists']                    = 'Lista de correo de clientes';
$lang['mail_list_total_imported']              = 'Total de correos electrónicos importados: %s';
$lang['mail_list_total_duplicate']             = 'Total de correos electrónicos duplicados: %s';
$lang['mail_list_total_failed_to_insert']      = 'Correos electrónicos que no se pudieron insertar: %s';
$lang['mail_list_total_invalid']               = 'Direcciones de correo inválidas: %s';
$lang['cant_edit_mail_list']                   = 'No puedes editar esta lista, esta lista se llena automáticamente';
$lang['mail_list_add_edit_name']               = 'Nombre de la lista de correo';
$lang['mail_list_add_edit_customfield']        = 'Agregar campo personalizado';
$lang['mail_lists_view_email_email_heading']   = 'Correo electrónico';
$lang['mail_lists_view_email_date_heading']    = 'Fecha de adición';
$lang['add_new_email_to']                      = 'Agregar nuevo correo a %s';
$lang['import_emails_to']                      = 'Importar correos a %s';
$lang['mail_list_new_email_edit_add_label']    = 'Correo electrónico';
$lang['mail_list_import_file']                 = 'Archivo de importación';
$lang['mail_list_available_custom_fields']     = 'Campos personalizados disponibles';
$lang['submit_import_emails']                  = 'Importar correos electrónicos';
$lang['btn_import_emails']                     = 'Importar correos electrónicos (Excel)';
$lang['btn_add_email_to_list']                 = 'Agregar correo a esta lista';
$lang['mail_lists_dt_list_name']               = 'Nombre de la lista';
$lang['mail_lists_dt_datecreated']             = 'Fecha de creación';
$lang['mail_lists_dt_creator']                 = 'Creador';
$lang['email_added_to_mail_list_successfully'] = 'Correo electrónico añadido a la lista';
$lang['email_is_duplicate_mail_list']          = 'El correo electrónico ya existe en esta lista';