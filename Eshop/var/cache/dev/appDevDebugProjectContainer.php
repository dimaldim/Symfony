<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYzbwogb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYzbwogb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYzbwogb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYzbwogb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYzbwogb\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Yzbwogb',
    'container.build_id' => 'c8ac3e20',
    'container.build_time' => 1544096701,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYzbwogb');