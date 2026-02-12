@props(['active' => ''])

<aside
    class="fixed top-5 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full
           bg-gray-900 border-r border-gray-700 md:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <div class="mb-6 text-center text-white font-semibold text-xl">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                class="w-8 inline-block mr-2">
            Admin Dashboard
        </div>
  {{-- Dashboard --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.dashboard')"
            :active="request()->routeIs('admin.dashboard')">
            <span>Dashboard</span>
        </x-admin.sidelink>
    </li>

    {{-- Students --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.students.index')"
            :active="request()->routeIs('admin.students.*')">
            <span>Students</span>
        </x-admin.sidelink>
    </li>

    {{-- Guardians --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.guardians.index')"
            :active="request()->routeIs('admin.guardians.*')">
            <span>Guardian</span>
        </x-admin.sidelink>
    </li>

    {{-- Teachers --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.teachers.index')"
            :active="request()->routeIs('admin.teachers.*')">
            <span>Teacher</span>
        </x-admin.sidelink>
    </li>

    {{-- Classrooms --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.classrooms.index')"
            :active="request()->routeIs('admin.classrooms.*')">
            <span>Classroom</span>
        </x-admin.sidelink>
    </li>

    {{-- Subjects --}}
    <li>
        <x-admin.sidelink
            :href="route('admin.subjects.index')"
            :active="request()->routeIs('admin.subjects.*')">
            <span>Subject</span>
        </x-admin.sidelink>
    </li> 


            {{-- Teachers --}}
            {{-- <li>
                <x-admin.sidelink 
                    href="{{ route('admin.teachers.index') }}" 
                    :active="request()->routeIs('admin.teachers.*')"
                >
                   
                    <span>Teachers</span>
                </x-admin.sidelink>
            </li> --}}

            {{-- Subjects --}}
            {{-- <li>
                <x-admin.sidelink 
                    href="{{ route('admin.subjects.index') }}" 
                    :active="request()->routeIs('admin.subjects.*')"
                >
                  
                    <span>Subjects</span>
                </x-admin.sidelink>
            </li> --}}
        </ul>
    </div>
</aside>
