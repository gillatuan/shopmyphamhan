<?phpreturn array(    'urlFormat'=>'path',//    'urlSuffix'=>'.html',    'showScriptName' => false,    'rules'          => array(        '/tinyMce-compressor/'                                   => 'tinyMce/compressor',        // Products        '/shop/confirm'                                              => 'Shop/product/confirmOrder',        '/shop/user-order'                                           => 'Shop/product/userOrder',        '/shop/update-cart'                                          => 'Shop/product/updateOrDeleteCart',        '/shop/cart'                                                 => 'Shop/product/viewCart',        '/shop/<cateAlias:.*?>/<alias:.*?>'                          => 'Shop/product/view',        '/shop/<cateAlias:.*?>_p<page:\d+>'                          => 'Shop/product/listProductsByCategory',        '/shop/<cateAlias:.*?>'                                      => 'Shop/product/listProductsByCategory',        '/tintuc-<newsAlias:.*?>'                                    => 'Shop/product/readNews',        '/search'                                                    => 'Shop/product/search',        '/faq'                                                       => 'Shop/product/faq',        '/'                                                          => 'Shop/product/index',        // site        '/contact'                                              => 'site/contact',        '/send-mail'                                            => 'site/sendToFriend',        '/logout'                                               => 'site/logout',        '/login'                                                => 'site/login',    ),);