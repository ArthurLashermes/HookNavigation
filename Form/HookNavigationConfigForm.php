<?php

/*
 * This file is part of the Thelia package.
 * http://www.thelia.net
 *
 * (c) OpenStudio <info@thelia.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HookNavigation\Form;

use HookNavigation\HookNavigation;
use Symfony\Component\Validator\Constraints\NotBlank;
use Thelia\Form\BaseForm;

/**
 * Class HookNavigationConfigForm.
 *
 * @author Etienne PERRIERE <eperriere@openstudio.fr> - OpenStudio
 */
class HookNavigationConfigForm extends BaseForm
{
    public static function getName()
    {
        return 'hooknavigation_configuration';
    }

    protected function buildForm()
    {
        $this->formBuilder
            ->add(
                'footer_body_folder_id',
                'number',
                [
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'label' => $this->translator->trans('Folder in footer body', [], HookNavigation::MESSAGE_DOMAIN),
                ]
            )
            ->add(
                'footer_bottom_folder_id',
                'number',
                [
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'label' => $this->translator->trans('Folder in footer bottom', [], HookNavigation::MESSAGE_DOMAIN),
                ]
            );
    }
}
