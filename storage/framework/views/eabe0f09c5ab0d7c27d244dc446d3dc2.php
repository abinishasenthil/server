<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Admin Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-6 text-2xl font-semibold">System Analytics</h3>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="rounded-lg bg-blue-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-500">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Users</h4>
                                    <p class="mt-2 text-3xl font-bold text-blue-700">100</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-green-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500">
                                    <i class="fas fa-user-friends text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Customers</h4>
                                    <p class="mt-2 text-3xl font-bold text-green-700">50</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-red-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-red-500">
                                    <i class="fas fa-store text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Clothing Businesses</h4>
                                    <p class="mt-2 text-3xl font-bold text-red-700">50</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-yellow-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500">
                                    <i class="fas fa-tags text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Product Categories</h4>
                                    <p class="mt-2 text-3xl font-bold text-yellow-700">10</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-purple-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-500">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Newsletters</h4>
                                    <p class="mt-2 text-3xl font-bold text-purple-700">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-pink-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-pink-500">
                                    <i class="fas fa-bullhorn text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Promotions</h4>
                                    <p class="mt-2 text-3xl font-bold text-pink-700">2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<?php /**PATH /Users/abbenisha/Desktop/auth_lara/ssp1/FitFinder/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>