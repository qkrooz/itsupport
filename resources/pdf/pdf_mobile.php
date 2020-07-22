<?php

        date_default_timezone_set('UTC');

        require('wordwrap.php');

        $User = $_GET['user'];
        $SSO = $_GET['sso'];
        $ST = $_GET['no'];
        $Brand = $_GET['brand'];
        $Model = $_GET['model'];
        $Dept = $_GET['dep'];
        $Specs = $_GET['specs'];
        
        define('Bullet', chr(149));

        $date = date("F j, Y");
        
        
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare '));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Responsabilidad y manejo del equipo de IT de la compañía.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',14);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Política de uso de dispositivo Móvil.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Este dispositivo Móvil (*) fue asignado a '));

        $pdf->SetFont('Arial','B',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$User);

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' con numero de reloj '));

        $pdf->SetFont('Arial','B',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$SSO);

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' para su uso exclusivo del negocio como herramienta de trabajo por la duración del contrato de trabajo establecido con '));
        
        $pdf->SetFont('Arial','B',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5, utf8_decode('Critikon de México S. de R.L. de C.V. '));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Este dispositivo Móvil (*) es su responsabilidad, el cuidado del mismo desde el momento que fue asignado a usted y podrá ser o no transferido con usted en cualquier movimiento de posición dentro de GE. '));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Únicamente está permitido la asignación de un equipo de cómputo por empleado. El gerente del área en conjunto con el de Sistemas y gerencia general deberán aprobar cualquier equipo adicional.'));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    La compañía es dueña del equipo, usted o el departamento para el cual fue asignado dicho equipo no puede hacer cambios y/o asignaciones sin la autorización previa del departamento de sistemas'));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Cualquier robo deberá ser reportado'));

        $pdf->SetFont('Arial', 'u', 12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' inmediatamente'));

        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' a su jefe inmediato, Seguridad, Sistemas, y Recursos Humanos.'));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    GE provee recursos de comunicación e información'));

        $pdf->SetFont('Arial', 'u', 12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' únicamente'));
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' para actividades de trabajo legítimas. Se debe de mantener el uso personal no relacionado al negocio a niveles razonables. '));

        $pdf->SetFont('Arial','B',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Esto NO incluye: Descargar música, películas, material inapropiado o intercambio indiscriminado de correos electrónicos no relacionados al trabajo. '));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('NOTA: Cualquier duda sobre este punto, consultarlo con el departamento de Sistemas.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    El empleado debe estar consiente que GE monitorea todo el tráfico de internet y correo electrónico (en común acuerdo a lo establecido por las leyes locales) y a su vez monitorea regularmente los equipos servidores para asegurar el uso apropiado de dichos recursos.'));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Corporativo de GE Healthcare tiene la facultad de realizar auditorías automáticas de sistemas e información y se llevarán a cabo regularmente y la información obtenida es completamente detallada, por lo que '));

        $pdf->SetFont('Arial', 'b', 12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode('NO'));

        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' existe privacidad alguna de cualquier correo electrónico o páginas de internet visitadas haciendo uso de una computadora de GE y/o con cuentas y acceso a la red de la empresa.'));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Usted representa a GE cuando hace uso de los recursos electrónicos de la compañía. Tenga presente que deja un registro electrónico que apunta a GE en el momento en que accesa a sitios de Internet o envía un correo electrónico. '));
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Queda prohibido accesar o transmitir material que es ilegal, discriminatorio, obsceno, sexualmente explicito, racista, violento y/o inapropiado, descargar, intercambiar, enviar o hacer cualquier clase de uso de material ilegal o pornográfico.'));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    El negocio cuenta con filtros para revisar todo el tráfico de Internet. Estos filtros bloquean el acceso a sitios que no están relacionados con el negocio e incluye categorías tales como: Terrorismo, Juegos, Sexo, Citas, Sitios de conversación (chats), Cultos y Violencia. El filtro se compone de una lista la cual está en constante actualización; así es que usted no debe de asumir que el acceso a un sitio es permitido simplemente porque no está bloqueado en este momento.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('IT Support Department'));
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare - BOP                                                                     Date: '.$date));

        $pdf->AddPage();
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare '));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Responsabilidad y manejo del equipo de IT de la compañía.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    GE no permite el uso de piratería o instalación de software ilegitimo en el ambiente de trabajo, incluyendo software que puede dañar y/o comprometer la integridad y seguridad del equipo e información y que este fuera del software estándar autorizado. En caso de ser necesaria la instalación de software adicional por cuestiones estrictamente de trabajo el departamento de sistemas se encargará de la compra y/o instalación de este.'));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Tenga presente que Internet y el correo electrónico no son siempre seguros así es que tómelo en cuenta y sea cuidadoso cuando envié información que sea clasificada como confidencial o propiedad de la empresa.'));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Las políticas de seguridad de información de GE Healthcare prohíben sacar información relacionada a GE a dispositivos externos como memorias USB, discos duros, CD, teléfonos celulares, entre otros. Si tus actividades laborales conllevan el traspaso de información entre dispositivos, favor de contactar al departamento de Sistemas.'));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    La responsabilidad del equipo deja de ser efectiva en el momento en que le sea asignado otro equipo, transferido a otro sitio de GE o deje de ser empleado activo. El empleado tiene la responsabilidad de entregar el equipo asignado al departamento de Recursos Humanos.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('NOTA: En caso de incumplir cualquiera de los puntos anteriores y/o presentar algún incidente tal como daño, robo o pérdida del equipo, el negocio realizara la investigación pertinente a el caso y la gerencia determinara la responsabilidad correspondiente.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('*Favor de revisar el apartado de recomendaciones a seguir para el cuidado de su herramienta de trabajo.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('IT Support Department'));
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare - BOP                                                                     Date: '.$date));

        $pdf->AddPage();
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare '));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Responsabilidad y manejo del equipo de IT de la compañía.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Recomendaciones para el cuidado de tu equipo.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Generar una copia de seguridad en los archivos compartidos de la empresa de su información más importante, por lo menos, una vez al mes.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Da mantenimiento preventivo (limpieza) a tu equipo de manera constante.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Evita manejar líquidos en tu área de trabajo y/o cerca de tu equipo.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Rechaza archivos y/o ligas a sitios que recibas por medio de correo electrónico de parte de direcciones que no reconozcas. Reportar inmediatamente al departamento de Sistemas.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	No compartas tu contraseña con otras personas.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Procura llevar tu equipo contigo al dejar la oficina o dejarlo guardado bajo llave.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Queda prohibido dejar tu equipo dentro de tu automóvil, ya sea a la vista o dentro del maletero. Recuerda que es tu responsabilidad dentro y fuera de la empresa.'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Cualquier anormalidad que detecte en el funcionamiento de su equipo, favor de reportar de inmediato al departamento de Sistemas.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('IT Support Department'));
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare - BOP                                                                     Date: '.$date));

        $pdf->AddPage();
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare '));
        $pdf->ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Responsabilidad y manejo del equipo de IT de la compañía.'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('(*) Datos del Usuario:'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Nombre: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$User);
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('SSO: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$SSO);
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Departamento: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$Dept );
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('(*) Datos del Equipo:'));
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Marca: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$Brand);
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Modelo: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$Model);
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('IMEI: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$ST );
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Capacidad: '));

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$Specs );
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Color: Default'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('          _________________________                                            _________________________'));
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('               Usuario Quien Recibe                                                             Gerente de Usuario'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();    
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('          _________________________                                            _________________________'));
        $pdf->ln();

        $pdf->SetFont('Arial','b',12);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('                    Responsable IT                                                                    Responsable RH'));
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Política de uso de equipo de cómputo.'));
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Este dispositivo Móvil (*) fue asignado a '));

        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$User);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' con numero de reloj '));

        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,$SSO);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' para su uso exclusivo del negocio como herramienta de trabajo por la duración del contrato de trabajo establecido con '));
        
        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5, utf8_decode('Critikon de México S. de R.L. de C.V. '));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Este dispositivo Móvil (*) es su responsabilidad, el cuidado del mismo desde el momento que fue asignado a usted y podrá ser o no transferido con usted en cualquier movimiento de posición dentro de GE. '));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Únicamente está permitido la asignación de un equipo de cómputo por empleado. El gerente del área en conjunto con el de Sistemas y gerencia general deberán aprobar cualquier equipo adicional.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    La compañía es dueña del equipo, usted o el departamento para el cual fue asignado dicho equipo no puede hacer cambios y/o asignaciones sin la autorización previa del departamento de sistemas'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Cualquier robo deberá ser reportado'));

        $pdf->SetFont('Arial', 'u', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' inmediatamente'));

        $pdf->SetFont('Arial', '', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' a su jefe inmediato, Seguridad, Sistemas, y Recursos Humanos.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    GE provee recursos de comunicación e información'));

        $pdf->SetFont('Arial', 'u', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode(' únicamente'));
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode(' para actividades de trabajo legítimas. Se debe de mantener el uso personal no relacionado al negocio a niveles razonables. '));
        $pdf->ln(2);

        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Esto NO incluye: Descargar música, películas, material inapropiado o intercambio indiscriminado de correos electrónicos no relacionados al trabajo. '));
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','B',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('NOTA: Cualquier duda sobre este punto, consultarlo con el departamento de Sistemas.'));
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    El empleado debe estar consiente que GE monitorea todo el tráfico de internet y correo electrónico (en común acuerdo a lo establecido por las leyes locales) y a su vez monitorea regularmente los equipos servidores para asegurar el uso apropiado de dichos recursos.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Corporativo de GE Healthcare tiene la facultad de realizar auditorías automáticas de sistemas e información y se llevarán a cabo regularmente y la información obtenida es completamente detallada, por lo que '));

        $pdf->SetFont('Arial', 'b', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf -> write(5, utf8_decode('NO'));

        $pdf->SetFont('Arial', '', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 2);
        $pdf -> write(5, utf8_decode(' existe privacidad alguna de cualquier correo electrónico o páginas de internet'));
        $pdf->ln(2);

        $pdf->SetFont('Arial', '', 4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 2);
        $pdf -> write(5, utf8_decode(' visitadas haciendo uso de una computadora de GE y/o con cuentas y acceso a la red de la empresa.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Usted representa a GE cuando hace uso de los recursos electrónicos de la compañía. Tenga presente que deja un registro electrónico que apunta a GE en el momento en que accesa a sitios de Internet o envía un correo electrónico. '));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Queda prohibido accesar o transmitir material que es ilegal, discriminatorio, obsceno, sexualmente explicito, racista, violento y/o inapropiado, descargar, intercambiar, enviar o hacer cualquier clase de uso de material ilegal o pornográfico.'));
        $pdf->ln(2);
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    El negocio cuenta con filtros para revisar todo el tráfico de Internet. Estos filtros bloquean el acceso a sitios que no están relacionados con el negocio e incluye categorías tales como: Terrorismo, Juegos, Sexo, Citas, Sitios de conversación (chats), Cultos y Violencia. El filtro se compone de'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('una lista la cual está en constante actualización; así es que usted no debe de asumir que el acceso a un sitio es permitido simplemente porque no está bloqueado en este momento.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    GE no permite el uso de piratería o instalación de software ilegitimo en el ambiente de trabajo, incluyendo software que puede dañar y/o comprometer la integridad y seguridad del equipo e información y que este fuera del software estándar autorizado. En caso de ser necesaria la instalación'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('de software adicional por cuestiones estrictamente de trabajo el departamento de sistemas se encargará de la compra y/o instalación de este.'));
        $pdf->ln(2);
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Tenga presente que Internet y el correo electrónico no son siempre seguros así es que tómelo en cuenta y sea cuidadoso cuando envié información que sea clasificada como confidencial o propiedad de la empresa.'));
        $pdf->ln(2);
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    Las políticas de seguridad de información de GE Healthcare prohíben sacar información relacionada a GE a dispositivos externos como memorias USB, discos duros, CD, teléfonos celulares, entre otros. Si tus actividades laborales conllevan el traspaso de información entre dispositivos,'));
        $pdf->ln(2);
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('favor de contactar al departamento de Sistemas.'));
        $pdf->ln(2);
        
        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,Bullet.'      ');

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('  	    La responsabilidad del equipo deja de ser efectiva en el momento en que le sea asignado otro equipo, transferido a otro sitio de GE o deje de ser empleado activo. El empleado tiene la responsabilidad de entregar el equipo asignado al departamento de Recursos Humanos.'));
        $pdf->ln(2);
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','b',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('NOTA: En caso de incumplir cualquiera de los puntos anteriores y/o presentar algún incidente tal como daño, robo o pérdida del equipo, el negocio realizara la investigación pertinente a el caso y la gerencia determinara la responsabilidad correspondiente.'));
        $pdf->ln(2);
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','b',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('*Favor de revisar el apartado de recomendaciones a seguir para el cuidado de su herramienta de trabajo.'));

        $pdf->SetFont('Arial','b',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('Recomendaciones para el cuidado de tu equipo.'));
        $pdf->ln(2);
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Generar una copia de seguridad en los archivos compartidos de la empresa de su información más importante, por lo menos, una vez al mes.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Da mantenimiento preventivo (limpieza) a tu equipo de manera constante.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Evita manejar líquidos en tu área de trabajo y/o cerca de tu equipo.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Rechaza archivos y/o ligas a sitios que recibas por medio de correo electrónico de parte de direcciones que no reconozcas. Reportar inmediatamente al departamento de Sistemas.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	No compartas tu contraseña con otras personas.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Procura llevar tu equipo contigo al dejar la oficina o dejarlo guardado bajo llave.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Queda prohibido dejar tu equipo dentro de tu automóvil, ya sea a la vista o dentro del maletero. Recuerda que es tu responsabilidad dentro y fuera de la empresa.'));
        $pdf->ln(2);

        $pdf->SetFont('Arial','',4);
        $pdf->SetTextColor(0, 0, 0);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('-        	Cualquier anormalidad que detecte en el funcionamiento de su equipo, favor de reportar de inmediato al departamento de Sistemas.'));
        $pdf->ln();
        $pdf->ln();
        
        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('IT Support Department'));
        $pdf->ln();

        $pdf->SetFont('Arial','B',11);
        $pdf->SetTextColor(128, 128, 128);
        $ns = $pdf->WordWrap($text, 120);
        $pdf->Write(5,utf8_decode('GE Healthcare - BOP                                                                     Date: '.$date));


        $pdf->Output();
    ?>