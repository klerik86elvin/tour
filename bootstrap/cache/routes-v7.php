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
            '_route' => 'generated::Cc87iFV7PF0sbyNs',
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
            '_route' => 'generated::syCkPE7Kls66WnGP',
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
            '_route' => 'generated::w1yJQZKgNcv6aV6J',
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
      '/nova/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L04Ozgds8zkxaLsy',
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
            '_route' => 'generated::GncjYCW8v82XIoRr',
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
            '_route' => 'generated::VWV8Gorr0MqK4hCD',
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
            '_route' => 'generated::9OwvY3CV7Q4Webx5',
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
            '_route' => 'generated::V5BIwI5GzR4jkonh',
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
            '_route' => 'generated::7VZ2T4loucYzZqAC',
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
            '_route' => 'generated::4rNNmKiiPnU5Mtro',
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
            '_route' => 'generated::OJKewoLJi8NZrVkY',
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
            '_route' => 'generated::w1Atjc8dis048qQm',
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
            '_route' => 'generated::U2v9EIH2XTRyrNvi',
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
            '_route' => 'generated::cUk7Af3tTR9r5muW',
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
            '_route' => 'generated::5sssw7vzrWHkIAbl',
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
            '_route' => 'generated::QiwDVjjHVYtRe2yc',
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
            '_route' => 'generated::vS6R84oKIOo58gPU',
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
            '_route' => 'generated::B9h1OaH6qmpHYBSL',
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
            '_route' => 'generated::nb6Pp4ngSVWfrQ4o',
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
            '_route' => 'generated::9UG4C7BxFrljval7',
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
            '_route' => 'generated::Nw7lHVWFd16FfZHp',
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
            '_route' => 'generated::wQriPy82vVvW4FVa',
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
            '_route' => 'generated::ns9JraovaggbJAdW',
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
            '_route' => 'generated::JKsLsHWtpG86rOYw',
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
            '_route' => 'generated::zdrqVWwF13DhlsZl',
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
            '_route' => 'generated::GNFzB4BRg1Vkd4c5',
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
            '_route' => 'generated::seK2rogH3KMPyOGX',
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
            '_route' => 'generated::4vw9PDz3sXdDMoi3',
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
            '_route' => 'generated::WPWKAaKD02TC6sQF',
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
            '_route' => 'generated::yci1tqHtPVV7zx9q',
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
            '_route' => 'generated::tawCPp97lP3AU5lx',
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
            '_route' => 'generated::sVyByLphiMFjbSwj',
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
            '_route' => 'generated::eDl54KFXtCTRfqiu',
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
            '_route' => 'generated::yb8jrkfb2BVNC7TF',
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
            '_route' => 'generated::4ny9gPxnwRlrYiVZ',
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
            '_route' => 'generated::1wkd3JnuziF5anRe',
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
            '_route' => 'generated::HMIL1UeQN8u9uEDk',
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
            '_route' => 'generated::XcngC6ED5nIM9Eef',
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
            '_route' => 'generated::tAGXRsMzPeYuQ0W3',
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
            '_route' => 'generated::iAPVQkG7bF0jUS3F',
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
            '_route' => 'generated::5XRKgcbL0e3WK77A',
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
            '_route' => 'generated::IYGfSGABx5KCQw4j',
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
            '_route' => 'generated::apzE83ZUNqmUfccz',
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
            '_route' => 'generated::0sXjT0CsNcrYqKhm',
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
            '_route' => 'generated::tx1eVkhs211QSjQF',
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
            '_route' => 'generated::Oc36f8s469Cup51q',
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
            '_route' => 'generated::rYkR95kZXKmRsPdV',
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
            '_route' => 'generated::QSYORrr08sszGoFP',
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
            '_route' => 'generated::mncsrB4AadBmHjES',
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
            '_route' => 'generated::swcBGOM9WUsCxGYA',
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
            '_route' => 'generated::kzGcD7xVW7SSY1XM',
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
            '_route' => 'generated::hiLK7tJopeh3lOdP',
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
            '_route' => 'generated::OLK7IHZPWAeucIZd',
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
            '_route' => 'generated::hfurV1Of0on0dpQ4',
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
            '_route' => 'generated::oTSGDshqdolj274V',
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
            '_route' => 'generated::nUv8E8YIyb58QphW',
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
            '_route' => 'generated::Uy1mePBk7fxJuJTU',
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
            '_route' => 'generated::Vwxu4Rr1BLIo4m2V',
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
            '_route' => 'generated::NCnzHTaQbluHg7rk',
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
            '_route' => 'generated::EAO7FkwJ8mrTXM8m',
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
            '_route' => 'generated::bn8hxEZ9nmOMnRUs',
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
            '_route' => 'generated::rYIdNrHM192OSZmu',
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
    'generated::Cc87iFV7PF0sbyNs' => 
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
        'as' => 'generated::Cc87iFV7PF0sbyNs',
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
    'generated::syCkPE7Kls66WnGP' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005b0704060000000059b24115";}";s:4:"hash";s:44:"zM37bgeQuqRACzJTO7brnfHy7pkvOx20FbEq3l1CaFw=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::syCkPE7Kls66WnGP',
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
    'generated::w1yJQZKgNcv6aV6J' => 
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
        'as' => 'generated::w1yJQZKgNcv6aV6J',
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
    'generated::L04Ozgds8zkxaLsy' => 
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
        'as' => 'generated::L04Ozgds8zkxaLsy',
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
    'generated::GncjYCW8v82XIoRr' => 
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
        'as' => 'generated::GncjYCW8v82XIoRr',
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
    'generated::OJKewoLJi8NZrVkY' => 
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
        'as' => 'generated::OJKewoLJi8NZrVkY',
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
    'generated::w1Atjc8dis048qQm' => 
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
        'as' => 'generated::w1Atjc8dis048qQm',
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
    'generated::VWV8Gorr0MqK4hCD' => 
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
        'as' => 'generated::VWV8Gorr0MqK4hCD',
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
    'generated::U2v9EIH2XTRyrNvi' => 
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
        'as' => 'generated::U2v9EIH2XTRyrNvi',
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
    'generated::cUk7Af3tTR9r5muW' => 
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
        'as' => 'generated::cUk7Af3tTR9r5muW',
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
    'generated::5sssw7vzrWHkIAbl' => 
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
        'as' => 'generated::5sssw7vzrWHkIAbl',
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
    'generated::QiwDVjjHVYtRe2yc' => 
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
        'as' => 'generated::QiwDVjjHVYtRe2yc',
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
    'generated::vS6R84oKIOo58gPU' => 
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
        'as' => 'generated::vS6R84oKIOo58gPU',
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
    'generated::B9h1OaH6qmpHYBSL' => 
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
        'as' => 'generated::B9h1OaH6qmpHYBSL',
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
    'generated::nb6Pp4ngSVWfrQ4o' => 
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
        'as' => 'generated::nb6Pp4ngSVWfrQ4o',
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
    'generated::9UG4C7BxFrljval7' => 
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
        'as' => 'generated::9UG4C7BxFrljval7',
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
    'generated::Nw7lHVWFd16FfZHp' => 
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
        'as' => 'generated::Nw7lHVWFd16FfZHp',
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
    'generated::wQriPy82vVvW4FVa' => 
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
        'as' => 'generated::wQriPy82vVvW4FVa',
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
    'generated::ns9JraovaggbJAdW' => 
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
        'as' => 'generated::ns9JraovaggbJAdW',
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
    'generated::JKsLsHWtpG86rOYw' => 
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
        'as' => 'generated::JKsLsHWtpG86rOYw',
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
    'generated::zdrqVWwF13DhlsZl' => 
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
        'as' => 'generated::zdrqVWwF13DhlsZl',
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
    'generated::GNFzB4BRg1Vkd4c5' => 
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
        'as' => 'generated::GNFzB4BRg1Vkd4c5',
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
    'generated::seK2rogH3KMPyOGX' => 
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
        'as' => 'generated::seK2rogH3KMPyOGX',
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
    'generated::4vw9PDz3sXdDMoi3' => 
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
        'as' => 'generated::4vw9PDz3sXdDMoi3',
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
    'generated::WPWKAaKD02TC6sQF' => 
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
        'as' => 'generated::WPWKAaKD02TC6sQF',
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
    'generated::yci1tqHtPVV7zx9q' => 
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
        'as' => 'generated::yci1tqHtPVV7zx9q',
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
    'generated::1wkd3JnuziF5anRe' => 
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
        'as' => 'generated::1wkd3JnuziF5anRe',
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
    'generated::tawCPp97lP3AU5lx' => 
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
        'as' => 'generated::tawCPp97lP3AU5lx',
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
    'generated::eDl54KFXtCTRfqiu' => 
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
        'as' => 'generated::eDl54KFXtCTRfqiu',
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
    'generated::yb8jrkfb2BVNC7TF' => 
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
        'as' => 'generated::yb8jrkfb2BVNC7TF',
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
    'generated::4ny9gPxnwRlrYiVZ' => 
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
        'as' => 'generated::4ny9gPxnwRlrYiVZ',
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
    'generated::sVyByLphiMFjbSwj' => 
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
        'as' => 'generated::sVyByLphiMFjbSwj',
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
    'generated::9OwvY3CV7Q4Webx5' => 
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
        'as' => 'generated::9OwvY3CV7Q4Webx5',
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
    'generated::HMIL1UeQN8u9uEDk' => 
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
        'as' => 'generated::HMIL1UeQN8u9uEDk',
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
    'generated::XcngC6ED5nIM9Eef' => 
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
        'as' => 'generated::XcngC6ED5nIM9Eef',
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
    'generated::tAGXRsMzPeYuQ0W3' => 
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
        'as' => 'generated::tAGXRsMzPeYuQ0W3',
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
    'generated::iAPVQkG7bF0jUS3F' => 
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
        'as' => 'generated::iAPVQkG7bF0jUS3F',
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
    'generated::5XRKgcbL0e3WK77A' => 
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
        'as' => 'generated::5XRKgcbL0e3WK77A',
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
    'generated::IYGfSGABx5KCQw4j' => 
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
        'as' => 'generated::IYGfSGABx5KCQw4j',
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
    'generated::V5BIwI5GzR4jkonh' => 
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
        'as' => 'generated::V5BIwI5GzR4jkonh',
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
    'generated::0sXjT0CsNcrYqKhm' => 
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
        'as' => 'generated::0sXjT0CsNcrYqKhm',
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
    'generated::apzE83ZUNqmUfccz' => 
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
        'as' => 'generated::apzE83ZUNqmUfccz',
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
    'generated::Oc36f8s469Cup51q' => 
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
        'as' => 'generated::Oc36f8s469Cup51q',
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
    'generated::QSYORrr08sszGoFP' => 
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
        'as' => 'generated::QSYORrr08sszGoFP',
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
    'generated::NCnzHTaQbluHg7rk' => 
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
        'as' => 'generated::NCnzHTaQbluHg7rk',
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
    'generated::tx1eVkhs211QSjQF' => 
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
        'as' => 'generated::tx1eVkhs211QSjQF',
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
    'generated::mncsrB4AadBmHjES' => 
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
        'as' => 'generated::mncsrB4AadBmHjES',
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
    'generated::rYkR95kZXKmRsPdV' => 
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
        'as' => 'generated::rYkR95kZXKmRsPdV',
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
    'generated::swcBGOM9WUsCxGYA' => 
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
        'as' => 'generated::swcBGOM9WUsCxGYA',
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
    'generated::kzGcD7xVW7SSY1XM' => 
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
        'as' => 'generated::kzGcD7xVW7SSY1XM',
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
    'generated::EAO7FkwJ8mrTXM8m' => 
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
        'as' => 'generated::EAO7FkwJ8mrTXM8m',
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
    'generated::hiLK7tJopeh3lOdP' => 
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
        'as' => 'generated::hiLK7tJopeh3lOdP',
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
    'generated::bn8hxEZ9nmOMnRUs' => 
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
        'as' => 'generated::bn8hxEZ9nmOMnRUs',
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
    'generated::OLK7IHZPWAeucIZd' => 
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
        'as' => 'generated::OLK7IHZPWAeucIZd',
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
    'generated::hfurV1Of0on0dpQ4' => 
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
        'as' => 'generated::hfurV1Of0on0dpQ4',
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
    'generated::oTSGDshqdolj274V' => 
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
        'as' => 'generated::oTSGDshqdolj274V',
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
    'generated::nUv8E8YIyb58QphW' => 
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
        'as' => 'generated::nUv8E8YIyb58QphW',
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
    'generated::Vwxu4Rr1BLIo4m2V' => 
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
        'as' => 'generated::Vwxu4Rr1BLIo4m2V',
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
    'generated::Uy1mePBk7fxJuJTU' => 
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
        'as' => 'generated::Uy1mePBk7fxJuJTU',
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
    'generated::rYIdNrHM192OSZmu' => 
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
        'as' => 'generated::rYIdNrHM192OSZmu',
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
    'generated::7VZ2T4loucYzZqAC' => 
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
        'as' => 'generated::7VZ2T4loucYzZqAC',
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
    'generated::4rNNmKiiPnU5Mtro' => 
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
        'as' => 'generated::4rNNmKiiPnU5Mtro',
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
