<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNbGDcP6\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNbGDcP6/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerNbGDcP6.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerNbGDcP6\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerNbGDcP6\App_KernelTestDebugContainer([
    'container.build_hash' => 'NbGDcP6',
    'container.build_id' => 'c7b83428',
    'container.build_time' => 1609189760,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNbGDcP6');
