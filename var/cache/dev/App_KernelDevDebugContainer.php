<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNxeMTcH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNxeMTcH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNxeMTcH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNxeMTcH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNxeMTcH\App_KernelDevDebugContainer([
    'container.build_hash' => 'NxeMTcH',
    'container.build_id' => 'f5697685',
    'container.build_time' => 1646476375,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNxeMTcH');
