<?php

namespace Phan\LanguageServer\Protocol;

/**
 * Source: https://github.com/felixfbecker/php-language-server/tree/master/src/Protocol/DiagnosticSeverity.php
 * See ../../../../LICENSE.LANGUAGE_SERVER
 */
abstract class DiagnosticSeverity
{
    /**
     * Reports an error.
     */
    const ERROR = 1;

    /**
     * Reports a warning.
     */
    const WARNING = 2;

    /**
     * Reports an information.
     */
    const INFORMATION = 3;

    /**
     * Reports a hint.
     */
    const HINT = 4;
}
