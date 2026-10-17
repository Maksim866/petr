<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite3' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Av@b2g|=tRN&an c)f<DkE$Ts/Y&#:N^[>|(F*rABVZ-%;r<LJT`>6D|ULs`c~&(' );
define( 'SECURE_AUTH_KEY',  '<=koO:+W!e8:w~o94Udesbdxp`uWxd)cX&7=M^=FCP:x1.x[PVa.b-.JIGY,b>_x' );
define( 'LOGGED_IN_KEY',    '|@V[Y^TqX(;Xv9 7Q=px9PWoa-Htd}LlP|y&b? `]Dhm9un0S}t~MjtqaK}PN|Gy' );
define( 'NONCE_KEY',        'xF?L-t@%AdP}vY_(+@LnlgY-/C;:]1uaS^(xihwVugKsE=r+&j<~~|=}Dldk.oto' );
define( 'AUTH_SALT',        ')G-P<Cu9%{Z(mz5djh|9L6Mmv^+4GC|c6<+XF`:Hy3|i{eFJw-f0Gid!8wmRfr/g' );
define( 'SECURE_AUTH_SALT', 'Mt8Ez8pUO]^IQarO6I3?o4DA2ohnO)360uE2xy(>fDB@Es5}37!)8CJg~$SKd@VW' );
define( 'LOGGED_IN_SALT',   '7X`Ku76u`6;*cDPE6w?/ZPa-JYg2T?LU+uj~s}+E[4ImFTE5 y)?5l- CUNAsjFh' );
define( 'NONCE_SALT',       'J`@B}Vs_ek(;n:Tq);nWheX5StC :k*5B$*|M(*0X[+k96>Q*N_Gt`n}T1-2%m#9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
