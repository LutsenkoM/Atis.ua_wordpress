<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'atis');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '< -^90wd2L<s~d+K+ARk1lwC.?i9PIPKx~1s{>$!Oc#|[rf<Zl1]ZIX%d,M3z)G~');
define('SECURE_AUTH_KEY',  'RLs(/JrUdRl1}K)m_l~3_S.HYu`LF.Y8[yKA/^zGHVnQOpy;,l}%s@7%KpPs*n@q');
define('LOGGED_IN_KEY',    'v?T|]1>zmET4g8+Sg>XzE9gs<I%kIaAgM5z&b,Pz5Wg?m:N )u*mznM3z>avZGSj');
define('NONCE_KEY',        'Q2`Q;ZVclHcPNG3;xbU@MhNm=S9)@gAsWTtdRU9wqm)?aZ~$RS$ ZqPXW|9T:cmT');
define('AUTH_SALT',        '(6l4ie1|M`QM8o9`qtVe;)lqzClq-X6,e9S1SYS5j-j|L0Qw%7JDt3ZkWldE<q)#');
define('SECURE_AUTH_SALT', 'n ^%=7_*]u`)Z,(B:-R3G}g(LwR<H-wm.AjM<~7+U;~w<H~SM[R:9-L>OW*(a9f ');
define('LOGGED_IN_SALT',   'l:%=}H+)jv&^B+z[PX+m>*XLamzSyg# ^t5~f-Xu96$ofG|Ad/vMha[SV1pdsN`:');
define('NONCE_SALT',       'HWd5PeB=f/RWe^Y@%sH[W|_)t|FD[#nNC&>-dX(+=}H%eF|%Bx$}G_nBh.~Du1Fj');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
