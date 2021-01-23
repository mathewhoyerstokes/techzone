<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/order' => [[['_route' => 'frontend.account.order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/order/cancel' => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], null, ['POST' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/delete' => [[['_route' => 'frontend.account.profile.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::deleteProfile'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/guest/login' => [[['_route' => 'frontend.account.guest.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::guestLoginPage'], null, ['GET' => 0], null, false, false, null]],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/csrf/generate' => [[['_route' => 'frontend.csrf.generateToken', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::generateCsrf'], null, ['POST' => 0], null, false, false, null]],
        '/api-access' => [[['_route' => 'frontend.api-access', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::getApiAccess'], null, ['GET' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FallbackController::rootFallback'], null, ['GET' => 0], null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/widgets/search/filter' => [[['_route' => 'widgets.search.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::filter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/_proxy/store-api' => [[['_route' => 'frontend.store-api.proxy', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\StoreApiProxyController::proxy'], null, null, null, false, false, null]],
        '/wishlist' => [[['_route' => 'frontend.wishlist.page', '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::index'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/wishlist' => [[['_route' => 'widgets.wishlist.pagelet', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagination'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wishlist/list' => [[['_route' => 'frontend.wishlist.product.list', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxList'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/(?'
                        .'|v(?'
                            .'|([^/]++)/_action/ac(?'
                                .'|cess\\-key/(?'
                                    .'|intergration(*:69)'
                                    .'|user(*:80)'
                                    .'|sales\\-channel(*:101)'
                                    .'|product\\-export(*:124)'
                                .')'
                                .'|l/(?'
                                    .'|privileges(*:148)'
                                    .'|additional_privileges(*:177)'
                                .')'
                            .')'
                            .'|(\\d+)/_search(*:200)'
                            .'|(\\d+)/_action/clone/([a-zA-Z-]+)/([0-9a-f]{32})(*:255)'
                            .'|(\\d+)/_action/version/([a-zA-Z-]+)/([0-9a-f]{32})(*:312)'
                            .'|(\\d+)/_action/version/merge/([a-zA-Z-]+)/([0-9a-f]{32})(*:375)'
                            .'|(\\d+)/_action/version/([^/]++)/([a-zA-Z-]+)/([^/]++)(*:435)'
                            .'|([^/]++)/(?'
                                .'|_(?'
                                    .'|action/(?'
                                        .'|c(?'
                                            .'|a(?'
                                                .'|che(?'
                                                    .'|_(?'
                                                        .'|info(*:491)'
                                                        .'|warmup(*:505)'
                                                    .')'
                                                    .'|(*:514)'
                                                .')'
                                                .'|ptcha_list(*:533)'
                                            .')'
                                            .'|leanup(*:548)'
                                            .'|ontainer_cache(*:570)'
                                        .')'
                                        .'|index(?'
                                            .'|(*:587)'
                                            .'|ing(*:598)'
                                        .')'
                                        .'|s(?'
                                            .'|ync(*:614)'
                                            .'|tore/(?'
                                                .'|frw/(?'
                                                    .'|start(*:642)'
                                                    .'|login(*:655)'
                                                    .'|finish(*:669)'
                                                .')'
                                                .'|l(?'
                                                    .'|anguage\\-plugins(*:698)'
                                                    .'|icense(?'
                                                        .'|\\-(?'
                                                            .'|domains(*:727)'
                                                            .'|violations(*:745)'
                                                        .')'
                                                        .'|s(*:755)'
                                                    .')'
                                                    .'|og(?'
                                                        .'|in(*:771)'
                                                        .'|out(*:782)'
                                                    .')'
                                                .')'
                                                .'|d(?'
                                                    .'|emo\\-data\\-plugins(*:814)'
                                                    .'|ownload(*:829)'
                                                .')'
                                                .'|recommendation(?'
                                                    .'|\\-regions(*:864)'
                                                    .'|s(*:873)'
                                                .')'
                                                .'|verify\\-license\\-domain(*:905)'
                                                .'|p(?'
                                                    .'|ing(*:920)'
                                                    .'|lugin/search(*:940)'
                                                .')'
                                                .'|checklogin(*:959)'
                                                .'|updates(*:974)'
                                            .')'
                                            .'|cheduled\\-task/(?'
                                                .'|run(*:1004)'
                                                .'|min\\-run\\-interval(*:1031)'
                                            .')'
                                            .'|nippet\\-set(*:1052)'
                                        .')'
                                        .'|plugin/(?'
                                            .'|u(?'
                                                .'|p(?'
                                                    .'|load(*:1084)'
                                                    .'|date(*:1097)'
                                                .')'
                                                .'|ninstall(*:1115)'
                                            .')'
                                            .'|de(?'
                                                .'|lete(*:1134)'
                                                .'|activate(*:1151)'
                                            .')'
                                            .'|refresh(*:1168)'
                                            .'|install(*:1184)'
                                            .'|activate(*:1201)'
                                        .')'
                                        .'|u(?'
                                            .'|pdate/(?'
                                                .'|check(?'
                                                    .'|(*:1232)'
                                                    .'|\\-requirements(*:1255)'
                                                .')'
                                                .'|plugin\\-compatibility(*:1286)'
                                                .'|d(?'
                                                    .'|ownload\\-latest\\-update(*:1322)'
                                                    .'|eactivate\\-plugins(*:1349)'
                                                .')'
                                                .'|unpack(*:1365)'
                                                .'|finish/([^/]++)(*:1389)'
                                            .')'
                                            .'|ser/(?'
                                                .'|user\\-recovery(?'
                                                    .'|(*:1423)'
                                                    .'|/(?'
                                                        .'|hash(*:1440)'
                                                        .'|password(*:1457)'
                                                    .')'
                                                .')'
                                                .'|check\\-(?'
                                                    .'|email\\-unique(*:1491)'
                                                    .'|username\\-unique(*:1516)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|message\\-queue/consume(*:1550)'
                                        .'|database/(?'
                                            .'|sync\\-migration(*:1586)'
                                            .'|migrate(?'
                                                .'|(*:1605)'
                                                .'|\\-destructive(*:1627)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|info/(?'
                                        .'|open(?'
                                            .'|api3\\.json(*:1664)'
                                            .'|\\-api\\-schema\\.json(*:1692)'
                                        .')'
                                        .'|e(?'
                                            .'|ntity\\-schema\\.json(*:1725)'
                                            .'|vents\\.json(*:1745)'
                                        .')'
                                        .'|swagger\\.html(*:1768)'
                                        .'|config(*:1783)'
                                        .'|business\\-events\\.json(*:1814)'
                                    .')'
                                    .'|proxy/(?'
                                        .'|s(?'
                                            .'|ales\\-channel\\-api/([^/]++)/(.*)(*:1869)'
                                            .'|tore\\-api/([^/]++)/(.*)(*:1901)'
                                            .'|witch\\-customer(*:1925)'
                                        .')'
                                        .'|modify\\-shipping\\-costs(*:1958)'
                                        .'|disable\\-automatic\\-promotions(*:1997)'
                                        .'|enable\\-automatic\\-promotions(*:2035)'
                                    .')'
                                .')'
                                .'|app\\-system/(?'
                                    .'|a(?'
                                        .'|ction\\-button/(?'
                                            .'|([^/]++)/([^/]++)(*:2099)'
                                            .'|run/([^/]++)(*:2120)'
                                        .')'
                                        .'|pp\\-url\\-change/(?'
                                            .'|strategies(*:2159)'
                                            .'|resolve(*:2175)'
                                            .'|url\\-difference(*:2199)'
                                        .')'
                                    .')'
                                    .'|modules(*:2217)'
                                .')'
                            .')'
                        .')'
                        .'|([^/]++)/_action/snippet(?'
                            .'|/filter(*:2263)'
                            .'|\\-set/(?'
                                .'|baseFile(*:2289)'
                                .'|author(*:2304)'
                            .')'
                        .')'
                        .'|v(?'
                            .'|([^/]++)/_action/(?'
                                .'|attribute\\-set/relations(*:2363)'
                                .'|s(?'
                                    .'|ystem\\-config(?'
                                        .'|/(?'
                                            .'|check(*:2401)'
                                            .'|schema(*:2416)'
                                            .'|batch(*:2430)'
                                        .')'
                                        .'|(*:2440)'
                                    .')'
                                    .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                        .'|(*:2490)'
                                        .'|/([^/]++)(*:2508)'
                                    .')'
                                .')'
                                .'|number\\-range/(?'
                                    .'|reserve/([^/]++)(?:/([^/]++))?(*:2566)'
                                    .'|preview\\-pattern(?:/([^/]++))?(*:2605)'
                                .')'
                                .'|product(?'
                                    .'|/([^/]++)/combinations(*:2647)'
                                    .'|\\-export/(?'
                                        .'|validate(*:2676)'
                                        .'|preview(*:2692)'
                                    .')'
                                .')'
                                .'|m(?'
                                    .'|edia(?'
                                        .'|\\-folder/([^/]++)/dissolve(*:2740)'
                                        .'|/(?'
                                            .'|([^/]++)/(?'
                                                .'|upload(*:2771)'
                                                .'|rename(*:2786)'
                                            .')'
                                            .'|provide\\-name(*:2809)'
                                        .')'
                                    .')'
                                    .'|ail\\-template/(?'
                                        .'|send(*:2841)'
                                        .'|validate(*:2858)'
                                    .')'
                                .')'
                                .'|import\\-export/(?'
                                    .'|f(?'
                                        .'|eatures(*:2898)'
                                        .'|ile/download(*:2919)'
                                    .')'
                                    .'|pr(?'
                                        .'|epare(*:2939)'
                                        .'|ocess(*:2953)'
                                    .')'
                                    .'|cancel(*:2969)'
                                .')'
                            .')'
                            .'|(\\d+)/_action/seo\\-url\\-template/validate(*:3021)'
                            .'|(\\d+)/_action/seo\\-url\\-template/preview(*:3070)'
                            .'|(\\d+)/_action/seo\\-url\\-template/context(*:3119)'
                            .'|(\\d+)/_action/seo\\-url/canonical(*:3160)'
                            .'|(\\d+)/_action/seo\\-url/create\\-custom\\-url(*:3211)'
                            .'|(\\d+)/_action/seo\\-url\\-template/default/([^/]++)(*:3269)'
                            .'|([^/]++)/_action/(?'
                                .'|order(?'
                                    .'|/([^/]++)/(?'
                                        .'|c(?'
                                            .'|onvert\\-to\\-cart(*:3339)'
                                            .'|reditItem(*:3357)'
                                        .')'
                                        .'|recalculate(*:3378)'
                                        .'|product/([^/]++)(*:3403)'
                                        .'|lineItem(*:3420)'
                                        .'|([^/]++)/document/([^/]++)/preview(*:3463)'
                                        .'|document/([^/]++)(*:3489)'
                                        .'|state/([^/]++)(*:3512)'
                                    .')'
                                    .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:3567)'
                                    .'|_(?'
                                        .'|transaction/([^/]++)/state/([^/]++)(*:3615)'
                                        .'|delivery/([^/]++)/state/([^/]++)(*:3656)'
                                    .')'
                                .')'
                                .'|calculate\\-price(*:3683)'
                                .'|document/([^/]++)/(?'
                                    .'|([^/]++)(*:3721)'
                                    .'|upload(*:3736)'
                                .')'
                                .'|promotion/(?'
                                    .'|([^/]++)/codes/individual(?'
                                        .'|(*:3787)'
                                    .')'
                                    .'|setgroup/(?'
                                        .'|packager(*:3817)'
                                        .'|sorter(*:3832)'
                                    .')'
                                    .'|discount/picker(*:3857)'
                                .')'
                            .')'
                            .'|(\\d+)/_action/customer\\-group\\-registration/accept/([^/]++)(*:3927)'
                            .'|(\\d+)/_action/customer\\-group\\-registration/decline/([^/]++)(*:3996)'
                            .'|([^/]++)/_a(?'
                                .'|dmin/(?'
                                    .'|snippets(*:4035)'
                                    .'|known\\-ips(*:4054)'
                                .')'
                                .'|ction/theme/([^/]++)(?'
                                    .'|/(?'
                                        .'|configuration(*:4104)'
                                        .'|assign/([^/]++)(*:4128)'
                                        .'|reset(*:4142)'
                                        .'|fields(*:4157)'
                                        .'|structured\\-fields(*:4184)'
                                    .')'
                                    .'|(*:4194)'
                                .')'
                            .')'
                            .'|(\\d+)/acl\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:4286)'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4363)'
                            .'|(\\d+)/search/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4447)'
                            .'|(\\d+)/search\\-ids/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4536)'
                            .'|(\\d+)/acl\\-user\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:4635)'
                            .')'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4719)'
                            .'|(\\d+)/search/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4809)'
                            .'|(\\d+)/search\\-ids/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4904)'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4987)'
                            .'|(\\d+)/app/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5074)'
                            .')'
                            .'|(\\d+)/app((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5146)'
                            .'|(\\d+)/search/app((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5224)'
                            .'|(\\d+)/search\\-ids/app((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5307)'
                            .'|(\\d+)/app((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5378)'
                            .'|(\\d+)/app\\-action\\-button/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5481)'
                            .')'
                            .'|(\\d+)/app\\-action\\-button((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5569)'
                            .'|(\\d+)/search/app\\-action\\-button((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5663)'
                            .'|(\\d+)/search\\-ids/app\\-action\\-button((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5762)'
                            .'|(\\d+)/app\\-action\\-button((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5849)'
                            .'|(\\d+)/app\\-action\\-button\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5965)'
                            .')'
                            .'|(\\d+)/app\\-action\\-button\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6066)'
                            .'|(\\d+)/search/app\\-action\\-button\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6173)'
                            .'|(\\d+)/search\\-ids/app\\-action\\-button\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6285)'
                            .'|(\\d+)/app\\-action\\-button\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6385)'
                            .'|(\\d+)/app\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6482)'
                            .')'
                            .'|(\\d+)/app\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6564)'
                            .'|(\\d+)/search/app\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6652)'
                            .'|(\\d+)/search\\-ids/app\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6745)'
                            .'|(\\d+)/app\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6826)'
                            .'|(\\d+)/app\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6926)'
                            .')'
                            .'|(\\d+)/app\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7011)'
                            .'|(\\d+)/search/app\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7102)'
                            .'|(\\d+)/search\\-ids/app\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7198)'
                            .'|(\\d+)/app\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7282)'
                            .'|(\\d+)/category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7374)'
                            .')'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7451)'
                            .'|(\\d+)/search/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7534)'
                            .'|(\\d+)/search\\-ids/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7622)'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7698)'
                            .'|(\\d+)/category\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7795)'
                            .')'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7877)'
                            .'|(\\d+)/search/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7965)'
                            .'|(\\d+)/search\\-ids/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8058)'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8139)'
                            .'|(\\d+)/category\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8244)'
                            .')'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8334)'
                            .'|(\\d+)/search/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8430)'
                            .'|(\\d+)/search\\-ids/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8531)'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8620)'
                            .'|(\\d+)/cms\\-block/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8714)'
                            .')'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8793)'
                            .'|(\\d+)/search/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8878)'
                            .'|(\\d+)/search\\-ids/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8968)'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9046)'
                            .'|(\\d+)/cms\\-page/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9139)'
                            .')'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9217)'
                            .'|(\\d+)/search/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9301)'
                            .'|(\\d+)/search\\-ids/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9390)'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9467)'
                            .'|(\\d+)/cms\\-page\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9573)'
                            .')'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9664)'
                            .'|(\\d+)/search/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9761)'
                            .'|(\\d+)/search\\-ids/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9863)'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9953)'
                            .'|(\\d+)/cms\\-section/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10049)'
                            .')'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10131)'
                            .'|(\\d+)/search/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10219)'
                            .'|(\\d+)/search\\-ids/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10312)'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10393)'
                            .'|(\\d+)/cms\\-slot/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10487)'
                            .')'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10566)'
                            .'|(\\d+)/search/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10651)'
                            .'|(\\d+)/search\\-ids/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10741)'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10819)'
                            .'|(\\d+)/cms\\-slot\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10926)'
                            .')'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11018)'
                            .'|(\\d+)/search/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11116)'
                            .'|(\\d+)/search\\-ids/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11219)'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11310)'
                            .'|(\\d+)/country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11402)'
                            .')'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11479)'
                            .'|(\\d+)/search/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11562)'
                            .'|(\\d+)/search\\-ids/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11650)'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11726)'
                            .'|(\\d+)/country\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11825)'
                            .')'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11909)'
                            .'|(\\d+)/search/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11999)'
                            .'|(\\d+)/search\\-ids/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12094)'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12177)'
                            .'|(\\d+)/country\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:12289)'
                            .')'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12386)'
                            .'|(\\d+)/search/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12489)'
                            .'|(\\d+)/search\\-ids/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12597)'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12693)'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:12732)'
                            .'|edit/([^/]++)(*:12755)'
                            .'|payment/([^/]++)(*:12781)'
                            .'|update/([^/]++)(*:12806)'
                            .'|document/([^/]++)/([^/]++)(*:12842)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:12872)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:12911)'
                                .'|lete/([^/]++)(*:12934)'
                            .')'
                            .'|create(*:12951)'
                            .'|([^/]++)(*:12969)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|ales\\-channel\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:13045)'
                                .'|\\-api\\-schema\\.json(*:13074)'
                            .')'
                            .'|swagger\\.html(*:13098)'
                        .')'
                        .'|c(?'
                            .'|ontext(?'
                                .'|(*:13122)'
                            .')'
                            .'|ms\\-page/([^/]++)(*:13150)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:13178)'
                                    .'|/(?'
                                        .'|product/([^/]++)(*:13208)'
                                        .'|code/([^/]++)(*:13231)'
                                        .'|line\\-item(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:13266)'
                                            .')'
                                            .'|s/delete(*:13285)'
                                        .')'
                                    .')'
                                    .'|(*:13297)'
                                .')'
                                .'|order(?'
                                    .'|(*:13316)'
                                    .'|/([^/]++)/pay(*:13339)'
                                .')'
                                .'|guest\\-order(?'
                                    .'|(*:13365)'
                                    .'|/([^/]++)(*:13384)'
                                .')'
                            .')'
                            .'|ustomer(?'
                                .'|/(?'
                                    .'|log(?'
                                        .'|in(*:13418)'
                                        .'|out(*:13431)'
                                    .')'
                                    .'|order(*:13447)'
                                    .'|email(*:13462)'
                                    .'|password(*:13480)'
                                    .'|address(?'
                                        .'|(*:13500)'
                                        .'|/([^/]++)(?'
                                            .'|(*:13522)'
                                            .'|/default\\-(?'
                                                .'|shipping(*:13553)'
                                                .'|billing(*:13570)'
                                            .')'
                                        .')'
                                        .'|(*:13582)'
                                    .')'
                                .')'
                                .'|(*:13594)'
                            .')'
                        .')'
                        .'|product/([^/]++)/cross\\-selling(*:13637)'
                        .'|newsletter/(?'
                            .'|subscribe(*:13670)'
                            .'|confirm(*:13687)'
                            .'|unsubscribe(*:13708)'
                        .')'
                    .')'
                    .'|tore\\-api/(?'
                        .'|v([^/]++)/(?'
                            .'|_info/(?'
                                .'|open(?'
                                    .'|api3\\.json(*:13772)'
                                    .'|\\-api\\-schema\\.json(*:13801)'
                                .')'
                                .'|swagger\\.html(*:13825)'
                            .')'
                            .'|c(?'
                                .'|o(?'
                                    .'|nt(?'
                                        .'|ext(?'
                                            .'|(*:13855)'
                                        .')'
                                        .'|act\\-form(*:13875)'
                                    .')'
                                    .'|untry(*:13891)'
                                .')'
                                .'|u(?'
                                    .'|rrency(*:13912)'
                                    .'|stomer(?'
                                        .'|/wishlist(?'
                                            .'|/(?'
                                                .'|add/([^/]++)(*:13959)'
                                                .'|merge(*:13974)'
                                                .'|delete/([^/]++)(*:13999)'
                                            .')'
                                            .'|(*:14010)'
                                        .')'
                                        .'|\\-group\\-registration/config/([^/]++)(*:14058)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|(*:14080)'
                                    .'|/([^/]++)(*:14099)'
                                .')'
                                .'|ms/([^/]++)(*:14121)'
                                .'|heckout/(?'
                                    .'|cart(?'
                                        .'|(*:14149)'
                                        .'|/line\\-item(?'
                                            .'|(*:14173)'
                                        .')'
                                        .'|(*:14184)'
                                    .')'
                                    .'|order(*:14200)'
                                .')'
                            .')'
                            .'|language(*:14220)'
                            .'|s(?'
                                .'|alutation(*:14243)'
                                .'|e(?'
                                    .'|arch(?'
                                        .'|(*:14264)'
                                        .'|\\-suggest(*:14283)'
                                    .')'
                                    .'|o\\-url(*:14300)'
                                .')'
                                .'|itemap(*:14317)'
                                .'|hipping\\-method(*:14342)'
                            .')'
                            .'|n(?'
                                .'|avigation/([^/]++)/([^/]++)(*:14384)'
                                .'|ewsletter/(?'
                                    .'|confirm(*:14414)'
                                    .'|subscribe(*:14433)'
                                    .'|unsubscribe(*:14454)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|roduct(?'
                                    .'|/([^/]++)(?'
                                        .'|/(?'
                                            .'|cross\\-selling(*:14509)'
                                            .'|review(?'
                                                .'|s(*:14529)'
                                                .'|(*:14539)'
                                            .')'
                                        .')'
                                        .'|(*:14551)'
                                    .')'
                                    .'|\\-listing/([^/]++)(*:14580)'
                                    .'|(*:14590)'
                                .')'
                                .'|ayment\\-method(*:14615)'
                            .')'
                            .'|handle\\-payment(*:14641)'
                            .'|account/(?'
                                .'|c(?'
                                    .'|hange\\-(?'
                                        .'|p(?'
                                            .'|rofile(*:14686)'
                                            .'|a(?'
                                                .'|ssword(*:14706)'
                                                .'|yment\\-method/([^/]++)(*:14738)'
                                            .')'
                                        .')'
                                        .'|email(*:14755)'
                                    .')'
                                    .'|ustomer(?'
                                        .'|(*:14776)'
                                    .')'
                                .')'
                                .'|address(?'
                                    .'|/(?'
                                        .'|([^/]++)(*:14810)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:14849)'
                                            .'|billing/([^/]++)(*:14875)'
                                        .')'
                                        .'|([^/]++)(*:14894)'
                                    .')'
                                    .'|(*:14905)'
                                .')'
                                .'|l(?'
                                    .'|ist\\-address(*:14932)'
                                    .'|og(?'
                                        .'|in(*:14949)'
                                        .'|out(*:14962)'
                                    .')'
                                .')'
                                .'|re(?'
                                    .'|gister(?'
                                        .'|\\-confirm(*:14997)'
                                        .'|(*:15007)'
                                    .')'
                                    .'|covery\\-password(?'
                                        .'|\\-confirm(*:15046)'
                                        .'|(*:15056)'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|/(?'
                                    .'|state/cancel(*:15093)'
                                    .'|payment(*:15110)'
                                .')'
                                .'|(*:15121)'
                            .')'
                        .')'
                        .'|product\\-export/([^/]++)/([^/]++)(*:15166)'
                    .')'
                .')'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/order/detail/([^/]++)(*:15222)'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:15252)'
                            .'|/navigation(?'
                                .'|(?:/([^/]++))?(*:15290)'
                                .'|/([^/]++)/filter(*:15316)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:15362)'
                        .'|add(?'
                            .'|/([^/]++)(*:15387)'
                            .'|\\-after\\-login/([^/]++)(*:15420)'
                        .')'
                        .'|remove/([^/]++)(*:15446)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:15500)'
                        .'|change\\-quantity/([^/]++)(*:15535)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:15583)'
                .')'
                .'|/maintenance/singlepage/([^/]++)(*:15626)'
                .'|/navigation/([^/]++)(*:15656)'
                .'|/detail/([^/]++)(?'
                    .'|(*:15685)'
                    .'|/switch(*:15702)'
                .')'
                .'|/quickview/([^/]++)(*:15732)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:15769)'
                    .'|eviews(*:15785)'
                .')'
                .'|/export/([^/]++)/([^/]++)(*:15821)'
            .')/?$}sD',
        15821 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/country\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15932)'
                    .')'
                    .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16022)'
                    .'|(\\d+)/search/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16118)'
                    .'|(\\d+)/search\\-ids/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16219)'
                    .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16308)'
                    .'|(\\d+)/currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16401)'
                    .')'
                    .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16479)'
                    .'|(\\d+)/search/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16563)'
                    .'|(\\d+)/search\\-ids/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16652)'
                    .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16729)'
                    .'|(\\d+)/currency\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16835)'
                    .')'
                    .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16926)'
                    .'|(\\d+)/search/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17023)'
                    .'|(\\d+)/search\\-ids/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17125)'
                    .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17215)'
                    .'|(\\d+)/custom\\-field/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17313)'
                    .')'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17396)'
                    .'|(\\d+)/search/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17485)'
                    .'|(\\d+)/search\\-ids/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17579)'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17661)'
                    .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17764)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17852)'
                    .'|(\\d+)/search/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17946)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18045)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18132)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18245)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18343)'
                    .'|(\\d+)/search/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18447)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18556)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18653)'
                    .'|(\\d+)/customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18746)'
                    .')'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18824)'
                    .'|(\\d+)/search/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18908)'
                    .'|(\\d+)/search\\-ids/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18997)'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19074)'
                    .'|(\\d+)/customer\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19176)'
                    .')'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19263)'
                    .'|(\\d+)/search/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19356)'
                    .'|(\\d+)/search\\-ids/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19454)'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19540)'
                    .'|(\\d+)/customer\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19640)'
                    .')'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19725)'
                    .'|(\\d+)/search/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19816)'
                    .'|(\\d+)/search\\-ids/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19912)'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19996)'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20127)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20243)'
                    .'|(\\d+)/search/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20365)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20492)'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20607)'
                    .'|(\\d+)/customer\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20720)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20818)'
                    .'|(\\d+)/search/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20922)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21031)'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21128)'
                    .'|(\\d+)/customer\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21231)'
                    .')'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21319)'
                    .'|(\\d+)/search/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21413)'
                    .'|(\\d+)/search\\-ids/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21512)'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21599)'
                    .'|(\\d+)/customer\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21697)'
                    .')'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21780)'
                    .'|(\\d+)/search/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21869)'
                    .'|(\\d+)/search\\-ids/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21963)'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22045)'
                    .'|(\\d+)/dead\\-message/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22143)'
                    .')'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22226)'
                    .'|(\\d+)/search/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22315)'
                    .'|(\\d+)/search\\-ids/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22409)'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22491)'
                    .'|(\\d+)/delivery\\-time/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22590)'
                    .')'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22674)'
                    .'|(\\d+)/search/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22764)'
                    .'|(\\d+)/search\\-ids/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22859)'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22942)'
                    .'|(\\d+)/delivery\\-time\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23054)'
                    .')'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23151)'
                    .'|(\\d+)/search/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23254)'
                    .'|(\\d+)/search\\-ids/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23362)'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23458)'
                    .'|(\\d+)/document/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23551)'
                    .')'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23629)'
                    .'|(\\d+)/search/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23713)'
                    .'|(\\d+)/search\\-ids/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23802)'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23879)'
                    .'|(\\d+)/document\\-base\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23986)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24078)'
                    .'|(\\d+)/search/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24176)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24279)'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24370)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24493)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24601)'
                    .'|(\\d+)/search/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24715)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24834)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24941)'
                    .'|(\\d+)/document\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25040)'
                    .')'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25124)'
                    .'|(\\d+)/search/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25214)'
                    .'|(\\d+)/search\\-ids/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25309)'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25392)'
                    .'|(\\d+)/document\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25504)'
                    .')'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25601)'
                    .'|(\\d+)/search/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25704)'
                    .'|(\\d+)/search\\-ids/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25812)'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25908)'
                    .'|(\\d+)/event\\-action/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26006)'
                    .')'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26089)'
                    .'|(\\d+)/search/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26178)'
                    .'|(\\d+)/search\\-ids/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26272)'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26354)'
                    .'|(\\d+)/event\\-action\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26458)'
                    .')'
                    .'|(\\d+)/event\\-action\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26547)'
                    .'|(\\d+)/search/event\\-action\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26642)'
                    .'|(\\d+)/search\\-ids/event\\-action\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26742)'
                    .'|(\\d+)/event\\-action\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26830)'
                    .'|(\\d+)/event\\-action\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26944)'
                    .')'
                    .'|(\\d+)/event\\-action\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27043)'
                    .'|(\\d+)/search/event\\-action\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27148)'
                    .'|(\\d+)/search\\-ids/event\\-action\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27258)'
                    .'|(\\d+)/event\\-action\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27356)'
                    .'|(\\d+)/import\\-export\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27461)'
                    .')'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27551)'
                    .'|(\\d+)/search/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27647)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27748)'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27837)'
                    .'|(\\d+)/import\\-export\\-log/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27941)'
                    .')'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28030)'
                    .'|(\\d+)/search/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28125)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28225)'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28313)'
                    .'|(\\d+)/import\\-export\\-profile/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28421)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28514)'
                    .'|(\\d+)/search/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28613)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28717)'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28809)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28930)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29036)'
                    .'|(\\d+)/search/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29148)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29265)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29370)'
                    .'|(\\d+)/integration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29466)'
                    .')'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29547)'
                    .'|(\\d+)/search/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29634)'
                    .'|(\\d+)/search\\-ids/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29726)'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29806)'
                    .'|(\\d+)/integration\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29908)'
                    .')'
                    .'|(\\d+)/integration\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29995)'
                    .'|(\\d+)/search/integration\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30088)'
                    .'|(\\d+)/search\\-ids/integration\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30186)'
                    .'|(\\d+)/integration\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30272)'
                    .'|(\\d+)/language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30365)'
                    .')'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30443)'
                    .'|(\\d+)/search/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30527)'
                    .'|(\\d+)/search\\-ids/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30616)'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30693)'
                    .'|(\\d+)/locale/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30784)'
                    .')'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30860)'
                    .'|(\\d+)/search/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30942)'
                    .'|(\\d+)/search\\-ids/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31029)'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31104)'
                    .'|(\\d+)/locale\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31208)'
                    .')'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31297)'
                    .'|(\\d+)/search/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31392)'
                    .'|(\\d+)/search\\-ids/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31492)'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31580)'
                    .'|(\\d+)/log\\-entry/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31675)'
                    .')'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31755)'
                    .'|(\\d+)/search/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31841)'
                    .'|(\\d+)/search\\-ids/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31932)'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32011)'
                    .'|(\\d+)/mail\\-header\\-footer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32116)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32206)'
                    .'|(\\d+)/search/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32302)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32403)'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32492)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32610)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32713)'
                    .'|(\\d+)/search/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32822)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32936)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33038)'
                    .'|(\\d+)/mail\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33137)'
                    .')'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33221)'
                    .'|(\\d+)/search/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33311)'
                    .'|(\\d+)/search\\-ids/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33406)'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33489)'
                    .'|(\\d+)/mail\\-template\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33595)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33686)'
                    .'|(\\d+)/search/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33783)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33885)'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33975)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34090)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34190)'
                    .'|(\\d+)/search/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34296)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34407)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34506)'
                    .'|(\\d+)/mail\\-template\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34618)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34715)'
                    .'|(\\d+)/search/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34818)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34926)'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35022)'
                    .'|(\\d+)/mail\\-template\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35127)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35217)'
                    .'|(\\d+)/search/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35313)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35414)'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35503)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35621)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35724)'
                    .'|(\\d+)/search/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35833)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35947)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36049)'
                    .'|(\\d+)/main\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36148)'
                    .')'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36232)'
                    .'|(\\d+)/search/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36322)'
                    .'|(\\d+)/search\\-ids/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36417)'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36500)'
                    .'|(\\d+)/media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36590)'
                    .')'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36665)'
                    .'|(\\d+)/search/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36746)'
                    .'|(\\d+)/search\\-ids/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36832)'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36906)'
                    .'|(\\d+)/media\\-default\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37013)'
                    .')'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37105)'
                    .'|(\\d+)/search/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37203)'
                    .'|(\\d+)/search\\-ids/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37306)'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37397)'
                    .'|(\\d+)/media\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37495)'
                    .')'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37578)'
                    .'|(\\d+)/search/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37667)'
                    .'|(\\d+)/search\\-ids/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37761)'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37843)'
                    .'|(\\d+)/media\\-folder\\-configuration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37956)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38054)'
                    .'|(\\d+)/search/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38158)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38267)'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38364)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38501)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38623)'
                    .'|(\\d+)/search/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38751)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38884)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39005)'
                    .'|(\\d+)/media\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39100)'
                    .')'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39180)'
                    .'|(\\d+)/search/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39266)'
                    .'|(\\d+)/search\\-ids/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39357)'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39436)'
                    .'|(\\d+)/media\\-thumbnail/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39537)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39623)'
                    .'|(\\d+)/search/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39715)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39812)'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39897)'
                    .'|(\\d+)/media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40004)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40096)'
                    .'|(\\d+)/search/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40194)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40297)'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40388)'
                    .'|(\\d+)/media\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40491)'
                    .')'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40579)'
                    .'|(\\d+)/search/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40673)'
                    .'|(\\d+)/search\\-ids/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40772)'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40859)'
                    .'|(\\d+)/message\\-queue\\-stats/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40965)'
                    .')'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41056)'
                    .'|(\\d+)/search/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41153)'
                    .'|(\\d+)/search\\-ids/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41255)'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41345)'
                    .'|(\\d+)/newsletter\\-recipient/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41451)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41542)'
                    .'|(\\d+)/search/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41639)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41741)'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41831)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41942)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42038)'
                    .'|(\\d+)/search/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42140)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42247)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42342)'
                    .'|(\\d+)/number\\-range/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42440)'
                    .')'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42523)'
                    .'|(\\d+)/search/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42612)'
                    .'|(\\d+)/search\\-ids/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42706)'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42788)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42902)'
                    .')'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43001)'
                    .'|(\\d+)/search/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43106)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43216)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43314)'
                    .'|(\\d+)/number\\-range\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43419)'
                    .')'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43509)'
                    .'|(\\d+)/search/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43605)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43706)'
                .')'
            .')/?$}sD',
        43706 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43801)'
                    .'|(\\d+)/number\\-range\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43912)'
                    .')'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44008)'
                    .'|(\\d+)/search/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44110)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44217)'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44312)'
                    .'|(\\d+)/number\\-range\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44416)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44505)'
                    .'|(\\d+)/search/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44600)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44700)'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44788)'
                    .'|(\\d+)/number\\-range\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44905)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45007)'
                    .'|(\\d+)/search/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45115)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45228)'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45329)'
                    .'|(\\d+)/order/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45419)'
                    .')'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45494)'
                    .'|(\\d+)/search/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45575)'
                    .'|(\\d+)/search\\-ids/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45661)'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45735)'
                    .'|(\\d+)/order\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45834)'
                    .')'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45918)'
                    .'|(\\d+)/search/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46008)'
                    .'|(\\d+)/search\\-ids/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46103)'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46186)'
                    .'|(\\d+)/order\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46286)'
                    .')'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46371)'
                    .'|(\\d+)/search/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46462)'
                    .'|(\\d+)/search\\-ids/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46558)'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46642)'
                    .'|(\\d+)/order\\-delivery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46742)'
                    .')'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46827)'
                    .'|(\\d+)/search/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46918)'
                    .'|(\\d+)/search\\-ids/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47014)'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47098)'
                    .'|(\\d+)/order\\-delivery\\-position/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47208)'
                    .')'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47303)'
                    .'|(\\d+)/search/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47404)'
                    .'|(\\d+)/search\\-ids/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47510)'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47604)'
                    .'|(\\d+)/order\\-line\\-item/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47706)'
                    .')'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47793)'
                    .'|(\\d+)/search/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47886)'
                    .'|(\\d+)/search\\-ids/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47984)'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48070)'
                    .'|(\\d+)/order\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48165)'
                    .')'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48245)'
                    .'|(\\d+)/search/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48331)'
                    .'|(\\d+)/search\\-ids/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48422)'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48501)'
                    .'|(\\d+)/order\\-transaction/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48604)'
                    .')'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48692)'
                    .'|(\\d+)/search/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48786)'
                    .'|(\\d+)/search\\-ids/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48885)'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48972)'
                    .'|(\\d+)/payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49072)'
                    .')'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49157)'
                    .'|(\\d+)/search/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49248)'
                    .'|(\\d+)/search\\-ids/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49344)'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49428)'
                    .'|(\\d+)/payment\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49541)'
                    .')'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49639)'
                    .'|(\\d+)/search/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49743)'
                    .'|(\\d+)/search\\-ids/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49852)'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49949)'
                    .'|(\\d+)/plugin/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50040)'
                    .')'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50116)'
                    .'|(\\d+)/search/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50198)'
                    .'|(\\d+)/search\\-ids/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50285)'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50360)'
                    .'|(\\d+)/plugin\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50464)'
                    .')'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50553)'
                    .'|(\\d+)/search/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50648)'
                    .'|(\\d+)/search\\-ids/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50748)'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50836)'
                    .'|(\\d+)/product/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50928)'
                    .')'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51005)'
                    .'|(\\d+)/search/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51088)'
                    .'|(\\d+)/search\\-ids/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51176)'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51252)'
                    .'|(\\d+)/product\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51354)'
                    .')'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51441)'
                    .'|(\\d+)/search/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51534)'
                    .'|(\\d+)/search\\-ids/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51632)'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51718)'
                    .'|(\\d+)/product\\-category\\-tree/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51826)'
                    .')'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51919)'
                    .'|(\\d+)/search/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52018)'
                    .'|(\\d+)/search\\-ids/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52122)'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52214)'
                    .'|(\\d+)/product\\-configurator\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52329)'
                    .')'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52429)'
                    .'|(\\d+)/search/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52535)'
                    .'|(\\d+)/search\\-ids/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52646)'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52745)'
                    .'|(\\d+)/product\\-cross\\-selling/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52853)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52946)'
                    .'|(\\d+)/search/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53045)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53149)'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53241)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53369)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53482)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53601)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53725)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53837)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53958)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54064)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54176)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54293)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54398)'
                    .'|(\\d+)/product\\-custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54510)'
                    .')'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54607)'
                    .'|(\\d+)/search/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54710)'
                    .'|(\\d+)/search\\-ids/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54818)'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54914)'
                    .'|(\\d+)/product\\-export/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55014)'
                    .')'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55099)'
                    .'|(\\d+)/search/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55190)'
                    .'|(\\d+)/search\\-ids/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55286)'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55370)'
                    .'|(\\d+)/product\\-feature\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55476)'
                    .')'
                    .'|(\\d+)/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55567)'
                    .'|(\\d+)/search/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55664)'
                    .'|(\\d+)/search\\-ids/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55766)'
                    .'|(\\d+)/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55856)'
                    .'|(\\d+)/product\\-feature\\-set\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55975)'
                    .')'
                    .'|(\\d+)/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56079)'
                    .'|(\\d+)/search/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56189)'
                    .'|(\\d+)/search\\-ids/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56304)'
                    .'|(\\d+)/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56407)'
                    .'|(\\d+)/product\\-keyword\\-dictionary/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56520)'
                    .')'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56618)'
                    .'|(\\d+)/search/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56722)'
                    .'|(\\d+)/search\\-ids/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56831)'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56928)'
                    .'|(\\d+)/product\\-manufacturer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57034)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57125)'
                    .'|(\\d+)/search/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57222)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57324)'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57414)'
                    .'|(\\d+)/product\\-manufacturer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57533)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57637)'
                    .'|(\\d+)/search/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57747)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57862)'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57965)'
                    .'|(\\d+)/product\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58064)'
                    .')'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58148)'
                    .'|(\\d+)/search/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58238)'
                    .'|(\\d+)/search\\-ids/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58333)'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58416)'
                    .'|(\\d+)/product\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58516)'
                    .')'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58601)'
                    .'|(\\d+)/search/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58692)'
                    .'|(\\d+)/search\\-ids/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58788)'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58872)'
                    .'|(\\d+)/product\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58971)'
                    .')'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59055)'
                    .'|(\\d+)/search/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59145)'
                    .'|(\\d+)/search\\-ids/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59240)'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59323)'
                    .'|(\\d+)/product\\-property/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59425)'
                    .')'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59512)'
                    .'|(\\d+)/search/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59605)'
                    .'|(\\d+)/search\\-ids/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59703)'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59789)'
                    .'|(\\d+)/product\\-review/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59889)'
                    .')'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59974)'
                    .'|(\\d+)/search/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60065)'
                    .'|(\\d+)/search\\-ids/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60161)'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60245)'
                    .'|(\\d+)/product\\-search\\-keyword/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60354)'
                    .')'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60448)'
                    .'|(\\d+)/search/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60548)'
                    .'|(\\d+)/search\\-ids/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60653)'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60746)'
                    .'|(\\d+)/product\\-sorting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60847)'
                    .')'
                    .'|(\\d+)/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60933)'
                    .'|(\\d+)/search/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61025)'
                    .'|(\\d+)/search\\-ids/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61122)'
                    .'|(\\d+)/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61207)'
                    .'|(\\d+)/product\\-sorting\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61321)'
                    .')'
                    .'|(\\d+)/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61420)'
                    .'|(\\d+)/search/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61525)'
                    .'|(\\d+)/search\\-ids/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61635)'
                    .'|(\\d+)/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61733)'
                    .'|(\\d+)/product\\-stream/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61833)'
                    .')'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61918)'
                    .'|(\\d+)/search/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62009)'
                    .'|(\\d+)/search\\-ids/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62105)'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62189)'
                    .'|(\\d+)/product\\-stream\\-filter/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62297)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62390)'
                    .'|(\\d+)/search/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62489)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62593)'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62685)'
                    .'|(\\d+)/product\\-stream\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62798)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62896)'
                    .'|(\\d+)/search/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63000)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63109)'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63206)'
                    .'|(\\d+)/product\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63303)'
                    .')'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63385)'
                    .'|(\\d+)/search/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63473)'
                    .'|(\\d+)/search\\-ids/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63566)'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63647)'
                    .'|(\\d+)/product\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63752)'
                    .')'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63842)'
                    .'|(\\d+)/search/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63938)'
                    .'|(\\d+)/search\\-ids/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64039)'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64128)'
                    .'|(\\d+)/product\\-visibility/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64232)'
                    .')'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64321)'
                    .'|(\\d+)/search/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64416)'
                    .'|(\\d+)/search\\-ids/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64516)'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64604)'
                    .'|(\\d+)/promotion/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64698)'
                    .')'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64777)'
                    .'|(\\d+)/search/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64862)'
                    .'|(\\d+)/search\\-ids/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64952)'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65030)'
                    .'|(\\d+)/promotion\\-cart\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65136)'
                    .')'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65227)'
                    .'|(\\d+)/search/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65324)'
                    .'|(\\d+)/search\\-ids/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65426)'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65516)'
                    .'|(\\d+)/promotion\\-discount/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65620)'
                    .')'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65709)'
                    .'|(\\d+)/search/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65804)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65904)'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65992)'
                    .'|(\\d+)/promotion\\-discount\\-prices/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66104)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66201)'
                    .'|(\\d+)/search/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66304)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66412)'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66508)'
                    .'|(\\d+)/promotion\\-discount\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66618)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66713)'
                    .'|(\\d+)/search/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66814)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66920)'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67014)'
                    .'|(\\d+)/promotion\\-individual\\-code/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67126)'
                    .')'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67223)'
                    .'|(\\d+)/search/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67326)'
                    .'|(\\d+)/search\\-ids/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67434)'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67530)'
                    .'|(\\d+)/promotion\\-order\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67637)'
                    .')'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67729)'
                    .'|(\\d+)/search/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67827)'
                    .'|(\\d+)/search\\-ids/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67930)'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68021)'
                    .'|(\\d+)/promotion\\-persona\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68134)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68232)'
                    .'|(\\d+)/search/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68336)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68445)'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68542)'
                    .'|(\\d+)/promotion\\-persona\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68651)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68745)'
                    .'|(\\d+)/search/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68845)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68950)'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69043)'
                    .'|(\\d+)/promotion\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69153)'
                    .')'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69248)'
                    .'|(\\d+)/search/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69349)'
                    .'|(\\d+)/search\\-ids/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69455)'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69549)'
                    .'|(\\d+)/promotion\\-setgroup/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69653)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69742)'
                    .'|(\\d+)/search/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69837)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69937)'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70025)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70135)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70230)'
                    .'|(\\d+)/search/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70331)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70437)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70531)'
                    .'|(\\d+)/promotion\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70638)'
                    .')'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70730)'
                    .'|(\\d+)/search/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70828)'
                    .'|(\\d+)/search\\-ids/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70931)'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71022)'
                    .'|(\\d+)/property\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71122)'
                    .')'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71207)'
                    .'|(\\d+)/search/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71298)'
                    .'|(\\d+)/search\\-ids/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71394)'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71478)'
                    .'|(\\d+)/property\\-group\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71586)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71679)'
                    .'|(\\d+)/search/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71778)'
                .')'
            .')/?$}sD',
        71778 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71888)'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71980)'
                    .'|(\\d+)/property\\-group\\-option\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72101)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72207)'
                    .'|(\\d+)/search/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72319)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72436)'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72541)'
                    .'|(\\d+)/property\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72654)'
                    .')'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72752)'
                    .'|(\\d+)/search/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72856)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72965)'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73062)'
                    .'|(\\d+)/rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73151)'
                    .')'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73225)'
                    .'|(\\d+)/search/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73305)'
                    .'|(\\d+)/search\\-ids/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73390)'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73463)'
                    .'|(\\d+)/rule\\-condition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73563)'
                    .')'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73648)'
                    .'|(\\d+)/search/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73739)'
                    .'|(\\d+)/search\\-ids/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73835)'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73919)'
                    .'|(\\d+)/sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74018)'
                    .')'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74102)'
                    .'|(\\d+)/search/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74192)'
                    .'|(\\d+)/search\\-ids/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74287)'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74370)'
                    .'|(\\d+)/sales\\-channel\\-analytics/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74480)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74575)'
                    .'|(\\d+)/search/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74676)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74782)'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74876)'
                    .'|(\\d+)/sales\\-channel\\-country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74984)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75077)'
                    .'|(\\d+)/search/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75176)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75280)'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75372)'
                    .'|(\\d+)/sales\\-channel\\-currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75481)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75575)'
                    .'|(\\d+)/search/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75675)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75780)'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75873)'
                    .'|(\\d+)/sales\\-channel\\-domain/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75980)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76072)'
                    .'|(\\d+)/search/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76170)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76273)'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76364)'
                    .'|(\\d+)/sales\\-channel\\-language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76473)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76567)'
                    .'|(\\d+)/search/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76667)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76772)'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76865)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76981)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77082)'
                    .'|(\\d+)/search/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77189)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77301)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77401)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77518)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77620)'
                    .'|(\\d+)/search/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77728)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77841)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77942)'
                    .'|(\\d+)/sales\\-channel\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78054)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78151)'
                    .'|(\\d+)/search/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78254)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78362)'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78458)'
                    .'|(\\d+)/sales\\-channel\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78563)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78653)'
                    .'|(\\d+)/search/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78749)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78850)'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78939)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79057)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79160)'
                    .'|(\\d+)/search/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79269)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79383)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79485)'
                    .'|(\\d+)/salutation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79580)'
                    .')'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79660)'
                    .'|(\\d+)/search/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79746)'
                    .'|(\\d+)/search\\-ids/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79837)'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79916)'
                    .'|(\\d+)/salutation\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80024)'
                    .')'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80117)'
                    .'|(\\d+)/search/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80216)'
                    .'|(\\d+)/search\\-ids/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80320)'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80412)'
                    .'|(\\d+)/scheduled\\-task/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80512)'
                    .')'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80597)'
                    .'|(\\d+)/search/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80688)'
                    .'|(\\d+)/search\\-ids/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80784)'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80868)'
                    .'|(\\d+)/seo\\-url/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80961)'
                    .')'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81039)'
                    .'|(\\d+)/search/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81123)'
                    .'|(\\d+)/search\\-ids/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81212)'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81289)'
                    .'|(\\d+)/seo\\-url\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81392)'
                    .')'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81480)'
                    .'|(\\d+)/search/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81574)'
                    .'|(\\d+)/search\\-ids/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81673)'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81760)'
                    .'|(\\d+)/shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81861)'
                    .')'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81947)'
                    .'|(\\d+)/search/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82039)'
                    .'|(\\d+)/search\\-ids/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82136)'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82221)'
                    .'|(\\d+)/shipping\\-method\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82329)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82422)'
                    .'|(\\d+)/search/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82521)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82625)'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82717)'
                    .'|(\\d+)/shipping\\-method\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82823)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82914)'
                    .'|(\\d+)/search/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83011)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83113)'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83203)'
                    .'|(\\d+)/shipping\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83317)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83416)'
                    .'|(\\d+)/search/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83521)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83631)'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83729)'
                    .'|(\\d+)/snippet/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83821)'
                    .')'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83898)'
                    .'|(\\d+)/search/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83981)'
                    .'|(\\d+)/search\\-ids/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84069)'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84145)'
                    .'|(\\d+)/snippet\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84242)'
                    .')'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84324)'
                    .'|(\\d+)/search/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84412)'
                    .'|(\\d+)/search\\-ids/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84505)'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84586)'
                    .'|(\\d+)/state\\-machine/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84685)'
                    .')'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84769)'
                    .'|(\\d+)/search/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84859)'
                    .'|(\\d+)/search\\-ids/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84954)'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85037)'
                    .'|(\\d+)/state\\-machine\\-history/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85145)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85238)'
                    .'|(\\d+)/search/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85337)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85441)'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85533)'
                    .'|(\\d+)/state\\-machine\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85639)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85730)'
                    .'|(\\d+)/search/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85827)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85929)'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86019)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86138)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86242)'
                    .'|(\\d+)/search/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86352)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86467)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86570)'
                    .'|(\\d+)/state\\-machine\\-transition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86681)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86777)'
                    .'|(\\d+)/search/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86879)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86986)'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87081)'
                    .'|(\\d+)/state\\-machine\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87193)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87290)'
                    .'|(\\d+)/search/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87393)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87501)'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87597)'
                    .'|(\\d+)/system\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87696)'
                    .')'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87780)'
                    .'|(\\d+)/search/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87870)'
                    .'|(\\d+)/search\\-ids/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87965)'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88048)'
                    .'|(\\d+)/tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88136)'
                    .')'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88209)'
                    .'|(\\d+)/search/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88288)'
                    .'|(\\d+)/search\\-ids/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88372)'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88444)'
                    .'|(\\d+)/tax/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88532)'
                    .')'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88605)'
                    .'|(\\d+)/search/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88684)'
                    .'|(\\d+)/search\\-ids/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88768)'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88840)'
                    .'|(\\d+)/tax\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88934)'
                    .')'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89013)'
                    .'|(\\d+)/search/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89098)'
                    .'|(\\d+)/search\\-ids/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89188)'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89266)'
                    .'|(\\d+)/tax\\-rule\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89366)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89451)'
                    .'|(\\d+)/search/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89542)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89638)'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89722)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89835)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89933)'
                    .'|(\\d+)/search/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90037)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90146)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90243)'
                    .'|(\\d+)/theme/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90333)'
                    .')'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90408)'
                    .'|(\\d+)/search/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90489)'
                    .'|(\\d+)/search\\-ids/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90575)'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90649)'
                    .'|(\\d+)/theme\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90746)'
                    .')'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90828)'
                    .'|(\\d+)/search/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90916)'
                    .'|(\\d+)/search\\-ids/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91009)'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91090)'
                    .'|(\\d+)/theme\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91196)'
                    .')'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91287)'
                    .'|(\\d+)/search/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91384)'
                    .'|(\\d+)/search\\-ids/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91486)'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91576)'
                    .'|(\\d+)/theme\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91679)'
                    .')'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91767)'
                    .'|(\\d+)/search/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91861)'
                    .'|(\\d+)/search\\-ids/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91960)'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92047)'
                    .'|(\\d+)/unit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92136)'
                    .')'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92210)'
                    .'|(\\d+)/search/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92290)'
                    .'|(\\d+)/search\\-ids/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92375)'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92448)'
                    .'|(\\d+)/unit\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:92550)'
                    .')'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92637)'
                    .'|(\\d+)/search/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92730)'
                    .'|(\\d+)/search\\-ids/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92828)'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:92914)'
                    .'|(\\d+)/user/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:93000)'
                    .'|(\\d+)/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93073)'
                    .'|(\\d+)/search/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93153)'
                    .'|(\\d+)/search\\-ids/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93238)'
                    .'|(\\d+)/user\\-access\\-key/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93340)'
                    .')'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93427)'
                    .'|(\\d+)/search/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93520)'
                    .'|(\\d+)/search\\-ids/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93618)'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93704)'
                    .'|(\\d+)/user\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:93803)'
                    .')'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93887)'
                    .'|(\\d+)/search/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:93977)'
                    .'|(\\d+)/search\\-ids/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94072)'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94155)'
                    .'|(\\d+)/version/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:94247)'
                    .')'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94324)'
                    .'|(\\d+)/search/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94407)'
                    .'|(\\d+)/search\\-ids/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94495)'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94571)'
                    .'|(\\d+)/version\\-commit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:94671)'
                    .')'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94756)'
                    .'|(\\d+)/search/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94847)'
                    .'|(\\d+)/search\\-ids/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:94943)'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95027)'
                    .'|(\\d+)/version\\-commit\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:95133)'
                    .')'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95224)'
                    .'|(\\d+)/search/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95321)'
                    .'|(\\d+)/search\\-ids/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95423)'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95513)'
                    .'|(\\d+)/webhook/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:95605)'
                    .')'
                    .'|(\\d+)/webhook((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95682)'
                    .'|(\\d+)/search/webhook((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95765)'
                    .'|(\\d+)/search\\-ids/webhook((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95853)'
                    .'|(\\d+)/webhook((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:95929)'
                    .'|([^/]++)/(?'
                        .'|_info/(?'
                            .'|me(?'
                                .'|(*:95965)'
                            .')'
                            .'|ping(*:95980)'
                        .')'
                        .'|user(?'
                            .'|/([^/]++)(?'
                                .'|(*:96010)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:96045)'
                                    .'|l\\-roles/([^/]++)(*:96072)'
                                .')'
                                .'|(*:96083)'
                            .')'
                            .'|(*:96094)'
                        .')'
                        .'|acl\\-role(?'
                            .'|(*:96117)'
                            .'|/([^/]++)(?'
                                .'|(*:96139)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/sales\\-channel\\-api/v(?'
                    .'|(\\d+)/category/([^/]++)(*:96201)'
                    .'|(\\d+)/search\\-ids/category(*:96237)'
                    .'|(\\d+)/category(*:96261)'
                    .'|(\\d+)/country/([^/]++)(*:96293)'
                    .'|(\\d+)/search\\-ids/country(*:96328)'
                    .'|(\\d+)/country(*:96351)'
                    .'|(\\d+)/country\\-state/([^/]++)(*:96390)'
                    .'|(\\d+)/search\\-ids/country\\-state(*:96432)'
                    .'|(\\d+)/country\\-state(*:96462)'
                    .'|(\\d+)/currency/([^/]++)(*:96495)'
                    .'|(\\d+)/search\\-ids/currency(*:96531)'
                    .'|(\\d+)/currency(*:96555)'
                    .'|(\\d+)/language/([^/]++)(*:96588)'
                    .'|(\\d+)/search\\-ids/language(*:96624)'
                    .'|(\\d+)/language(*:96648)'
                    .'|(\\d+)/main\\-category/([^/]++)(*:96687)'
                    .'|(\\d+)/search\\-ids/main\\-category(*:96729)'
                    .'|(\\d+)/main\\-category(*:96759)'
                    .'|(\\d+)/payment\\-method/([^/]++)(*:96799)'
                    .'|(\\d+)/search\\-ids/payment\\-method(*:96842)'
                    .'|(\\d+)/payment\\-method(*:96873)'
                    .'|(\\d+)/product/([^/]++)(*:96905)'
                    .'|(\\d+)/search\\-ids/product(*:96940)'
                    .'|(\\d+)/product(*:96963)'
                    .'|(\\d+)/salutation/([^/]++)(*:96998)'
                    .'|(\\d+)/search\\-ids/salutation(*:97036)'
                    .'|(\\d+)/salutation(*:97062)'
                    .'|(\\d+)/seo\\-url/([^/]++)(*:97095)'
                    .'|(\\d+)/search\\-ids/seo\\-url(*:97131)'
                    .'|(\\d+)/seo\\-url(*:97155)'
                    .'|(\\d+)/shipping\\-method/([^/]++)(*:97196)'
                    .'|(\\d+)/search\\-ids/shipping\\-method(*:97240)'
                    .'|(\\d+)/shipping\\-method(*:97272)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        69 => [[['_route' => 'api.action.access-key.integration', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], ['version'], ['GET' => 0], null, false, false, null]],
        80 => [[['_route' => 'api.action.access-key.user', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], ['version'], ['GET' => 0], null, false, false, null]],
        101 => [[['_route' => 'api.action.access-key.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], ['version'], ['GET' => 0], null, false, false, null]],
        124 => [[['_route' => 'api.action.access-key.product-export', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], ['version'], ['GET' => 0], null, false, false, null]],
        148 => [[['_route' => 'api.acl.privileges.get', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getPrivileges'], ['version'], ['GET' => 0], null, false, false, null]],
        177 => [[['_route' => 'api.acl.privileges.additional.get', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getAdditionalPrivileges'], ['version'], ['GET' => 0], null, false, false, null]],
        200 => [[['_route' => 'api.composite.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::compositeSearch'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'api.clone', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::clone'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        312 => [[['_route' => 'api.createVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::createVersion'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        375 => [[['_route' => 'api.mergeVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::mergeVersion'], ['version', 'entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        435 => [[['_route' => 'api.deleteVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::deleteVersion'], ['version', 'versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'api.action.cache.info', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        505 => [[['_route' => 'api.action.cache.delete_and_warmup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCacheAndScheduleWarmUp'], ['version'], ['DELETE' => 0], null, false, false, null]],
        514 => [[['_route' => 'api.action.cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        533 => [[['_route' => 'api.action.captcha.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CaptchaController::list'], ['version'], ['GET' => 0], null, false, false, null]],
        548 => [[['_route' => 'api.action.cache.cleanup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], ['version'], ['DELETE' => 0], null, false, false, null]],
        570 => [[['_route' => 'api.action.container-cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        587 => [[['_route' => 'api.action.cache.index', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], ['version'], ['POST' => 0], null, false, false, null]],
        598 => [[['_route' => 'api.action.indexing', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], ['version'], ['POST' => 0], null, false, false, null]],
        614 => [[['_route' => 'api.action.sync', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], ['version'], ['POST' => 0], null, false, false, null]],
        642 => [[['_route' => 'api.custom.store.frw.start', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], ['version'], ['POST' => 0], null, false, false, null]],
        655 => [[['_route' => 'api.custom.store.frw.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        669 => [[['_route' => 'api.custom.store.frw.finish', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], ['version'], ['POST' => 0], null, false, false, null]],
        698 => [[['_route' => 'api.custom.store.language-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        727 => [[['_route' => 'api.custom.store.license-domains', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], ['version'], ['GET' => 0], null, false, false, null]],
        745 => [[['_route' => 'api.custom.store.license-violations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], ['version'], ['POST' => 0], null, false, false, null]],
        755 => [[['_route' => 'api.custom.store.licenses', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseList'], ['version'], ['GET' => 0], null, false, false, null]],
        771 => [[['_route' => 'api.custom.store.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        782 => [[['_route' => 'api.custom.store.logout', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        814 => [[['_route' => 'api.custom.store.demo-data-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        829 => [[['_route' => 'api.custom.store.download', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::downloadPlugin'], ['version'], ['GET' => 0], null, false, false, null]],
        864 => [[['_route' => 'api.custom.store.recommendation-regions', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], ['version'], ['GET' => 0], null, false, false, null]],
        873 => [[['_route' => 'api.custom.store.recommendations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], ['version'], ['GET' => 0], null, false, false, null]],
        905 => [[['_route' => 'api.custom.store.verify-license-domain', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], ['version'], ['POST' => 0], null, false, false, null]],
        920 => [[['_route' => 'api.custom.store.ping', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::pingStoreAPI'], ['version'], ['GET' => 0], null, false, false, null]],
        940 => [[['_route' => 'api.action.store.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], ['version'], ['POST' => 0], null, false, false, null]],
        959 => [[['_route' => 'api.custom.store.checklogin', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        974 => [[['_route' => 'api.custom.store.updates', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], ['version'], ['GET' => 0], null, false, false, null]],
        1004 => [[['_route' => 'api.action.scheduled-task.run', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::runScheduledTasks'], ['version'], ['POST' => 0], null, false, false, null]],
        1031 => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::getMinRunInterval'], ['version'], ['GET' => 0], null, false, false, null]],
        1052 => [[['_route' => 'api.action.snippet-set.getList', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], ['version'], ['POST' => 0], null, false, false, null]],
        1084 => [[['_route' => 'api.action.plugin.upload', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uploadPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1097 => [[['_route' => 'api.action.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::updatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1115 => [[['_route' => 'api.action.plugin.uninstall', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uninstallPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1134 => [[['_route' => 'api.action.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deletePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1151 => [[['_route' => 'api.action.plugin.deactivate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deactivatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1168 => [[['_route' => 'api.action.plugin.refresh', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::refreshPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1184 => [[['_route' => 'api.action.plugin.install', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::installPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1201 => [[['_route' => 'api.action.plugin.activate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::activatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1232 => [[['_route' => 'api.custom.updateapi.check', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], ['version'], ['GET' => 0], null, false, false, null]],
        1255 => [[['_route' => 'api.custom.update.check_requirements', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], ['version'], ['GET' => 0], null, false, false, null]],
        1286 => [[['_route' => 'api.custom.updateapi.plugin_compatibility', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::pluginCompatibility'], ['version'], ['GET' => 0], null, false, false, null]],
        1322 => [[['_route' => 'api.custom.updateapi.download_latest_update', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestUpdate'], ['version'], ['GET' => 0], null, false, false, null]],
        1349 => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], ['version'], ['GET' => 0], null, false, false, null]],
        1365 => [[['_route' => 'api.custom.updateapi.unpack', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::unpack'], ['version'], ['GET' => 0], null, false, false, null]],
        1389 => [[['_route' => 'api.custom.updateapi.finish', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::finish'], ['version', 'token'], ['GET' => 0], null, false, true, null]],
        1423 => [[['_route' => 'api.action.user.user-recovery', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], ['version'], ['POST' => 0], null, false, false, null]],
        1440 => [[['_route' => 'api.action.user.user-recovery.hash', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], ['version'], ['GET' => 0], null, false, false, null]],
        1457 => [[['_route' => 'api.action.user.user-recovery.password', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1491 => [[['_route' => 'api.action.check-email-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1516 => [[['_route' => 'api.action.check-username-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1550 => [[['_route' => 'api.action.message-queue.consume', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], ['version'], ['POST' => 0], null, false, false, null]],
        1586 => [[['_route' => 'api.action.database.sync-migration', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::syncMigrations'], ['version'], ['POST' => 0], null, false, false, null]],
        1605 => [[['_route' => 'api.action.database.migrate', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrate'], ['version'], ['POST' => 0], null, false, false, null]],
        1627 => [[['_route' => 'api.action.database.migrate-destructive', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrateDestructive'], ['version'], ['POST' => 0], null, false, false, null]],
        1664 => [[['_route' => 'api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        1692 => [[['_route' => 'api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1725 => [[['_route' => 'api.info.entity-schema', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1745 => [[['_route' => 'api.info.business-events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], ['version'], ['GET' => 0], null, false, false, null]],
        1768 => [[['_route' => 'api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        1783 => [[['_route' => 'api.info.config', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], ['version'], ['GET' => 0], null, false, false, null]],
        1814 => [[['_route' => 'api.info.events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::events'], ['version'], ['GET' => 0], null, false, false, null]],
        1869 => [[['_route' => 'api.proxy.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1901 => [[['_route' => 'api.proxy.store-api', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1925 => [[['_route' => 'api.proxy.switch-customer', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1958 => [[['_route' => 'api.proxy.modify-shipping-costs', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1997 => [[['_route' => 'api.proxy.disable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        2035 => [[['_route' => 'api.proxy.enable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        2099 => [[['_route' => 'api.app_system.action_buttons', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getActionsPerView'], ['version', 'entity', 'view'], ['GET' => 0], null, false, true, null]],
        2120 => [[['_route' => 'api.app_system.action_button.run', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::runAction'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        2159 => [[['_route' => 'api.app_system.app-url-change-strategies', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getAvailableStrategies'], ['version'], ['GET' => 0], null, false, false, null]],
        2175 => [[['_route' => 'api.app_system.app-url-change-resolve', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::resolve'], ['version'], ['POST' => 0], null, false, false, null]],
        2199 => [[['_route' => 'api.app_system.app-url-difference', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getUrlDifference'], ['version'], ['GET' => 0], null, false, false, null]],
        2217 => [[['_route' => 'api.app_system.modules', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getModules'], ['version'], ['GET' => 0], null, false, false, null]],
        2263 => [[['_route' => 'api.action.snippet.get.filter', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], ['version'], ['GET' => 0], null, false, false, null]],
        2289 => [[['_route' => 'api.action.snippet-set.base-file', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], ['version'], ['GET' => 0], null, false, false, null]],
        2304 => [[['_route' => 'api.action.snippet-set.author', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], ['version'], ['GET' => 0], null, false, false, null]],
        2363 => [[['_route' => 'api.action.attribute-set.get-relations', '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], ['version'], ['GET' => 0], null, false, false, null]],
        2401 => [[['_route' => 'api.action.core.system-config.check', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::checkConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2416 => [[['_route' => 'api.action.core.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2430 => [[['_route' => 'api.action.core.save.system-config.batch', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], ['version'], ['POST' => 0], null, false, false, null]],
        2440 => [
            [['_route' => 'api.action.core.system-config.value', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfigurationValues'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.core.save.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        2490 => [[['_route' => 'api.state_machine.states', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['version', 'entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        2508 => [[['_route' => 'api.state_machine.transition_state', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['version', 'entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        2566 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['version', 'type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        2605 => [[['_route' => 'api.action.number-range.preview-pattern', 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['version', 'type'], ['GET' => 0], null, false, true, null]],
        2647 => [[['_route' => 'api.action.product.combinations', '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['version', 'productId'], ['GET' => 0], null, false, false, null]],
        2676 => [[['_route' => 'api.action.product_export.validate', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2692 => [[['_route' => 'api.action.product_export.preview', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        2740 => [[['_route' => 'api.action.media-folder.dissolve', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['version', 'folderId'], ['POST' => 0], null, false, false, null]],
        2771 => [[['_route' => 'api.action.media.upload', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2786 => [[['_route' => 'api.action.media.rename', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2809 => [[['_route' => 'api.action.media.provide-name', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], ['version'], ['GET' => 0], null, false, false, null]],
        2841 => [[['_route' => 'api.action.mail_template.send', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], ['version'], ['POST' => 0], null, false, false, null]],
        2858 => [[['_route' => 'api.action.mail_template.validate', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2898 => [[['_route' => 'api.action.import_export.features', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], ['version'], ['GET' => 0], null, false, false, null]],
        2919 => [[['_route' => 'api.action.import_export.file.download', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], ['version'], ['GET' => 0], null, false, false, null]],
        2939 => [[['_route' => 'api.action.import_export.initiate', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], ['version'], ['POST' => 0], null, false, false, null]],
        2953 => [[['_route' => 'api.action.import_export.process', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], ['version'], ['POST' => 0], null, false, false, null]],
        2969 => [[['_route' => 'api.action.import_export.cancel', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        3021 => [[['_route' => 'api.seo-url-template.validate', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        3070 => [[['_route' => 'api.seo-url-template.preview', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        3119 => [[['_route' => 'api.seo-url-template.context', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], ['version'], ['POST' => 0], null, false, false, null]],
        3160 => [[['_route' => 'api.seo-url.canonical', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], ['version'], ['PATCH' => 0], null, false, false, null]],
        3211 => [[['_route' => 'api.seo-url.create', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::createCustomSeoUrls'], ['version'], ['POST' => 0], null, false, false, null]],
        3269 => [[['_route' => 'api.seo-url-template.default', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['version', 'routeName'], ['GET' => 0], null, false, true, null]],
        3339 => [[['_route' => 'api.action.order.convert-to-cart', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['version', 'orderId'], ['POST' => 0], null, true, false, null]],
        3357 => [[['_route' => 'api.action.order.add-credit-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3378 => [[['_route' => 'api.action.order.recalculate', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3403 => [[['_route' => 'api.action.order.add-product', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['version', 'orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        3420 => [[['_route' => 'api.action.order.add-line-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3463 => [[['_route' => 'api.action.document.preview', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['version', 'orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        3489 => [[['_route' => 'api.action.document.invoice', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocument'], ['version', 'orderId', 'documentTypeName'], ['POST' => 0], null, false, true, null]],
        3512 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['version', 'orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        3567 => [[['_route' => 'api.action.order.replace-order-address', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['version', 'orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        3615 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['version', 'orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        3656 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['version', 'orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        3683 => [[['_route' => 'api.action.calculate-price', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], ['version'], ['POST' => 0], null, false, false, null]],
        3721 => [[['_route' => 'api.action.download.document', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['version', 'documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        3736 => [[['_route' => 'api.action.document.upload', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['version', 'documentId'], ['POST' => 0], null, false, false, null]],
        3787 => [
            [['_route' => 'api.action.promotion.codes', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getIndividualCodes'], ['version', 'promotionId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.promotion.codes.remove', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::deleteIndividualCodes'], ['version', 'promotionId'], ['DELETE' => 0], null, false, false, null],
        ],
        3817 => [[['_route' => 'api.action.promotion.setgroup.packager', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], ['version'], ['GET' => 0], null, false, false, null]],
        3832 => [[['_route' => 'api.action.promotion.setgroup.sorter', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], ['version'], ['GET' => 0], null, false, false, null]],
        3857 => [[['_route' => 'api.action.promotion.discount.picker', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getDiscountFilterPickers'], ['version'], ['GET' => 0], null, false, false, null]],
        3927 => [[['_route' => 'api.customer-group.accept', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::accept'], ['version', 'customerId'], ['POST' => 0], null, false, true, null]],
        3996 => [[['_route' => 'api.customer-group.decline', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::decline'], ['version', 'customerId'], ['POST' => 0], null, false, true, null]],
        4035 => [[['_route' => 'api.admin.snippets', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], ['version'], ['GET' => 0], null, false, false, null]],
        4054 => [[['_route' => 'api.admin.known-ips', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::knownIps'], ['version'], ['GET' => 0], null, false, false, null]],
        4104 => [[['_route' => 'api.action.theme.configuration', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4128 => [[['_route' => 'api.action.theme.assign', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['version', 'themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        4142 => [[['_route' => 'api.action.theme.reset', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, false, null]],
        4157 => [[['_route' => 'api.action.theme.fields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::fields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4184 => [[['_route' => 'api.action.theme.structuredFields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4194 => [[['_route' => 'api.action.theme.update', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, true, null]],
        4286 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4363 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4447 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4536 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4635 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        4719 => [[['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4809 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4904 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4987 => [[['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5074 => [
            [['_route' => 'api.app.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5146 => [[['_route' => 'api.app.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5224 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5307 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5378 => [[['_route' => 'api.app.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5481 => [
            [['_route' => 'api.app_action_button.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5569 => [[['_route' => 'api.app_action_button.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5663 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5762 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5849 => [[['_route' => 'api.app_action_button.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5965 => [
            [['_route' => 'api.app_action_button_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6066 => [[['_route' => 'api.app_action_button_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6173 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6285 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6385 => [[['_route' => 'api.app_action_button_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6482 => [
            [['_route' => 'api.app_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6564 => [[['_route' => 'api.app_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6652 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6745 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6826 => [[['_route' => 'api.app_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6926 => [
            [['_route' => 'api.app_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7011 => [[['_route' => 'api.app_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7102 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7198 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7282 => [[['_route' => 'api.app_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7374 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7451 => [[['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7534 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7622 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7698 => [[['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7795 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7877 => [[['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7965 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8058 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8139 => [[['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8244 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8334 => [[['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8430 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8531 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8620 => [[['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8714 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8793 => [[['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8878 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8968 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9046 => [[['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9139 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9217 => [[['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9301 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9390 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9467 => [[['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9573 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9664 => [[['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9761 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9863 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9953 => [[['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10049 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10131 => [[['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10219 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10312 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10393 => [[['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10487 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10566 => [[['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10651 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10741 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10819 => [[['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10926 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11018 => [[['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11116 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11219 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11310 => [[['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11402 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11479 => [[['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11562 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11650 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11726 => [[['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11825 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11909 => [[['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11999 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12094 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12177 => [[['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12289 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        12386 => [[['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        12489 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12597 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12693 => [[['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        12732 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        12755 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        12781 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12806 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        12842 => [[['_route' => 'frontend.account.order.single.document', '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        12872 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        12911 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        12934 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        12951 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        12969 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        13045 => [[['_route' => 'sales-channel-api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13074 => [[['_route' => 'sales-channel-api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13098 => [[['_route' => 'sales-channel-api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13122 => [
            [['_route' => 'sales-channel-api.context.update', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::update'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.context.get', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::getContext'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13150 => [[['_route' => 'sales-channel-api.cms.page', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\SalesChannelCmsPageController::getPage'], ['version', 'pageId'], ['GET' => 0], null, false, true, null]],
        13178 => [
            [['_route' => 'sales-channel-api.checkout.cart.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::getCart'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.checkout.cart.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::createCart'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        13208 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.product.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addProduct'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        13231 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.code.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addCode'], ['version', 'code'], ['POST' => 0], null, false, true, null]],
        13266 => [
            [['_route' => 'sales-channel-api.checkout.cart.line-item.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addLineItem'], ['version', 'id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItem'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.update', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::updateLineItem'], ['version', 'id'], ['PATCH' => 0], null, false, true, null],
        ],
        13285 => [[['_route' => 'sales-channel-api.checkout.cart.line-items.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItems'], ['version'], ['POST' => 0], null, false, false, null]],
        13297 => [[['_route' => 'sales-channel-api.checkout.cart.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::cancelCart'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13316 => [[['_route' => 'sales-channel-api.checkout.order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13339 => [[['_route' => 'sales-channel-api.checkout.order.pay', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::payOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        13365 => [[['_route' => 'sales-channel-api.checkout.guest-order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createGuestOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        13384 => [[['_route' => 'sales-channel-api.checkout.guest-order.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::getDeepLinkOrder'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        13418 => [[['_route' => 'sales-channel-api.customer.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        13431 => [[['_route' => 'sales-channel-api.customer.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        13447 => [[['_route' => 'sales-channel-api.customer.order.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::orderList'], ['version'], ['GET' => 0], null, false, false, null]],
        13462 => [[['_route' => 'sales-channel-api.customer.email.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveEmail'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13480 => [[['_route' => 'sales-channel-api.customer.password.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::savePassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        13500 => [[['_route' => 'sales-channel-api.customer.address.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddresses'], ['version'], ['GET' => 0], null, false, false, null]],
        13522 => [
            [['_route' => 'sales-channel-api.customer.address.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddress'], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.customer.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::deleteAddress'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        13553 => [[['_route' => 'sales-channel-api.customer.address.set-default-shipping-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultShippingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13570 => [[['_route' => 'sales-channel-api.customer.address.set-default-billing-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultBillingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        13582 => [[['_route' => 'sales-channel-api.customer.address.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::upsertAddress'], ['version'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        13594 => [
            [['_route' => 'sales-channel-api.customer.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::register'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveProfile'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getCustomerDetail'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        13637 => [[['_route' => 'sales-channel-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\SalesChannelCrossSellingController::getCrossSelling'], ['version', 'id'], ['GET' => 0], null, false, false, null]],
        13670 => [[['_route' => 'sales-channel-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13687 => [[['_route' => 'sales-channel-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        13708 => [[['_route' => 'sales-channel-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13772 => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        13801 => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        13825 => [[['_route' => 'store-api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13855 => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13875 => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13891 => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13912 => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13959 => [[['_route' => 'store-api.customer.wishlist.add', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['version', 'productId'], ['POST' => 0], null, false, true, null]],
        13974 => [[['_route' => 'store-api.customer.wishlist.merge', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\MergeWishlistProductsRoute::merge'], ['version'], ['POST' => 0], null, false, false, null]],
        13999 => [[['_route' => 'store-api.customer.wishlist.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['version', 'productId'], ['DELETE' => 0], null, false, true, null]],
        14010 => [[['_route' => 'store-api.customer.wishlist.load', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoadWishlistRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14058 => [[['_route' => 'store-api.customer-group-registration.config', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['version', 'customerGroupId'], ['GET' => 0], null, false, true, null]],
        14080 => [[['_route' => 'store-api.category.search', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryListRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14099 => [[['_route' => 'store-api.category.detail', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['version', 'navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14121 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['version', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14149 => [[['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null]],
        14173 => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], ['version'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        14184 => [[['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14200 => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], ['version'], ['POST' => 0], null, false, false, null]],
        14220 => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14243 => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14264 => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ProductSearchRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        14283 => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        14300 => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14317 => [[['_route' => 'store-api.sitemap', '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14342 => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14384 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\NavigationRoute::load'], ['version', 'requestActiveId', 'requestRootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14414 => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14433 => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14454 => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        14509 => [[['_route' => 'store-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        14529 => [[['_route' => 'store-api.product-review.list', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        14539 => [[['_route' => 'store-api.product-review.save', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        14551 => [[['_route' => 'store-api.product.detail', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, true, null]],
        14580 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ProductListingRoute::load'], ['version', 'categoryId'], ['POST' => 0], null, false, true, null]],
        14590 => [[['_route' => 'store-api.product.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\ProductListListRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14615 => [[['_route' => 'store-api.payment.method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\PaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14641 => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14686 => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14706 => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14738 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['version', 'paymentMethodId'], ['POST' => 0], null, false, true, null]],
        14755 => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        14776 => [
            [['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'store-api.account.customer.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteCustomerRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null],
        ],
        14810 => [[['_route' => 'store-api.account.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['version', 'addressId'], ['DELETE' => 0], null, false, true, null]],
        14849 => [[['_route' => 'store-api.account.address.change.default.shipping', 'type' => 'shipping', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        14875 => [[['_route' => 'store-api.account.address.change.default.billing', 'type' => 'billing', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        14894 => [[['_route' => 'store-api.account.address.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        14905 => [[['_route' => 'store-api.account.address.create', 'addressId' => null, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['version'], ['POST' => 0], null, false, false, null]],
        14932 => [[['_route' => 'store-api.account.address.list.get', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ListAddressRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14949 => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], ['version'], ['POST' => 0], null, false, false, null]],
        14962 => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        14997 => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        15007 => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], ['version'], ['POST' => 0], null, false, false, null]],
        15046 => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], ['version'], ['POST' => 0], null, false, false, null]],
        15056 => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], ['version'], ['POST' => 0], null, false, false, null]],
        15093 => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        15110 => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        15121 => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        15166 => [[['_route' => 'store-api.product.export', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15222 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        15252 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15290 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15316 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        15362 => [[['_route' => 'frontend.wishlist.product.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        15387 => [[['_route' => 'frontend.wishlist.product.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        15420 => [[['_route' => 'frontend.wishlist.add.after.login', '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        15446 => [[['_route' => 'frontend.wishlist.product.remove', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        15500 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        15535 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        15583 => [[['_route' => 'frontend.account.customer-group-registration.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        15626 => [[['_route' => 'frontend.maintenance.singlepage', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        15656 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        15685 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        15702 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        15732 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        15769 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        15785 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        15821 => [[['_route' => 'frontend.export', '_controller' => 'Shopware\\Storefront\\Controller\\ProductExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15932 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16022 => [[['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16118 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16219 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16308 => [[['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16401 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16479 => [[['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16563 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16652 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16729 => [[['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16835 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16926 => [[['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17023 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17125 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17215 => [[['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17313 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17396 => [[['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17485 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17579 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17661 => [[['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17764 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17852 => [[['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17946 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18045 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18132 => [[['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18245 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18343 => [[['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18447 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18556 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18653 => [[['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18746 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18824 => [[['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18908 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18997 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19074 => [[['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19176 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19263 => [[['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19356 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19454 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19540 => [[['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19640 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19725 => [[['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19816 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19912 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19996 => [[['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20127 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20243 => [[['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20365 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20492 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20607 => [[['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20720 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20818 => [[['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20922 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21031 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21128 => [[['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21231 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21319 => [[['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21413 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21512 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21599 => [[['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21697 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21780 => [[['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21869 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21963 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22045 => [[['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22143 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22226 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22315 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22409 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22491 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22590 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22674 => [[['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22764 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22859 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22942 => [[['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23054 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23151 => [[['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23254 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23362 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23458 => [[['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23551 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23629 => [[['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23713 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23802 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23879 => [[['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23986 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24078 => [[['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24176 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24279 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24370 => [[['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24493 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24601 => [[['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24715 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24834 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24941 => [[['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25040 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25124 => [[['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25214 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25309 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25392 => [[['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25504 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25601 => [[['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25704 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25812 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25908 => [[['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26006 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26089 => [[['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26178 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26272 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26354 => [[['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26458 => [
            [['_route' => 'api.event_action_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26547 => [[['_route' => 'api.event_action_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26642 => [[['_route' => 'api.event_action_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26742 => [[['_route' => 'api.event_action_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26830 => [[['_route' => 'api.event_action_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26944 => [
            [['_route' => 'api.event_action_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27043 => [[['_route' => 'api.event_action_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27148 => [[['_route' => 'api.event_action_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27258 => [[['_route' => 'api.event_action_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27356 => [[['_route' => 'api.event_action_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27461 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27551 => [[['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27647 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27748 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27837 => [[['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27941 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28030 => [[['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28125 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28225 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28313 => [[['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28421 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28514 => [[['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28613 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28717 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28809 => [[['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28930 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29036 => [[['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29148 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29265 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29370 => [[['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29466 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29547 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29634 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29726 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29806 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29908 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29995 => [[['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30088 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30186 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30272 => [[['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30365 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30443 => [[['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30527 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30616 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30693 => [[['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30784 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30860 => [[['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30942 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31029 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31104 => [[['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31208 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31297 => [[['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31392 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31492 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31580 => [[['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31675 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31755 => [[['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31841 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31932 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32011 => [[['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32116 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32206 => [[['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32302 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32403 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32492 => [[['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32610 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32713 => [[['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32822 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32936 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33038 => [[['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33137 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33221 => [[['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33311 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33406 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33489 => [[['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33595 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33686 => [[['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33783 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33885 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33975 => [[['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34090 => [
            [['_route' => 'api.mail_template_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34190 => [[['_route' => 'api.mail_template_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34296 => [[['_route' => 'api.mail_template_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34407 => [[['_route' => 'api.mail_template_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34506 => [[['_route' => 'api.mail_template_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34618 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34715 => [[['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34818 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34926 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35022 => [[['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35127 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35217 => [[['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35313 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35414 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35503 => [[['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35621 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35724 => [[['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35833 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35947 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36049 => [[['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36148 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36232 => [[['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36322 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36417 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36500 => [[['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36590 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36665 => [[['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36746 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36832 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36906 => [[['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37013 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37105 => [[['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37203 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37306 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37397 => [[['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37495 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37578 => [[['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37667 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37761 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37843 => [[['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37956 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38054 => [[['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38158 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38267 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38364 => [[['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38501 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38623 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38751 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38884 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39005 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39100 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39180 => [[['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39266 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39357 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39436 => [[['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39537 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39623 => [[['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39715 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39812 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39897 => [[['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40004 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40096 => [[['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40194 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40297 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40388 => [[['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40491 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40579 => [[['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40673 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40772 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40859 => [[['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40965 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41056 => [[['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41153 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41255 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41345 => [[['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41451 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41542 => [[['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41639 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41741 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41831 => [[['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41942 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42038 => [[['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42140 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42247 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42342 => [[['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42440 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42523 => [[['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42612 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42706 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42788 => [[['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42902 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43001 => [[['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43106 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43216 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43314 => [[['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43419 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43509 => [[['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43605 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43706 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43801 => [[['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43912 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44008 => [[['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44110 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44217 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44312 => [[['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44416 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44505 => [[['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44600 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44700 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44788 => [[['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44905 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45007 => [[['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45115 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45228 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45329 => [[['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45419 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45494 => [[['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45575 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45661 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45735 => [[['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45834 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45918 => [[['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46008 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46103 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46186 => [[['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46286 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46371 => [[['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46462 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46558 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46642 => [[['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46742 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46827 => [[['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46918 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47014 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47098 => [[['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47208 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47303 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47404 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47510 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47604 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47706 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47793 => [[['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47886 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47984 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48070 => [[['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48165 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48245 => [[['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48331 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48422 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48501 => [[['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48604 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48692 => [[['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48786 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48885 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48972 => [[['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49072 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49157 => [[['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49248 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49344 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49428 => [[['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49541 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49639 => [[['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49743 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49852 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49949 => [[['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50040 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50116 => [[['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50198 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50285 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50360 => [[['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50464 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50553 => [[['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50648 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50748 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50836 => [[['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50928 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51005 => [[['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51088 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51176 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51252 => [[['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51354 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51441 => [[['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51534 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51632 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51718 => [[['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51826 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51919 => [[['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52018 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52122 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52214 => [[['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52329 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52429 => [[['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52535 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52646 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52745 => [[['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52853 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52946 => [[['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53045 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53149 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53241 => [[['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53369 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53482 => [[['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53601 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53725 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53837 => [[['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53958 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54064 => [[['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54176 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54293 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54398 => [[['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54510 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54607 => [[['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54710 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54818 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54914 => [[['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55014 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55099 => [[['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55190 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55286 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55370 => [[['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55476 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55567 => [[['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55664 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55766 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55856 => [[['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55975 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56079 => [[['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56189 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56304 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56407 => [[['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56520 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56618 => [[['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56722 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56831 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56928 => [[['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57034 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57125 => [[['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57222 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57324 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57414 => [[['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57533 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57637 => [[['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57747 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57862 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57965 => [[['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58064 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58148 => [[['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58238 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58333 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58416 => [[['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58516 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58601 => [[['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58692 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58788 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58872 => [[['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58971 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59055 => [[['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59145 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59240 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59323 => [[['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59425 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59512 => [[['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59605 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59703 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59789 => [[['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59889 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59974 => [[['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60065 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60161 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60245 => [[['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60354 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60448 => [[['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60548 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60653 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60746 => [[['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60847 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60933 => [[['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61025 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61122 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61207 => [[['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61321 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61420 => [[['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61525 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61635 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61733 => [[['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61833 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61918 => [[['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62009 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62105 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62189 => [[['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62297 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62390 => [[['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62489 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62593 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62685 => [[['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62798 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62896 => [[['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63000 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63109 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63206 => [[['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63303 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63385 => [[['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63473 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63566 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63647 => [[['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63752 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63842 => [[['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63938 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64039 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64128 => [[['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64232 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64321 => [[['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64416 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64516 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64604 => [[['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64698 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64777 => [[['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64862 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64952 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65030 => [[['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65136 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65227 => [[['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65324 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65426 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65516 => [[['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65620 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65709 => [[['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65804 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65904 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65992 => [[['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66104 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66201 => [[['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66304 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66412 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66508 => [[['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66618 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66713 => [[['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66814 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66920 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67014 => [[['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67126 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67223 => [[['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67326 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67434 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67530 => [[['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67637 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67729 => [[['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67827 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67930 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68021 => [[['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68134 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68232 => [[['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68336 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68445 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68542 => [[['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68651 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68745 => [[['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68845 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68950 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69043 => [[['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69153 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69248 => [[['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69349 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69455 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69549 => [[['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69653 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69742 => [[['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69837 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69937 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70025 => [[['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70135 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70230 => [[['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70331 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70437 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70531 => [[['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70638 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70730 => [[['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70828 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70931 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71022 => [[['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71122 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71207 => [[['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71298 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71394 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71478 => [[['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71586 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71679 => [[['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71778 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71888 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71980 => [[['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72101 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72207 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72319 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72436 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72541 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72654 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72752 => [[['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72856 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72965 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73062 => [[['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73151 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73225 => [[['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73305 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73390 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73463 => [[['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73563 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73648 => [[['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73739 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73835 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73919 => [[['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74018 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74102 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74192 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74287 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74370 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74480 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74575 => [[['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74676 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74782 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74876 => [[['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74984 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75077 => [[['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75176 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75280 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75372 => [[['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75481 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75575 => [[['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75675 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75780 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75873 => [[['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75980 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76072 => [[['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76170 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76273 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76364 => [[['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76473 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76567 => [[['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76667 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76772 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76865 => [[['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76981 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77082 => [[['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77189 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77301 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77401 => [[['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77518 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77620 => [[['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77728 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77841 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77942 => [[['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78054 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78151 => [[['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78254 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78362 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78458 => [[['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78563 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78653 => [[['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78749 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78850 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78939 => [[['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79057 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79160 => [[['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79269 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79383 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79485 => [[['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79580 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79660 => [[['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79746 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79837 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79916 => [[['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80024 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80117 => [[['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80216 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80320 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80412 => [[['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80512 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80597 => [[['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80688 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80784 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80868 => [[['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80961 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81039 => [[['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81123 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81212 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81289 => [[['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81392 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81480 => [[['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81574 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81673 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81760 => [[['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81861 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81947 => [[['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82039 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82136 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82221 => [[['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82329 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82422 => [[['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82521 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82625 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82717 => [[['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82823 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82914 => [[['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83011 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83113 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83203 => [[['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83317 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83416 => [[['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83521 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83631 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83729 => [[['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83821 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83898 => [[['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83981 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84069 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84145 => [[['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84242 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84324 => [[['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84412 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84505 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84586 => [[['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84685 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84769 => [[['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84859 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84954 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85037 => [[['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85145 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85238 => [[['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85337 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85441 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85533 => [[['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85639 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85730 => [[['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85827 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85929 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86019 => [[['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86138 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86242 => [[['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86352 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86467 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86570 => [[['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86681 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86777 => [[['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86879 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86986 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87081 => [[['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87193 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87290 => [[['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87393 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87501 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87597 => [[['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87696 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87780 => [[['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87870 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87965 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88048 => [[['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88136 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88209 => [[['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88288 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88372 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88444 => [[['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88532 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88605 => [[['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88684 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88768 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88840 => [[['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88934 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89013 => [[['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89098 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89188 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89266 => [[['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89366 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89451 => [[['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89542 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89638 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89722 => [[['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89835 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89933 => [[['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90037 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90146 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90243 => [[['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90333 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90408 => [[['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90489 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90575 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90649 => [[['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90746 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90828 => [[['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90916 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91009 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91090 => [[['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91196 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91287 => [[['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91384 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91486 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91576 => [[['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91679 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91767 => [[['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91861 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91960 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92047 => [[['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92136 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92210 => [[['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92290 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92375 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92448 => [[['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92550 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        92637 => [[['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        92730 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92828 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        92914 => [[['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93000 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93073 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93153 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93238 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93340 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93427 => [[['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93520 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93618 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93704 => [[['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        93803 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        93887 => [[['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        93977 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94072 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94155 => [[['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94247 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        94324 => [[['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        94407 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94495 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94571 => [[['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94671 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        94756 => [[['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        94847 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        94943 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95027 => [[['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95133 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        95224 => [[['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        95321 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95423 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95513 => [[['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95605 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        95682 => [[['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        95765 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95853 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95929 => [[['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        95965 => [
            [['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.change.me', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateMe'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        95980 => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], ['version'], ['GET' => 0], null, false, false, null]],
        96010 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['version', 'userId'], ['DELETE' => 0], null, false, true, null]],
        96045 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['version', 'userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        96072 => [[['_route' => 'api.user_role.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['version', 'userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        96083 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['version', 'userId'], ['PATCH' => 0], null, false, true, null]],
        96094 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version'], ['POST' => 0], null, false, false, null]],
        96117 => [[['_route' => 'api.acl_role.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], ['version'], ['POST' => 0], null, false, false, null]],
        96139 => [
            [['_route' => 'api.acl_role.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['version', 'roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['version', 'roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        96201 => [[['_route' => 'sales-channel-api.category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96237 => [[['_route' => 'sales-channel-api.category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'category'], ['version'], ['POST' => 0], null, false, false, null]],
        96261 => [[['_route' => 'sales-channel-api.category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96293 => [[['_route' => 'sales-channel-api.country.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96328 => [[['_route' => 'sales-channel-api.country.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country'], ['version'], ['POST' => 0], null, false, false, null]],
        96351 => [[['_route' => 'sales-channel-api.country.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96390 => [[['_route' => 'sales-channel-api.country_state.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country-state'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96432 => [[['_route' => 'sales-channel-api.country_state.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country-state'], ['version'], ['POST' => 0], null, false, false, null]],
        96462 => [[['_route' => 'sales-channel-api.country_state.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country-state'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96495 => [[['_route' => 'sales-channel-api.currency.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'currency'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96531 => [[['_route' => 'sales-channel-api.currency.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'currency'], ['version'], ['POST' => 0], null, false, false, null]],
        96555 => [[['_route' => 'sales-channel-api.currency.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'currency'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96588 => [[['_route' => 'sales-channel-api.language.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'language'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96624 => [[['_route' => 'sales-channel-api.language.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'language'], ['version'], ['POST' => 0], null, false, false, null]],
        96648 => [[['_route' => 'sales-channel-api.language.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'language'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96687 => [[['_route' => 'sales-channel-api.main_category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'main-category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96729 => [[['_route' => 'sales-channel-api.main_category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'main-category'], ['version'], ['POST' => 0], null, false, false, null]],
        96759 => [[['_route' => 'sales-channel-api.main_category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'main-category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96799 => [[['_route' => 'sales-channel-api.payment_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'payment-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96842 => [[['_route' => 'sales-channel-api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'payment-method'], ['version'], ['POST' => 0], null, false, false, null]],
        96873 => [[['_route' => 'sales-channel-api.payment_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'payment-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96905 => [[['_route' => 'sales-channel-api.product.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'product'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        96940 => [[['_route' => 'sales-channel-api.product.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'product'], ['version'], ['POST' => 0], null, false, false, null]],
        96963 => [[['_route' => 'sales-channel-api.product.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'product'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        96998 => [[['_route' => 'sales-channel-api.salutation.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'salutation'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        97036 => [[['_route' => 'sales-channel-api.salutation.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'salutation'], ['version'], ['POST' => 0], null, false, false, null]],
        97062 => [[['_route' => 'sales-channel-api.salutation.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'salutation'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        97095 => [[['_route' => 'sales-channel-api.seo_url.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'seo-url'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        97131 => [[['_route' => 'sales-channel-api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'seo-url'], ['version'], ['POST' => 0], null, false, false, null]],
        97155 => [[['_route' => 'sales-channel-api.seo_url.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'seo-url'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        97196 => [[['_route' => 'sales-channel-api.shipping_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'shipping-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        97240 => [[['_route' => 'sales-channel-api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'shipping-method'], ['version'], ['POST' => 0], null, false, false, null]],
        97272 => [
            [['_route' => 'sales-channel-api.shipping_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'shipping-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
