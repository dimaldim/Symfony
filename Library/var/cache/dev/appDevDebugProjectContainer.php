<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDmvfwe2\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDmvfwe2/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDmvfwe2.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDmvfwe2\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDmvfwe2\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dmvfwe2',
    'container.build_id' => '474923cf',
    'container.build_time' => 1543654096,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDmvfwe2');