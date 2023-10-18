<?php

/**
 * @file pages/blog/GenericViewHandler.php
 *
 * Copyright (c) 2023 Jack Bortone
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class GenericViewHandler.php
 *
 * @ingroup pages_blog
 *
 * @brief Handle requests for journal about functions.
 */

namespace APP\pages\blog;

use APP\core\Application;
use APP\subscription\SubscriptionTypeDAO;
use APP\template\TemplateManager;
use PKP\db\DAORegistry;

class GenericViewHandler extends \PKP\pages\about\AboutContextHandler
{
    /**
     * A generic view to render posted articles in a specific database/table
     *
     * @param array $args
     * @param \APP\core\Request $request
     */
    public function subscriptions($args, $request)
    {
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $journal = $request->getJournal();

        $templateMgr->assign([
            'slogan' => 'With free neurosecurity you have freedom!'
        ]);
        $templateMgr->display('frontend/pages/blog/index.tpl');
    }
}
