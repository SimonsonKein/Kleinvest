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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kleinvest' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ' m<*9ary(:&wzdC^E| zu#fO /oe-F}0x01xl`!-f`Nb;6</<~#jJ%PR#}P!AeTY' );
define( 'SECURE_AUTH_KEY',  'Wnacn>A4/2U=m@>XWjk.=Hva~p-8_hKj%nZb:5w3Fu.w/BLe<M?w+8KJw>G$2^j^' );
define( 'LOGGED_IN_KEY',    ';![<V 1u r;Ze,0`:A&FH5<g2b:v}UZ)@T]cLr*} F8hQUd;^^6[Mz#09]=gz+gt' );
define( 'NONCE_KEY',        'n2:`$T[@#r$Y(p#SeuEiI2o>NA3n).(<aod cxT?DrXP^In-:G.9Tt1/s+[<L#L|' );
define( 'AUTH_SALT',        '3E/q9/;(d5J2a !SP4>X)}GDerbu54sfe_fuv}i#/#_H$(lFLPev^s%)wpoi?/SZ' );
define( 'SECURE_AUTH_SALT', 'tbhPP6q]v8iBBnXb}Oy}~n!Xo:X`|0(VAS,C1J,sh`_pU:,v1T`OM$_hVS=Qc!0}' );
define( 'LOGGED_IN_SALT',   '#PMq8,77*sAYzNWn>:XqY:8(<Z0w(`,>=#~>mY$~wxcyLTAKqjWS-&B msSN1RDx' );
define( 'NONCE_SALT',       'HM_oWr.`0!a&Ga!}`vJk <p=|(_Tg$@0XD|jg03bZ^L^,[?}rzkk*=$;r7whrjcM' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
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
