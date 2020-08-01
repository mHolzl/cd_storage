<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit085b0f170cfa3145a9c0387ae8e74eb3
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6a47392539ca2329373e0d33e1dba053' => __DIR__ . '/..' . '/symfony/polyfill-intl-icu/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extra\\Intl\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Intl\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extra\\Intl\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/intl-extra/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Intl\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/intl',
        ),
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Collator.php',
        'Dibi\\Bridges\\Nette\\DibiExtension22' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Nette/DibiExtension22.php',
        'Dibi\\Bridges\\Tracy\\Panel' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Tracy/Panel.php',
        'Dibi\\Connection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Connection.php',
        'Dibi\\ConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\DataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DataSource.php',
        'Dibi\\DateTime' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DateTime.php',
        'Dibi\\Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\DriverException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Drivers\\DummyDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/DummyDriver.php',
        'Dibi\\Drivers\\FirebirdDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdDriver.php',
        'Dibi\\Drivers\\FirebirdReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdReflector.php',
        'Dibi\\Drivers\\FirebirdResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdResult.php',
        'Dibi\\Drivers\\MySqlReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqlReflector.php',
        'Dibi\\Drivers\\MySqliDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliDriver.php',
        'Dibi\\Drivers\\MySqliResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliResult.php',
        'Dibi\\Drivers\\NoDataResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/NoDataResult.php',
        'Dibi\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcDriver.php',
        'Dibi\\Drivers\\OdbcReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcReflector.php',
        'Dibi\\Drivers\\OdbcResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcResult.php',
        'Dibi\\Drivers\\OracleDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleDriver.php',
        'Dibi\\Drivers\\OracleReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleReflector.php',
        'Dibi\\Drivers\\OracleResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleResult.php',
        'Dibi\\Drivers\\PdoDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoDriver.php',
        'Dibi\\Drivers\\PdoResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoResult.php',
        'Dibi\\Drivers\\PostgreDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreDriver.php',
        'Dibi\\Drivers\\PostgreReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreReflector.php',
        'Dibi\\Drivers\\PostgreResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreResult.php',
        'Dibi\\Drivers\\Sqlite3Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Driver.php',
        'Dibi\\Drivers\\Sqlite3Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Result.php',
        'Dibi\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteDriver.php',
        'Dibi\\Drivers\\SqliteReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteReflector.php',
        'Dibi\\Drivers\\SqliteResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteResult.php',
        'Dibi\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvDriver.php',
        'Dibi\\Drivers\\SqlsrvReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvReflector.php',
        'Dibi\\Drivers\\SqlsrvResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvResult.php',
        'Dibi\\Event' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Event.php',
        'Dibi\\Exception' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Expression' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Expression.php',
        'Dibi\\Fluent' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Fluent.php',
        'Dibi\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\HashMap' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\HashMapBase' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\Helpers' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Helpers.php',
        'Dibi\\IConnection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\IDataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Literal' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Literal.php',
        'Dibi\\Loggers\\FileLogger' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Loggers/FileLogger.php',
        'Dibi\\NotImplementedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotSupportedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\PcreException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\ProcedureException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Reflection\\Column' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Column.php',
        'Dibi\\Reflection\\Database' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Database.php',
        'Dibi\\Reflection\\ForeignKey' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/ForeignKey.php',
        'Dibi\\Reflection\\Index' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Index.php',
        'Dibi\\Reflection\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Result.php',
        'Dibi\\Reflection\\Table' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Table.php',
        'Dibi\\Reflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Result.php',
        'Dibi\\ResultDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\ResultIterator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/ResultIterator.php',
        'Dibi\\Row' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Row.php',
        'Dibi\\Strict' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Strict.php',
        'Dibi\\Translator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Translator.php',
        'Dibi\\Type' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Type.php',
        'Dibi\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/intl/Resources/stubs/NumberFormatter.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'dibi' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/dibi.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit085b0f170cfa3145a9c0387ae8e74eb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit085b0f170cfa3145a9c0387ae8e74eb3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit085b0f170cfa3145a9c0387ae8e74eb3::$classMap;

        }, null, ClassLoader::class);
    }
}