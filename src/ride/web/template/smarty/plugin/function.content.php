<?php

function smarty_function_content($params, &$smarty) {
    $app = $smarty->getTemplateVars('app');
    if (!isset($app['system'])) {
        throw new Exception('No system set in the app variable');
    }

    $dependencyInjector = $app['system']->getDependencyInjector();
    $contentFacade = $dependencyInjector->get('ride\\library\\cms\\content\\ContentFacade');

    if (empty($params['type'])) {
        throw new Exception('No type provided');
    } else {
        $type = $params['type'];
    }

    if (empty($params['data'])) {
        throw new Exception('No data provided');
    } else {
        $data = $params['data'];
    }

    if (empty($params['locale'])) {
        if (!isset($app['locale'])) {
            throw new Exception('No locale set in the app variable');
        }

        $locale = $app['locale'];
    } else {
        $locale = $params['locale'];
    }

    if (empty($params['site'])) {
        if (!isset($app['cms']['site'])) {
            throw new Exception('No site set in the app cms variable');
        }

        $site = $app['cms']['site'];
    } else {
        $site = $params['site'];
    }

    $var = null;
    if (!empty($params['var'])) {
        $var = $params['var'];
        unset($params['var']);
    }

    $contentMapper = $contentFacade->getContentMapper($type);
    $content = $contentMapper->getContent($site, $locale, $data);

    if ($var == null) {
        return $content->url;
    } else {
        $smarty->assign($var, $content);
    }
}
