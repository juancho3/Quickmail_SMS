<?php

$string['pluginname'] = 'Pasarela de Correos/SMS';
$string['quickmail:cansend'] = "Permitir a los usuarios mandar Correos/SMS";
$string['quickmail:canconfig'] = "Permitir a los usuarios configurar la Pasarela de Correos/SMS";
$string['quickmail:canimpersonate'] = "Permitir a los usuarios loguearse como otros usuarios y ver el hist&oacute;rico de Correos/SMS";
$string['quickmail:allowalternate'] = "Permitir a los usuarios a&ntilde;adir un corre o n&uacute;mero de tel&eacute;fono alternativo dentro de los cursos";
$string['quickmail:addinstance'] = "A&ntilde;adir bloque de pasarela de SMS";
$string['backup_history'] = 'Incluir hist&oacute;rico de correos/SMS';
$string['restore_history'] = 'Resturar hist&oacute;rico de Correos/SMS';
$string['overwrite_history'] = 'Sobre-escribir hist&oacute;rico de Correos/SMS';
$string['alternate'] = 'Correos Alternativos';
$string['composenew'] = 'Crear un nuevo mensaje';
$string['email'] = 'Correo';
$string['drafts'] = 'Ver Borradores';
$string['history'] = 'Ver Hist&oacute;rico';
$string['log'] = 'Ver Hist&oacute;rico';
$string['from'] = 'De';
$string['selected'] = 'Destinatarios seleccionados';
$string['add_button'] = 'Poner';
$string['remove_button'] = 'Quitar';
$string['add_all'] = 'Poner Todos';
$string['remove_all'] = 'Quitar Todos';
$string['role_filter'] = 'Filtro de Rol';
$string['no_filter'] = 'Sin filtro';
$string['potential_users'] = 'Destinatarios potenciales';
$string['potential_sections'] = 'Secciones potenciales';
$string['no_section'] = 'No en una secci&oacute;n';
$string['all_sections'] = 'Todas las secciones';
$string['attachment'] = 'Adjunto(s)';
$string['subject'] = 'Asunto';
$string['sms'] = 'SMS (Max. 150)';
$string['message'] = 'Correo electr&oacute;nico';
$string['send_email'] = 'Enviar Correo';
$string['save_draft'] = 'Grabar Borrador';
$string['actions'] = 'Acciones';
$string['signature'] = 'Firmas';
$string['delete_confirm'] = '&iquest;Est&aacute; seguro de borrar el mensaje con los siguientes detalles: {$a}?';
$string['title'] = 'T&iacute;tulo';
$string['sig'] ='Firma';
$string['default_flag'] = 'Por defecto';
$string['config'] = 'Configuraci&oacute;n';
$string['receipt'] = 'Recibir una copia';
$string['receipt_help'] = 'Recibir una copia del mensaje que se env&iacute;a';

$string['no_alternates'] = 'No hay correos alternativos para {$a->fullname}. Contin&uacute;e para crear uno.';

$string['select_users'] = 'Seleccione Usuarios ...';
$string['select_groups'] = 'Seleccione Secciones ...';

$string['moodle_attachments'] = 'Adjuntos de Moodle ({$a})';
$string['download_all'] = 'Descargar Todo';
$string['qm_contents'] = 'Descargar contenido del archivo';

// Config form strings
$string['allowstudents'] = 'Permitir a los estudiantes utilizar la pasarela';
$string['select_roles'] = 'Roles a filtrar por';
$string['reset'] = 'Restaurar las opciones por defecto';

$string['no_type'] = '{$a} no est&aacute; en la vista de tipos aceptados. Por favor utilice la pasaralela apropiadamente.';
$string['no_email'] = 'No se pudo enviar el mensaje a {$a->firstname} {$a->lastname}.';
$string['no_log'] = 'No hay hist&oacute;rico de correos a&uacute;n.';
$string['no_drafts'] = 'No hay borradores de mensajes.';
$string['no_subject'] = 'Debe indicar el asunto del mensaje';
$string['no_course'] = 'Identificador de curso inv&aacute;lido para {$a}';
$string['no_permission'] = 'No tiene permisos para enviar mensajes con la pasarela de Correos/SMS';
$string['no_usergroups'] = 'No hay grupos de usuarios susceptibles de env&iacute;o de mensajes.';
$string['no_users'] = 'No hay usuarios susceptibles de env&iacute;o de mensajes.';
$string['no_selected'] = 'Debe seleccionar los usuarios a los que mandar el mensaje.';
$string['not_valid'] = 'No es un tipo de visor v&aacute;lido para log de mensajes: {$a}';
$string['not_valid_user'] = 'No est&aacute; autorizado a ver un hist&oacute;rico de correos diferente.';
$string['not_valid_action'] = 'Debe indicar una acci&oacute;n v&aacute;lida para {$a}';
$string['not_valid_typeid'] = 'Debe indicar un correo v&aacute;lido para {$a}';
$string['delete_failed'] = 'Error al borrar el mensaje';
$string['required'] = 'Por favor, rellene los campos obligatorios.';
$string['prepend_class'] = 'A&ntilde;adir delante el nombre del curso.';
$string['prepend_class_desc'] = 'A&ntilde;adir en el asunto del correo el nombre corto del curso al principio.';
$string['ferpa'] = 'FERPA Mode';
$string['ferpa_desc'] = 'Allows the system to behave either according to the course groupmode setting, ignoring the groupmode setting but separating groups, or ignoring groups altogether.';
$string['smsmail'] = 'Email para SMS';
$string['smsmail_desc'] = 'Direcci&oacute;n de correo para hacer el env&iacute;o de SMS';
$string['smsprefix'] = 'Prefijo SMS';
$string['smsprefix_desc'] = 'Prefijo SMS a a&ntilde;adir en los mensajes SMS salientes';
$string['strictferpa'] = 'Siempre grupos separados';
$string['courseferpa'] = 'Respetar el modo del curso';
$string['noferpa'] = 'No hay Grupo de Respeto';
$string['courselayout'] = 'Formato del curso';
$string['courselayout_desc'] = 'Utilizar p&aacute;gina de formato del _Course_ para crear la p&aacute;gina de bloque. Habilite esta opci&oacute;n si hay fallos en el ancho de la p&aacute;gina.';

$string['are_you_sure'] = '&iquest;Est&aacute; seguro en borrar el mensaje {$a->title}? No se puede deshacer esta acci&oacute;n.';

// Alternate Email strings
$string['alternate_new'] = 'A&ntilde;adir direcci&oacute;n alternativa';
$string['sure'] = '&iquest;Est&aacute; seguro en borrar la direcci&oacute;n {$a->address}? No se puede deshacer esta acci&oacute;n.';
$string['valid'] = 'Estado de activaci&oacute;n';
$string['approved'] = 'Aprobado';
$string['waiting'] = 'Esperando';
$string['entry_activated'] = 'El correo alternativo {$a->address} ya puede ser usado en el curso {$a->course}.';
$string['entry_key_not_valid'] = 'El link de activaci&oacute;n para la direcci&oacute;n {$a->address} ya no es v&aacute;lido. Contin&uacute;e para enviar un nuevo link de activaci&oacute;n.';
$string['entry_saved'] = 'El correo alternativo {$a->address} ha sido grabado.';
$string['entry_success'] = 'Se ha enviado un correo de confirmaci&oacute;n a la direcci&oacute;n {$a->address}. El correo contiene instrucciones para dejar activada la nueva direcci&oacute;n.';
$string['entry_failure'] = 'No se pudo enviar un correo a la direcci&oacute;n {$a->address}. Por favor, verifique que la direcci&oacute;n {$a->address} existe, y pruebe de nuevo.';
$string['alternate_from'] = 'Moodle: Pasarela de Correos/SMS';
$string['alternate_subject'] = 'Verificaci&oacute;n de la direcci&oacute;n alternativa';
$string['alternate_body'] = '
<p>
El usuario {$a->fullname} a&ntilde;adi&oacute; la direcci&oacute;n {$a->address} como una direcci&oacute;n alternativa para los mensajes del curso {$a->course}.
</p>

<p>
El objetivo de este correo es verificar que la nueva direcci&oacute;n existe, y que el propietario
de esta direcci&oacute;n dispone de los permisos adecuados en Moodle.
</p>

<p>
Si desea completar el proceso de verificaci&oacute;n, por favor haga click en la siguiente URL:
{$a->url}.
</p>

<p>
Si este correo no tiene ning&uacute;n sentido para usted, problablemente se haya facilitado
su direcci&oacute;n por error. Simplemente borre este mensaje.
</p>

Muchas gracias por su atenci&oacute;n.
';
