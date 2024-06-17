<?php declare(strict_types=1);
use PHPUnit\Event\Facade;
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\TextUI\Configuration\Registry as ConfigurationRegistry;
use PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry;
use PHPUnit\TextUI\XmlConfiguration\Loader;
use PHPUnit\TextUI\Configuration\PhpHandler;
use PHPUnit\TestRunner\TestResult\PassedTests;

// php://stdout does not obey output buffering. Any output would break
// unserialization of child process results in the parent process.
if (!defined('STDOUT')) {
    define('STDOUT', fopen('php://temp', 'w+b'));
    define('STDERR', fopen('php://stderr', 'wb'));
}

{iniSettings}
ini_set('display_errors', 'stderr');
set_include_path('{include_path}');

$composerAutoload = {composerAutoload};
$phar             = {phar};

ob_start();

if ($composerAutoload) {
    require_once $composerAutoload;

    define('PHPUNIT_COMPOSER_INSTALL', $composerAutoload);
} else if ($phar) {
    require $phar;
}

function __phpunit_run_isolated_test()
{
<<<<<<< HEAD
<<<<<<< HEAD
    $dispatcher = Facade::instance()->initForIsolation(
        PHPUnit\Event\Telemetry\HRTime::fromSecondsAndNanoseconds(
            {offsetSeconds},
            {offsetNanoseconds}
        ),
        {exportObjects},
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    $dispatcher = Facade::initForIsolation(
        PHPUnit\Event\Telemetry\HRTime::fromSecondsAndNanoseconds(
            {offsetSeconds},
            {offsetNanoseconds}
        )
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    );

    require_once '{filename}';

    if ({collectCodeCoverageInformation}) {
<<<<<<< HEAD
<<<<<<< HEAD
        CodeCoverage::instance()->init(ConfigurationRegistry::get(), CodeCoverageFilterRegistry::instance(), true);
        CodeCoverage::instance()->ignoreLines({linesToBeIgnored});
    }

    $test = new {className}('{name}');

    $test->setData('{dataName}', unserialize('{data}'));
    $test->setDependencyInput(unserialize('{dependencyInput}'));
    $test->setInIsolation(true);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        CodeCoverage::instance()->init(ConfigurationRegistry::get(), CodeCoverageFilterRegistry::instance());
    }

    $test = new {className}('{name}');
    $test->setData('{dataName}', unserialize('{data}'));
    $test->setDependencyInput(unserialize('{dependencyInput}'));
    $test->setInIsolation(TRUE);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    ob_end_clean();

    $test->run();

    $output = '';

<<<<<<< HEAD
<<<<<<< HEAD
    if (!$test->expectsOutput()) {
=======
    if (!$test->hasExpectationOnOutput()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    if (!$test->hasExpectationOnOutput()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $output = $test->output();
    }

    ini_set('xdebug.scream', '0');

    // Not every STDOUT target stream is rewindable
    @rewind(STDOUT);

    if ($stdout = @stream_get_contents(STDOUT)) {
        $output         = $stdout . $output;
        $streamMetaData = stream_get_meta_data(STDOUT);

        if (!empty($streamMetaData['stream_type']) && 'STDIO' === $streamMetaData['stream_type']) {
            @ftruncate(STDOUT, 0);
            @rewind(STDOUT);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    file_put_contents(
        '{processResultFile}',
        serialize(
            [
                'testResult'    => $test->result(),
                'codeCoverage'  => {collectCodeCoverageInformation} ? CodeCoverage::instance()->codeCoverage() : null,
                'numAssertions' => $test->numberOfAssertionsPerformed(),
                'output'        => $output,
                'events'        => $dispatcher->flush(),
                'passedTests'   => PassedTests::instance()
            ]
        )
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    print serialize(
        [
            'testResult'    => $test->result(),
            'codeCoverage'  => {collectCodeCoverageInformation} ? CodeCoverage::instance()->codeCoverage() : null,
            'numAssertions' => $test->numberOfAssertionsPerformed(),
            'output'        => $output,
            'events'        => $dispatcher->flush(),
            'passedTests'   => PassedTests::instance()
        ]
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    );
}

function __phpunit_error_handler($errno, $errstr, $errfile, $errline)
{
   return true;
}

set_error_handler('__phpunit_error_handler');

{constants}
{included_files}
{globals}

restore_error_handler();

<<<<<<< HEAD
<<<<<<< HEAD
ConfigurationRegistry::loadFrom('{serializedConfiguration}');
(new PhpHandler)->handle(ConfigurationRegistry::get()->php());

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
if ('{bootstrap}' !== '') {
    require_once '{bootstrap}';
}

<<<<<<< HEAD
<<<<<<< HEAD
=======
ConfigurationRegistry::loadFrom('{serializedConfiguration}');
(new PhpHandler)->handle(ConfigurationRegistry::get()->php());

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
ConfigurationRegistry::loadFrom('{serializedConfiguration}');
(new PhpHandler)->handle(ConfigurationRegistry::get()->php());

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
__phpunit_run_isolated_test();
