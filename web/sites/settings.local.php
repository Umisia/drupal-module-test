<?php
$settings['hash_salt'] = 'cIOaW-J7Ni5aHPmMvD0yhIh7ZkQ3xZoBrBPIA7E-1qZSPri2f94Nf-H4-yEKFbKwo4ehpoURYQ';

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/development.services.yml';

$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;

$settings['config_sync_directory'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'drupal9',
  'username' => 'drupal9',
  'password' => 'drupal9',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
);

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

$settings['skip_permissions_hardening'] = TRUE;

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$config['system.logging']['error_level'] = 'verbose';
$settings['file_private_path'] = '/app/web/sites/default/private';
