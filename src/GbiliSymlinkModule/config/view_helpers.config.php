<?php
namespace GbiliSymlinkModule;
return array(
    'factories' => array(
        'resolveSymlink' => function ($vhm) {
            $sm = $vhm->getServiceLocator();
            $config = $sm->get('Config');
            if (!isset($config['gbili_symlink_module'])) {
                $config['gbili_symlink_module'] = array();
            }
            $vh = new View\Helper\Symlink;
            $vh->setSymlinks($config['gbili_symlink_module']);
            return $vh;
        },
    ),
);
