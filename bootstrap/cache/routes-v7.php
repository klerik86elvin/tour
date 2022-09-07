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
            '_route' => 'generated::7alTOPNpecRV5AQC',
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
            '_route' => 'generated::jjG0SFIvMDdD715U',
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
            '_route' => 'generated::t1BbB1FmDH3ZBXfX',
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
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
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
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact-us',
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
            '_route' => 'contact-us.post',
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
      '/nova/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zgLfNPRBCIRN8yka',
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
            '_route' => 'generated::8Qm4JHdM79pqce0s',
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
            '_route' => 'generated::OOrVSj759jy4gwP1',
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
            '_route' => 'generated::oZJPOXkBP5aOAX4q',
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
            '_route' => 'generated::yDB7p6ws9YUfDuFV',
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
            '_route' => 'generated::BCvZ8olIbKE2UMQj',
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
      0 => '{^(?|/tour\\-type/([^/]++)(*:27)|/nova(?|/(?|password/reset/([^/]++)(*:69)|(.*)(*:80))|\\-(?|api/(?|s(?|cripts/([^/]++)(*:119)|tyles/([^/]++)(*:141))|([^/]++)/(?|field/([^/]++)(*:176)|trix\\-attachment/([^/]++)(?|(*:212)|/([^/]++)(*:229))|creation\\-fields(*:254)|([^/]++)/update\\-fields(*:285)|creation\\-pivot\\-fields/([^/]++)(*:325)|([^/]++)/(?|update\\-pivot\\-fields/([^/]++)/([^/]++)(*:384)|download/([^/]++)(*:409)|field/([^/]++)(*:431)|([^/]++)/([^/]++)/field/([^/]++)(*:471)))|dashboards/([^/]++)(*:500)|([^/]++)/(?|action(?|s(*:530)|(*:538))|filters(*:554)|lens(?|es(*:571)|/([^/]++)(?|(*:591)|/(?|count(*:608)|f(?|orce(*:624)|ilters(*:638))|restore(*:654)|action(?|s(*:672)|(*:680)))|(*:690))))|metrics/([^/]++)(*:717)|([^/]++)(?|/(?|metrics(?|(*:750)|/([^/]++)(*:767))|([^/]++)/metrics/([^/]++)(*:801)|lens/([^/]++)/(?|metrics(?|(*:836)|/([^/]++)(*:853))|cards(*:867))|c(?|ards(*:884)|ount(*:896))|re(?|late\\-authorization(*:929)|store(*:942))|soft\\-deletes(*:964)|detach(*:978)|force(*:991)|([^/]++)(?|(*:1010))|associatable/([^/]++)(*:1041)|([^/]++)/attachable/([^/]++)(*:1078)|morphable/([^/]++)(*:1105)|([^/]++)/(?|attach(?|/([^/]++)(*:1144)|\\-morphed/([^/]++)(*:1171))|update\\-attached/([^/]++)/([^/]++)(*:1215)))|(*:1226)))|vendor/ebess/advanced\\-nova\\-media\\-library/download/([^/]++)(*:1298))))/?$}sDu',
    ),
    3 => 
    array (
      27 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tour-type',
          ),
          1 => 
          array (
            0 => 'id',
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
      69 => 
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
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2SdXt45qDInjkcm7',
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
      119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::035A71keF0zcmmdW',
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
      141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hgyFr0NoVpwb0xk6',
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
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eqh3fBZTd8TJXQMs',
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
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D40Ee4blx4v5umMM',
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
            '_route' => 'generated::J7V4p6HVNznSXsg8',
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
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ve5teKZ3YbCmT00',
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
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::48JAKrEV56G4ekIC',
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
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8tUHcFgqS8YemnqP',
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
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wZk9aAwINsfC4lCS',
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
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::avhsPjuXuIuApiPt',
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
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hFQ9nMFjtGQNiwPJ',
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
      431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::45T73nAAOGBEw3KG',
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
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::61yl4cVhhFZwkrNx',
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
      500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQEVnI7smNKH1Ngr',
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
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCevlqb3xnvyoDV2',
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
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eeg3JSAZ2vpQ2pL2',
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
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::35Rr52tecFKYgOwy',
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
      571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m7nK5TkRLc1z3aVj',
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
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3otWbRZBLxapteTp',
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
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Le0fPsuZgzunSfH',
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
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kTHbEMIPxexh7EP',
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
      638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lNOwNtU1VQjEtUYy',
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
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TEsn3xjUgCud6HVz',
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
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4EuAhyufOrykpe71',
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
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZDTyRMtgnxJDPcDr',
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
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p6hf4rPSM3eewvvL',
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
      717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LKqmROrVqQ7NKvRA',
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
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c3G5HPZbn9m23FIh',
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
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KfGONFRYZDWfWWL2',
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
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XhY2MPfBo3ejUrGp',
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
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u8085Hb0iiH3pnUs',
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
      853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WbhQtoejtGjdH4ki',
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
      867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sIDqD2suvWndasKS',
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
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1JQYEsKwJCuFzIWo',
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
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jr4R9cNshRzIRgJo',
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
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gYogoOhXn5YHYDru',
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
      942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qbmDggA2UrPk4X9z',
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
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XZPnqR2smKKOZdmQ',
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
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2pcuclNGyVFdbOvX',
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
      991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hvk7kdtk8zYd3ZrW',
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
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Y9jSG3m3YALTELI',
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
            '_route' => 'generated::ny39ZUKcVDlRtbuF',
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
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l7BoQWdFgvFM438n',
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
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rhc5xEoZj3gxsGkP',
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
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XgOjpCImg40dRO9c',
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
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PGPadholjvQzRLJX',
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
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V6jzmUSTknV91qrc',
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
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ty8UCzXt2KPR5jxq',
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
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nIdVr0le2VaWWNlR',
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
            '_route' => 'generated::pai1K2kPsHRCqEE5',
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
            '_route' => 'generated::L6ZMxAiYOA28759B',
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
      1298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GOB37fJF51FRP5r2',
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
    'generated::7alTOPNpecRV5AQC' => 
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
        'as' => 'generated::7alTOPNpecRV5AQC',
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
    'generated::jjG0SFIvMDdD715U' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000012d9365c0000000073151dbb";}";s:4:"hash";s:44:"UGbhOZr2WGJgeytBpFdykouNJoLQezM6+VzOq2D12T4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jjG0SFIvMDdD715U',
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
    'generated::t1BbB1FmDH3ZBXfX' => 
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
        'as' => 'generated::t1BbB1FmDH3ZBXfX',
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
    'tour-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tour-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TourTypeController@index',
        'controller' => 'App\\Http\\Controllers\\TourTypeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tour-type',
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
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service',
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
    'contact-us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactUsController@index',
        'controller' => 'App\\Http\\Controllers\\ContactUsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact-us',
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
    'contact-us.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactUsController@post',
        'controller' => 'App\\Http\\Controllers\\ContactUsController@post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact-us.post',
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
    'generated::zgLfNPRBCIRN8yka' => 
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
        'as' => 'generated::zgLfNPRBCIRN8yka',
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
    'generated::8Qm4JHdM79pqce0s' => 
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
        'as' => 'generated::8Qm4JHdM79pqce0s',
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
    'generated::035A71keF0zcmmdW' => 
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
        'as' => 'generated::035A71keF0zcmmdW',
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
    'generated::hgyFr0NoVpwb0xk6' => 
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
        'as' => 'generated::hgyFr0NoVpwb0xk6',
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
    'generated::OOrVSj759jy4gwP1' => 
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
        'as' => 'generated::OOrVSj759jy4gwP1',
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
    'generated::eqh3fBZTd8TJXQMs' => 
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
        'as' => 'generated::eqh3fBZTd8TJXQMs',
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
    'generated::D40Ee4blx4v5umMM' => 
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
        'as' => 'generated::D40Ee4blx4v5umMM',
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
    'generated::J7V4p6HVNznSXsg8' => 
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
        'as' => 'generated::J7V4p6HVNznSXsg8',
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
    'generated::9ve5teKZ3YbCmT00' => 
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
        'as' => 'generated::9ve5teKZ3YbCmT00',
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
    'generated::48JAKrEV56G4ekIC' => 
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
        'as' => 'generated::48JAKrEV56G4ekIC',
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
    'generated::8tUHcFgqS8YemnqP' => 
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
        'as' => 'generated::8tUHcFgqS8YemnqP',
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
    'generated::wZk9aAwINsfC4lCS' => 
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
        'as' => 'generated::wZk9aAwINsfC4lCS',
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
    'generated::avhsPjuXuIuApiPt' => 
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
        'as' => 'generated::avhsPjuXuIuApiPt',
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
    'generated::hFQ9nMFjtGQNiwPJ' => 
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
        'as' => 'generated::hFQ9nMFjtGQNiwPJ',
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
    'generated::45T73nAAOGBEw3KG' => 
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
        'as' => 'generated::45T73nAAOGBEw3KG',
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
    'generated::61yl4cVhhFZwkrNx' => 
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
        'as' => 'generated::61yl4cVhhFZwkrNx',
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
    'generated::sQEVnI7smNKH1Ngr' => 
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
        'as' => 'generated::sQEVnI7smNKH1Ngr',
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
    'generated::dCevlqb3xnvyoDV2' => 
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
        'as' => 'generated::dCevlqb3xnvyoDV2',
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
    'generated::Eeg3JSAZ2vpQ2pL2' => 
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
        'as' => 'generated::Eeg3JSAZ2vpQ2pL2',
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
    'generated::35Rr52tecFKYgOwy' => 
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
        'as' => 'generated::35Rr52tecFKYgOwy',
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
    'generated::m7nK5TkRLc1z3aVj' => 
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
        'as' => 'generated::m7nK5TkRLc1z3aVj',
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
    'generated::3otWbRZBLxapteTp' => 
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
        'as' => 'generated::3otWbRZBLxapteTp',
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
    'generated::3Le0fPsuZgzunSfH' => 
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
        'as' => 'generated::3Le0fPsuZgzunSfH',
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
    'generated::p6hf4rPSM3eewvvL' => 
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
        'as' => 'generated::p6hf4rPSM3eewvvL',
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
    'generated::7kTHbEMIPxexh7EP' => 
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
        'as' => 'generated::7kTHbEMIPxexh7EP',
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
    'generated::TEsn3xjUgCud6HVz' => 
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
        'as' => 'generated::TEsn3xjUgCud6HVz',
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
    'generated::4EuAhyufOrykpe71' => 
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
        'as' => 'generated::4EuAhyufOrykpe71',
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
    'generated::ZDTyRMtgnxJDPcDr' => 
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
        'as' => 'generated::ZDTyRMtgnxJDPcDr',
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
    'generated::lNOwNtU1VQjEtUYy' => 
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
        'as' => 'generated::lNOwNtU1VQjEtUYy',
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
    'generated::oZJPOXkBP5aOAX4q' => 
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
        'as' => 'generated::oZJPOXkBP5aOAX4q',
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
    'generated::LKqmROrVqQ7NKvRA' => 
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
        'as' => 'generated::LKqmROrVqQ7NKvRA',
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
    'generated::c3G5HPZbn9m23FIh' => 
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
        'as' => 'generated::c3G5HPZbn9m23FIh',
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
    'generated::KfGONFRYZDWfWWL2' => 
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
        'as' => 'generated::KfGONFRYZDWfWWL2',
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
    'generated::XhY2MPfBo3ejUrGp' => 
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
        'as' => 'generated::XhY2MPfBo3ejUrGp',
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
    'generated::u8085Hb0iiH3pnUs' => 
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
        'as' => 'generated::u8085Hb0iiH3pnUs',
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
    'generated::WbhQtoejtGjdH4ki' => 
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
        'as' => 'generated::WbhQtoejtGjdH4ki',
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
    'generated::yDB7p6ws9YUfDuFV' => 
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
        'as' => 'generated::yDB7p6ws9YUfDuFV',
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
    'generated::1JQYEsKwJCuFzIWo' => 
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
        'as' => 'generated::1JQYEsKwJCuFzIWo',
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
    'generated::sIDqD2suvWndasKS' => 
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
        'as' => 'generated::sIDqD2suvWndasKS',
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
    'generated::gYogoOhXn5YHYDru' => 
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
        'as' => 'generated::gYogoOhXn5YHYDru',
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
    'generated::XZPnqR2smKKOZdmQ' => 
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
        'as' => 'generated::XZPnqR2smKKOZdmQ',
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
    'generated::nIdVr0le2VaWWNlR' => 
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
        'as' => 'generated::nIdVr0le2VaWWNlR',
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
    'generated::Jr4R9cNshRzIRgJo' => 
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
        'as' => 'generated::Jr4R9cNshRzIRgJo',
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
    'generated::2pcuclNGyVFdbOvX' => 
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
        'as' => 'generated::2pcuclNGyVFdbOvX',
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
    'generated::qbmDggA2UrPk4X9z' => 
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
        'as' => 'generated::qbmDggA2UrPk4X9z',
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
    'generated::Hvk7kdtk8zYd3ZrW' => 
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
        'as' => 'generated::Hvk7kdtk8zYd3ZrW',
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
    'generated::4Y9jSG3m3YALTELI' => 
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
        'as' => 'generated::4Y9jSG3m3YALTELI',
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
    'generated::pai1K2kPsHRCqEE5' => 
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
        'as' => 'generated::pai1K2kPsHRCqEE5',
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
    'generated::ny39ZUKcVDlRtbuF' => 
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
        'as' => 'generated::ny39ZUKcVDlRtbuF',
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
    'generated::L6ZMxAiYOA28759B' => 
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
        'as' => 'generated::L6ZMxAiYOA28759B',
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
    'generated::l7BoQWdFgvFM438n' => 
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
        'as' => 'generated::l7BoQWdFgvFM438n',
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
    'generated::Rhc5xEoZj3gxsGkP' => 
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
        'as' => 'generated::Rhc5xEoZj3gxsGkP',
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
    'generated::XgOjpCImg40dRO9c' => 
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
        'as' => 'generated::XgOjpCImg40dRO9c',
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
    'generated::PGPadholjvQzRLJX' => 
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
        'as' => 'generated::PGPadholjvQzRLJX',
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
    'generated::ty8UCzXt2KPR5jxq' => 
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
        'as' => 'generated::ty8UCzXt2KPR5jxq',
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
    'generated::V6jzmUSTknV91qrc' => 
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
        'as' => 'generated::V6jzmUSTknV91qrc',
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
    'generated::GOB37fJF51FRP5r2' => 
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
        'as' => 'generated::GOB37fJF51FRP5r2',
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
    'generated::BCvZ8olIbKE2UMQj' => 
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
        'as' => 'generated::BCvZ8olIbKE2UMQj',
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
    'generated::2SdXt45qDInjkcm7' => 
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
        'as' => 'generated::2SdXt45qDInjkcm7',
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
