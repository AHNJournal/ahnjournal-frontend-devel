<?php

/**
 * @file pages/blog/GenericViewHandler.php
 *
 * Copyright (c) 2023 Jack Bortone <smart@open-neurosecurity.org>
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class GenericViewHandler.php
 *
 * @ingroup pages_blog
 *
 * @brief Handle requests for blog publishing functions. Renders dynamically html content from the wp_posts table using default table-level permissions. Internally uses mysqlnd or pkp library to perform the SQL query and fetch articles.
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
	// subscriptions->wp_article_set
    public function wp_article_set($args, $request, $tableName = "wp_posts")
	{
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $journal = $request->getJournal();

        $templateMgr->assign([
            'articles' => array()
        ]);
        $templateMgr->display('frontend/pages/blog/index.tpl');
    }
}
