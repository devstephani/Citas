<aside id="logo-sidebar" x-transition x-show="desktop || open" @click.outside="open = false"
    class="fixed top-16 left-0 z-40 w-full sm:w-64 h-screen transition-transform transform-none border-r border-neutral-300"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('dashboard'),
                ])>

                    <x-lucide-house class="size-5 " />
                    <span class="ms-3 ">Inicio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('appointments') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('appointments'),
                ])>

                    <x-lucide-calendar class="size-5 " />
                    <span class="ms-3 ">Citas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('services') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('services'),
                ])>

                    <x-lucide-bookmark class="size-5 " />
                    <span class="ms-3 ">Servicios</span>
                </a>
            </li>
            <li>
                <a href="{{ route('packages') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('packages'),
                ])>

                    <x-lucide-shopping-basket class="size-5 " />
                    <span class="ms-3 ">Paquetes</span>
                </a>
            </li>
            @role('admin')
                <li>
                    <a href="{{ route('employees') }}" @class([
                        'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                        'bg-neutral-200' => Route::is('employees'),
                    ])>

                        <x-lucide-user class="size-5 " />
                        <span class="ms-3 ">Empleados</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clients') }}" @class([
                        'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                        'bg-neutral-200' => Route::is('clients'),
                    ])>

                        <x-lucide-users class="size-5 " />
                        <span class="ms-3 ">Clientes</span>
                    </a>
                </li>
            @endrole
            <li>
                <a href="{{ route('posts') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('posts'),
                ])>

                    <x-lucide-message-square class="size-5 " />
                    <span class="ms-3 ">Blog</span>
                </a>
            </li>
            <li>
                <a href="{{ route('virtual') }}" @class([
                    'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                    'bg-neutral-200' => Route::is('virtual'),
                ])>

                    <x-lucide-image class="size-5 " />
                    <span class="ms-3 ">Probador virtual</span>
                </a>
            </li>
            @role('admin')
                <li>
                    <a href="{{ route('trash') }}" @class([
                        'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                        'bg-neutral-200' => Route::is('trash'),
                    ])>

                        <x-lucide-trash class="size-5 " />
                        <span class="ms-3 ">Papelera</span>
                    </a>
                </li>
            @endrole
            @role('admin')
                <li>
                    <a href="{{ route('binnacle') }}" @class([
                        'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                        'bg-neutral-200' => Route::is('binnacle'),
                    ])>

                        <x-lucide-file-clock class="size-5 " />
                        <span class="ms-3 ">Bitácora</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backup') }}" @class([
                        'flex items-center p-2 rounded-lg hover:bg-neutral-200',
                        'bg-neutral-200' => Route::is('backup'),
                    ])>

                        <x-lucide-database-backup class="size-5 " />
                        <span class="ms-3 ">Respaldos</span>
                    </a>
                </li>
            @endrole
        </ul>
    </div>
</aside>
