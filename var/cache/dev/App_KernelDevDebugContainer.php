<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCa2PiQT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCa2PiQT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCa2PiQT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCa2PiQT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCa2PiQT\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ca2PiQT',
    'container.build_id' => '916f53c3',
    'container.build_time' => 1708096843,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCa2PiQT');
