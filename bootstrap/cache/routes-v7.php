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
            '_route' => 'generated::weqOkYD7ES2zckys',
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
            '_route' => 'generated::xqGArNYJNZO0sVP2',
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
            '_route' => 'generated::8F4vno1oAWB1eSUY',
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
            '_route' => 'generated::mpiF7JvaNCfgntik',
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
            '_route' => 'generated::eQbNVjJgvGi2Rg1U',
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
            '_route' => 'generated::qrkFa6KAVaD8SRaV',
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
            '_route' => 'generated::Dx5f7vGC1eNNGee0',
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
            '_route' => 'generated::PeBJWRTp8oYAQBSY',
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
            '_route' => 'generated::kN7Fj2vNMPQeAvtg',
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
            '_route' => 'generated::JckaUsGvsQ7goSER',
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
            '_route' => 'generated::TRVO66mOXhQ4LeM6',
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
            '_route' => 'generated::DaYmh8bgvfdpr1rw',
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
            '_route' => 'generated::wUQgoBqE5VkJyeds',
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
            '_route' => 'generated::Awc1rJEPw2o1ktrw',
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
            '_route' => 'generated::0Sv5NibTf9Wz6Qcf',
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
            '_route' => 'generated::l0KmQqVjbNAR1QV1',
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
            '_route' => 'generated::u2b335bAtYIiWj5O',
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
            '_route' => 'generated::vC4truyHXAuCBM1v',
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
            '_route' => 'generated::FaseBiFdG9NGLp61',
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
            '_route' => 'generated::EQvZULIROetNfmV5',
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
            '_route' => 'generated::fBTPAKwkcXB8ka0P',
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
            '_route' => 'generated::28HVlIWprAEcrimK',
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
            '_route' => 'generated::GpFN3ctdOms8Y6EI',
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
            '_route' => 'generated::sxTuWxoHDBInIypI',
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
            '_route' => 'generated::6Sx6ALQQMyk6CcUr',
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
            '_route' => 'generated::OJCshdbEe330H5O7',
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
            '_route' => 'generated::ji89lbloY4eKnMYq',
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
            '_route' => 'generated::dD7XMAO4VTsShW32',
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
            '_route' => 'generated::GQ7EXU7G9kP85tYi',
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
            '_route' => 'generated::lyCjn5wmECqXr25a',
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
            '_route' => 'generated::PLhCjc5HeD6lYFAN',
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
            '_route' => 'generated::FMKC9s3FPNDtc4uX',
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
            '_route' => 'generated::zsNTIlI6vJsMF5WP',
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
            '_route' => 'generated::bUEQF4nDSHClnRne',
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
            '_route' => 'generated::Y3W0empvfi7ikab3',
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
            '_route' => 'generated::rVWyjJDTPdO0ipXY',
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
            '_route' => 'generated::WW3nB6uO5u2EyFHi',
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
            '_route' => 'generated::1G4WEeTsEFVq0fyQ',
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
            '_route' => 'generated::lDcIVgekUIjGMq6I',
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
            '_route' => 'generated::lOmjQ2PTCYgcmfga',
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
            '_route' => 'generated::Tb1pPMRcPIiMpEaQ',
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
            '_route' => 'generated::t2Sri33VmHS7cIet',
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
            '_route' => 'generated::vRpSnDp4aPcE3UXN',
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
            '_route' => 'generated::doNNy2Y9IVEPq2C1',
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
            '_route' => 'generated::05lOmbfeWQIajFs0',
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
            '_route' => 'generated::4s7MNW2NeetZfGkN',
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
            '_route' => 'generated::mAr3pMuixsxbuq1i',
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
            '_route' => 'generated::ZLevvX20sIVYCbLM',
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
            '_route' => 'generated::GxRphKDPLpX1WZaE',
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
            '_route' => 'generated::Yu8334kd05Vvk2YD',
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
            '_route' => 'generated::Q6Jp8Fro7ocrhX2V',
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
            '_route' => 'generated::QimUJ7pa1yQWCghx',
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
            '_route' => 'generated::syNWn0EWgBWXmEkc',
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
            '_route' => 'generated::5Ksj8o6z4xV0pmxI',
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
            '_route' => 'generated::ni4bkrQLkB6qMlEF',
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
            '_route' => 'generated::aqHrTHIyLfyKueW5',
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
            '_route' => 'generated::Z3vU0OacDCqG2Nj3',
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
            '_route' => 'generated::yZdJC6Qk7GUj4OLz',
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
            '_route' => 'generated::bOMjhRzyHGyeMdY7',
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
            '_route' => 'generated::5syDdjvuLaqbJzts',
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
            '_route' => 'generated::gMLtVxCEPKs8DeWz',
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
            '_route' => 'generated::BPoCT4lZ6kpftcpf',
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
    'generated::weqOkYD7ES2zckys' => 
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
        'as' => 'generated::weqOkYD7ES2zckys',
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
    'generated::xqGArNYJNZO0sVP2' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000044bbefde0000000070da6f54";}";s:4:"hash";s:44:"riaegvulFncSeGGvHzGOqvyxFCZWoAj0vbjZOgio0uA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xqGArNYJNZO0sVP2',
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
    'generated::8F4vno1oAWB1eSUY' => 
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
        'as' => 'generated::8F4vno1oAWB1eSUY',
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
    'generated::mpiF7JvaNCfgntik' => 
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
        'as' => 'generated::mpiF7JvaNCfgntik',
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
    'generated::eQbNVjJgvGi2Rg1U' => 
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
        'as' => 'generated::eQbNVjJgvGi2Rg1U',
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
    'generated::TRVO66mOXhQ4LeM6' => 
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
        'as' => 'generated::TRVO66mOXhQ4LeM6',
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
    'generated::DaYmh8bgvfdpr1rw' => 
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
        'as' => 'generated::DaYmh8bgvfdpr1rw',
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
    'generated::qrkFa6KAVaD8SRaV' => 
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
        'as' => 'generated::qrkFa6KAVaD8SRaV',
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
    'generated::wUQgoBqE5VkJyeds' => 
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
        'as' => 'generated::wUQgoBqE5VkJyeds',
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
    'generated::Awc1rJEPw2o1ktrw' => 
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
        'as' => 'generated::Awc1rJEPw2o1ktrw',
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
    'generated::0Sv5NibTf9Wz6Qcf' => 
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
        'as' => 'generated::0Sv5NibTf9Wz6Qcf',
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
    'generated::l0KmQqVjbNAR1QV1' => 
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
        'as' => 'generated::l0KmQqVjbNAR1QV1',
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
    'generated::u2b335bAtYIiWj5O' => 
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
        'as' => 'generated::u2b335bAtYIiWj5O',
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
    'generated::vC4truyHXAuCBM1v' => 
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
        'as' => 'generated::vC4truyHXAuCBM1v',
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
    'generated::FaseBiFdG9NGLp61' => 
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
        'as' => 'generated::FaseBiFdG9NGLp61',
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
    'generated::EQvZULIROetNfmV5' => 
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
        'as' => 'generated::EQvZULIROetNfmV5',
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
    'generated::fBTPAKwkcXB8ka0P' => 
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
        'as' => 'generated::fBTPAKwkcXB8ka0P',
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
    'generated::28HVlIWprAEcrimK' => 
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
        'as' => 'generated::28HVlIWprAEcrimK',
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
    'generated::GpFN3ctdOms8Y6EI' => 
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
        'as' => 'generated::GpFN3ctdOms8Y6EI',
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
    'generated::sxTuWxoHDBInIypI' => 
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
        'as' => 'generated::sxTuWxoHDBInIypI',
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
    'generated::6Sx6ALQQMyk6CcUr' => 
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
        'as' => 'generated::6Sx6ALQQMyk6CcUr',
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
    'generated::OJCshdbEe330H5O7' => 
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
        'as' => 'generated::OJCshdbEe330H5O7',
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
    'generated::ji89lbloY4eKnMYq' => 
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
        'as' => 'generated::ji89lbloY4eKnMYq',
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
    'generated::dD7XMAO4VTsShW32' => 
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
        'as' => 'generated::dD7XMAO4VTsShW32',
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
    'generated::GQ7EXU7G9kP85tYi' => 
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
        'as' => 'generated::GQ7EXU7G9kP85tYi',
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
    'generated::lyCjn5wmECqXr25a' => 
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
        'as' => 'generated::lyCjn5wmECqXr25a',
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
    'generated::rVWyjJDTPdO0ipXY' => 
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
        'as' => 'generated::rVWyjJDTPdO0ipXY',
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
    'generated::PLhCjc5HeD6lYFAN' => 
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
        'as' => 'generated::PLhCjc5HeD6lYFAN',
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
    'generated::zsNTIlI6vJsMF5WP' => 
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
        'as' => 'generated::zsNTIlI6vJsMF5WP',
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
    'generated::bUEQF4nDSHClnRne' => 
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
        'as' => 'generated::bUEQF4nDSHClnRne',
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
    'generated::Y3W0empvfi7ikab3' => 
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
        'as' => 'generated::Y3W0empvfi7ikab3',
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
    'generated::FMKC9s3FPNDtc4uX' => 
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
        'as' => 'generated::FMKC9s3FPNDtc4uX',
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
    'generated::Dx5f7vGC1eNNGee0' => 
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
        'as' => 'generated::Dx5f7vGC1eNNGee0',
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
    'generated::WW3nB6uO5u2EyFHi' => 
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
        'as' => 'generated::WW3nB6uO5u2EyFHi',
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
    'generated::1G4WEeTsEFVq0fyQ' => 
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
        'as' => 'generated::1G4WEeTsEFVq0fyQ',
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
    'generated::lDcIVgekUIjGMq6I' => 
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
        'as' => 'generated::lDcIVgekUIjGMq6I',
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
    'generated::lOmjQ2PTCYgcmfga' => 
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
        'as' => 'generated::lOmjQ2PTCYgcmfga',
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
    'generated::Tb1pPMRcPIiMpEaQ' => 
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
        'as' => 'generated::Tb1pPMRcPIiMpEaQ',
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
    'generated::t2Sri33VmHS7cIet' => 
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
        'as' => 'generated::t2Sri33VmHS7cIet',
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
    'generated::PeBJWRTp8oYAQBSY' => 
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
        'as' => 'generated::PeBJWRTp8oYAQBSY',
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
    'generated::doNNy2Y9IVEPq2C1' => 
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
        'as' => 'generated::doNNy2Y9IVEPq2C1',
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
    'generated::vRpSnDp4aPcE3UXN' => 
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
        'as' => 'generated::vRpSnDp4aPcE3UXN',
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
    'generated::4s7MNW2NeetZfGkN' => 
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
        'as' => 'generated::4s7MNW2NeetZfGkN',
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
    'generated::ZLevvX20sIVYCbLM' => 
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
        'as' => 'generated::ZLevvX20sIVYCbLM',
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
    'generated::bOMjhRzyHGyeMdY7' => 
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
        'as' => 'generated::bOMjhRzyHGyeMdY7',
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
    'generated::05lOmbfeWQIajFs0' => 
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
        'as' => 'generated::05lOmbfeWQIajFs0',
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
    'generated::GxRphKDPLpX1WZaE' => 
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
        'as' => 'generated::GxRphKDPLpX1WZaE',
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
    'generated::mAr3pMuixsxbuq1i' => 
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
        'as' => 'generated::mAr3pMuixsxbuq1i',
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
    'generated::Yu8334kd05Vvk2YD' => 
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
        'as' => 'generated::Yu8334kd05Vvk2YD',
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
    'generated::Q6Jp8Fro7ocrhX2V' => 
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
        'as' => 'generated::Q6Jp8Fro7ocrhX2V',
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
    'generated::5syDdjvuLaqbJzts' => 
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
        'as' => 'generated::5syDdjvuLaqbJzts',
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
    'generated::QimUJ7pa1yQWCghx' => 
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
        'as' => 'generated::QimUJ7pa1yQWCghx',
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
    'generated::gMLtVxCEPKs8DeWz' => 
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
        'as' => 'generated::gMLtVxCEPKs8DeWz',
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
    'generated::syNWn0EWgBWXmEkc' => 
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
        'as' => 'generated::syNWn0EWgBWXmEkc',
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
    'generated::5Ksj8o6z4xV0pmxI' => 
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
        'as' => 'generated::5Ksj8o6z4xV0pmxI',
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
    'generated::ni4bkrQLkB6qMlEF' => 
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
        'as' => 'generated::ni4bkrQLkB6qMlEF',
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
    'generated::aqHrTHIyLfyKueW5' => 
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
        'as' => 'generated::aqHrTHIyLfyKueW5',
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
    'generated::yZdJC6Qk7GUj4OLz' => 
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
        'as' => 'generated::yZdJC6Qk7GUj4OLz',
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
    'generated::Z3vU0OacDCqG2Nj3' => 
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
        'as' => 'generated::Z3vU0OacDCqG2Nj3',
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
    'generated::BPoCT4lZ6kpftcpf' => 
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
        'as' => 'generated::BPoCT4lZ6kpftcpf',
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
    'generated::kN7Fj2vNMPQeAvtg' => 
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
        'as' => 'generated::kN7Fj2vNMPQeAvtg',
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
    'generated::JckaUsGvsQ7goSER' => 
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
        'as' => 'generated::JckaUsGvsQ7goSER',
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
