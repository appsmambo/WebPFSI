<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pfsi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'tZOX`>e5< W~9vkmsQ-BHe97skNR[1VGO_9V-kZA^lT+:&b|;Ha[|9-Z(:PdT0xL');
define('SECURE_AUTH_KEY', 'y,z_l w|<GmBe[&HS)@1p:ppto-g+XIS<-KHEjcX(AA[765q<6(EP6-V)GSSx&}>');
define('LOGGED_IN_KEY', 'ar-]6mg$0KslW<~<||acePaP}a4iQp7{23%/D*UyH1+2%c+#y&j#gY9MWRrh~g{V');
define('NONCE_KEY', 'Y>=tFe,g%L+C.g|X2*io:+5CPyW>Biv2T0M^]+]T}P|dP>|S/gOo3>M}iChm=pW!');
define('AUTH_SALT', 'jT~NUlz2br^Gw|So<eV/r<?M`:)aqSVXT/0OL+nFCQ7/<yurB]+;ip5K<VhIi +u');
define('SECURE_AUTH_SALT', 'O[o&~KJ`^bgR=cLah8( *yqjE-d=ZsXM@rzY#-+hwt1z3#38juJC+=xB8v?iww2+');
define('LOGGED_IN_SALT', 'hnvHWm;7k}v+SpREY~_a@2Gd_8rT3 Oe[M-&{ifkOiQk-%fT-|aZxC~._-[n*/-F');
define('NONCE_SALT', 'v&9kTs0$@sJn]?|u0?H:Q$z)<Y6|-Q}mo+4i3&aC*Rjw.U0/D5oX[SWXAe c4>#~');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

