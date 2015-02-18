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
define('AUTH_KEY', 'p^h+DY_kgz@=9+hoOe&GQ5lb1_phq}L*_f6SsMzs5!xYC=.y^oE4`5lhn-8wLXW5');
define('SECURE_AUTH_KEY', 'z/lO2*|ij8#eJ2/!?,XP}YHc+Jm.5<*+C!sMcW07:S{)>AQ-aVXTT`e10r+2e-eF');
define('LOGGED_IN_KEY', 't_p!8HQ:q@!]n%Ee+2+rn%$J/3m)+Iu|q:,Q-S7Qw|D@96l$V~OJ@(XGi!Ex+5r]');
define('NONCE_KEY', 'V7sh9?9IWS ]>v+Bq^|#EaM9RT=SC=ZS+Q2r&=VC5-?.~3!)Ikj|cO~xCf`2@{)K');
define('AUTH_SALT', 'jnpJS>:N+V5Kfndv(*+~`L$L&PXLQx-2hu~AC1+i.CnUx7$8-v+0tH@Qz_t5m+5I');
define('SECURE_AUTH_SALT', '(/E0q<`?5a<r]x!A/ao{B=[LtgX8LdyU&1U^d`u_<PQ4 XaPux8b1gJ*VN-J.=R ');
define('LOGGED_IN_SALT', 'MtY^-t]*;.Z;VLv.]m2NeW6DCYQ]*oZT1D:e#Q-%o1[)T,O4+}BB%C<g%h^Nm)jp');
define('NONCE_SALT', '7T}SPJG](B);IH9A`xR-F=XxqOKx<wcz/I}|qe)FnG11F0K^Z~hK7mtVp]CrT]A:');

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

