<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1NV1L7G\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1NV1L7G/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1NV1L7G.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1NV1L7G\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1NV1L7G\App_KernelDevDebugContainer([
    'container.build_hash' => '1NV1L7G',
    'container.build_id' => '7bdb5a82',
    'container.build_time' => 1708011917,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1NV1L7G');
