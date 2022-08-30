<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wlsKkRbUEf61s1bX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OqkQ5QxsFdWs95ol',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fGFOkA6NnEA89ril',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oVDRYYrVJDX6bv2X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EeFu1inwfNBWlhAu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e0Fy5JY11N4QBqiO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/metrics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GSlxNyy9X7NwIBcg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P6bH8anjw23oC5EV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-vendor/ebess/advanced-nova-media-library/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ABXysmNNMW0eMuMH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/nova(?|/(?|password/reset/([^/]++)(*:42)|(.*)(*:53))|\\-(?|api/(?|s(?|cripts/([^/]++)(*:92)|tyles/([^/]++)(*:113))|([^/]++)/(?|field/([^/]++)(*:148)|trix\\-attachment/([^/]++)(?|(*:184)|/([^/]++)(*:201))|creation\\-fields(*:226)|([^/]++)/update\\-fields(*:257)|creation\\-pivot\\-fields/([^/]++)(*:297)|([^/]++)/(?|update\\-pivot\\-fields/([^/]++)/([^/]++)(*:356)|download/([^/]++)(*:381)|field/([^/]++)(*:403)|([^/]++)/([^/]++)/field/([^/]++)(*:443)))|dashboards/([^/]++)(*:472)|([^/]++)/(?|action(?|s(*:502)|(*:510))|filters(*:526)|lens(?|es(*:543)|/([^/]++)(?|(*:563)|/(?|count(*:580)|f(?|orce(*:596)|ilters(*:610))|restore(*:626)|action(?|s(*:644)|(*:652)))|(*:662))))|metrics/([^/]++)(*:689)|([^/]++)(?|/(?|metrics(?|(*:722)|/([^/]++)(*:739))|([^/]++)/metrics/([^/]++)(*:773)|lens/([^/]++)/(?|metrics(?|(*:808)|/([^/]++)(*:825))|cards(*:839))|c(?|ards(*:856)|ount(*:868))|re(?|late\\-authorization(*:901)|store(*:914))|soft\\-deletes(*:936)|detach(*:950)|force(*:963)|([^/]++)(?|(*:982))|associatable/([^/]++)(*:1012)|([^/]++)/attachable/([^/]++)(*:1049)|morphable/([^/]++)(*:1076)|([^/]++)/(?|attach(?|/([^/]++)(*:1115)|\\-morphed/([^/]++)(*:1142))|update\\-attached/([^/]++)/([^/]++)(*:1186)))|(*:1197)))|vendor/ebess/advanced\\-nova\\-media\\-library/download/([^/]++)(*:1269))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      53 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v6lZq5weS6ZxwP9n',
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      92 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uxe8HaRJczl3G8hR',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V4Pi6Op9vtfd29Qp',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xnJ4Yf3MWAK11R82',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBD8X39mrfLyXNTW',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WwET9ncz9ubTOWSo',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0m0gF8DTvbDgKnoV',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
            2 => 'draftId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OsLYdQnCCnUmbLGz',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mTadDLKFpOLaANwX',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QaukIyvFJsBu6dvN',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'relatedResource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UXRG2Xpy4UMJLFX8',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gomUSeddMcC1rB2H',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWHwSeIwnbvEiTQI',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fX0khhw2XfFUDb4R',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
            4 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e1eqFhsZBnomBrIY',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EDJxb5QA3y3mEt9u',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wnyCY6xxPmWWURpQ',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y29FwYsh3J5zYUUE',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8J8K449KawDDGYb',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yH0s5smAA7fbjKZ5',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R8ovG8DzoeyUj7iQ',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MrWGQiRF2wsjJ6Yu',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TwPJShOSIrHeXB5Y',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pYEAvMtx40iBVYxh',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BLPxZQKwf8qPQz2x',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ahYDslTQ9zVKxgvW',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IO0UczJLz3EK7OZl',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ChFoNOTgsEaXBb7T',
          ),
          1 => 
          array (
            0 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mFjjSCH5ppoTxg9z',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::65Hwb1JTjJ4oiR34',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fSXNIpqvOGdXFj22',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MRCweNcKgmZ3Z6Rg',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8fI7q7jmSr2wN0IT',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
            2 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XTMATKAX154KeYJt',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rlgXJWHMGG2FBt3w',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8CIBQi9gBukecMZ4',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m0d5hhjTStwBxBo7',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tOUdYzmEtuTcyOLE',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rKOWauf1UnvshTvv',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dBQenwAVJxzXmysT',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5w8GDBbKamwpgYdO',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wNvCVFkjlN0DJ4tv',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QosywiJBI7aVJZ1G',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NXXWWCvUsAEm2u0b',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n0Gmn5bPbGUcIcIF',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4g933Mxs4hG62K9h',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gFP4kX1A4TAkpWFd',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EN4juC1WbguhXPjF',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Piu14GpdqZBgHWle',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aaXZKhcS43p9XHwR',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::smEvVUtC98UA6AaW',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::upxXfoPwafJnokQM',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8y2K1LtzCY1EbTdA',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::wlsKkRbUEf61s1bX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::wlsKkRbUEf61s1bX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqkQ5QxsFdWs95ol' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000015dec0fd000000001fa6bf3e";}";s:4:"hash";s:44:"bb8q9GS2W6rHy31RLYf+3dqv5WR9gZXgAKYwNKIImf8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OqkQ5QxsFdWs95ol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fGFOkA6NnEA89ril' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fGFOkA6NnEA89ril',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oVDRYYrVJDX6bv2X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova/login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@showLoginForm',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'generated::oVDRYYrVJDX6bv2X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova/login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@login',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@login',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'nova.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova/logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
          4 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@logout',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'nova.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova/password/reset',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'nova.password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova/password/email',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'nova.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova/password/reset/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'nova.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EeFu1inwfNBWlhAu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova/password/reset',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@reset',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/nova',
        'where' => 
        array (
        ),
        'as' => 'generated::EeFu1inwfNBWlhAu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uxe8HaRJczl3G8hR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/scripts/{script}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Illuminate\\Http\\Middleware\\CheckResponseForModifications',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ScriptController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ScriptController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Uxe8HaRJczl3G8hR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V4Pi6Op9vtfd29Qp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/styles/{style}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Illuminate\\Http\\Middleware\\CheckResponseForModifications',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\StyleController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\StyleController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::V4Pi6Op9vtfd29Qp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e0Fy5JY11N4QBqiO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/search',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\SearchController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\SearchController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::e0Fy5JY11N4QBqiO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xnJ4Yf3MWAK11R82' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::xnJ4Yf3MWAK11R82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBD8X39mrfLyXNTW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/trix-attachment/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@store',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::nBD8X39mrfLyXNTW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WwET9ncz9ubTOWSo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/trix-attachment/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@destroyAttachment',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@destroyAttachment',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::WwET9ncz9ubTOWSo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0m0gF8DTvbDgKnoV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/trix-attachment/{field}/{draftId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@destroyPending',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\TrixAttachmentController@destroyPending',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::0m0gF8DTvbDgKnoV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OsLYdQnCCnUmbLGz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/creation-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::OsLYdQnCCnUmbLGz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mTadDLKFpOLaANwX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::mTadDLKFpOLaANwX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QaukIyvFJsBu6dvN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/creation-pivot-fields/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::QaukIyvFJsBu6dvN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UXRG2Xpy4UMJLFX8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-pivot-fields/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::UXRG2Xpy4UMJLFX8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gomUSeddMcC1rB2H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/download/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldDownloadController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldDownloadController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::gomUSeddMcC1rB2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWHwSeIwnbvEiTQI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldDestroyController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldDestroyController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::HWHwSeIwnbvEiTQI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fX0khhw2XfFUDb4R' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/{relatedResource}/{relatedResourceId}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\PivotFieldDestroyController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\PivotFieldDestroyController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::fX0khhw2XfFUDb4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e1eqFhsZBnomBrIY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/dashboards/{dashboard}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::e1eqFhsZBnomBrIY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EDJxb5QA3y3mEt9u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/actions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::EDJxb5QA3y3mEt9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wnyCY6xxPmWWURpQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@store',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::wnyCY6xxPmWWURpQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y29FwYsh3J5zYUUE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/filters',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FilterController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FilterController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::y29FwYsh3J5zYUUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V8J8K449KawDDGYb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lenses',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::V8J8K449KawDDGYb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yH0s5smAA7fbjKZ5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::yH0s5smAA7fbjKZ5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R8ovG8DzoeyUj7iQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/count',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceCountController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceCountController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::R8ovG8DzoeyUj7iQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IO0UczJLz3EK7OZl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceDestroyController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceDestroyController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::IO0UczJLz3EK7OZl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MrWGQiRF2wsjJ6Yu' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/force',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceForceDeleteController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceForceDeleteController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::MrWGQiRF2wsjJ6Yu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pYEAvMtx40iBVYxh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/restore',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceRestoreController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceRestoreController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::pYEAvMtx40iBVYxh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BLPxZQKwf8qPQz2x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/actions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::BLPxZQKwf8qPQz2x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ahYDslTQ9zVKxgvW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@store',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::ahYDslTQ9zVKxgvW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TwPJShOSIrHeXB5Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/filters',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensFilterController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensFilterController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::TwPJShOSIrHeXB5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GSlxNyy9X7NwIBcg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::GSlxNyy9X7NwIBcg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ChFoNOTgsEaXBb7T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::ChFoNOTgsEaXBb7T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mFjjSCH5ppoTxg9z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::mFjjSCH5ppoTxg9z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::65Hwb1JTjJ4oiR34' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::65Hwb1JTjJ4oiR34',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fSXNIpqvOGdXFj22' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DetailMetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DetailMetricController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::fSXNIpqvOGdXFj22',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MRCweNcKgmZ3Z6Rg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::MRCweNcKgmZ3Z6Rg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8fI7q7jmSr2wN0IT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::8fI7q7jmSr2wN0IT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P6bH8anjw23oC5EV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/cards',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::P6bH8anjw23oC5EV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rlgXJWHMGG2FBt3w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/cards',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CardController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CardController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::rlgXJWHMGG2FBt3w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XTMATKAX154KeYJt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/cards',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensCardController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensCardController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::XTMATKAX154KeYJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m0d5hhjTStwBxBo7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/relate-authorization',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\RelatableAuthorizationController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\RelatableAuthorizationController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::m0d5hhjTStwBxBo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rKOWauf1UnvshTvv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/soft-deletes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\SoftDeleteStatusController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\SoftDeleteStatusController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::rKOWauf1UnvshTvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aaXZKhcS43p9XHwR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceIndexController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceIndexController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::aaXZKhcS43p9XHwR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8CIBQi9gBukecMZ4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/count',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceCountController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceCountController@show',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::8CIBQi9gBukecMZ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dBQenwAVJxzXmysT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/detach',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDetachController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDetachController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::dBQenwAVJxzXmysT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tOUdYzmEtuTcyOLE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/restore',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceRestoreController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceRestoreController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::tOUdYzmEtuTcyOLE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5w8GDBbKamwpgYdO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/force',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceForceDeleteController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceForceDeleteController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::5w8GDBbKamwpgYdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wNvCVFkjlN0DJ4tv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceShowController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceShowController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::wNvCVFkjlN0DJ4tv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::smEvVUtC98UA6AaW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceStoreController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceStoreController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::smEvVUtC98UA6AaW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QosywiJBI7aVJZ1G' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceUpdateController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceUpdateController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::QosywiJBI7aVJZ1G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::upxXfoPwafJnokQM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDestroyController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDestroyController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::upxXfoPwafJnokQM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NXXWWCvUsAEm2u0b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/associatable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AssociatableController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AssociatableController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::NXXWWCvUsAEm2u0b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n0Gmn5bPbGUcIcIF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attachable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AttachableController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AttachableController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::n0Gmn5bPbGUcIcIF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4g933Mxs4hG62K9h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/morphable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MorphableController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MorphableController@index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::4g933Mxs4hG62K9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gFP4kX1A4TAkpWFd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attach/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceAttachController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceAttachController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::gFP4kX1A4TAkpWFd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Piu14GpdqZBgHWle' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-attached/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AttachedResourceUpdateController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AttachedResourceUpdateController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Piu14GpdqZBgHWle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EN4juC1WbguhXPjF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attach-morphed/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova',
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MorphedResourceAttachController@handle',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MorphedResourceAttachController@handle',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
        'as' => 'generated::EN4juC1WbguhXPjF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8y2K1LtzCY1EbTdA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-vendor/ebess/advanced-nova-media-library/download/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Ebess\\AdvancedNovaMediaLibrary\\Http\\Controllers\\DownloadMediaController@show',
        'controller' => 'Ebess\\AdvancedNovaMediaLibrary\\Http\\Controllers\\DownloadMediaController@show',
        'namespace' => NULL,
        'prefix' => 'nova-vendor/ebess/advanced-nova-media-library',
        'where' => 
        array (
        ),
        'as' => 'generated::8y2K1LtzCY1EbTdA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ABXysmNNMW0eMuMH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-vendor/ebess/advanced-nova-media-library/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Ebess\\AdvancedNovaMediaLibrary\\Http\\Controllers\\MediaController@index',
        'controller' => 'Ebess\\AdvancedNovaMediaLibrary\\Http\\Controllers\\MediaController@index',
        'namespace' => NULL,
        'prefix' => 'nova-vendor/ebess/advanced-nova-media-library',
        'where' => 
        array (
        ),
        'as' => 'generated::ABXysmNNMW0eMuMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
          4 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'domain' => NULL,
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\RouterController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\RouterController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'nova.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v6lZq5weS6ZxwP9n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova/{view}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
          4 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'domain' => NULL,
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\RouterController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\RouterController@show',
        'prefix' => 'nova',
        'as' => 'generated::v6lZq5weS6ZxwP9n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
