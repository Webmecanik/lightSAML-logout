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
use LightSaml\Context\Profile\Helper\MessageContextHelper;
use LightSaml\Context\Profile\ProfileContext;
use LightSaml\Model\Protocol\StatusCode;
use LightSaml\Model\Protocol\Status;
use LightSaml\SamlConstants;

/**
 * Sets InResponseTo of the outbounding AuthnRequest with ID from inbound message.
 */
class SetInResponseToAction extends AbstractProfileAction
{
    /**
     * @param ProfileContext $context
     */
    protected function doExecute(ProfileContext $context)
    {
        $logoutResponse = MessageContextHelper::asLogoutResponse($context->getOutboundContext());
        $logoutResponse->setInResponseTo($context->getInboundMessage()->getID());
    }
}
