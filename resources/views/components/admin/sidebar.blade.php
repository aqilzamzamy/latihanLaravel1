<div>
  <aside
    id="drawer-navigation"
    aria-label="Sidenav"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform
    -translate-x-full bg-white border-r border-gray-200 md:translate-x-0
    dark:bg-gray-800 dark:border-gray-700"
  >
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

      <ul class="space-y-2">

        {{-- Dashboard --}}
        <li>
          {{-- URL disesuaikan: /admin/dashboard --}}
          <x-admin.side-link href="/admin/dashboard" label="Dashboard" :active="request()->is('admin/dashboard*')">
            <svg width="26px" height="26px" viewBox="-1.2 -1.2 26.40 26.40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5192 7.82274C2 8.77128 2 9.91549 2 12.2039V13.725C2 17.6258 2 19.5763 3.17157 20.7881C4.34315 22 6.22876 22 10 22H14C17.7712 22 19.6569 22 20.8284 20.7881C22 19.5763 22 17.6258 22 13.725V12.2039C22 9.91549 22 8.77128 21.4808 7.82274C20.9616 6.87421 20.0131 6.28551 18.116 5.10812L16.116 3.86687C14.1106 2.62229 13.1079 2 12 2C10.8921 2 9.88939 2.62229 7.88403 3.86687L5.88403 5.10813C3.98695 6.28551 3.0384 6.87421 2.5192 7.82274ZM9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor"></path>
              </g>
            </svg>
          </x-admin.side-link>
        </li>
        
        {{-- CLASSROOM --}}
        <li>
          <x-admin.side-link :href="route('admin.classroom.index')" label="Classroom" :active="request()->is('admin/classroom*')">
            <svg width="26px" height="26px" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M4 4h16v12H4z"></path><path d="M22 20H2"></path><path d="M8 8h8v4H8z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- SUBJECT --}}
        <li>
          <x-admin.side-link :href="route('admin.subject.index')" label="Subject" :active="request()->is('admin/subject*')">
            <svg width="26px" height="26px" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M4 4h16v16H4z"></path><path d="M8 8h8"></path><path d="M8 12h8"></path><path d="M8 16h5"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- STUDENTS --}}
        <li>
          <x-admin.side-link :href="route('admin.students.index')" label="Students" :active="request()->is('admin/students*')">
            <svg width="26px" height="26px" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="7" r="4"></circle><path d="M4 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- GUARDIAN --}}
        <li>
          <x-admin.side-link :href="route('admin.guardian.index')" label="Guardian" :active="request()->is('admin/guardian*')">
            <svg width="26px" height="26px" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="9" cy="7" r="4"></circle><circle cx="19" cy="11" r="3"></circle><path d="M2 21v-2a4 4 0 0 1 4-4h5"></path><path d="M14 21v-2a4 4 0 0 1 4-4h2"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- TEACHERS --}}
        <li>
          <x-admin.side-link :href="route('admin.teacher.index')" label="Teachers" :active="request()->is('admin/teacher*')">
            <svg width="26px" height="26px" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M12 12a5 5 0 1 0-5-5"></path><path d="M8 15h8a4 4 0 0 1 4 4v1H4v-1a4 4 0 0 1 4-4z"></path>
            </svg>
          </x-admin.side-link>
        </li>
      </ul>

      <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
        {{-- Contact --}}
        <li>
          <x-admin.side-link href="/admin/kontak" label="Contact" :active="request()->is('admin/kontak*')">
            <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 13.2929L16.0208 14.9792C15.545 15.455 14.7655 15.5268 14.2098 15.1472C12.8261 14.2014 11.7986 13.1739 10.8528 11.7902C10.4732 11.2345 10.545 10.455 11.0208 9.97918L12.7071 8.29289C13.6973 7.30272 13.7403 5.7093 12.8052 4.66813L11.5 3.18934C10.3954 1.95083 8.48815 1.79198 7.18934 2.81066L5.75 4.06066C4.51184 5.04303 3.78855 6.54393 3.86852 8.08235C4.04488 11.1723 5.37157 14.4095 8.4 17.4379C11.4284 20.4664 14.6656 21.7931 17.7555 21.9694C19.294 22.0494 20.795 21.3261 21.7774 20.0879L23.0274 18.6486C24.0461 17.3498 23.8872 15.4425 22.6487 14.3379L21.1699 13.0327C20.1288 12.0976 18.5353 12.1406 17.5452 13.1308L17.7071 13.2929Z" fill="currentColor"></path>
              </g>
            </svg>
          </x-admin.side-link>
        </li>
        {{-- Profile --}}
        <li>
          <x-admin.side-link href="/admin/profil" label="Profile" :active="request()->is('admin/profil*')">
            <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4ZM6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8ZM8.00873 16C5.23898 16 3 18.2386 3 21.0082C3 21.5567 3.44405 22 3.99262 22H20.0074C20.556 22 21 21.5567 21 21.0082C21 18.2386 18.761 16 15.9913 16H8.00873Z" fill="currentColor"></path>
              </g>
            </svg>
          </x-admin.side-link>
        </li>
      </ul>
      
      {{-- Sisa kode footer sidebar Anda --}}
      <div
        class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
      </div>
    </div>
  </aside>
</div>