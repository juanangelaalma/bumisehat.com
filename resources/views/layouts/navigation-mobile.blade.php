<div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
></div>
<aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.outside="closeSideMenu"
        @keydown.escape="closeSideMenu"
>
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800" href="{{ route('admin.dashboard') }}">
            Windmill
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </x-slot>
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.pregnancy_alerts') }}" :active="request()->routeIs('admin.pregnancy_alerts')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 9 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.35449 2.77311C5.1308 2.77311 5.76012 2.15232 5.76012 1.38655C5.76012 0.620781 5.1308 0 4.35449 0C3.57818 0 2.94885 0.620781 2.94885 1.38655C2.94885 2.15232 3.57818 2.77311 4.35449 2.77311Z" fill="#6C757D"/>
                            <path d="M8.70073 8.60749C8.33406 7.13744 7.89718 5.66691 7.39105 4.1959C7.15865 3.57924 6.75976 3.2038 6.1292 3.16403H2.55556C2.39491 3.16403 2.23643 3.20193 2.09416 3.27551C1.72956 3.46409 1.47972 3.77863 1.32346 4.1959C0.929417 5.277 0.489003 6.76642 0.0296959 8.42223C-0.207445 9.22986 1.04697 9.49278 1.26511 8.64738C1.63023 7.19681 2.4113 5.13475 2.4113 5.13475C2.54357 4.78845 2.88699 4.82919 2.70578 5.42523L1.09323 11H7.61327C7.0354 9.01813 6.28032 6.3757 5.97334 5.43675C5.83201 5.00449 6.24896 4.7733 6.53653 5.32925C6.88178 6.5108 7.22484 7.68483 7.56541 8.85033C7.74698 9.45177 8.81312 9.34745 8.70073 8.60749ZM6.47993 8.61572C6.47993 9.77364 5.52833 10.7123 4.35447 10.7123C3.18061 10.7123 2.22901 9.77364 2.22901 8.61572C2.22901 7.45779 3.18061 6.51911 4.35447 6.51911C5.52833 6.51911 6.47993 7.45779 6.47993 8.61572Z" fill="#6C757D"/>
                            <path d="M4.45958 8.18181C4.25535 8.07686 4.3115 7.81141 4.05257 7.76096C3.80715 7.71314 3.77292 7.96395 3.84209 8.13414C3.95798 8.44031 4.61581 8.70564 4.1761 9.05154C3.74582 8.28166 2.68109 9.28368 3.05878 9.481C3.31819 9.61654 3.47832 9.13002 3.68006 9.32143C3.84142 9.4745 3.89553 9.78554 4.15689 9.8193C4.91763 10.036 4.96219 9.15163 5.23594 8.79132C5.43067 8.40025 4.75091 8.3315 4.45958 8.18181Z" fill="#6C757D"/>
                            <path d="M5.13877 8.21516C5.40073 8.21516 5.6131 8.00567 5.6131 7.74726C5.6131 7.48884 5.40073 7.27936 5.13877 7.27936C4.8768 7.27936 4.66443 7.48884 4.66443 7.74726C4.66443 8.00567 4.8768 8.21516 5.13877 8.21516Z" fill="#6C757D"/>
                        </svg>
                    </x-slot>
                    {{ __('Pengingat kehamilan') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.articles') }}" :active="request()->routeIs('admin.articles')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 25 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7917 2H5.20834C4.37953 2 3.58468 2.31607 2.99863 2.87868C2.41258 3.44129 2.08334 4.20435 2.08334 5V19C2.08334 19.7956 2.41258 20.5587 2.99863 21.1213C3.58468 21.6839 4.37953 22 5.20834 22H19.7917C20.6205 22 21.4153 21.6839 22.0014 21.1213C22.5874 20.5587 22.9167 19.7956 22.9167 19V5C22.9167 4.20435 22.5874 3.44129 22.0014 2.87868C21.4153 2.31607 20.6205 2 19.7917 2ZM20.8333 19C20.8333 19.2652 20.7236 19.5196 20.5282 19.7071C20.3329 19.8946 20.0679 20 19.7917 20H5.20834C4.93207 20 4.66712 19.8946 4.47177 19.7071C4.27642 19.5196 4.16667 19.2652 4.16667 19V5C4.16667 4.73478 4.27642 4.48043 4.47177 4.29289C4.66712 4.10536 4.93207 4 5.20834 4H19.7917C20.0679 4 20.3329 4.10536 20.5282 4.29289C20.7236 4.48043 20.8333 4.73478 20.8333 5V19ZM17.7083 9H15.625V7C15.625 6.73478 15.5153 6.48043 15.3199 6.29289C15.1246 6.10536 14.8596 6 14.5833 6H10.4167C10.1404 6 9.87545 6.10536 9.6801 6.29289C9.48475 6.48043 9.375 6.73478 9.375 7V9H7.29167C7.0154 9 6.75045 9.10536 6.5551 9.29289C6.35975 9.48043 6.25 9.73478 6.25 10V14C6.25 14.2652 6.35975 14.5196 6.5551 14.7071C6.75045 14.8946 7.0154 15 7.29167 15H9.375V17C9.375 17.2652 9.48475 17.5196 9.6801 17.7071C9.87545 17.8946 10.1404 18 10.4167 18H14.5833C14.8596 18 15.1246 17.8946 15.3199 17.7071C15.5153 17.5196 15.625 17.2652 15.625 17V15H17.7083C17.9846 15 18.2496 14.8946 18.4449 14.7071C18.6403 14.5196 18.75 14.2652 18.75 14V10C18.75 9.73478 18.6403 9.48043 18.4449 9.29289C18.2496 9.10536 17.9846 9 17.7083 9ZM16.6667 13H14.5833C14.3071 13 14.0421 13.1054 13.8468 13.2929C13.6514 13.4804 13.5417 13.7348 13.5417 14V16H11.4583V14C11.4583 13.7348 11.3486 13.4804 11.1532 13.2929C10.9579 13.1054 10.6929 13 10.4167 13H8.33334V11H10.4167C10.6929 11 10.9579 10.8946 11.1532 10.7071C11.3486 10.5196 11.4583 10.2652 11.4583 10V8H13.5417V10C13.5417 10.2652 13.6514 10.5196 13.8468 10.7071C14.0421 10.8946 14.3071 11 14.5833 11H16.6667V13Z" fill="currentColor"/>
                            </svg>                            
                    </x-slot>
                    {{ __('Materi') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.quiz') }}" :active="request()->routeIs('admin.quiz')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.698 2.54374C10.175 2.62083 9.69588 3.00416 9.48963 3.51458L9.43963 3.63541L8.71463 3.64583L7.98963 3.65624L7.85004 3.72499C7.68338 3.80624 7.54171 3.95624 7.47296 4.12499C7.42713 4.23749 7.42713 4.25416 7.42088 5.40416C7.41463 6.70208 7.41463 6.70416 7.55421 6.91041C7.64171 7.03749 7.72713 7.10624 7.89171 7.18333L8.01046 7.23958H10.9271H13.8438L13.9834 7.17083C14.1438 7.09166 14.2542 6.97916 14.3313 6.81458L14.3855 6.69791L14.3917 5.56249C14.3959 4.79791 14.3896 4.38333 14.375 4.29374C14.3292 4.03541 14.1771 3.82916 13.9417 3.71458L13.823 3.65624L13.1063 3.64583L12.3917 3.63541L12.3438 3.50624C12.2438 3.22916 12.0188 2.94999 11.7605 2.78124C11.5959 2.67291 11.3209 2.57083 11.1188 2.54374C10.9355 2.51874 10.8771 2.51874 10.698 2.54374ZM11.1938 3.40833C11.3188 3.44999 11.5021 3.61666 11.5625 3.74166C11.5875 3.79374 11.6209 3.91874 11.6375 4.02083C11.6521 4.12291 11.673 4.22499 11.6855 4.24583C11.723 4.31666 11.8709 4.43541 11.9521 4.45624C12.0021 4.47083 12.325 4.47916 12.8084 4.47916H13.5834V5.44791V6.41666H10.9271H8.27088V5.44791V4.47916H9.05421C9.54796 4.47916 9.86879 4.47083 9.92504 4.45624C10.0313 4.42916 10.1542 4.33541 10.2021 4.24374C10.2188 4.20833 10.2417 4.11041 10.2521 4.02499C10.2813 3.75833 10.4021 3.56041 10.6021 3.44999C10.7875 3.34999 10.9813 3.33541 11.1938 3.40833Z" fill="currentColor"/>
                            <path d="M4.67294 4.76041C4.26877 4.87083 3.94169 5.18541 3.80002 5.60416C3.76252 5.71458 3.76044 5.95208 3.76044 13.5937V21.4687L3.8146 21.6083C3.97294 22.0167 4.28335 22.3021 4.67919 22.4062C4.78544 22.4333 5.51044 22.4375 10.9167 22.4375C17.6604 22.4375 17.15 22.4479 17.4354 22.3062C17.6313 22.2104 17.8459 21.9937 17.9459 21.7917C18.0896 21.4979 18.0834 21.6417 18.0834 18.6042V15.8625L18.0375 15.7708C17.9438 15.5917 17.7417 15.4917 17.5667 15.5396C17.4563 15.5708 17.3375 15.6729 17.2896 15.7812C17.2521 15.8604 17.25 16 17.25 18.5833C17.25 21.1937 17.2479 21.3062 17.2104 21.3875C17.1896 21.4354 17.1354 21.5 17.0917 21.5333L17.0146 21.5937H10.9167H4.81877L4.74169 21.5333C4.69794 21.5 4.64377 21.4354 4.62294 21.3875C4.58544 21.3042 4.58335 21.0771 4.58335 13.5833C4.58335 6.12291 4.58544 5.8625 4.62294 5.78125C4.66669 5.68541 4.73544 5.61666 4.81877 5.58541C4.85627 5.57083 5.1146 5.5625 5.51669 5.5625C5.88127 5.5625 6.1896 5.55416 6.23127 5.54166C6.45835 5.47916 6.59794 5.25208 6.54169 5.04166C6.5146 4.93958 6.39169 4.79583 6.29794 4.75625C6.20002 4.71666 4.8271 4.71875 4.67294 4.76041Z" fill="currentColor"/>
                            <path d="M15.5312 4.75833C15.3854 4.82292 15.2833 4.97708 15.2833 5.13542C15.2833 5.32292 15.4125 5.48958 15.6021 5.54167C15.6437 5.55417 15.9521 5.5625 16.3167 5.5625C16.7187 5.5625 16.9771 5.57083 17.0146 5.58542C17.0979 5.61667 17.1667 5.68542 17.2104 5.78125C17.2458 5.85625 17.25 5.92708 17.25 6.5C17.25 7.21667 17.2562 7.24583 17.4062 7.37083C17.6396 7.5625 17.9771 7.4625 18.0625 7.17708C18.0792 7.11667 18.0854 6.89375 18.0792 6.39583C18.0708 5.70417 18.0708 5.69583 18.0167 5.55833C17.8604 5.15 17.5521 4.86458 17.1562 4.76042C16.9896 4.71667 15.6292 4.71458 15.5312 4.75833Z" fill="currentColor"/>
                            <path d="M19.3542 6.99791C19.3146 7.02083 19.2625 7.06041 19.2375 7.08749C19.1729 7.15833 18.6521 7.96249 18.625 8.02916C18.5917 8.11666 18.6 8.27291 18.6438 8.36666C18.6896 8.46666 18.7334 8.49999 19.3063 8.88749C19.5271 9.03541 19.7084 9.16249 19.7084 9.17083C19.7084 9.17916 18.4604 11.0146 16.9375 13.2479L14.1646 17.3083L13.7563 17.5792C13.5292 17.7292 13.3438 17.85 13.3417 17.8479C13.3396 17.8458 13.3854 17.6271 13.4459 17.3646L13.5563 16.8854L16.15 13.1C17.5771 11.0187 18.75 9.29374 18.7584 9.26666C18.7979 9.11874 18.7417 8.94791 18.6188 8.83958C18.4709 8.71041 18.2729 8.69583 18.1188 8.80416C18.0542 8.85208 17.7417 9.29374 16.7334 10.7708C16.0188 11.8187 14.8459 13.5354 14.1313 14.5833L12.8292 16.4896L12.5604 17.6208C12.4125 18.2437 12.2917 18.7833 12.2917 18.8187C12.2938 18.9792 12.4459 19.1646 12.6125 19.2104C12.7792 19.2562 12.825 19.2312 13.7938 18.55C14.2917 18.2021 14.7209 17.8958 14.7479 17.8708C14.8313 17.7937 20.65 9.26874 20.6813 9.17708C20.7209 9.06874 20.7 8.89999 20.6396 8.80833C20.6104 8.76458 20.4063 8.61249 20.0938 8.39999C19.8188 8.21249 19.5959 8.04999 19.6 8.03541C19.6042 8.02083 19.6146 8.00208 19.625 7.99166C19.6354 7.98333 19.8563 8.11874 20.125 8.30208C20.3896 8.48124 20.6375 8.64166 20.6771 8.65833C20.8959 8.74999 21.1667 8.60208 21.2292 8.35833C21.2563 8.24791 21.2417 8.16666 21.1771 8.04999C21.1375 7.98124 21.0042 7.87916 20.4563 7.49791C20.0875 7.24166 19.7563 7.01458 19.7209 6.99583C19.6334 6.94791 19.4479 6.94999 19.3542 6.99791Z" fill="currentColor"/>
                            <path d="M6.41669 10.1771V11.5833H7.82294H9.22919L9.22502 10.1812L9.21877 8.78124L7.81877 8.77499L6.41669 8.77083V10.1771ZM8.39169 10.1812L8.39585 10.75H7.82294H7.25002V10.1771V9.60416L7.81877 9.60833L8.38544 9.61458L8.39169 10.1812Z" fill="currentColor"/>
                            <path d="M10.7 8.96874C10.5938 9.00624 10.4875 9.11249 10.4459 9.22291C10.373 9.41041 10.4584 9.62499 10.6438 9.72291L10.7355 9.77083H12.9188C14.4105 9.77083 15.1209 9.76458 15.1605 9.74791C15.298 9.69583 15.4167 9.51874 15.4167 9.36458C15.4167 9.18333 15.273 9.00624 15.0917 8.96041C15.0313 8.94374 14.348 8.93749 12.8917 8.93749C11.15 8.93958 10.7667 8.94374 10.7 8.96874Z" fill="currentColor"/>
                            <path d="M10.6979 10.5917C10.5521 10.6563 10.45 10.8104 10.45 10.9688C10.45 11.1563 10.5792 11.3229 10.7688 11.375C10.8771 11.4042 13.9104 11.4042 14.0313 11.3729C14.1396 11.3458 14.2729 11.2375 14.3208 11.1375C14.4125 10.9458 14.3229 10.7063 14.1208 10.6021C14.0458 10.5646 13.975 10.5625 12.4021 10.5625C11.0875 10.5646 10.7479 10.5688 10.6979 10.5917Z" fill="currentColor"/>
                            <path d="M6.41669 14.3229V15.7292L7.81877 15.725L9.21877 15.7187L9.22502 14.3167L9.22919 12.9167H7.82294H6.41669V14.3229ZM8.39169 14.3167L8.38544 14.8854L7.81877 14.8917L7.25002 14.8958V14.3229V13.75H7.82294H8.39585L8.39169 14.3167Z" fill="currentColor"/>
                            <path d="M10.6979 13.925C10.5521 13.9896 10.45 14.1437 10.45 14.3021C10.45 14.4896 10.5792 14.6562 10.7688 14.7083C10.8688 14.7354 12.6313 14.7354 12.7313 14.7083C12.9583 14.6458 13.0979 14.4187 13.0417 14.2083C13.0146 14.1062 12.8917 13.9625 12.7979 13.9229C12.7 13.8833 10.7896 13.8854 10.6979 13.925Z" fill="currentColor"/>
                            <path d="M6.41669 18.4583V19.8542H7.82294H9.22919V18.4583V17.0625H7.82294H6.41669V18.4583ZM8.39585 18.4583V19.0208H7.82294H7.25002V18.4583V17.8958H7.82294H8.39585V18.4583Z" fill="#066F6A"/>
                        </svg>                                                    
                    </x-slot>
                    {{ __('Quiz') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.evaluation') }}" :active="request()->routeIs('admin.quiz')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8857 7.71429C16.1102 7.71429 16.2857 7.53469 16.2857 7.3102V6.90204C16.2857 6.67755 16.1122 6.49184 15.8857 6.49184H8.13061C7.90612 6.49184 7.71428 6.67755 7.71428 6.90204V7.3102C7.71428 7.53469 7.90612 7.71429 8.13061 7.71429H15.8857Z" fill="currentColor"/>
                            <path d="M5.88571 10.9816C5.54694 10.9816 5.27347 11.2551 5.27347 11.5939C5.27347 11.9327 5.54898 12.2061 5.88571 12.2061C6.22449 12.2061 6.49796 11.9327 6.49796 11.5939C6.49796 11.2551 6.22449 10.9816 5.88571 10.9816Z" fill="currentColor"/>
                            <path d="M8.13061 15.4694C7.90612 15.4694 7.71428 15.6551 7.71428 15.8796V16.2878C7.71428 16.5143 7.90612 16.6939 8.13061 16.6939H12.2122C12.4367 16.6939 12.6122 16.5143 12.6122 16.2878V15.8796C12.6122 15.6551 12.4367 15.4673 12.2122 15.4673H8.13061V15.4694Z" fill="currentColor"/>
                            <path d="M16.2939 11.7959H16.2857V11.3898C16.2857 11.1653 16.1122 10.9796 15.8857 10.9796H8.13061C7.90612 10.9796 7.71428 11.1653 7.71428 11.3898V11.798C7.71428 12.0245 7.90612 12.2041 8.13061 12.2041H15.8857C16.1102 12.2041 16.2939 12.0245 16.2939 11.7959Z" fill="currentColor"/>
                            <path d="M21.451 14.7327C21.3898 14.6816 21.3204 14.6551 21.2449 14.6551C21.0714 14.6551 20.9204 14.7918 20.9184 14.7918L16.2102 19.1449L14.3 17.6163C14.1878 17.5163 14.0755 17.4653 13.9633 17.4653C13.8776 17.4653 13.7939 17.4959 13.7122 17.5531C13.4367 17.7571 13.651 18.098 13.6592 18.1102L15.7694 20.9653C15.8939 21.1102 16.0225 21.1837 16.151 21.1837C16.3674 21.1837 16.5204 20.9755 16.5245 20.9714L21.4102 15.2306C21.6 14.9633 21.5265 14.7918 21.451 14.7327Z" fill="currentColor"/>
                            <path d="M5.88571 15.4714C5.54694 15.4714 5.27347 15.7449 5.27347 16.0837C5.27347 16.4224 5.54898 16.6959 5.88571 16.6959C6.22449 16.6959 6.49796 16.4224 6.49796 16.0837C6.49796 15.7449 6.22449 15.4714 5.88571 15.4714Z" fill="currentColor"/>
                            <path d="M5.88571 6.49184C5.54694 6.49184 5.27347 6.76531 5.27347 7.10408C5.27347 7.44286 5.54898 7.71633 5.88571 7.71633C6.22449 7.71633 6.49796 7.44286 6.49796 7.10408C6.49796 6.76735 6.22449 6.49184 5.88571 6.49184Z" fill="currentColor"/>
                            <path d="M13.7347 20.7796V20.7755H12.8143H11.3122H3.22449V3.22449H18.3265V13.0918C18.351 13.0939 18.3469 13.0959 18.3571 13.098C18.3469 13.1408 18.3327 13.1816 18.3327 13.2265C18.3327 13.5653 18.6082 13.8388 18.9449 13.8388C19.2163 13.8388 19.4347 13.6612 19.5143 13.4184C19.5265 13.4224 19.549 13.4265 19.549 13.4306V13.2265V2.81837C19.551 2.36735 19.1939 2 18.7429 2H2.82449C2.37347 2 2 2.36735 2 2.81837V21.1837C2 21.6347 2.37347 21.998 2.82449 21.998H13.6939V22C14.0306 21.998 14.3041 21.7265 14.3041 21.3878C14.3041 21.0653 14.0531 20.8 13.7347 20.7796Z" fill="currentColor"/>
                        </svg>                                           
                    </x-slot>
                    {{ __('Evaluasi') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.user') }}" :active="request()->routeIs('admin.user')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.698 2.54374C10.175 2.62083 9.69588 3.00416 9.48963 3.51458L9.43963 3.63541L8.71463 3.64583L7.98963 3.65624L7.85004 3.72499C7.68338 3.80624 7.54171 3.95624 7.47296 4.12499C7.42713 4.23749 7.42713 4.25416 7.42088 5.40416C7.41463 6.70208 7.41463 6.70416 7.55421 6.91041C7.64171 7.03749 7.72713 7.10624 7.89171 7.18333L8.01046 7.23958H10.9271H13.8438L13.9834 7.17083C14.1438 7.09166 14.2542 6.97916 14.3313 6.81458L14.3855 6.69791L14.3917 5.56249C14.3959 4.79791 14.3896 4.38333 14.375 4.29374C14.3292 4.03541 14.1771 3.82916 13.9417 3.71458L13.823 3.65624L13.1063 3.64583L12.3917 3.63541L12.3438 3.50624C12.2438 3.22916 12.0188 2.94999 11.7605 2.78124C11.5959 2.67291 11.3209 2.57083 11.1188 2.54374C10.9355 2.51874 10.8771 2.51874 10.698 2.54374ZM11.1938 3.40833C11.3188 3.44999 11.5021 3.61666 11.5625 3.74166C11.5875 3.79374 11.6209 3.91874 11.6375 4.02083C11.6521 4.12291 11.673 4.22499 11.6855 4.24583C11.723 4.31666 11.8709 4.43541 11.9521 4.45624C12.0021 4.47083 12.325 4.47916 12.8084 4.47916H13.5834V5.44791V6.41666H10.9271H8.27088V5.44791V4.47916H9.05421C9.54796 4.47916 9.86879 4.47083 9.92504 4.45624C10.0313 4.42916 10.1542 4.33541 10.2021 4.24374C10.2188 4.20833 10.2417 4.11041 10.2521 4.02499C10.2813 3.75833 10.4021 3.56041 10.6021 3.44999C10.7875 3.34999 10.9813 3.33541 11.1938 3.40833Z" fill="currentColor"/>
                            <path d="M4.67294 4.76041C4.26877 4.87083 3.94169 5.18541 3.80002 5.60416C3.76252 5.71458 3.76044 5.95208 3.76044 13.5937V21.4687L3.8146 21.6083C3.97294 22.0167 4.28335 22.3021 4.67919 22.4062C4.78544 22.4333 5.51044 22.4375 10.9167 22.4375C17.6604 22.4375 17.15 22.4479 17.4354 22.3062C17.6313 22.2104 17.8459 21.9937 17.9459 21.7917C18.0896 21.4979 18.0834 21.6417 18.0834 18.6042V15.8625L18.0375 15.7708C17.9438 15.5917 17.7417 15.4917 17.5667 15.5396C17.4563 15.5708 17.3375 15.6729 17.2896 15.7812C17.2521 15.8604 17.25 16 17.25 18.5833C17.25 21.1937 17.2479 21.3062 17.2104 21.3875C17.1896 21.4354 17.1354 21.5 17.0917 21.5333L17.0146 21.5937H10.9167H4.81877L4.74169 21.5333C4.69794 21.5 4.64377 21.4354 4.62294 21.3875C4.58544 21.3042 4.58335 21.0771 4.58335 13.5833C4.58335 6.12291 4.58544 5.8625 4.62294 5.78125C4.66669 5.68541 4.73544 5.61666 4.81877 5.58541C4.85627 5.57083 5.1146 5.5625 5.51669 5.5625C5.88127 5.5625 6.1896 5.55416 6.23127 5.54166C6.45835 5.47916 6.59794 5.25208 6.54169 5.04166C6.5146 4.93958 6.39169 4.79583 6.29794 4.75625C6.20002 4.71666 4.8271 4.71875 4.67294 4.76041Z" fill="currentColor"/>
                            <path d="M15.5312 4.75833C15.3854 4.82292 15.2833 4.97708 15.2833 5.13542C15.2833 5.32292 15.4125 5.48958 15.6021 5.54167C15.6437 5.55417 15.9521 5.5625 16.3167 5.5625C16.7187 5.5625 16.9771 5.57083 17.0146 5.58542C17.0979 5.61667 17.1667 5.68542 17.2104 5.78125C17.2458 5.85625 17.25 5.92708 17.25 6.5C17.25 7.21667 17.2562 7.24583 17.4062 7.37083C17.6396 7.5625 17.9771 7.4625 18.0625 7.17708C18.0792 7.11667 18.0854 6.89375 18.0792 6.39583C18.0708 5.70417 18.0708 5.69583 18.0167 5.55833C17.8604 5.15 17.5521 4.86458 17.1562 4.76042C16.9896 4.71667 15.6292 4.71458 15.5312 4.75833Z" fill="currentColor"/>
                            <path d="M19.3542 6.99791C19.3146 7.02083 19.2625 7.06041 19.2375 7.08749C19.1729 7.15833 18.6521 7.96249 18.625 8.02916C18.5917 8.11666 18.6 8.27291 18.6438 8.36666C18.6896 8.46666 18.7334 8.49999 19.3063 8.88749C19.5271 9.03541 19.7084 9.16249 19.7084 9.17083C19.7084 9.17916 18.4604 11.0146 16.9375 13.2479L14.1646 17.3083L13.7563 17.5792C13.5292 17.7292 13.3438 17.85 13.3417 17.8479C13.3396 17.8458 13.3854 17.6271 13.4459 17.3646L13.5563 16.8854L16.15 13.1C17.5771 11.0187 18.75 9.29374 18.7584 9.26666C18.7979 9.11874 18.7417 8.94791 18.6188 8.83958C18.4709 8.71041 18.2729 8.69583 18.1188 8.80416C18.0542 8.85208 17.7417 9.29374 16.7334 10.7708C16.0188 11.8187 14.8459 13.5354 14.1313 14.5833L12.8292 16.4896L12.5604 17.6208C12.4125 18.2437 12.2917 18.7833 12.2917 18.8187C12.2938 18.9792 12.4459 19.1646 12.6125 19.2104C12.7792 19.2562 12.825 19.2312 13.7938 18.55C14.2917 18.2021 14.7209 17.8958 14.7479 17.8708C14.8313 17.7937 20.65 9.26874 20.6813 9.17708C20.7209 9.06874 20.7 8.89999 20.6396 8.80833C20.6104 8.76458 20.4063 8.61249 20.0938 8.39999C19.8188 8.21249 19.5959 8.04999 19.6 8.03541C19.6042 8.02083 19.6146 8.00208 19.625 7.99166C19.6354 7.98333 19.8563 8.11874 20.125 8.30208C20.3896 8.48124 20.6375 8.64166 20.6771 8.65833C20.8959 8.74999 21.1667 8.60208 21.2292 8.35833C21.2563 8.24791 21.2417 8.16666 21.1771 8.04999C21.1375 7.98124 21.0042 7.87916 20.4563 7.49791C20.0875 7.24166 19.7563 7.01458 19.7209 6.99583C19.6334 6.94791 19.4479 6.94999 19.3542 6.99791Z" fill="currentColor"/>
                            <path d="M6.41669 10.1771V11.5833H7.82294H9.22919L9.22502 10.1812L9.21877 8.78124L7.81877 8.77499L6.41669 8.77083V10.1771ZM8.39169 10.1812L8.39585 10.75H7.82294H7.25002V10.1771V9.60416L7.81877 9.60833L8.38544 9.61458L8.39169 10.1812Z" fill="currentColor"/>
                            <path d="M10.7 8.96874C10.5938 9.00624 10.4875 9.11249 10.4459 9.22291C10.373 9.41041 10.4584 9.62499 10.6438 9.72291L10.7355 9.77083H12.9188C14.4105 9.77083 15.1209 9.76458 15.1605 9.74791C15.298 9.69583 15.4167 9.51874 15.4167 9.36458C15.4167 9.18333 15.273 9.00624 15.0917 8.96041C15.0313 8.94374 14.348 8.93749 12.8917 8.93749C11.15 8.93958 10.7667 8.94374 10.7 8.96874Z" fill="currentColor"/>
                            <path d="M10.6979 10.5917C10.5521 10.6563 10.45 10.8104 10.45 10.9688C10.45 11.1563 10.5792 11.3229 10.7688 11.375C10.8771 11.4042 13.9104 11.4042 14.0313 11.3729C14.1396 11.3458 14.2729 11.2375 14.3208 11.1375C14.4125 10.9458 14.3229 10.7063 14.1208 10.6021C14.0458 10.5646 13.975 10.5625 12.4021 10.5625C11.0875 10.5646 10.7479 10.5688 10.6979 10.5917Z" fill="currentColor"/>
                            <path d="M6.41669 14.3229V15.7292L7.81877 15.725L9.21877 15.7187L9.22502 14.3167L9.22919 12.9167H7.82294H6.41669V14.3229ZM8.39169 14.3167L8.38544 14.8854L7.81877 14.8917L7.25002 14.8958V14.3229V13.75H7.82294H8.39585L8.39169 14.3167Z" fill="currentColor"/>
                            <path d="M10.6979 13.925C10.5521 13.9896 10.45 14.1437 10.45 14.3021C10.45 14.4896 10.5792 14.6562 10.7688 14.7083C10.8688 14.7354 12.6313 14.7354 12.7313 14.7083C12.9583 14.6458 13.0979 14.4187 13.0417 14.2083C13.0146 14.1062 12.8917 13.9625 12.7979 13.9229C12.7 13.8833 10.7896 13.8854 10.6979 13.925Z" fill="currentColor"/>
                            <path d="M6.41669 18.4583V19.8542H7.82294H9.22919V18.4583V17.0625H7.82294H6.41669V18.4583ZM8.39585 18.4583V19.0208H7.82294H7.25002V18.4583V17.8958H7.82294H8.39585V18.4583Z" fill="#066F6A"/>
                        </svg>                                                    
                    </x-slot>
                    {{ __('User') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.about') }}" :active="request()->routeIs('admin.about')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.28315 1.01036C5.4148 1.13477 4.94761 1.26934 4.30269 1.57911C3.69839 1.8711 3.21597 2.21895 2.71323 2.71915C1.81187 3.62051 1.27358 4.66661 1.04761 5.95899C0.984131 6.32208 0.984131 7.44942 1.04761 7.81251C1.27358 9.10489 1.81187 10.151 2.71323 11.0523C3.61714 11.9563 4.68101 12.5022 5.96069 12.718C6.34917 12.784 7.4105 12.784 7.79897 12.718C9.07866 12.5022 10.1425 11.9563 11.0464 11.0523C11.9503 10.1484 12.4962 9.08458 12.7121 7.80489C12.7781 7.41641 12.7781 6.35508 12.7121 5.96661C12.4962 4.68692 11.9503 3.62305 11.0464 2.71915C10.1476 1.82286 9.09136 1.27696 7.81929 1.05606C7.58823 1.01544 6.47612 0.982428 6.28315 1.01036ZM7.7939 3.3336C7.96401 3.41231 8.14937 3.59258 8.23062 3.75508C8.27886 3.85665 8.28901 3.91758 8.28901 4.10548C8.28901 4.31114 8.2814 4.34669 8.21538 4.46856C8.12651 4.62852 7.99702 4.7504 7.81421 4.84688C7.69233 4.91036 7.65425 4.91798 7.41304 4.91798C7.1769 4.91798 7.12866 4.91036 7.00171 4.84942C6.82651 4.76817 6.6564 4.60313 6.57261 4.43555C6.52183 4.33145 6.51167 4.27051 6.51167 4.09278C6.51167 3.90997 6.52183 3.85665 6.58022 3.75001C6.64624 3.62051 6.84175 3.41739 6.95855 3.35645C7.18198 3.23458 7.55776 3.22442 7.7939 3.3336ZM6.95347 5.74571C7.1312 5.7838 7.32163 5.8879 7.44351 6.01231C7.66694 6.23829 7.73042 6.47188 7.6898 6.92383C7.66948 7.13458 7.61616 7.35801 7.44858 7.95977C7.18198 8.90176 7.1312 9.12774 7.12612 9.38672C7.12105 9.6254 7.16675 9.7295 7.31147 9.79805C7.44605 9.86153 7.76089 9.85645 7.99448 9.78536C8.09605 9.75235 8.18491 9.73204 8.19253 9.73965C8.20015 9.74473 8.18491 9.83868 8.15952 9.94278L8.11382 10.1357L7.98687 10.184C7.19468 10.4811 7.15405 10.4912 6.77827 10.4912C6.35171 10.4938 6.10542 10.4176 5.88452 10.217C5.65601 10.0088 5.56968 9.77012 5.59507 9.4045C5.61792 9.09219 5.64839 8.95255 5.87437 8.1502C6.11812 7.292 6.1689 7.06094 6.1689 6.81973C6.1689 6.46934 6.0648 6.36778 5.69917 6.36778C5.55952 6.36778 5.43765 6.38555 5.30815 6.42364C5.20659 6.45665 5.11772 6.4795 5.11265 6.47442C5.09995 6.45919 5.19897 6.09356 5.22183 6.07325C5.2523 6.04278 5.70171 5.88028 5.95562 5.80665C6.3314 5.69493 6.63101 5.67715 6.95347 5.74571Z" fill="#6C757D"/>
                        </svg>                                                        
                    </x-slot>
                    {{ __('Tentang') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.contact') }}" :active="request()->routeIs('admin.contact')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3225 7.58334C11.1941 7.58334 11.06 7.5425 10.9316 7.51334C10.672 7.45527 10.4166 7.37926 10.1675 7.28584C9.89686 7.18739 9.5994 7.1925 9.33232 7.30019C9.06525 7.40788 8.84744 7.61054 8.72081 7.86917L8.59248 8.1375C8.02596 7.81621 7.50259 7.42417 7.03498 6.97084C6.58164 6.50322 6.18961 5.97986 5.86831 5.41334L6.13664 5.29084C6.39527 5.16421 6.59793 4.9464 6.70562 4.67932C6.81331 4.41225 6.81843 4.11479 6.71998 3.84417C6.62734 3.59277 6.55134 3.33555 6.49248 3.07417C6.46331 2.94584 6.43998 2.81167 6.42248 2.68334C6.35164 2.27245 6.13643 1.90035 5.81559 1.63406C5.49476 1.36777 5.08938 1.22478 4.67248 1.23084H2.91664C2.67004 1.23052 2.42615 1.28232 2.20096 1.38285C1.97578 1.48337 1.77438 1.63036 1.60998 1.81417C1.44216 2.00297 1.31721 2.22586 1.24371 2.46753C1.1702 2.70919 1.14988 2.96391 1.18414 3.21417C1.50124 5.64209 2.61052 7.89755 4.33998 9.63084C6.07326 11.3603 8.32873 12.4696 10.7566 12.7867C10.8324 12.7925 10.9084 12.7925 10.9841 12.7867C11.4143 12.7873 11.8296 12.6295 12.1508 12.3433C12.3346 12.1789 12.4816 11.9775 12.5821 11.7524C12.6827 11.5272 12.7345 11.2833 12.7341 11.0367V9.28667C12.731 8.88361 12.5888 8.49399 12.3316 8.18364C12.0744 7.8733 11.7179 7.66125 11.3225 7.58334ZM11.6083 11.0833C11.6081 11.1647 11.5909 11.2452 11.5577 11.3195C11.5246 11.3939 11.4762 11.4605 11.4158 11.515C11.3519 11.5733 11.2758 11.6166 11.1931 11.6418C11.1103 11.667 11.023 11.6735 10.9375 11.6608C8.76064 11.3765 6.73762 10.3845 5.17998 8.8375C3.621 7.27853 2.62033 5.24847 2.33331 3.06251C2.32064 2.97695 2.32715 2.88965 2.35237 2.80692C2.37759 2.72419 2.4209 2.6481 2.47914 2.58417C2.53434 2.52301 2.60187 2.47423 2.67727 2.44105C2.75268 2.40787 2.83426 2.39104 2.91664 2.39167H4.66664C4.80149 2.38838 4.93331 2.43191 5.03967 2.51487C5.14602 2.59783 5.22034 2.71508 5.24998 2.84667C5.24998 3.00417 5.30248 3.1675 5.33748 3.325C5.4049 3.63059 5.49458 3.93084 5.60581 4.22334L4.78914 4.60834C4.64877 4.67278 4.53969 4.79025 4.48581 4.935C4.42747 5.07702 4.42747 5.23632 4.48581 5.37834C5.32535 7.17661 6.77087 8.62214 8.56914 9.46167C8.71116 9.52001 8.87046 9.52001 9.01248 9.46167C9.15723 9.40779 9.27471 9.29871 9.33914 9.15834L9.70664 8.34167C10.0076 8.45141 10.3155 8.54105 10.6283 8.61C10.78 8.645 10.9433 8.67417 11.1008 8.6975C11.2324 8.72714 11.3497 8.80146 11.4326 8.90782C11.5156 9.01417 11.5591 9.14599 11.5558 9.28084L11.6083 11.0833ZM8.16664 1.16667C8.03248 1.16667 7.89248 1.16667 7.75831 1.16667C7.6036 1.17982 7.46045 1.25389 7.36035 1.37259C7.26026 1.49128 7.21141 1.64488 7.22456 1.79959C7.23771 1.9543 7.31178 2.09745 7.43048 2.19754C7.54917 2.29764 7.70277 2.34649 7.85748 2.33334H8.16664C9.0949 2.33334 9.98514 2.70209 10.6415 3.35846C11.2979 4.01484 11.6666 4.90508 11.6666 5.83334C11.6666 5.93834 11.6666 6.0375 11.6666 6.1425C11.6537 6.29639 11.7023 6.44913 11.8018 6.56723C11.9013 6.68533 12.0436 6.75915 12.1975 6.7725H12.2441C12.3902 6.7731 12.5311 6.7189 12.6391 6.62061C12.7471 6.52233 12.8143 6.38711 12.8275 6.24167C12.8275 6.1075 12.8275 5.9675 12.8275 5.83334C12.8275 4.59667 12.3366 3.41057 11.4627 2.53557C10.5888 1.66057 9.40331 1.16822 8.16664 1.16667ZM9.33331 5.83334C9.33331 5.98805 9.39477 6.13642 9.50416 6.24582C9.61356 6.35521 9.76194 6.41667 9.91664 6.41667C10.0714 6.41667 10.2197 6.35521 10.3291 6.24582C10.4385 6.13642 10.5 5.98805 10.5 5.83334C10.5 5.2145 10.2541 4.62101 9.81656 4.18342C9.37897 3.74584 8.78548 3.50001 8.16664 3.50001C8.01193 3.50001 7.86356 3.56146 7.75417 3.67086C7.64477 3.78026 7.58331 3.92863 7.58331 4.08334C7.58331 4.23805 7.64477 4.38642 7.75417 4.49582C7.86356 4.60521 8.01193 4.66667 8.16664 4.66667C8.47606 4.66667 8.77281 4.78959 8.9916 5.00838C9.21039 5.22717 9.33331 5.52392 9.33331 5.83334Z" fill="#6C757D"/>
                        </svg>                                                         
                    </x-slot>
                    {{ __('Kontak') }}
                </x-nav-link>
            </li>

            {{-- <li class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        @click="toggleMultiLevelMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Two-level menu</span>
                </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isMultiLevelMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="#">Child menu</a>
                        </li>
                    </ul>
                </template>
            </li> --}}
        </ul>
    </div>
</aside>
