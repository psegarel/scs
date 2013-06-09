<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'default',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'views_content_cache_test' => 
      array (
        'filename' => '/data/all/001/o_contrib/views_content_cache/tests/views_content_cache_test.module',
        'basename' => 'views_content_cache_test.module',
        'name' => 'views_content_cache_test',
        'info' => 
        array (
          'name' => 'Views Content Cache Tests Helper',
          'description' => 'Provides helpers for testing the views cache plugin.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'hidden' => true,
          'version' => '6.x-2.x-dev',
          'project' => 'views_content_cache',
          'datestamp' => '1300840106',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_content_cache',
        'version' => '6.x-2.x-dev',
      ),
      'views_content_cache' => 
      array (
        'filename' => '/data/all/001/o_contrib/views_content_cache/views_content_cache.module',
        'basename' => 'views_content_cache.module',
        'name' => 'views_content_cache',
        'info' => 
        array (
          'name' => 'Views Content Cache',
          'description' => 'Provides a views cache plugin based on content type changes.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'version' => '6.x-2.x-dev',
          'project' => 'views_content_cache',
          'datestamp' => '1300840106',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'views_content_cache',
        'version' => '6.x-2.x-dev',
      ),
      'views404' => 
      array (
        'filename' => '/data/all/001/o_contrib/views404/views404.module',
        'basename' => 'views404.module',
        'name' => 'views404',
        'info' => 
        array (
          'name' => 'Views 404',
          'description' => 'Return 404 if the path doesn\'t match the view path.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-1.x-dev',
          'project' => 'views404',
          'datestamp' => '1298620635',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views404',
        'version' => '6.x-1.x-dev',
      ),
      'variable_clean' => 
      array (
        'filename' => '/data/all/001/o_contrib/variable_clean/variable_clean.module',
        'basename' => 'variable_clean.module',
        'name' => 'variable_clean',
        'info' => 
        array (
          'name' => 'Variable Cleanup',
          'description' => 'Allows you to remove variables not currently used.',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'variable_clean',
          'datestamp' => '1298620613',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'variable_clean',
        'version' => '6.x-1.x-dev',
      ),
      'textile' => 
      array (
        'filename' => '/data/all/001/o_contrib/textile/textile.module',
        'basename' => 'textile.module',
        'name' => 'textile',
        'info' => 
        array (
          'name' => 'Textile',
          'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
          'package' => 'Input filters',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'textile',
          'datestamp' => '1294765889',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'textile',
        'version' => '6.x-2.4',
      ),
      'views_taxonomy_edge' => 
      array (
        'filename' => '/data/all/001/o_contrib/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
        'basename' => 'views_taxonomy_edge.module',
        'name' => 'views_taxonomy_edge',
        'info' => 
        array (
          'name' => 'Views Taxonomy Edge',
          'description' => 'Views for taxonomies using Taxonomy Edge',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy_edge',
            1 => 'views',
          ),
          'version' => '6.x-1.3',
          'project' => 'taxonomy_edge',
          'datestamp' => '1320038135',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_edge',
        'version' => '6.x-1.3',
      ),
      'taxonomy_edge' => 
      array (
        'filename' => '/data/all/001/o_contrib/taxonomy_edge/taxonomy_edge.module',
        'basename' => 'taxonomy_edge.module',
        'name' => 'taxonomy_edge',
        'info' => 
        array (
          'name' => 'Taxonomy Edge',
          'description' => 'Edge lists for taxonomies',
          'package' => 'Taxonomy',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'version' => '6.x-1.3',
          'project' => 'taxonomy_edge',
          'datestamp' => '1320038135',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_edge',
        'version' => '6.x-1.3',
      ),
      'site_verify' => 
      array (
        'filename' => '/data/all/001/o_contrib/site_verify/site_verify.module',
        'basename' => 'site_verify.module',
        'name' => 'site_verify',
        'info' => 
        array (
          'name' => 'Site Verification',
          'description' => 'Verifies ownership of a site for use with search engines.',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'site_verify',
          'datestamp' => '1298242614',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '3',
        'project' => 'site_verify',
        'version' => '6.x-1.0',
      ),
      'securesite' => 
      array (
        'filename' => '/data/all/001/o_contrib/securesite/securesite.module',
        'basename' => 'securesite.module',
        'name' => 'securesite',
        'info' => 
        array (
          'name' => 'Secure Site',
          'description' => 'Enables HTTP Auth security or an HTML form to restrict site access.',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'securesite',
          'datestamp' => '1254487917',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'securesite',
        'version' => '6.x-2.4',
      ),
      'seckit' => 
      array (
        'filename' => '/data/all/001/o_contrib/seckit/seckit.module',
        'basename' => 'seckit.module',
        'name' => 'seckit',
        'info' => 
        array (
          'name' => 'Security Kit',
          'description' => 'Enhance security of your Drupal website',
          'package' => 'Security',
          'core' => '6.x',
          'version' => '6.x-1.3',
          'project' => 'seckit',
          'datestamp' => '1318855902',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'project' => 'seckit',
        'version' => '6.x-1.3',
      ),
      'robotstxt' => 
      array (
        'filename' => '/data/all/001/o_contrib/robotstxt/robotstxt.module',
        'basename' => 'robotstxt.module',
        'name' => 'robotstxt',
        'info' => 
        array (
          'name' => 'robots.txt',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'robotstxt',
          'datestamp' => '1298620088',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'robotstxt',
        'version' => '6.x-1.x-dev',
      ),
      'readonlymode' => 
      array (
        'filename' => '/data/all/001/o_contrib/readonlymode/readonlymode.module',
        'basename' => 'readonlymode.module',
        'name' => 'readonlymode',
        'info' => 
        array (
          'name' => 'Read Only Mode',
          'description' => 'This module will lock your site for any node and/or comment postings.',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'readonlymode',
          'datestamp' => '1298620045',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'readonlymode',
        'version' => '6.x-1.x-dev',
      ),
      'private_upload' => 
      array (
        'filename' => '/data/all/001/o_contrib/private_upload/private_upload.module',
        'basename' => 'private_upload.module',
        'name' => 'private_upload',
        'info' => 
        array (
          'name' => 'Private Upload',
          'description' => 'Allow individual files to be kept in a private file directory.',
          'dependencies' => 
          array (
            0 => 'upload',
          ),
          'package' => 'File management',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'private_upload',
          'datestamp' => '1298619983',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'private_upload',
        'version' => '6.x-1.x-dev',
      ),
      'login_security' => 
      array (
        'filename' => '/data/all/001/o_contrib/login_security/login_security.module',
        'basename' => 'login_security.module',
        'name' => 'login_security',
        'info' => 
        array (
          'name' => 'Login Security',
          'description' => 'Enable security options in the login flow of the site.',
          'core' => '6.x',
          'version' => '6.x-1.1+3-dev',
          'project' => 'login_security',
          'datestamp' => '1327969332',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'project' => 'login_security',
        'version' => '6.x-1.1+3-dev',
      ),
      'httprl' => 
      array (
        'filename' => '/data/all/001/o_contrib/httprl/httprl.module',
        'basename' => 'httprl.module',
        'name' => 'httprl',
        'info' => 
        array (
          'name' => 'HTTP Parallel Request Library',
          'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.4',
          'project' => 'httprl',
          'datestamp' => '1328317243',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'httprl',
        'version' => '6.x-1.4',
      ),
      'fpa' => 
      array (
        'filename' => '/data/all/001/o_contrib/fpa/fpa.module',
        'basename' => 'fpa.module',
        'name' => 'fpa',
        'info' => 
        array (
          'name' => 'Fast Permissions Administration',
          'description' => 'Provides quick access to a content type\'s or field\'s permissions.',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'fpa',
          'datestamp' => '1301965915',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'fpa',
        'version' => '6.x-2.3',
      ),
      'filefield_nginx_progress' => 
      array (
        'filename' => '/data/all/001/o_contrib/filefield_nginx_progress/filefield_nginx_progress.module',
        'basename' => 'filefield_nginx_progress.module',
        'name' => 'filefield_nginx_progress',
        'info' => 
        array (
          'name' => 'FileField Nginx Progress',
          'description' => 'Adds upload progress functionality for Nginx webservers',
          'dependencies' => 
          array (
            0 => 'filefield',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'filefield_nginx_progress',
          'datestamp' => '1311207167',
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'filefield_nginx_progress',
        'version' => '6.x-1.x-dev',
      ),
      'esi' => 
      array (
        'filename' => '/data/all/001/o_contrib/esi/esi.module',
        'basename' => 'esi.module',
        'name' => 'esi',
        'info' => 
        array (
          'name' => 'ESI - Edge Side Includes',
          'description' => 'Allow Drupal blocks and panels to be delivered via ESI (Edge-Side Includes), SSI (Server Side Includes), or AJAX (JavaScript).',
          'package' => 'Performance and scalability',
          'recommends' => 
          array (
            0 => 'varnish',
          ),
          'core' => '6.x',
          'php' => '5.1',
          'version' => '6.x-2.0-beta1+0-dev',
          'project' => 'esi',
          'datestamp' => '1330604052',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '6.x-2.0-beta1+0-dev',
      ),
      'dbtuner' => 
      array (
        'filename' => '/data/all/001/o_contrib/dbtuner/dbtuner.module',
        'basename' => 'dbtuner.module',
        'name' => 'dbtuner',
        'info' => 
        array (
          'name' => 'DB Tuner',
          'description' => 'Adds indexes to CCK fields used in views & more.',
          'core' => '6.x',
          'package' => 'Performance and scalability',
          'recommends' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-1.x-dev',
          'project' => 'dbtuner',
          'datestamp' => '1299931433',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'dbtuner',
        'version' => '6.x-1.x-dev',
      ),
      'css_emimage' => 
      array (
        'filename' => '/data/all/001/o_contrib/css_emimage/css_emimage.module',
        'basename' => 'css_emimage.module',
        'name' => 'css_emimage',
        'info' => 
        array (
          'name' => 'CSS Embedded Images',
          'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
          'core' => '6.x',
          'php' => '5',
          'package' => 'Performance and scalability',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
        ),
        'schema_version' => '6200',
        'project' => '',
        'version' => NULL,
      ),
      'config_perms' => 
      array (
        'filename' => '/data/all/001/o_contrib/config_perms/config_perms.module',
        'basename' => 'config_perms.module',
        'name' => 'config_perms',
        'info' => 
        array (
          'name' => 'Site Configuration Permissions',
          'description' => 'Allows additional permissions to be created and managed through a administration form.',
          'core' => '6.x',
          'version' => '6.x-2.x-dev',
          'project' => 'config_perms',
          'datestamp' => '1306843480',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'config_perms',
        'version' => '6.x-2.x-dev',
      ),
      'cache' => 
      array (
        'filename' => '/data/all/001/o_contrib/cache/cache.module',
        'basename' => 'cache.module',
        'name' => 'cache',
        'info' => 
        array (
          'name' => 'Cache',
          'description' => 'Alternative cache handler implementation.',
          'package' => 'Caching',
          'recommended' => 'patchdoq',
          'core' => '6.x',
          'php' => '5.2',
          'version' => '6.x-1.x-dev',
          'project' => 'cache',
          'datestamp' => '1298618928',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'cache',
        'version' => '6.x-1.x-dev',
      ),
      'boost' => 
      array (
        'filename' => '/data/all/001/o_contrib/boost/boost.module',
        'basename' => 'boost.module',
        'name' => 'boost',
        'info' => 
        array (
          'name' => 'Boost',
          'description' => 'Caches text (html, ajax, xml) outputted by Drupal as static files for performance and scalability purposes.',
          'recommends' => 
          array (
            0 => 'nodereferrer',
          ),
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'boost',
          'datestamp' => '1324339773',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6129',
        'project' => 'boost',
        'version' => '6.x-1.x-dev',
      ),
      'block_no_node_grants' => 
      array (
        'filename' => '/data/all/001/o_contrib/blockcache_alter/patches/block_no_node_grants.module',
        'basename' => 'block_no_node_grants.module',
        'name' => 'block_no_node_grants',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'block_with_node_grants' => 
      array (
        'filename' => '/data/all/001/o_contrib/blockcache_alter/patches/block_with_node_grants.module',
        'basename' => 'block_with_node_grants.module',
        'name' => 'block_with_node_grants',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'blockcache_alter' => 
      array (
        'filename' => '/data/all/001/o_contrib/blockcache_alter/blockcache_alter.module',
        'basename' => 'blockcache_alter.module',
        'name' => 'blockcache_alter',
        'info' => 
        array (
          'name' => 'Block Cache Alter',
          'description' => 'Alter the cache settings per block.',
          'core' => '6.x',
          'version' => '6.x-1.5+0-dev',
          'package' => 'Performance and scalability',
          'project' => 'blockcache_alter',
          'datestamp' => '1329739467',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'blockcache_alter',
        'version' => '6.x-1.5+0-dev',
      ),
      'admin' => 
      array (
        'filename' => '/data/all/001/o_contrib/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '6.x',
          'version' => '6.x-2.0',
          'project' => 'admin',
          'datestamp' => '1282226188',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6202',
        'project' => 'admin',
        'version' => '6.x-2.0',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/all/001/o_contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '6.x',
          'version' => '6.x-2.6',
          'project' => 'backup_migrate',
          'datestamp' => '1336415451',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'backup_migrate',
        'version' => '6.x-2.6',
      ),
      'expire' => 
      array (
        'filename' => '/data/all/001/o_contrib/expire/expire.module',
        'basename' => 'expire.module',
        'name' => 'expire',
        'info' => 
        array (
          'name' => 'Cache Expiration',
          'description' => 'Logic for expiring page caches',
          'recommends' => 
          array (
            0 => 'nodereferrer',
          ),
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'purge' => 
      array (
        'filename' => '/data/all/001/o_contrib/purge/purge.module',
        'basename' => 'purge.module',
        'name' => 'purge',
        'info' => 
        array (
          'name' => 'Purge',
          'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'expire',
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'redis' => 
      array (
        'filename' => '/data/all/000/modules/redis/redis.module',
        'basename' => 'redis.module',
        'name' => 'redis',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'cache_backport' => 
      array (
        'filename' => '/data/all/000/modules/cache_backport/cache_backport.module',
        'basename' => 'cache_backport.module',
        'name' => 'cache_backport',
        'info' => 
        array (
          'name' => 'Cache Backport',
          'description' => 'Provide cache.inc replacement that uses D7 cache handling instead. Enabling this module is not mandatory, you can use the provided cache.inc file as-is without the module. Enabling it will only provide some configuration overview screens.',
          'core' => '6.x',
          'php' => '5.2',
          'package' => 'Performance and scalability',
          'version' => '6.x-1.0-rc1',
          'project' => 'cache_backport',
          'datestamp' => '1319799929',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'cache_backport',
        'version' => '6.x-1.0-rc1',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'upload' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.26',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent posts for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'throttle' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6055',
        'project' => '',
        'version' => '6.26',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'SimpleTest',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Development',
          'core' => '6.x',
          'php' => '5 ; Drupal 6',
          'files' => 
          array (
            0 => 'simpletest.module',
            1 => 'simpletest.pages.inc',
            2 => 'simpletest.install',
            3 => 'simpletest.test',
            4 => 'drupal_web_test_case.php',
            5 => 'tests/block.test',
          ),
          'version' => '6.x-2.10',
          'project' => 'simpletest',
          'datestamp' => '1262212859',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6200',
        'project' => 'simpletest',
        'version' => '6.x-2.10',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'ping' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'path_alias_cache' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/path_alias_cache/path_alias_cache.module',
        'basename' => 'path_alias_cache.module',
        'name' => 'path_alias_cache',
        'info' => 
        array (
          'name' => 'Path alias cache',
          'description' => 'A path alias implementation which adds a cache to the core version.',
          'core' => '6.x',
          'package' => 'Pressflow',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.26',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => '',
        'version' => '6.26',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Enables threaded discussions about general topics.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'cookie_cache_bypass' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/cookie_cache_bypass/cookie_cache_bypass.module',
        'basename' => 'cookie_cache_bypass.module',
        'name' => 'cookie_cache_bypass',
        'info' => 
        array (
          'name' => 'Cookie cache bypass',
          'description' => 'Sets a cookie on form submission directing a reverse proxy to temporarily not serve cached pages for an anonymous user that just submitted content.',
          'core' => '6.x',
          'package' => 'Pressflow',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => '',
        'version' => '6.26',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.26',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.26',
      ),
      'blogapi' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.26',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.26',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '6.26',
      ),
    ),
    'themes' => 
    array (
      'pushbutton' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.26',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.26',
      ),
      'minnelli' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.26',
          'core' => '6.x',
          'base theme' => 'garland',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'minnelli.css',
            ),
          ),
        ),
        'project' => '',
        'version' => '6.26',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.26',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
        ),
        'owner' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.26',
      ),
      'marvin' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.26',
          'core' => '6.x',
          'base theme' => 'chameleon',
        ),
        'project' => '',
        'version' => '6.26',
      ),
      'chameleon' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.26',
          'core' => '6.x',
        ),
        'project' => '',
        'version' => '6.26',
      ),
      'bluemarine' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.26',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.26',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.26',
        'description' => 'This platform is running Drupal 6.26',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/profiles/default/default.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Pressflow',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => NULL,
        ),
        'version' => '6.26',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'wysiwyg' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows users to edit contents with client-side editors.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'wysiwyg',
          'datestamp' => '1308450722',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'project' => 'wysiwyg',
        'version' => '6.x-2.4',
      ),
      'weather' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/weather/weather.module',
        'basename' => 'weather.module',
        'name' => 'weather',
        'info' => 
        array (
          'name' => 'Weather',
          'description' => 'Displays METAR weather data',
          'core' => '6.x',
          'version' => '6.x-5.18',
          'project' => 'weather',
          'datestamp' => '1292519148',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6508',
        'project' => 'weather',
        'version' => '6.x-5.18',
      ),
      'views_slideshow_thumbnailhover' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views_slideshow/contrib/views_slideshow_thumbnailhover/views_slideshow_thumbnailhover.module',
        'basename' => 'views_slideshow_thumbnailhover.module',
        'name' => 'views_slideshow_thumbnailhover',
        'info' => 
        array (
          'name' => 'Views Slideshow: ThumbnailHover',
          'description' => 'Adds a Thumbnail Hover slideshow mode to Views Slideshows.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'views_slideshow_singleframe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views_slideshow/contrib/views_slideshow_singleframe/views_slideshow_singleframe.module',
        'basename' => 'views_slideshow_singleframe.module',
        'name' => 'views_slideshow_singleframe',
        'info' => 
        array (
          'name' => 'Views Slideshow: SingleFrame',
          'description' => 'Adds a Single Frame slideshow mode to Views Slideshows.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'views_slideshow',
          'datestamp' => '1279683019',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'views_slideshow',
        'version' => '6.x-2.3',
      ),
      'views_rss' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views_rss/views_rss.module',
        'basename' => 'views_rss.module',
        'name' => 'views_rss',
        'info' => 
        array (
          'name' => 'Views RSS',
          'description' => 'Provides views plugin for that allows RSS Feeds from Views to be use fields',
          'package' => 'Views Bonus Pack',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-1.0-beta5',
          'project' => 'views_rss',
          'datestamp' => '1284147112',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views_rss',
        'version' => '6.x-1.0-beta5',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'name' => 'Views exporter',
          'description' => 'Allows exporting multiple views at once.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6013',
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '6.x-2.16',
      ),
      'vertical_tabs' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/vertical_tabs/vertical_tabs.module',
        'basename' => 'vertical_tabs.module',
        'name' => 'vertical_tabs',
        'info' => 
        array (
          'name' => 'Vertical Tabs',
          'description' => 'Provides vertical tabs for supported forms like the node edit page.',
          'core' => '6.x',
          'package' => 'User interface',
          'recommends' => 
          array (
            0 => 'form',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'vertical_tabs',
          'datestamp' => '1309875122',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6104',
        'project' => 'vertical_tabs',
        'version' => '6.x-1.0-rc2',
      ),
      'varnish' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '6.x',
          'package' => 'Caching',
          'version' => '6.x-1.1',
          'project' => 'varnish',
          'datestamp' => '1328034658',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'varnish',
        'version' => '6.x-1.1',
      ),
      'transliteration' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '6.x',
          'version' => '6.x-3.0',
          'project' => 'transliteration',
          'datestamp' => '1279738213',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '6.x-3.0',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '6.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'tokenSTARTER' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/token/tokenSTARTER.module',
        'basename' => 'tokenSTARTER.module',
        'name' => 'tokenSTARTER',
        'info' => 
        array (
          'name' => 'TokenSTARTER',
          'description' => 'Provides additional tokens and a base on which to build your own tokens.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'token_actions' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/token/token_actions.module',
        'basename' => 'token_actions.module',
        'name' => 'token_actions',
        'info' => 
        array (
          'name' => 'Token actions',
          'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '6.x-1.18',
      ),
      'taxonomy_menu_vocabulary_path' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/taxonomy_menu/taxonomy_menu_vocabulary_path/taxonomy_menu_vocabulary_path.module',
        'basename' => 'taxonomy_menu_vocabulary_path.module',
        'name' => 'taxonomy_menu_vocabulary_path',
        'info' => 
        array (
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'taxonomy_menu',
          ),
          'description' => 'Enables a custom path for each vocabulary through Taxonomy Menu.',
          'name' => 'Taxonomy Menu Vocabulary Path',
          'package' => 'Taxonomy Menu',
          'version' => '6.x-2.9',
          'project' => 'taxonomy_menu',
          'datestamp' => '1280800574',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_menu',
        'version' => '6.x-2.9',
      ),
      'taxonomy_menu_path_custom' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/taxonomy_menu/taxonomy_menu_path_custom/taxonomy_menu_path_custom.module',
        'basename' => 'taxonomy_menu_path_custom.module',
        'name' => 'taxonomy_menu_path_custom',
        'info' => 
        array (
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'taxonomy_menu',
          ),
          'description' => 'Enables Custom path base to Taxonomy Menu.',
          'name' => 'Taxonomy Menu Custom Path',
          'package' => 'Taxonomy Menu',
          'version' => '6.x-2.9',
          'project' => 'taxonomy_menu',
          'datestamp' => '1280800574',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_menu',
        'version' => '6.x-2.9',
      ),
      'taxonomy_menu_hierarchy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/taxonomy_menu/taxonomy_menu_hierarchy/taxonomy_menu_hierarchy.module',
        'basename' => 'taxonomy_menu_hierarchy.module',
        'name' => 'taxonomy_menu_hierarchy',
        'info' => 
        array (
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'taxonomy_menu',
          ),
          'description' => 'Enables Hierarchy path to Taxonomy Menu.',
          'name' => 'Taxonomy Menu Hierarchy',
          'package' => 'Taxonomy Menu',
          'version' => '6.x-2.9',
          'project' => 'taxonomy_menu',
          'datestamp' => '1280800574',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_menu',
        'version' => '6.x-2.9',
      ),
      'taxonomy_menu' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/taxonomy_menu/taxonomy_menu.module',
        'basename' => 'taxonomy_menu.module',
        'name' => 'taxonomy_menu',
        'info' => 
        array (
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'description' => 'Adds links to taxonomy terms to a menu.',
          'name' => 'Taxonomy Menu',
          'package' => 'Taxonomy Menu',
          'version' => '6.x-2.9',
          'project' => 'taxonomy_menu',
          'datestamp' => '1280800574',
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'taxonomy_menu',
        'version' => '6.x-2.9',
      ),
      'syndication' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/syndication/syndication.module',
        'basename' => 'syndication.module',
        'name' => 'syndication',
        'info' => 
        array (
          'name' => 'Syndication',
          'description' => 'Module to consolidate RSS feeds on to a single page.',
          'core' => '6.x',
          'version' => '6.x-1.7',
          'project' => 'syndication',
          'datestamp' => '1288985457',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'syndication',
        'version' => '6.x-1.7',
      ),
      'simplenews_action' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/simplenews/simplenews_action/simplenews_action.module',
        'basename' => 'simplenews_action.module',
        'name' => 'simplenews_action',
        'info' => 
        array (
          'name' => 'Simplenews action',
          'description' => 'Provide actions for Simplenews.',
          'dependencies' => 
          array (
            0 => 'simplenews',
            1 => 'trigger',
          ),
          'package' => 'Mail',
          'core' => '6.x',
          'version' => '6.x-1.3',
          'project' => 'simplenews',
          'datestamp' => '1274456709',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'simplenews',
        'version' => '6.x-1.3',
      ),
      'simplenews' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/simplenews/simplenews.module',
        'basename' => 'simplenews.module',
        'name' => 'simplenews',
        'info' => 
        array (
          'name' => 'Simplenews',
          'description' => 'Send newsletters to subscribed email addresses.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Mail',
          'core' => '6.x',
          'version' => '6.x-1.3',
          'project' => 'simplenews',
          'datestamp' => '1274456709',
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'simplenews',
        'version' => '6.x-1.3',
      ),
      'seochecklist' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/seo_checklist/seochecklist.module',
        'basename' => 'seochecklist.module',
        'name' => 'seochecklist',
        'info' => 
        array (
          'name' => 'SEO Checklist',
          'description' => 'A Search Engine Optimization checklist for Drupal.',
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'vertical_tabs',
          ),
          'version' => '6.x-3.0',
          'project' => 'seo_checklist',
          'datestamp' => '1274793907',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6207',
        'project' => 'seo_checklist',
        'version' => '6.x-3.0',
      ),
      'poormanscron' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/poormanscron/poormanscron.module',
        'basename' => 'poormanscron.module',
        'name' => 'poormanscron',
        'info' => 
        array (
          'name' => 'Poormanscron',
          'description' => 'Internal scheduler for users without a cron application.',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'poormanscron',
          'datestamp' => '1263749708',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'project' => 'poormanscron',
        'version' => '6.x-2.2',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'path_redirect',
          ),
          'version' => '6.x-1.6',
          'project' => 'pathauto',
          'datestamp' => '1320076535',
          'php' => '4.3.5',
        ),
        'schema_version' => '7',
        'project' => 'pathauto',
        'version' => '6.x-1.6',
      ),
      'panels_node' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_mini' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6303',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'jquery_ui',
          ),
          'core' => '6.x',
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'panels_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/panels/panels_export/panels_export.module',
        'basename' => 'panels_export.module',
        'name' => 'panels_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'panels' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '6.x',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-3.10',
          'project' => 'panels',
          'datestamp' => '1326917148',
          'php' => '4.3.5',
        ),
        'schema_version' => '6311',
        'project' => 'panels',
        'version' => '6.x-3.10',
      ),
      'openx_manager' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/openx_manager/openx_manager.module',
        'basename' => 'openx_manager.module',
        'name' => 'openx_manager',
        'info' => 
        array (
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'upload',
            1 => 'views',
          ),
          'description' => 'Control a OpenX from distance.',
          'name' => 'OpenX Manager',
          'version' => '6.x-1.02',
          'project' => 'openx_manager',
          'datestamp' => '1249605341',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'openx_manager',
        'version' => '6.x-1.02',
      ),
      'openx' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/openx/openx.module',
        'basename' => 'openx.module',
        'name' => 'openx',
        'info' => 
        array (
          'core' => '6.x',
          'name' => 'OpenX',
          'description' => 'Integrates the OpenX adserver into Drupal',
          'version' => '6.x-1.2',
          'project' => 'openx',
          'datestamp' => '1304941616',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'openx',
        'version' => '6.x-1.2',
      ),
      'modalframe_example' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/modalframe/modules/modalframe_example/modalframe_example.module',
        'basename' => 'modalframe_example.module',
        'name' => 'modalframe_example',
        'info' => 
        array (
          'name' => 'Modal Frame Example',
          'description' => 'Example for the Modal Frame API.',
          'package' => 'Modal frame',
          'dependencies' => 
          array (
            0 => 'modalframe',
          ),
          'core' => '6.x',
          'version' => '6.x-1.7',
          'project' => 'modalframe',
          'datestamp' => '1273809616',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'modalframe',
        'version' => '6.x-1.7',
      ),
      'modalframe' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/modalframe/modalframe.module',
        'basename' => 'modalframe.module',
        'name' => 'modalframe',
        'info' => 
        array (
          'name' => 'Modal Frame API',
          'description' => 'Provides an API to render an iframe within a modal dialog based on the jQuery UI Dialog plugin.',
          'package' => 'Modal frame',
          'dependencies' => 
          array (
            0 => 'jquery_ui',
          ),
          'core' => '6.x',
          'version' => '6.x-1.7',
          'project' => 'modalframe',
          'datestamp' => '1273809616',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'modalframe',
        'version' => '6.x-1.7',
      ),
      'mimemail_compress' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/mimemail/modules/mimemail_compress/mimemail_compress.module',
        'basename' => 'mimemail_compress.module',
        'name' => 'mimemail_compress',
        'info' => 
        array (
          'name' => 'Mime Mail CSS Compressor',
          'description' => 'Converts CSS to inline styles in an HTML message. Requires PHP 5.x and the DOM extension',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'mimemail',
          ),
          'core' => '6.x',
          'php' => '5',
          'version' => '6.x-1.0',
          'project' => 'mimemail',
          'datestamp' => '1321708244',
        ),
        'schema_version' => 0,
        'project' => 'mimemail',
        'version' => '6.x-1.0',
      ),
      'mimemail_action' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/mimemail/modules/mimemail_action/mimemail_action.module',
        'basename' => 'mimemail_action.module',
        'name' => 'mimemail_action',
        'info' => 
        array (
          'name' => 'Mime Mail Action',
          'description' => 'Provides actions for Mime Mail.',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'mimemail',
            1 => 'trigger',
          ),
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'mimemail',
          'datestamp' => '1321708244',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'mimemail',
        'version' => '6.x-1.0',
      ),
      'mimemail' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/mimemail/mimemail.module',
        'basename' => 'mimemail.module',
        'name' => 'mimemail',
        'info' => 
        array (
          'name' => 'Mime Mail',
          'description' => 'Allows to send HTML e-mail with embedded images and attachments.',
          'package' => 'Mail',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'mimemail',
          'datestamp' => '1321708244',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'project' => 'mimemail',
        'version' => '6.x-1.0',
      ),
      'link_image' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/link_image/link_image.module',
        'basename' => 'link_image.module',
        'name' => 'link_image',
        'info' => 
        array (
          'name' => 'Link image formatter',
          'description' => 'Defines a field formatter to display a link to an image as an HTML image element.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'link',
          ),
          'package' => 'CCK',
          'version' => '6.x-1.0-alpha1',
          'project' => 'link_image',
          'datestamp' => '1312994519',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'link_image',
        'version' => '6.x-1.0-alpha1',
      ),
      'libraries' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'libraries',
          'datestamp' => '1296096157',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '6.x-1.0',
      ),
      'jquery_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/jquery_ui/jquery_ui.module',
        'basename' => 'jquery_ui.module',
        'name' => 'jquery_ui',
        'info' => 
        array (
          'name' => 'jQuery UI',
          'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-1.5',
          'project' => 'jquery_ui',
          'datestamp' => '1308323216',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'jquery_ui',
        'version' => '6.x-1.5',
      ),
      'imagefield' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imagefield/imagefield.module',
        'basename' => 'imagefield.module',
        'name' => 'imagefield',
        'info' => 
        array (
          'name' => 'ImageField',
          'description' => 'Defines an image field type.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'filefield',
          ),
          'package' => 'CCK',
          'version' => '6.x-3.10',
          'project' => 'imagefield',
          'datestamp' => '1303971115',
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'project' => 'imagefield',
        'version' => '6.x-3.10',
      ),
      'imagecache_ui' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imagecache/imagecache_ui.module',
        'basename' => 'imagecache_ui.module',
        'name' => 'imagecache_ui',
        'info' => 
        array (
          'name' => 'ImageCache UI',
          'description' => 'ImageCache User Interface.',
          'dependencies' => 
          array (
            0 => 'imagecache',
            1 => 'imageapi',
          ),
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-2.0-rc1',
          'project' => 'imagecache',
          'datestamp' => '1337742655',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imagecache',
        'version' => '6.x-2.0-rc1',
      ),
      'imagecache' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imagecache/imagecache.module',
        'basename' => 'imagecache.module',
        'name' => 'imagecache',
        'info' => 
        array (
          'name' => 'ImageCache',
          'description' => 'Dynamic image manipulator and cache.',
          'package' => 'ImageCache',
          'dependencies' => 
          array (
            0 => 'imageapi',
          ),
          'core' => '6.x',
          'version' => '6.x-2.0-rc1',
          'project' => 'imagecache',
          'datestamp' => '1337742655',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'imagecache',
        'version' => '6.x-2.0-rc1',
      ),
      'imageapi' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imageapi/imageapi.module',
        'basename' => 'imageapi.module',
        'name' => 'imageapi',
        'info' => 
        array (
          'name' => 'ImageAPI',
          'description' => 'ImageAPI supporting multiple toolkits.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'php' => '5.1',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'imageapi_gd' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imageapi/imageapi_gd.module',
        'basename' => 'imageapi_gd.module',
        'name' => 'imageapi_gd',
        'info' => 
        array (
          'name' => 'ImageAPI GD2',
          'description' => 'Uses PHP\'s built-in GD2 image processing support.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'imageapi_imagemagick' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/imageapi/imageapi_imagemagick.module',
        'basename' => 'imageapi_imagemagick.module',
        'name' => 'imageapi_imagemagick',
        'info' => 
        array (
          'name' => 'ImageAPI ImageMagick',
          'description' => 'Command Line ImageMagick support.',
          'package' => 'ImageCache',
          'core' => '6.x',
          'version' => '6.x-1.10',
          'project' => 'imageapi',
          'datestamp' => '1305563215',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'imageapi',
        'version' => '6.x-1.10',
      ),
      'filefield_meta' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
        'basename' => 'filefield_meta.module',
        'name' => 'filefield_meta',
        'info' => 
        array (
          'name' => 'FileField Meta',
          'description' => 'Add metadata gathering and storage to FileField.',
          'dependencies' => 
          array (
            0 => 'filefield',
            1 => 'getid3',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.10',
          'project' => 'filefield',
          'datestamp' => '1303970816',
        ),
        'schema_version' => '6100',
        'project' => 'filefield',
        'version' => '6.x-3.10',
      ),
      'filefield' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/filefield/filefield.module',
        'basename' => 'filefield.module',
        'name' => 'filefield',
        'info' => 
        array (
          'name' => 'FileField',
          'description' => 'Defines a file field type.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.10',
          'project' => 'filefield',
          'datestamp' => '1303970816',
        ),
        'schema_version' => '6104',
        'project' => 'filefield',
        'version' => '6.x-3.10',
      ),
      'dhtml_menu' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/dhtml_menu/dhtml_menu.module',
        'basename' => 'dhtml_menu.module',
        'name' => 'dhtml_menu',
        'info' => 
        array (
          'name' => 'DHTML Menu',
          'description' => 'Opens menus dynamically to reduce page refreshes.',
          'core' => '6.x',
          'version' => '6.x-3.5',
          'project' => 'dhtml_menu',
          'datestamp' => '1244161838',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'project' => 'dhtml_menu',
        'version' => '6.x-3.5',
      ),
      'devel' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '6.x',
          'version' => '6.x-1.26',
          'project' => 'devel',
          'datestamp' => '1311355315',
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'project' => 'devel',
        'version' => '6.x-1.26',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/devel/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '6.x',
          'version' => '6.x-1.26',
          'project' => 'devel',
          'datestamp' => '1311355315',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '6.x-1.26',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer block and page illustrating relevant node_access records.',
          'package' => 'Development',
          'core' => '6.x',
          'version' => '6.x-1.26',
          'project' => 'devel',
          'datestamp' => '1311355315',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '6.x-1.26',
      ),
      'date_tools' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_popup' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Defines CCK date/time fields and widgets.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_repeat' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_timezone' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_timezone/date_timezone.module',
        'basename' => 'date_timezone.module',
        'name' => 'date_timezone',
        'info' => 
        array (
          'name' => 'Date Timezone',
          'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '5200',
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_locale' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_locale/date_locale.module',
        'basename' => 'date_locale.module',
        'name' => 'date_locale',
        'info' => 
        array (
          'name' => 'Date Locale',
          'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'locale',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_php4' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_php4/date_php4.module',
        'basename' => 'date_php4.module',
        'name' => 'date_php4',
        'info' => 
        array (
          'name' => 'Date PHP4',
          'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'date_api' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/date/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'project' => 'date',
        'version' => '6.x-2.9',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '6.x',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'core' => '6.x',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '6.x',
          'package' => 'Chaos tool suite',
          'version' => '6.x-1.8',
          'project' => 'ctools',
          'datestamp' => '1288393844',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '6.x-1.8',
      ),
      'contemplate' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/contemplate/contemplate.module',
        'basename' => 'contemplate.module',
        'name' => 'contemplate',
        'info' => 
        array (
          'name' => 'Content Templates',
          'description' => 'Create templates to customize output of teaser and body content.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'contemplate',
          'datestamp' => '1279686006',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'project' => 'contemplate',
        'version' => '6.x-1.2',
      ),
      'clock' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/clock/clock.module',
        'basename' => 'clock.module',
        'name' => 'clock',
        'info' => 
        array (
          'name' => 'Clock',
          'description' => 'Provides a block displaying the time of a selected time zone.',
          'core' => '6.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'version' => '6.x-1.7',
          'project' => 'clock',
          'datestamp' => '1313948818',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'clock',
        'version' => '6.x-1.7',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '6.x',
          'package' => 'User interface',
          'version' => '6.x-1.11',
          'project' => 'ckeditor',
          'datestamp' => '1333115147',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'project' => 'ckeditor',
        'version' => '6.x-1.11',
      ),
      'userreference' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/userreference/userreference.module',
        'basename' => 'userreference.module',
        'name' => 'userreference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'optionwidgets' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
        'basename' => 'optionwidgets.module',
        'name' => 'optionwidgets',
        'info' => 
        array (
          'name' => 'Option Widgets',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'nodereference' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/nodereference/nodereference.module',
        'basename' => 'nodereference.module',
        'name' => 'nodereference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'fieldgroup' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
        'basename' => 'fieldgroup.module',
        'name' => 'fieldgroup',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Create display groups for CCK fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content_permissions' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
        'basename' => 'content_permissions.module',
        'name' => 'content_permissions',
        'info' => 
        array (
          'name' => 'Content Permissions',
          'description' => 'Set field-level permissions for CCK fields.',
          'package' => 'CCK',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content_copy' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/modules/content_copy/content_copy.module',
        'basename' => 'content_copy.module',
        'name' => 'content_copy',
        'info' => 
        array (
          'name' => 'Content Copy',
          'description' => 'Enables ability to import/export field definitions.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'content' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/cck/content.module',
        'basename' => 'content.module',
        'name' => 'content',
        'info' => 
        array (
          'name' => 'Content',
          'description' => 'Allows administrators to define new content types.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'cck',
          'datestamp' => '1294407979',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6010',
        'project' => 'cck',
        'version' => '6.x-2.9',
      ),
      'boost' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/boost/boost.module',
        'basename' => 'boost.module',
        'name' => 'boost',
        'info' => 
        array (
          'name' => 'Boost',
          'description' => 'Caches text (html, ajax, xml) outputted by Drupal as static files for performance and scalability purposes.',
          'recommends' => 
          array (
            0 => 'nodereferrer',
          ),
          'package' => 'Caching',
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'boost',
          'datestamp' => '1264382702',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6125',
        'project' => 'boost',
        'version' => '6.x-1.18',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '6.x',
          'version' => '6.x-2.6',
          'project' => 'backup_migrate',
          'datestamp' => '1336415451',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'project' => 'backup_migrate',
        'version' => '6.x-2.6',
      ),
      'auto_nodetitle' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
        'basename' => 'auto_nodetitle.module',
        'name' => 'auto_nodetitle',
        'info' => 
        array (
          'name' => 'Automatic Nodetitles',
          'description' => 'Allows hiding of the content title field and automatic title creation.',
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'auto_nodetitle',
          'datestamp' => '1249042505',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'project' => 'auto_nodetitle',
        'version' => '6.x-1.2',
      ),
      'advagg_js_compress' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/advagg/advagg_js_compress/advagg_js_compress.module',
        'basename' => 'advagg_js_compress.module',
        'name' => 'advagg_js_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress Javascript',
          'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '6.x-1.8',
          'project' => 'advagg',
          'datestamp' => '1332962738',
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'project' => 'advagg',
        'version' => '6.x-1.8',
      ),
      'advagg_js_cdn' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/advagg/advagg_js_cdn/advagg_js_cdn.module',
        'basename' => 'advagg_js_cdn.module',
        'name' => 'advagg_js_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN Javascript',
          'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '6.x-1.8',
          'project' => 'advagg',
          'datestamp' => '1332962738',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '6.x-1.8',
      ),
      'advagg_css_compress' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/advagg/advagg_css_compress/advagg_css_compress.module',
        'basename' => 'advagg_css_compress.module',
        'name' => 'advagg_css_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress CSS',
          'description' => 'Compress CSS with a 3rd party compressor, CSSTidy currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'php' => '5.0',
          'version' => '6.x-1.8',
          'project' => 'advagg',
          'datestamp' => '1332962738',
        ),
        'schema_version' => '6100',
        'project' => 'advagg',
        'version' => '6.x-1.8',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/advagg/advagg_bundler/advagg_bundler.module',
        'basename' => 'advagg_bundler.module',
        'name' => 'advagg_bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '6.x-1.8',
          'project' => 'advagg',
          'datestamp' => '1332962738',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '6.x-1.8',
      ),
      'advagg' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'advagg',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files, serves them with gzip encoding and smart client-side cache headers.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '6.x',
          'version' => '6.x-1.8',
          'project' => 'advagg',
          'datestamp' => '1332962738',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6110',
        'project' => 'advagg',
        'version' => '6.x-1.8',
      ),
      'adminrole' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/adminrole/adminrole.module',
        'basename' => 'adminrole.module',
        'name' => 'adminrole',
        'info' => 
        array (
          'name' => 'Admin Role',
          'description' => 'Automatically assign all permissions to an admin role.',
          'package' => 'Administration',
          'core' => '6.x',
          'version' => '6.x-1.3',
          'project' => 'adminrole',
          'datestamp' => '1281809488',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '5100',
        'project' => 'adminrole',
        'version' => '6.x-1.3',
      ),
      'admin' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '6.x',
          'version' => '6.x-2.0',
          'project' => 'admin',
          'datestamp' => '1282226188',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6202',
        'project' => 'admin',
        'version' => '6.x-2.0',
      ),
      'addthis' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/modules/addthis/addthis.module',
        'basename' => 'addthis.module',
        'name' => 'addthis',
        'info' => 
        array (
          'name' => 'AddThis',
          'description' => 'A bookmarking and sharing widget from AddThis.com.',
          'core' => '6.x',
          'version' => '6.x-3.0-beta2',
          'project' => 'addthis',
          'datestamp' => '1311577014',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6302',
        'project' => 'addthis',
        'version' => '6.x-3.0-beta2',
      ),
    ),
    'themes' => 
    array (
      'pixture_reloaded' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/pixture_reloaded/pixture_reloaded.info',
        'basename' => 'pixture_reloaded.info',
        'name' => 'Pixture Reloaded',
        'info' => 
        array (
          'name' => 'Pixture Reloaded',
          'description' => 'Recolorable multi-column liquid/fixed layout theme. Original Design by Pixture Studio, Ported to CSS layout by <a href="http://adaptivethemes.com">AdaptiveThemes</a>.',
          'version' => '6.x-3.2',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'header' => 'Header blocks',
            'superfish' => 'Superfish menu',
            'content_top' => 'Content top',
            'content' => 'Content',
            'content_bottom' => 'Content bottom',
            'left' => 'Sidebar left',
            'right' => 'Sidebar right',
            'footer' => 'footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
              1 => 'style.css',
            ),
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'mission',
            4 => 'node_user_picture',
            5 => 'comment_user_picture',
            6 => 'search',
            7 => 'favicon',
            8 => 'primary_links',
          ),
          'project' => 'pixture_reloaded',
          'datestamp' => '1241716288',
        ),
        'project' => 'pixture_reloaded',
        'version' => '6.x-3.2',
      ),
      'magazeen' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/magazeen/magazeen.info',
        'basename' => 'magazeen.info',
        'name' => 'Magazeen',
        'info' => 
        array (
          'name' => 'Magazeen',
          'description' => 'A Drupal port for the bold magazine theme from <a href="http://wefunction.com/">Function</a> and <a href="http://smashingmagazine.com/">Smashing Magazine</a>.  Magazeen requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/magazeen-style.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.curvycorners.min.js',
            1 => 'js/magazeen-script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'options' => 
            array (
              'inherit_skins' => true,
            ),
            'grid12-width' => '; Sample Skinr style (uncomment to use, see Skinr section in CSS)',
            'fusion-magazeen-views-styles' => 
            array (
              'title' => 'Magazeen - Node styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'node',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Rounded light blue background<span class="preview-icon" id="magazeen-rounded-node"></span></span>',
                  'class' => 'magazeen-rounded-block',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Hot pink title background<span class="preview-icon" id="magazeen-hot-pink-node"></span></span>',
                  'class' => 'magazeen-hot-pink-title',
                ),
              ),
            ),
            'fusion-magazeen-block-styles' => 
            array (
              'title' => 'Magazeen - Block styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Small dark block title<span class="preview-icon" id="magazeen-small-dark-title"></span></span>',
                  'class' => 'magazeen-small-dark-title',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Tiny light blue block title<span class="preview-icon" id="magazeen-tiny-title"></span></span>',
                  'class' => 'magazeen-tiny-title',
                ),
                3 => 
                array (
                  'label' => '<span class="preview-text">Rounded light blue block<span class="preview-icon" id="magazeen-rounded-block"></span></span>',
                  'class' => 'magazeen-rounded-block',
                ),
                4 => 
                array (
                  'label' => '<span class="preview-text">Hot pink block title background<span class="preview-icon" id="magazeen-hot-pink-title"></span></span>',
                  'class' => 'magazeen-hot-pink-title',
                ),
              ),
            ),
            'fusion-magazeen-list-styles' => 
            array (
              'title' => 'Magazeen - List & menu styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Rounded background on list items<span class="preview-icon" id="magazeen-rounded-list"></span></span>',
                  'class' => 'magazeen-rounded-list',
                ),
              ),
            ),
            'fusion-magazeen-misc-styles' => 
            array (
              'title' => 'Magazeen - Additional styles',
              'type' => 'checkboxes',
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">White and shadowed image border<span class="preview-icon" id="magazeen-image-border"></span></span>',
                  'class' => 'magazeen-image-border',
                ),
              ),
            ),
          ),
          'version' => '6.x-3.0-beta1',
          'project' => 'magazeen',
          'datestamp' => '1274301306',
        ),
        'project' => 'magazeen',
        'version' => '6.x-3.0-beta1',
      ),
      'fusion_starter_lite' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/fusion/fusion_starter_lite/fusion_starter_lite.info',
        'basename' => 'fusion_starter_lite.info',
        'name' => 'Fusion Starter Lite',
        'info' => 
        array (
          'name' => 'Fusion Starter Lite',
          'description' => 'Fusion Starter Lite sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-lite-style.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header' => 'header',
            'content' => 'content',
            'footer' => 'footer',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid12-960',
            'theme_grid_options' => 
            array (
              0 => 'grid12-960',
              1 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '2',
            'sidebar_last_width' => '2',
          ),
          'skinr' => 
          array (
            'grid12-width' => 
            array (
              'title' => 'Width (12 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (80px/8.33%)',
                  'class' => 'grid12-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (160px/16.67%)',
                  'class' => 'grid12-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (240px/25%)',
                  'class' => 'grid12-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (320px/33.33%)',
                  'class' => 'grid12-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (400px/41.67%)',
                  'class' => 'grid12-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (480px/50%)',
                  'class' => 'grid12-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (560px/58.33%)',
                  'class' => 'grid12-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (640px/66.67%)',
                  'class' => 'grid12-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (720px/75%)',
                  'class' => 'grid12-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (800px/83.33%)',
                  'class' => 'grid12-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (880px/91.67%)',
                  'class' => 'grid12-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (960px/100%)',
                  'class' => 'grid12-12',
                ),
              ),
            ),
            'grid-width' => 
            array (
              'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
            ),
            'fusion-alignment' => 
            array (
              'title' => 'Block position',
              'type' => 'select',
              'description' => 'Change the position of this block (default is to float to the left)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float block to the right',
                  'class' => 'fusion-right',
                ),
                2 => 
                array (
                  'label' => 'Position block in the center',
                  'class' => 'fusion-center',
                ),
                3 => 
                array (
                  'label' => 'Clear floats (block drops to a new line)',
                  'class' => 'fusion-clear',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.13',
          'project' => 'fusion',
          'datestamp' => '1332949846',
        ),
        'project' => 'fusion',
        'version' => '6.x-1.13',
      ),
      'fusion_starter' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/fusion/fusion_starter/fusion_starter.info',
        'basename' => 'fusion_starter.info',
        'name' => 'Fusion Starter',
        'info' => 
        array (
          'name' => 'Fusion Starter',
          'description' => 'Fusion Starter sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/skinr">Skinr</a> module to enable easy point-and-click theming.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/fusion-starter-style.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'options' => 
            array (
              'inherit_skins' => true,
            ),
            'grid12-width' => '',
          ),
          'version' => '6.x-1.13',
          'project' => 'fusion',
          'datestamp' => '1332949846',
        ),
        'project' => 'fusion',
        'version' => '6.x-1.13',
      ),
      'fusion_core' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/fusion/fusion_core/fusion_core.info',
        'basename' => 'fusion_core.info',
        'name' => 'Fusion Core',
        'info' => 
        array (
          'name' => 'Fusion Core',
          'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/skinr">Skinr</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
              1 => 'css/typography.css',
              2 => 'css/superfish.css',
              3 => 'css/superfish-navbar.css',
              4 => 'css/superfish-vertical.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.bgiframe.min.js',
            1 => 'js/hoverIntent.js',
            2 => 'js/supposition.js',
            3 => 'js/supersubs.js',
            4 => 'js/superfish.js',
            5 => 'js/script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
            'right' => 'right',
            'left' => 'left',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
              2 => 'grid12-960',
              3 => 'grid12-fluid',
            ),
            'fluid_grid_width' => 'fluid-100',
            'theme_font_size' => 'font-size-13',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'grid16-width' => 
            array (
              'title' => 'Width (16 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (60px/6.25%)',
                  'class' => 'grid16-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (120px/12.5%)',
                  'class' => 'grid16-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (180px/18.75%)',
                  'class' => 'grid16-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (240px/25%)',
                  'class' => 'grid16-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (300px/31.25%)',
                  'class' => 'grid16-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (360px/37.5%)',
                  'class' => 'grid16-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (420px/43.75%)',
                  'class' => 'grid16-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (480px/50%)',
                  'class' => 'grid16-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (540px/56.25%)',
                  'class' => 'grid16-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (600px/62.5%)',
                  'class' => 'grid16-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (660px/68.75%)',
                  'class' => 'grid16-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (720px/75%)',
                  'class' => 'grid16-12',
                ),
                13 => 
                array (
                  'label' => '13 units wide (780px/81.25%)',
                  'class' => 'grid16-13',
                ),
                14 => 
                array (
                  'label' => '14 units wide (840px/87.5%)',
                  'class' => 'grid16-14',
                ),
                15 => 
                array (
                  'label' => '15 units wide (900px/93.75%)',
                  'class' => 'grid16-15',
                ),
                16 => 
                array (
                  'label' => '16 units wide (960px/100%)',
                  'class' => 'grid16-16',
                ),
              ),
            ),
            'grid12-width' => 
            array (
              'title' => 'Width (12 column grid)',
              'type' => 'select',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '1 unit wide (80px/8.33%)',
                  'class' => 'grid12-1',
                ),
                2 => 
                array (
                  'label' => '2 units wide (160px/16.67%)',
                  'class' => 'grid12-2',
                ),
                3 => 
                array (
                  'label' => '3 units wide (240px/25%)',
                  'class' => 'grid12-3',
                ),
                4 => 
                array (
                  'label' => '4 units wide (320px/33.33%)',
                  'class' => 'grid12-4',
                ),
                5 => 
                array (
                  'label' => '5 units wide (400px/41.67%)',
                  'class' => 'grid12-5',
                ),
                6 => 
                array (
                  'label' => '6 units wide (480px/50%)',
                  'class' => 'grid12-6',
                ),
                7 => 
                array (
                  'label' => '7 units wide (560px/58.33%)',
                  'class' => 'grid12-7',
                ),
                8 => 
                array (
                  'label' => '8 units wide (640px/66.67%)',
                  'class' => 'grid12-8',
                ),
                9 => 
                array (
                  'label' => '9 units wide (720px/75%)',
                  'class' => 'grid12-9',
                ),
                10 => 
                array (
                  'label' => '10 units wide (800px/83.33%)',
                  'class' => 'grid12-10',
                ),
                11 => 
                array (
                  'label' => '11 units wide (880px/91.67%)',
                  'class' => 'grid12-11',
                ),
                12 => 
                array (
                  'label' => '12 units wide (960px/100%)',
                  'class' => 'grid12-12',
                ),
              ),
            ),
            'grid-width' => 
            array (
              'description' => 'Change the width of this block. Fluid grid % widths are relative to the parent region\'s width. Default widths: sidebar blocks default to the sidebar width; in other regions width is divided equally among all blocks.',
            ),
            'fusion-alignment' => 
            array (
              'title' => 'Block position',
              'type' => 'select',
              'description' => 'Change the position of this block (default is to float to the left)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float block to the right',
                  'class' => 'fusion-right',
                ),
                2 => 
                array (
                  'label' => 'Position block in the center',
                  'class' => 'fusion-center',
                ),
                3 => 
                array (
                  'label' => 'Clear floats (block drops to a new line)',
                  'class' => 'fusion-clear',
                ),
              ),
            ),
            'fusion-content-alignment' => 
            array (
              'title' => 'Content alignment',
              'type' => 'select',
              'description' => 'Default is left aligned content',
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Center align content within its container',
                  'class' => 'fusion-center-content',
                ),
                2 => 
                array (
                  'label' => 'Right align content within its container',
                  'class' => 'fusion-right-content',
                ),
              ),
            ),
            'fusion-general-styles' => 
            array (
              'title' => 'General styles',
              'type' => 'checkboxes',
              'description' => 'These are some generally useful options for blocks',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Text: large, bold callout style <span class="preview-icon" id="fusion-general-styles-fusion-callout"></span></span>',
                  'class' => 'fusion-callout',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Links: bold all links <span class="preview-icon" id="fusion-general-styles-bold-links"></span></span>',
                  'class' => 'fusion-bold-links',
                ),
                3 => 
                array (
                  'label' => '<span class="preview-text">Padding: add 30px extra padding inside block <span class="preview-icon" id="fusion-general-styles-fusion-padding"></span></span>',
                  'class' => 'fusion-padding',
                ),
                4 => 
                array (
                  'label' => '<span class="preview-text">Border: add 1px border and 10px padding <span class="preview-icon" id="fusion-general-styles-fusion-border"></span></span>',
                  'class' => 'fusion-border',
                ),
              ),
            ),
            'fusion-equal-heights' => 
            array (
              'title' => 'Equal heights',
              'type' => 'checkboxes',
              'description' => 'Make blocks in a region the same height',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'scripts' => 
              array (
                0 => 'js/jquery.equalheights.js',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Equal heights: equalize the heights of blocks with this style in the same region <span class="preview-icon" id="fusion-general-styles-equal-heights"></span></span>',
                  'class' => 'equal-heights',
                ),
              ),
            ),
            'fusion-multicol' => 
            array (
              'title' => 'List columns',
              'type' => 'select',
              'description' => 'Put items in lists (menus, list views, etc.) in multiple columns',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '2-column list/menu (50%/50%)',
                  'class' => 'fusion-2-col-list clearfix',
                ),
                2 => 
                array (
                  'label' => '3-column list/menu (33%/33%/33%)',
                  'class' => 'fusion-3-col-list clearfix',
                ),
              ),
            ),
            'fusion-menu' => 
            array (
              'title' => 'Menu layout',
              'type' => 'radios',
              'description' => 'Different layouts and alignment options for your menus',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Single line menu with separators <span class="preview-icon" id="fusion-menu-fusion-inline-menu"></span></span>',
                  'class' => 'fusion-inline-menu',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Multi-column menu with bold headers (set menu items to Expanded) <span class="preview-icon" id="fusion-menu-fusion-multicol-menu"></span></span>',
                  'class' => 'fusion-multicol-menu clearfix',
                ),
              ),
            ),
            'fusion-list-styles' => 
            array (
              'title' => 'List/menu styles',
              'type' => 'checkboxes',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Bottom border (no bullets) <span class="preview-icon" id="list-styles-bottom-border"></span></span>',
                  'class' => 'fusion-list-bottom-border',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Extra vertical spacing (no bullets) <span class="preview-icon" id="list-styles-extra-vertical-spacing"></span></span>',
                  'class' => 'fusion-list-vertical-spacing',
                ),
              ),
            ),
            'fusion-superfish' => 
            array (
              'title' => 'Superfish menu styles',
              'type' => 'radios',
              'description' => 'Superfish dropdown menus (must also set menu items to Expanded)',
              'features' => 
              array (
                0 => 'block',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Vertical menu (for sidebar blocks) <span class="preview-icon" id="fusion-superfish-superfish-vertical"></span></span>',
                  'class' => 'superfish superfish-vertical',
                ),
              ),
            ),
            'fusion-float-imagefield' => 
            array (
              'title' => 'Image floating styles',
              'type' => 'select',
              'description' => 'These options will float ImageField images in content to the left or right and add margins',
              'features' => 
              array (
                0 => 'block',
                1 => 'node',
                2 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => 'Float ImageField left',
                  'class' => 'fusion-float-imagefield-left',
                ),
                2 => 
                array (
                  'label' => 'Float ImageField right',
                  'class' => 'fusion-float-imagefield-right',
                ),
              ),
            ),
            'fusion-login' => 
            array (
              'title' => 'User login block styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
              ),
              'scripts' => 
              array (
                0 => 'js/jquery.overlabel.js',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Horizontal: puts user login block on a single line with label overlays (good for Header Top region) <span class="preview-icon" id="fusion-login-fusion-horiz-login"></span></span>',
                  'class' => 'fusion-horiz-login',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.13',
          'project' => 'fusion',
          'datestamp' => '1332949846',
        ),
        'project' => 'fusion',
        'version' => '6.x-1.13',
      ),
      'acquia_prosper' => 
      array (
        'filename' => '/data/disk/o1/static/platforms/southchinasea-pressflow-6.26.02/sites/all/themes/acquia_prosper/acquia_prosper.info',
        'basename' => 'acquia_prosper.info',
        'name' => 'Acquia Prosper',
        'info' => 
        array (
          'name' => 'Acquia Prosper',
          'description' => '<a href="http://www.acquia.com">Acquia</a> Prosper is an elegant grid-based <a href="http://www.ubercart.org">Ubercart</a>-ready theme with point-and-click theming and an alternate color scheme. Requires the <a href="http://drupal.org/project/fusion">Fusion Core</a> base theme and the <a href="http://drupal.org/project/skinr">Skinr</a> module. Created by <a href="http://www.topnotchthemes.com">TopNotchThemes</a> and <a href="http://fusiondrupalthemes.com">Fusion Drupal Themes</a>.',
          'base theme' => 'fusion_core',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/acquia-prosper-style.css',
              1 => 'design_packs/gray/gray.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.corner.js',
            1 => 'js/acquia-prosper-script.js',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'sidebar first',
            'sidebar_last' => 'sidebar last',
            'header_top' => 'header top',
            'header' => 'header',
            'preface_top' => 'preface top',
            'preface_bottom' => 'preface bottom',
            'content_top' => 'content top',
            'content' => 'content',
            'content_bottom' => 'content bottom',
            'postscript_top' => 'postscript top',
            'postscript_bottom' => 'postscript bottom',
            'footer' => 'footer',
            'node_top' => 'node top',
            'node_bottom' => 'node bottom',
            'right' => 'right',
            'left' => 'left',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'primary_links',
            8 => 'secondary_links',
          ),
          'settings' => 
          array (
            'theme_grid' => 'grid16-960',
            'theme_grid_options' => 
            array (
              0 => 'grid16-960',
              1 => 'grid16-fluid',
            ),
            'fluid_grid_width' => 'fluid-95',
            'theme_font_size' => 'font-size-12',
            'sidebar_layout' => 'sidebars-split',
            'sidebar_first_width' => '3',
            'sidebar_last_width' => '3',
          ),
          'skinr' => 
          array (
            'options' => 
            array (
              'inherit_skins' => true,
            ),
            'grid12-width' => '; Prosper styles',
            'prosper-general-styles' => 
            array (
              'title' => 'Acquia Prosper - general theme styles',
              'type' => 'radios',
              'description' => 'Acquia Prosper\'s styles for blocks, panels, views, and content types',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Gray rounded title background, plain white block <span class="preview-icon" id="prosper-gray-rounded-plain-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-rounded-plain prosper-rounded-title',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Gray rounded title background, list styling <span class="preview-icon" id="prosper-gray-rounded-style-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-rounded-style prosper-rounded-title',
                ),
                3 => 
                array (
                  'label' => '<span class="preview-text">Rounded corner dark background <span class="preview-icon" id="prosper-grayborder-darkbackground-skinrpreview"></span></span>',
                  'class' => 'prosper-grayborder-darkbackground',
                ),
                4 => 
                array (
                  'label' => '<span class="preview-text">Light gray background and border <span class="preview-icon" id="prosper-lightgraybackground-border-skinrpreview"></span></span>',
                  'class' => 'prosper-lightgraybackground-border',
                ),
                5 => 
                array (
                  'label' => '<span class="preview-text">Medium gray background with bottom border <span class="preview-icon" id="prosper-mediumgraybackground-bottomborder-skinrpreview"></span></span>',
                  'class' => 'prosper-mediumgraybackground-bottomborder',
                ),
                6 => 
                array (
                  'label' => '<span class="preview-text">Gradient background with padding and thick border <span class="preview-icon" id="prosper-gradient-border-skinrpreview"></span></span>',
                  'class' => 'prosper-gradient-border',
                ),
                7 => 
                array (
                  'label' => '<span class="preview-text">Menu list <span class="preview-icon" id="prosper-menu-list-skinrpreview"></span></span>',
                  'class' => 'prosper-menu-list',
                ),
                8 => 
                array (
                  'label' => '<span class="preview-text">Shopping cart - Light background <span class="preview-icon" id="prosper-shoppingcart-light-skinrpreview"></span></span>',
                  'class' => 'prosper-shoppingcart-light',
                ),
                9 => 
                array (
                  'label' => '<span class="preview-text">Shopping cart - Dark background <span class="preview-icon" id="prosper-shoppingcart-dark-skinrpreview"></span></span>',
                  'class' => 'prosper-shoppingcart-dark',
                ),
                10 => 
                array (
                  'label' => '<span class="preview-text">Tabbed block - also set Quicktabs style to Default <span class="preview-icon" id="prosper-quicktabs-skinrpreview"></span></span>',
                  'class' => 'prosper-quicktabs',
                ),
              ),
            ),
            'prosper-comments' => 
            array (
              'title' => 'Acquia Prosper: comment styles',
              'type' => 'radios',
              'features' => 
              array (
                0 => 'comment_wrapper',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Simple with white background and separators <span class="preview-icon" id="prosper-comments-clean-skinrpreview"></span></span>',
                  'class' => 'prosper-comments-clean',
                ),
                2 => 
                array (
                  'label' => '<span class="preview-text">Speech bubbles with pointed edge <span class="preview-icon" id="prosper-comments-edgy-skinrpreview"></span></span>',
                  'class' => 'prosper-comments-edgy',
                ),
              ),
            ),
            'prosper-common-styles' => 
            array (
              'title' => 'Acquia Prosper - common theme styles',
              'type' => 'checkboxes',
              'description' => 'Acquia Prosper\'s styles for blocks, panels, views, and content types',
              'features' => 
              array (
                0 => 'block',
                1 => 'panels_display',
                2 => 'panels_pane',
                3 => 'panels_panel',
                4 => 'views_view',
              ),
              'options' => 
              array (
                1 => 
                array (
                  'label' => '<span class="preview-text">Gray border around image <span class="preview-icon" id="prosper-gray-border-image-skinrpreview"></span></span>',
                  'class' => 'prosper-gray-border-image',
                ),
              ),
            ),
          ),
          'version' => '6.x-1.1',
          'project' => 'acquia_prosper',
          'datestamp' => '1284760858',
        ),
        'project' => 'acquia_prosper',
        'version' => '6.x-1.1',
      ),
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);