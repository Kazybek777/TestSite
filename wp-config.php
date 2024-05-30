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
define( 'DB_NAME', 'TestSite' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'B6wrQNN3^[?04Va[R#e#6M=F5H4;{?SpB 94Wl<!QVULww+]~Is{$2~-?*-^&.Oa' );
define( 'SECURE_AUTH_KEY',  'O:eNAA|*6AC2_GR#cQ6oQY[)pg|XGx<0GHloD[bG*`FdY)A%v<S@tn;}P?5OR&R2' );
define( 'LOGGED_IN_KEY',    '7iqL}32eNSx*h%D`r;^E;KFK,mI;qmUM$u+O$$f8MRGL0+sl,i65wxiQY>H+O685' );
define( 'NONCE_KEY',        '#K+e~70?XEo1ri^|!{a5>&Bu$~,wu?b=lavfU[4^Bp+eioJp|oCAWy&-?/aFwUtH' );
define( 'AUTH_SALT',        'e<YQnpa76z_p&?^1tHtk[;af!CQI$E$mK5V61^sIWr;L0xEUneRiFB`HR<rTKe-E' );
define( 'SECURE_AUTH_SALT', ',{g%#;symX?@{_&<wsb@.sHtC@7fYsww 1J7rVK;O:/I9J#Upq4{uS?6LD*&laT}' );
define( 'LOGGED_IN_SALT',   'PpVE)>*23~4?GwY/N-!*(G];Qu`i>BK&NM6l*!o_Yk_fU;yu.!?]#w0ojIcyS!k*' );
define( 'NONCE_SALT',       'nv M{<xB9iJU?7!uB@knz b^2}ep`_, }_VJT6zp`td}<YwZ0i&=1B$6-yZ?%E #' );

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
