<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mautic_js
        if ($pathinfo === '/mtc.js') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_js', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\JsController::indexAction',  '_route' => 'mautic_js',);
        }

        // mautic_base_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mautic_base_index');
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_base_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_base_index',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_secure_root
            if ($pathinfo === '/s') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_secure_root', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root',);
            }

            // mautic_secure_root_slash
            if (rtrim($pathinfo, '/') === '/s') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mautic_secure_root_slash');
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_secure_root_slash', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root_slash',);
            }

        }

        // mautic_remove_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mautic_remove_trailing_slash;
            }

            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_remove_trailing_slash', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_remove_trailing_slash')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',));
        }
        not_mautic_remove_trailing_slash:

        if (0 === strpos($pathinfo, '/oauth/v')) {
            if (0 === strpos($pathinfo, '/oauth/v1')) {
                // bazinga_oauth_server_requesttoken
                if ($pathinfo === '/oauth/v1/request_token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bazinga_oauth_server_requesttoken;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'bazinga_oauth_server_requesttoken', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'bazinga.oauth.controller.server:requestTokenAction',  '_route' => 'bazinga_oauth_server_requesttoken',);
                }
                not_bazinga_oauth_server_requesttoken:

                if (0 === strpos($pathinfo, '/oauth/v1/a')) {
                    if (0 === strpos($pathinfo, '/oauth/v1/authorize')) {
                        // bazinga_oauth_login_allow
                        if ($pathinfo === '/oauth/v1/authorize') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_bazinga_oauth_login_allow;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'bazinga_oauth_login_allow', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\AuthorizeController::allowAction',  '_route' => 'bazinga_oauth_login_allow',);
                        }
                        not_bazinga_oauth_login_allow:

                        // bazinga_oauth_server_authorize
                        if ($pathinfo === '/oauth/v1/authorize') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_bazinga_oauth_server_authorize;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'bazinga_oauth_server_authorize', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'bazinga.oauth.controller.server:authorizeAction',  '_route' => 'bazinga_oauth_server_authorize',);
                        }
                        not_bazinga_oauth_server_authorize:

                        if (0 === strpos($pathinfo, '/oauth/v1/authorize_login')) {
                            // mautic_oauth1_server_auth_login
                            if ($pathinfo === '/oauth/v1/authorize_login') {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($pathinfo, 'mautic_oauth1_server_auth_login', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginAction',  '_route' => 'mautic_oauth1_server_auth_login',);
                            }
                            not_mautic_oauth1_server_auth_login:

                            // mautic_oauth1_server_auth_login_check
                            if ($pathinfo === '/oauth/v1/authorize_login_check') {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login_check;
                                }

                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                    return $this->redirect($pathinfo, 'mautic_oauth1_server_auth_login_check', key($requiredSchemes));
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth1_server_auth_login_check',);
                            }
                            not_mautic_oauth1_server_auth_login_check:

                        }

                    }

                    // bazinga_oauth_server_accesstoken
                    if ($pathinfo === '/oauth/v1/access_token') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_bazinga_oauth_server_accesstoken;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'bazinga_oauth_server_accesstoken', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'bazinga.oauth.controller.server:accessTokenAction',  '_route' => 'bazinga_oauth_server_accesstoken',);
                    }
                    not_bazinga_oauth_server_accesstoken:

                }

            }

            if (0 === strpos($pathinfo, '/oauth/v2')) {
                // fos_oauth_server_token
                if ($pathinfo === '/oauth/v2/token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_oauth_server_token;
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'fos_oauth_server_token', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
                }
                not_fos_oauth_server_token:

                if (0 === strpos($pathinfo, '/oauth/v2/authorize')) {
                    // fos_oauth_server_authorize
                    if ($pathinfo === '/oauth/v2/authorize') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_oauth_server_authorize;
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'fos_oauth_server_authorize', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
                    }
                    not_fos_oauth_server_authorize:

                    if (0 === strpos($pathinfo, '/oauth/v2/authorize_login')) {
                        // mautic_oauth2_server_auth_login
                        if ($pathinfo === '/oauth/v2/authorize_login') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_oauth2_server_auth_login', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginAction',  '_route' => 'mautic_oauth2_server_auth_login',);
                        }
                        not_mautic_oauth2_server_auth_login:

                        // mautic_oauth2_server_auth_login_check
                        if ($pathinfo === '/oauth/v2/authorize_login_check') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login_check;
                            }

                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_oauth2_server_auth_login_check', key($requiredSchemes));
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth2_server_auth_login_check',);
                        }
                        not_mautic_oauth2_server_auth_login_check:

                    }

                }

            }

        }

        // mautic_asset_download
        if (0 === strpos($pathinfo, '/asset') && preg_match('#^/asset(?:/(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_asset_download', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_download')), array (  'slug' => '',  '_controller' => 'Mautic\\AssetBundle\\Controller\\PublicController::downloadAction',));
        }

        if (0 === strpos($pathinfo, '/dwc')) {
            // mautic_api_dynamicContent_index
            if ($pathinfo === '/dwc') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_api_dynamicContent_index', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::getEntitiesAction',  '_route' => 'mautic_api_dynamicContent_index',);
            }

            // mautic_api_dynamicContent_action
            if (preg_match('#^/dwc/(?P<objectAlias>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_api_dynamicContent_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::processAction',));
            }

        }

        // mautic_plugin_tracker
        if (0 === strpos($pathinfo, '/plugin') && preg_match('#^/plugin/(?P<integration>.+)/tracking\\.gif$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_plugin_tracker', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_tracker')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::pluginTrackingGifAction',));
        }

        if (0 === strpos($pathinfo, '/email')) {
            // mautic_email_tracker
            if (preg_match('#^/email/(?P<idHash>[^/\\.]++)\\.gif$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_email_tracker', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_tracker')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::trackingImageAction',));
            }

            // mautic_email_webview
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_email_webview', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_webview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::indexAction',));
            }

            // mautic_email_unsubscribe
            if (0 === strpos($pathinfo, '/email/unsubscribe') && preg_match('#^/email/unsubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_email_unsubscribe', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_unsubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::unsubscribeAction',));
            }

            // mautic_email_resubscribe
            if (0 === strpos($pathinfo, '/email/resubscribe') && preg_match('#^/email/resubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_email_resubscribe', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_resubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::resubscribeAction',));
            }

        }

        // mautic_mailer_transport_callback
        if (0 === strpos($pathinfo, '/mailer') && preg_match('#^/mailer/(?P<transport>[^/]++)/callback$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_mailer_transport_callback', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mailer_transport_callback')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::mailerCallbackAction',));
        }

        // mautic_email_preview
        if (0 === strpos($pathinfo, '/email/preview') && preg_match('#^/email/preview(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_email_preview', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_preview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction',  'objectId' => 0,));
        }

        if (0 === strpos($pathinfo, '/form')) {
            // mautic_form_postresults
            if ($pathinfo === '/form/submit') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_postresults', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::submitAction',  '_route' => 'mautic_form_postresults',);
            }

            // mautic_form_generateform
            if ($pathinfo === '/form/generate.js') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_generateform', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::generateAction',  '_route' => 'mautic_form_generateform',);
            }

            // mautic_form_postmessage
            if ($pathinfo === '/form/message') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_postmessage', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::messageAction',  '_route' => 'mautic_form_postmessage',);
            }

            // mautic_form_preview
            if (preg_match('#^/form(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_preview', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_preview')), array (  'id' => '0',  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::previewAction',));
            }

            // mautic_form_embed
            if (0 === strpos($pathinfo, '/form/embed') && preg_match('#^/form/embed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_embed', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_embed')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::embedAction',));
            }

            // mautic_form_postresults_ajax
            if ($pathinfo === '/form/submit/ajax') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_form_postresults_ajax', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\AjaxController::submitAction',  '_route' => 'mautic_form_postresults_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // mautic_installer_home
            if ($pathinfo === '/installer') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_installer_home', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',  '_route' => 'mautic_installer_home',);
            }

            // mautic_installer_remove_slash
            if (rtrim($pathinfo, '/') === '/installer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mautic_installer_remove_slash');
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_installer_remove_slash', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',  '_route' => 'mautic_installer_remove_slash',);
            }

            // mautic_installer_step
            if (0 === strpos($pathinfo, '/installer/step') && preg_match('#^/installer/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_installer_step', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_step')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

            // mautic_installer_final
            if ($pathinfo === '/installer/final') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_installer_final', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::finalAction',  '_route' => 'mautic_installer_final',);
            }

            // mautic_installer_catchcall
            if (preg_match('#^/installer/(?P<noerror>(?).+)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_installer_catchcall', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_catchcall')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // mautic_receive_notification
            if ($pathinfo === '/notification/receive') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_receive_notification', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::receiveAction',  '_route' => 'mautic_receive_notification',);
            }

            // mautic_subscribe_notification
            if ($pathinfo === '/notification/subscribe') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_subscribe_notification', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::subscribeAction',  '_route' => 'mautic_subscribe_notification',);
            }

            // mautic_notification_popup
            if ($pathinfo === '/notification') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_notification_popup', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\PopupController::indexAction',  '_route' => 'mautic_notification_popup',);
            }

        }

        if (0 === strpos($pathinfo, '/OneSignalSDK')) {
            // mautic_onesignal_worker
            if ($pathinfo === '/OneSignalSDKWorker.js') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_onesignal_worker', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::workerAction',  '_route' => 'mautic_onesignal_worker',);
            }

            // mautic_onesignal_updater
            if ($pathinfo === '/OneSignalSDKUpdaterWorker.js') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_onesignal_updater', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::updaterAction',  '_route' => 'mautic_onesignal_updater',);
            }

        }

        // mautic_onesignal_manifest
        if ($pathinfo === '/manifest.json') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_onesignal_manifest', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::manifestAction',  '_route' => 'mautic_onesignal_manifest',);
        }

        // mautic_app_notification
        if ($pathinfo === '/notification/appcallback') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_app_notification', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\AppCallbackController::indexAction',  '_route' => 'mautic_app_notification',);
        }

        if (0 === strpos($pathinfo, '/mt')) {
            // mautic_page_tracker
            if ($pathinfo === '/mtracking.gif') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_page_tracker', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingImageAction',  '_route' => 'mautic_page_tracker',);
            }

            if (0 === strpos($pathinfo, '/mtc')) {
                // mautic_page_tracker_cors
                if ($pathinfo === '/mtc/event') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_page_tracker_cors', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingAction',  '_route' => 'mautic_page_tracker_cors',);
                }

                // mautic_page_tracker_getcontact
                if ($pathinfo === '/mtc') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_page_tracker_getcontact', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::getContactIdAction',  '_route' => 'mautic_page_tracker_getcontact',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // mautic_url_redirect
            if (preg_match('#^/r/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_url_redirect', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_url_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

            // mautic_page_redirect
            if (0 === strpos($pathinfo, '/redirect') && preg_match('#^/redirect/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_page_redirect', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

        }

        // mautic_page_preview
        if (0 === strpos($pathinfo, '/page/preview') && preg_match('#^/page/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_page_preview', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_preview')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::previewAction',));
        }

        // mautic_gated_video_hit
        if ($pathinfo === '/video/hit') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_gated_video_hit', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::hitVideoAction',  '_route' => 'mautic_gated_video_hit',);
        }

        if (0 === strpos($pathinfo, '/plugins/integrations/auth')) {
            // mautic_integration_auth_user
            if (0 === strpos($pathinfo, '/plugins/integrations/authuser') && preg_match('#^/plugins/integrations/authuser/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration_auth_user', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_user')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authUserAction',));
            }

            // mautic_integration_auth_callback
            if (0 === strpos($pathinfo, '/plugins/integrations/authcallback') && preg_match('#^/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration_auth_callback', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
            }

            // mautic_integration_auth_postauth
            if (0 === strpos($pathinfo, '/plugins/integrations/authstatus') && preg_match('#^/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration_auth_postauth', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
            }

        }

        // mautic_receive_sms
        if ($pathinfo === '/sms/receive') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_receive_sms', key($requiredSchemes));
            }

            return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::receiveAction',  '_route' => 'mautic_receive_sms',);
        }

        if (0 === strpos($pathinfo, '/passwordreset')) {
            // mautic_user_passwordreset
            if ($pathinfo === '/passwordreset') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_user_passwordreset', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetAction',  '_route' => 'mautic_user_passwordreset',);
            }

            // mautic_user_passwordresetconfirm
            if ($pathinfo === '/passwordresetconfirm') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_user_passwordresetconfirm', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetConfirmAction',  '_route' => 'mautic_user_passwordresetconfirm',);
            }

        }

        if (0 === strpos($pathinfo, '/saml')) {
            // lightsaml_sp.metadata
            if ($pathinfo === '/saml/metadata.xml') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'lightsaml_sp.metadata', key($requiredSchemes));
                }

                return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::metadataAction',  '_route' => 'lightsaml_sp.metadata',);
            }

            // lightsaml_sp.discovery
            if ($pathinfo === '/saml/discovery') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'lightsaml_sp.discovery', key($requiredSchemes));
                }

                return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::discoveryAction',  '_route' => 'lightsaml_sp.discovery',);
            }

        }

        if (0 === strpos($pathinfo, '/focus')) {
            // mautic_focus_generate
            if (preg_match('#^/focus/(?P<id>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_focus_generate', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_generate')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::generateAction',));
            }

            // mautic_focus_pixel
            if (preg_match('#^/focus/(?P<id>[^/]++)/viewpixel\\.gif$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_focus_pixel', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_pixel')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\PublicController::viewPixelAction',));
            }

        }

        // mautic_plugin_clearbit_index
        if ($pathinfo === '/clearbit/callback') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_plugin_clearbit_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\PublicController::callbackAction',  '_route' => 'mautic_plugin_clearbit_index',);
        }

        // mautic_plugin_fullcontact_index
        if ($pathinfo === '/fullcontact/callback') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_plugin_fullcontact_index', key($requiredSchemes));
            }

            return array (  '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\PublicController::callbackAction',  '_route' => 'mautic_plugin_fullcontact_index',);
        }

        if (0 === strpos($pathinfo, '/citrix')) {
            // mautic_citrix_proxy
            if ($pathinfo === '/citrix/proxy') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_citrix_proxy', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::proxyAction',  '_route' => 'mautic_citrix_proxy',);
            }

            // mautic_citrix_sessionchanged
            if ($pathinfo === '/citrix/sessionChanged') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_citrix_sessionchanged', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCitrixBundle\\Controller\\PublicController::sessionChangedAction',  '_route' => 'mautic_citrix_sessionchanged',);
            }

        }

        if (0 === strpos($pathinfo, '/plugin')) {
            // mautic_integration_contacts
            if (preg_match('#^/plugin/(?P<integration>.+)/contact_data$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration_contacts', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_contacts')), array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::contactDataAction',));
            }

            // mautic_integration_companies
            if (preg_match('#^/plugin/(?P<integration>.+)/company_data$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration_companies', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_companies')), array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PublicController::companyDataAction',));
            }

            // mautic_integration.pipedrive.webhook
            if ($pathinfo === '/plugin/pipedrive/webhook') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mautic_integrationpipedrivewebhook;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_integration.pipedrive.webhook', key($requiredSchemes));
                }

                return array (  '_controller' => 'MauticPlugin\\MauticCrmBundle\\Controller\\PipedriveController::webhookAction',  '_route' => 'mautic_integration.pipedrive.webhook',);
            }
            not_mautic_integrationpipedrivewebhook:

        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_core_ajax
            if ($pathinfo === '/s/ajax') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_core_ajax', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\AjaxController::delegateAjaxAction',  '_route' => 'mautic_core_ajax',);
            }

            if (0 === strpos($pathinfo, '/s/update')) {
                // mautic_core_update
                if ($pathinfo === '/s/update') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_core_update', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::indexAction',  '_route' => 'mautic_core_update',);
                }

                // mautic_core_update_schema
                if ($pathinfo === '/s/update/schema') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_core_update_schema', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::schemaAction',  '_route' => 'mautic_core_update_schema',);
                }

            }

            // mautic_core_form_action
            if (0 === strpos($pathinfo, '/s/action') && preg_match('#^/s/action/(?P<objectAction>[^/]++)(?:/(?P<objectModel>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?)?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_core_form_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_form_action')), array (  'objectModel' => '',  '_controller' => 'Mautic\\CoreBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
            }

            // mautic_core_file_action
            if (0 === strpos($pathinfo, '/s/file') && preg_match('#^/s/file/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_core_file_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_file_action')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\FileController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/themes')) {
                // mautic_themes_index
                if ($pathinfo === '/s/themes') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_themes_index', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::indexAction',  '_route' => 'mautic_themes_index',);
                }

                // mautic_themes_action
                if (preg_match('#^/s/themes/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_themes_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_themes_action')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\ThemeController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/credentials')) {
                // mautic_client_index
                if (preg_match('#^/s/credentials(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_client_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_index')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::indexAction',  'page' => 0,));
                }

                // mautic_client_action
                if (preg_match('#^/s/credentials/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_client_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_action')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/assets')) {
                // mautic_asset_index
                if (preg_match('#^/s/assets(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_asset_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_index')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::indexAction',  'page' => 0,));
                }

                // mautic_asset_remote
                if ($pathinfo === '/s/assets/remote') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_asset_remote', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::remoteAction',  '_route' => 'mautic_asset_remote',);
                }

                // mautic_asset_action
                if (preg_match('#^/s/assets/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_asset_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_action')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/ca')) {
                if (0 === strpos($pathinfo, '/s/calendar')) {
                    // mautic_calendar_index
                    if ($pathinfo === '/s/calendar') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_calendar_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_calendar_index',);
                    }

                    // mautic_calendar_action
                    if (preg_match('#^/s/calendar/(?P<objectAction>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_calendar_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_calendar_action')), array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::executeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/campaign')) {
                    if (0 === strpos($pathinfo, '/s/campaigns')) {
                        // mautic_campaignevent_action
                        if (0 === strpos($pathinfo, '/s/campaigns/events') && preg_match('#^/s/campaigns/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_campaignevent_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignevent_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\EventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaignsource_action
                        if (0 === strpos($pathinfo, '/s/campaigns/sources') && preg_match('#^/s/campaigns/sources/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_campaignsource_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignsource_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\SourceController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_index
                        if (preg_match('#^/s/campaigns(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_campaign_index', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_index')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::indexAction',  'page' => 0,));
                        }

                        // mautic_campaign_action
                        if (preg_match('#^/s/campaigns/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_campaign_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_contacts
                        if (0 === strpos($pathinfo, '/s/campaigns/view') && preg_match('#^/s/campaigns/view/(?P<objectId>[a-zA-Z0-9_]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_campaign_contacts', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_contacts')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::contactsAction',  'page' => 0,  'objectId' => 0,));
                        }

                    }

                    // mautic_campaign_preview
                    if (0 === strpos($pathinfo, '/s/campaign/preview') && preg_match('#^/s/campaign/preview(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_campaign_preview', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_preview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/categories')) {
                    // mautic_category_index
                    if (preg_match('#^/s/categories(?:/(?P<bundle>[^/]++)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_category_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_index')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::indexAction',  'page' => 0,));
                    }

                    // mautic_category_action
                    if (preg_match('#^/s/categories/(?P<bundle>[^/]++)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_category_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_action')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::executeCategoryAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/messages')) {
                // mautic_message_index
                if (preg_match('#^/s/messages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_message_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_index')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::indexAction',  'page' => 0,));
                }

                // mautic_message_contacts
                if (0 === strpos($pathinfo, '/s/messages/contacts') && preg_match('#^/s/messages/contacts/(?P<objectId>[a-zA-Z0-9_]+)/(?P<channel>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_message_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_contacts')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

                // mautic_message_action
                if (preg_match('#^/s/messages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_message_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_message_action')), array (  '_controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_config_action
            if (0 === strpos($pathinfo, '/s/config') && preg_match('#^/s/config/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_config_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_config_action')), array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction',  'objectId' => 0,));
            }

            // mautic_sysinfo_index
            if ($pathinfo === '/s/sysinfo') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_sysinfo_index', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction',  '_route' => 'mautic_sysinfo_index',);
            }

            if (0 === strpos($pathinfo, '/s/d')) {
                if (0 === strpos($pathinfo, '/s/dashboard')) {
                    // mautic_dashboard_index
                    if ($pathinfo === '/s/dashboard') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_dashboard_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction',  '_route' => 'mautic_dashboard_index',);
                    }

                    // mautic_dashboard_action
                    if (preg_match('#^/s/dashboard/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_dashboard_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dashboard_action')), array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/dwc')) {
                    // mautic_dynamicContent_index
                    if (preg_match('#^/s/dwc(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_dynamicContent_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_index')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::indexAction',  'page' => 0,));
                    }

                    // mautic_dynamicContent_action
                    if (preg_match('#^/s/dwc/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_dynamicContent_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/emails')) {
                // mautic_email_index
                if (preg_match('#^/s/emails(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_email_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_index')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::indexAction',  'page' => 0,));
                }

                // mautic_email_action
                if (preg_match('#^/s/emails/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_email_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_action')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::executeAction',  'objectId' => 0,));
                }

                // mautic_email_contacts
                if (0 === strpos($pathinfo, '/s/emails/contacts') && preg_match('#^/s/emails/contacts(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_email_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_contacts')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::contactsAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/forms')) {
                // mautic_formaction_action
                if (0 === strpos($pathinfo, '/s/forms/action') && preg_match('#^/s/forms/action/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_formaction_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formaction_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ActionController::executeAction',  'objectId' => 0,));
                }

                // mautic_formfield_action
                if (0 === strpos($pathinfo, '/s/forms/field') && preg_match('#^/s/forms/field/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_formfield_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formfield_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                }

                // mautic_form_index
                if (preg_match('#^/s/forms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_form_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_index')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/forms/results')) {
                    // mautic_form_results
                    if (preg_match('#^/s/forms/results(?:/(?P<objectId>[a-zA-Z0-9_]+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_form_results', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::indexAction',  'page' => 0,  'objectId' => 0,));
                    }

                    // mautic_form_file_download
                    if (0 === strpos($pathinfo, '/s/forms/results/file') && preg_match('#^/s/forms/results/file/(?P<submissionId>[^/]++)/(?P<field>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_form_file_download', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_file_download')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::downloadFileAction',));
                    }

                    // mautic_form_export
                    if (preg_match('#^/s/forms/results/(?P<objectId>[a-zA-Z0-9_]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_form_export', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_form_results_action
                    if (preg_match('#^/s/forms/results/(?P<formId>[^/]++)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_form_results_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results_action')), array (  'objectId' => 0,  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::executeAction',));
                    }

                }

                // mautic_form_action
                if (preg_match('#^/s/forms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_form_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/plugin')) {
                // mautic_plugin_timeline_index
                if (preg_match('#^/s/plugin/(?P<integration>.+)/timeline(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_plugin_timeline_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_timeline_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginIndexAction',  'page' => 0,));
                }

                // mautic_plugin_timeline_view
                if (preg_match('#^/s/plugin/(?P<integration>.+)/timeline/view/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_plugin_timeline_view', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_timeline_view')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::pluginViewAction',  'page' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/segments')) {
                // mautic_segment_index
                if (preg_match('#^/s/segments(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_segment_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::indexAction',  'page' => 0,));
                }

                // mautic_segment_action
                if (preg_match('#^/s/segments/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_segment_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/contacts')) {
                if (0 === strpos($pathinfo, '/s/contacts/fields')) {
                    // mautic_contactfield_index
                    if (preg_match('#^/s/contacts/fields(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contactfield_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::indexAction',  'page' => 0,));
                    }

                    // mautic_contactfield_action
                    if (preg_match('#^/s/contacts/fields/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contactfield_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                    }

                }

                // mautic_contact_index
                if (preg_match('#^/s/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_contact_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/contacts/notes')) {
                    // mautic_contactnote_index
                    if (preg_match('#^/s/contacts/notes(?:/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contactnote_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_index')), array (  'leadId' => 0,  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::indexAction',  'page' => 0,));
                    }

                    // mautic_contactnote_action
                    if (preg_match('#^/s/contacts/notes/(?P<leadId>\\d+)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contactnote_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::executeNoteAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/contacts/timeline')) {
                    // mautic_contacttimeline_action
                    if (preg_match('#^/s/contacts/timeline/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contacttimeline_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contacttimeline_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::indexAction',  'page' => 0,));
                    }

                    // mautic_contact_timeline_export_action
                    if (0 === strpos($pathinfo, '/s/contacts/timeline/batchExport') && preg_match('#^/s/contacts/timeline/batchExport/(?P<leadId>\\d+)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contact_timeline_export_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_timeline_export_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\TimelineController::batchExportAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/contacts/auditlog')) {
                    // mautic_contact_auditlog_action
                    if (preg_match('#^/s/contacts/auditlog/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contact_auditlog_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_auditlog_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::indexAction',  'page' => 0,));
                    }

                    // mautic_contact_auditlog_export_action
                    if (0 === strpos($pathinfo, '/s/contacts/auditlog/batchExport') && preg_match('#^/s/contacts/auditlog/batchExport/(?P<leadId>\\d+)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_contact_auditlog_export_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_auditlog_export_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\AuditlogController::batchExportAction',));
                    }

                }

            }

            // mautic_contact_import_index
            if (preg_match('#^/s/(?P<object>[^/]++)/import(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_contact_import_index', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_import_index')), array (  'object' => 'contacts',  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::indexAction',  'page' => 0,));
            }

            // mautic_contact_import_action
            if (preg_match('#^/s/(?P<object>[^/]++)/import/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_contact_import_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_import_action')), array (  'object' => 'contacts',  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::executeAction',  'objectId' => 0,));
            }

            // mautic_import_index
            if (preg_match('#^/s/(?P<object>[^/]++)/import(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_import_index', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_import_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::indexAction',  'page' => 0,));
            }

            // mautic_import_action
            if (preg_match('#^/s/(?P<object>[^/]++)/import/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_import_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_import_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ImportController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/co')) {
                // mautic_contact_action
                if (0 === strpos($pathinfo, '/s/contacts') && preg_match('#^/s/contacts/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_contact_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::executeAction',  'objectId' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/companies')) {
                    // mautic_company_index
                    if (preg_match('#^/s/companies(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_company_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_company_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::indexAction',  'page' => 0,));
                    }

                    // mautic_company_action
                    if (preg_match('#^/s/companies/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_company_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_company_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\CompanyController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/notifications')) {
                // mautic_notification_index
                if (preg_match('#^/s/notifications(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_notification_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_index')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::indexAction',  'page' => 0,));
                }

                // mautic_notification_action
                if (preg_match('#^/s/notifications/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_notification_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_action')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::executeAction',  'objectId' => 0,));
                }

                // mautic_notification_contacts
                if (0 === strpos($pathinfo, '/s/notifications/view') && preg_match('#^/s/notifications/view/(?P<objectId>[a-zA-Z0-9_]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_notification_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_contacts')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/mobile_notifications')) {
                // mautic_mobile_notification_index
                if (preg_match('#^/s/mobile_notifications(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_mobile_notification_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_index')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::indexAction',  'page' => 0,));
                }

                // mautic_mobile_notification_action
                if (preg_match('#^/s/mobile_notifications/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_mobile_notification_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_action')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::executeAction',  'objectId' => 0,));
                }

                // mautic_mobile_notification_contacts
                if (0 === strpos($pathinfo, '/s/mobile_notifications/view') && preg_match('#^/s/mobile_notifications/view/(?P<objectId>[a-zA-Z0-9_]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_mobile_notification_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mobile_notification_contacts')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/p')) {
                if (0 === strpos($pathinfo, '/s/pages')) {
                    // mautic_page_index
                    if (preg_match('#^/s/pages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_page_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_index')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::indexAction',  'page' => 0,));
                    }

                    // mautic_page_action
                    if (preg_match('#^/s/pages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_page_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_action')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/plugins')) {
                    if (0 === strpos($pathinfo, '/s/plugins/integrations/auth')) {
                        // mautic_integration_auth_callback_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authcallback') && preg_match('#^/s/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_integration_auth_callback_secure', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
                        }

                        // mautic_integration_auth_postauth_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authstatus') && preg_match('#^/s/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_integration_auth_postauth_secure', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
                        }

                    }

                    // mautic_plugin_index
                    if ($pathinfo === '/s/plugins') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_plugin_index', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::indexAction',  '_route' => 'mautic_plugin_index',);
                    }

                    // mautic_plugin_config
                    if (0 === strpos($pathinfo, '/s/plugins/config') && preg_match('#^/s/plugins/config/(?P<name>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_plugin_config', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_config')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::configAction',  'page' => 0,));
                    }

                    // mautic_plugin_info
                    if (0 === strpos($pathinfo, '/s/plugins/info') && preg_match('#^/s/plugins/info/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_plugin_info', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_info')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::infoAction',));
                    }

                    // mautic_plugin_reload
                    if ($pathinfo === '/s/plugins/reload') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_plugin_reload', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::reloadAction',  '_route' => 'mautic_plugin_reload',);
                    }

                }

                if (0 === strpos($pathinfo, '/s/points')) {
                    if (0 === strpos($pathinfo, '/s/points/triggers')) {
                        // mautic_pointtriggerevent_action
                        if (0 === strpos($pathinfo, '/s/points/triggers/events') && preg_match('#^/s/points/triggers/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_pointtriggerevent_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtriggerevent_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerEventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_pointtrigger_index
                        if (preg_match('#^/s/points/triggers(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_pointtrigger_index', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::indexAction',  'page' => 0,));
                        }

                        // mautic_pointtrigger_action
                        if (preg_match('#^/s/points/triggers/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                                return $this->redirect($pathinfo, 'mautic_pointtrigger_action', key($requiredSchemes));
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::executeAction',  'objectId' => 0,));
                        }

                    }

                    // mautic_point_index
                    if (preg_match('#^/s/points(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_point_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::indexAction',  'page' => 0,));
                    }

                    // mautic_point_action
                    if (preg_match('#^/s/points/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_point_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/reports')) {
                // mautic_report_index
                if (preg_match('#^/s/reports(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_report_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_index')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::indexAction',  'page' => 0,));
                }

                if (0 === strpos($pathinfo, '/s/reports/view')) {
                    // mautic_report_export
                    if (preg_match('#^/s/reports/view/(?P<objectId>[a-zA-Z0-9_]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_report_export', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_report_view
                    if (preg_match('#^/s/reports/view(?:/(?P<objectId>[a-zA-Z0-9_]+)(?:/(?P<reportPage>\\d+))?)?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_report_view', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_view')), array (  'reportPage' => 1,  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::viewAction',  'objectId' => 0,));
                    }

                }

                // mautic_report_action
                if (preg_match('#^/s/reports/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_report_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_action')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/s')) {
                if (0 === strpos($pathinfo, '/s/sms')) {
                    // mautic_sms_index
                    if (preg_match('#^/s/sms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_sms_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_index')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::indexAction',  'page' => 0,));
                    }

                    // mautic_sms_action
                    if (preg_match('#^/s/sms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_sms_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_action')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::executeAction',  'objectId' => 0,));
                    }

                    // mautic_sms_contacts
                    if (0 === strpos($pathinfo, '/s/sms/view') && preg_match('#^/s/sms/view/(?P<objectId>[a-zA-Z0-9_]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_sms_contacts', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_contacts')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::contactsAction',  'page' => 0,  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/stages')) {
                    // mautic_stage_index
                    if (preg_match('#^/s/stages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_stage_index', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_index')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction',  'page' => 0,));
                    }

                    // mautic_stage_action
                    if (preg_match('#^/s/stages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_stage_action', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_action')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/log')) {
                if (0 === strpos($pathinfo, '/s/login')) {
                    // login
                    if ($pathinfo === '/s/login') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'login', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                    }

                    // mautic_user_logincheck
                    if ($pathinfo === '/s/login_check') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_user_logincheck', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'mautic_user_logincheck',);
                    }

                }

                // mautic_user_logout
                if ($pathinfo === '/s/logout') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_user_logout', key($requiredSchemes));
                    }

                    return array('_route' => 'mautic_user_logout');
                }

            }

            if (0 === strpos($pathinfo, '/s/s')) {
                if (0 === strpos($pathinfo, '/s/sso_login')) {
                    // mautic_sso_login
                    if (preg_match('#^/s/sso_login/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_sso_login', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginAction',));
                    }

                    // mautic_sso_login_check
                    if (0 === strpos($pathinfo, '/s/sso_login_check') && preg_match('#^/s/sso_login_check/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'mautic_sso_login_check', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login_check')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginCheckAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/s/saml/login')) {
                    // lightsaml_sp.login
                    if ($pathinfo === '/s/saml/login') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'lightsaml_sp.login', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'LightSaml\\SpBundle\\Controller\\DefaultController::loginAction',  '_route' => 'lightsaml_sp.login',);
                    }

                    // lightsaml_sp.login_check
                    if ($pathinfo === '/s/saml/login_check') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, 'lightsaml_sp.login_check', key($requiredSchemes));
                        }

                        return array('_route' => 'lightsaml_sp.login_check');
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/users')) {
                // mautic_user_index
                if (preg_match('#^/s/users(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_user_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::indexAction',  'page' => 0,));
                }

                // mautic_user_action
                if (preg_match('#^/s/users/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_user_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/roles')) {
                // mautic_role_index
                if (preg_match('#^/s/roles(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_role_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::indexAction',  'page' => 0,));
                }

                // mautic_role_action
                if (preg_match('#^/s/roles/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_role_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_user_account
            if ($pathinfo === '/s/account') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_user_account', key($requiredSchemes));
                }

                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'mautic_user_account',);
            }

            if (0 === strpos($pathinfo, '/s/webhooks')) {
                // mautic_webhook_index
                if (preg_match('#^/s/webhooks(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_webhook_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_index')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::indexAction',  'page' => 0,));
                }

                // mautic_webhook_action
                if (preg_match('#^/s/webhooks/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_webhook_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_action')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/focus')) {
                // mautic_focus_index
                if (preg_match('#^/s/focus(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_focus_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_index')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::indexAction',  'page' => 0,));
                }

                // mautic_focus_action
                if (preg_match('#^/s/focus/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_focus_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_focus_action')), array (  '_controller' => 'MauticPlugin\\MauticFocusBundle\\Controller\\FocusController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/monitoring')) {
                // mautic_social_index
                if (preg_match('#^/s/monitoring(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_social_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_index')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::indexAction',  'page' => 0,));
                }

                // mautic_social_action
                if (preg_match('#^/s/monitoring/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_social_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_action')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::executeAction',  'objectId' => 0,));
                }

                // mautic_social_contacts
                if (0 === strpos($pathinfo, '/s/monitoring/view') && preg_match('#^/s/monitoring/view/(?P<objectId>[a-zA-Z0-9_]+)/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_social_contacts', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_contacts')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::contactsAction',  'page' => 0,  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/tweets')) {
                // mautic_tweet_index
                if (preg_match('#^/s/tweets(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_tweet_index', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_tweet_index')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::indexAction',  'page' => 0,));
                }

                // mautic_tweet_action
                if (preg_match('#^/s/tweets/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, 'mautic_tweet_action', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_tweet_action')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\TweetController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_plugin_clearbit_action
            if (0 === strpos($pathinfo, '/s/clearbit') && preg_match('#^/s/clearbit/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_plugin_clearbit_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_clearbit_action')), array (  '_controller' => 'MauticPlugin\\MauticClearbitBundle\\Controller\\ClearbitController::executeAction',  'objectId' => 0,));
            }

            // mautic_plugin_fullcontact_action
            if (0 === strpos($pathinfo, '/s/fullcontact') && preg_match('#^/s/fullcontact/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, 'mautic_plugin_fullcontact_action', key($requiredSchemes));
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_fullcontact_action')), array (  '_controller' => 'MauticPlugin\\MauticFullContactBundle\\Controller\\FullContactController::executeAction',  'objectId' => 0,));
            }

            // _uploader_upload_asset
            if ($pathinfo === '/s/_uploader/asset/upload') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_asset;
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, '_uploader_upload_asset', key($requiredSchemes));
                }

                return array (  '_controller' => 'oneup_uploader.controller.mautic:upload',  '_format' => 'json',  '_route' => '_uploader_upload_asset',);
            }
            not__uploader_upload_asset:

        }

        // mautic_page_public
        if (preg_match('#^/(?P<slug>(?!(_(profiler|wdt)|css|images|js|favicon.ico|apps/bundles/|plugins/)).+)$#s', $pathinfo, $matches)) {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'mautic_page_public', key($requiredSchemes));
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_public')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
