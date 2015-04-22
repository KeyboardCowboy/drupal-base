<?php
$root = str_replace('/drush', '', dirname(__FILE__));

// Patchfile Settings.
$options['patch-file'] = '../patches.make';

// Add our plugins directory.
$options['include'][] = __DIR__ . '/plugins';

// Add our custom commands directory.
$options['include'][] = __DIR__ . '/commands';

// Add our aliases.
$options['alias-path'][] = __DIR__ . '/aliases';


/*
 * Customize this associative array with your own tables. This is the list of
 * tables whose *data* is skipped by the 'sql-dump' and 'sql-sync' commands when
 * a structure-tables-key is provided. You may add new tables to the existing
 * array or add a new element.
 */
$options['structure-tables'] = array(
  'common' => array(
    'batch',
    'cache',
    'cache_*',
    'ctools_*_cache',
    'flood',
    'history',
    'honeypot_user',
    'mollom',
    'search_*',
    'sessions',
    'watchdog',
    'webform_submissions',
    'webform_submitted_data',
  ),
);
