<?php

/*
 * This file is part of the LightSAML-Logout package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the GPL-3 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\Logout\Action\Profile\Outbound\LogoutResponse;

use LightSaml\Action\Profile\AbstractProfileAction;
use LightSaml\Context\Profile\ProfileContext;
use LightSaml\Model\Protocol\LogoutResponse;

class CreateLogoutResponseAction extends AbstractProfileAction
{
    protected function doExecute(ProfileContext $context)
    {
        $logoutResponse = new LogoutResponse();
        $context->getOutboundContext()->setMessage($logoutResponse);
    }
}
