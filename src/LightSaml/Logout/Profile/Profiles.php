<?php

/*
 * This file is part of the LightSAML-Logout package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the GPL-3 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\Logout\Profile;

class Profiles
{
    const SLO_SEND_LOGOUT_REQUEST = 'slo_send_logout_request';
    const SLO_SEND_LOGOUT_RESPONSE = 'slo_send_logout_response';
    const SLO_RECEIVE_LOGOUT_RESPONSE = 'slo_receive_logout_response';

    private function __construct()
    {
    }
}
