<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="flex flex-wrap mb-4">
        <div class="w-full max-h-[126] md:max-h-auto md:w-3/5 pb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex flex-wrap md:flex-nowrap rounded-lg shadow-sm">
                <div class="w-full md:w-3/4 pr-4 md:pr-2">
                    <h6 class="inline-block text-lg text-primary-index mb-2">Selamat datang <span
                            class="font-semibold">Admin 🎉</span> </h6>
                    <p class="text-dark-gray text-sm leadin-10"><span class="font-semibold text-dark">Tetap
                            semangat!!.</span> Masa depan adalah milik Anda yang telah menyiapkannya dari hari ini</p>
                </div>
                <div class="w-full md:w-1/4 flex justify-end p-6 md:p-0">
                    <img src="{{ asset('svg/register.svg') }}" class="w-auto h-full md:h-[150px] lg-[100px]"
                        alt="">
                </div>
            </div>
        </div>
        <div class="w-1/2 md:w-1/5 px-2">
            <div
                class="bg-white text-blue-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm">
                <div class="h-10 w-10 bg-blue-100 rounded-lg text-blue-500 p-2 shadow-md">
                    <svg class="mb-2" width="100%" height="100%" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.62 20.56C26.886 19.2005 27.5991 17.4175 27.62 15.56C27.62 13.555 26.8235 11.632 25.4057 10.2143C23.988 8.7965 22.065 8 20.06 8C18.055 8 16.132 8.7965 14.7143 10.2143C13.2965 11.632 12.5 13.555 12.5 15.56C12.5209 17.4175 13.234 19.2005 14.5 20.56C12.7373 21.4377 11.2204 22.7399 10.0858 24.3493C8.95122 25.9587 8.23445 27.8249 8 29.78C7.94165 30.3104 8.09641 30.8423 8.43022 31.2587C8.76404 31.675 9.24957 31.9417 9.78 32C10.3104 32.0583 10.8423 31.9036 11.2586 31.5698C11.675 31.236 11.9417 30.7504 12 30.22C12.2387 28.2823 13.1777 26.4987 14.6402 25.2053C16.1027 23.9119 17.9876 23.198 19.94 23.198C21.8924 23.198 23.7773 23.9119 25.2398 25.2053C26.7023 26.4987 27.6413 28.2823 27.88 30.22C27.9356 30.7328 28.1872 31.2043 28.5823 31.536C28.9773 31.8677 29.4853 32.034 30 32H30.22C30.7443 31.9397 31.2235 31.6746 31.5531 31.2625C31.8828 30.8504 32.0362 30.3247 31.98 29.8C31.7629 27.8552 31.0688 25.9941 29.9592 24.3821C28.8497 22.7701 27.3591 21.4572 25.62 20.56V20.56ZM20 19.12C19.2959 19.12 18.6076 18.9112 18.0222 18.52C17.4367 18.1289 16.9804 17.5729 16.711 16.9224C16.4415 16.2718 16.371 15.5561 16.5084 14.8655C16.6458 14.1749 16.9848 13.5406 17.4827 13.0427C17.9806 12.5448 18.6149 12.2058 19.3055 12.0684C19.9961 11.931 20.7118 12.0015 21.3624 12.271C22.0129 12.5404 22.5689 12.9967 22.96 13.5822C23.3512 14.1676 23.56 14.8559 23.56 15.56C23.56 16.5042 23.1849 17.4097 22.5173 18.0773C21.8497 18.7449 20.9442 19.12 20 19.12V19.12ZM34 0H6C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6V34C0 35.5913 0.632141 37.1174 1.75736 38.2426C2.88258 39.3679 4.4087 40 6 40H34C35.5913 40 37.1174 39.3679 38.2426 38.2426C39.3679 37.1174 40 35.5913 40 34V6C40 4.4087 39.3679 2.88258 38.2426 1.75736C37.1174 0.632141 35.5913 0 34 0ZM36 34C36 34.5304 35.7893 35.0391 35.4142 35.4142C35.0391 35.7893 34.5304 36 34 36H6C5.46957 36 4.96086 35.7893 4.58579 35.4142C4.21071 35.0391 4 34.5304 4 34V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H34C34.5304 4 35.0391 4.21071 35.4142 4.58579C35.7893 4.96086 36 5.46957 36 6V34Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <h2 class="font-semibold text-[3.2rem]  leading-[70px]">{{ $usersCount }}</h2>
                <span class="text-sm font-medium">User aktif</span>
            </div>
        </div>
        <div class="w-1/2 md:w-1/5 px-2">
            <div
                class="bg-white text-green-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm">
                <div class="h-10 w-10 bg-green-100 rounded-lg text-green-500 p-2 shadow-md">
                    <svg class="mb-2" width="100%" height="100%" viewBox="0 0 25 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.7917 2H5.20834C4.37953 2 3.58468 2.31607 2.99863 2.87868C2.41258 3.44129 2.08334 4.20435 2.08334 5V19C2.08334 19.7956 2.41258 20.5587 2.99863 21.1213C3.58468 21.6839 4.37953 22 5.20834 22H19.7917C20.6205 22 21.4153 21.6839 22.0014 21.1213C22.5874 20.5587 22.9167 19.7956 22.9167 19V5C22.9167 4.20435 22.5874 3.44129 22.0014 2.87868C21.4153 2.31607 20.6205 2 19.7917 2ZM20.8333 19C20.8333 19.2652 20.7236 19.5196 20.5282 19.7071C20.3329 19.8946 20.0679 20 19.7917 20H5.20834C4.93207 20 4.66712 19.8946 4.47177 19.7071C4.27642 19.5196 4.16667 19.2652 4.16667 19V5C4.16667 4.73478 4.27642 4.48043 4.47177 4.29289C4.66712 4.10536 4.93207 4 5.20834 4H19.7917C20.0679 4 20.3329 4.10536 20.5282 4.29289C20.7236 4.48043 20.8333 4.73478 20.8333 5V19ZM17.7083 9H15.625V7C15.625 6.73478 15.5153 6.48043 15.3199 6.29289C15.1246 6.10536 14.8596 6 14.5833 6H10.4167C10.1404 6 9.87545 6.10536 9.6801 6.29289C9.48475 6.48043 9.375 6.73478 9.375 7V9H7.29167C7.0154 9 6.75045 9.10536 6.5551 9.29289C6.35975 9.48043 6.25 9.73478 6.25 10V14C6.25 14.2652 6.35975 14.5196 6.5551 14.7071C6.75045 14.8946 7.0154 15 7.29167 15H9.375V17C9.375 17.2652 9.48475 17.5196 9.6801 17.7071C9.87545 17.8946 10.1404 18 10.4167 18H14.5833C14.8596 18 15.1246 17.8946 15.3199 17.7071C15.5153 17.5196 15.625 17.2652 15.625 17V15H17.7083C17.9846 15 18.2496 14.8946 18.4449 14.7071C18.6403 14.5196 18.75 14.2652 18.75 14V10C18.75 9.73478 18.6403 9.48043 18.4449 9.29289C18.2496 9.10536 17.9846 9 17.7083 9ZM16.6667 13H14.5833C14.3071 13 14.0421 13.1054 13.8468 13.2929C13.6514 13.4804 13.5417 13.7348 13.5417 14V16H11.4583V14C11.4583 13.7348 11.3486 13.4804 11.1532 13.2929C10.9579 13.1054 10.6929 13 10.4167 13H8.33334V11H10.4167C10.6929 11 10.9579 10.8946 11.1532 10.7071C11.3486 10.5196 11.4583 10.2652 11.4583 10V8H13.5417V10C13.5417 10.2652 13.6514 10.5196 13.8468 10.7071C14.0421 10.8946 14.3071 11 14.5833 11H16.6667V13Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <h2 class="font-semibold text-[3.2rem] leading-[70px]">{{ $articlesCount }}</h2>
                <span class="text-sm font-medium">Materi</span>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-full max-h-[126] md:max-h-auto md:w-full pb-4 mb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex flex-col md:flex-nowrap rounded-lg shadow-sm">
                <h2 class="text-md font-semibold text-dark w-full mb-3">Kusioner</h2>
                <hr class="mb-3">
                <div class="w-full flex space-y-6 md:space-y-0 flex-col md:flex-row">
                    <div class="w-full md:w-1/2 flex flex-col space-y-4">
                        <h3 class="font-semibold text-sm text-center">Jawaban Quiz Keseluruhan User</h3>
                        <div id="quizChart"></div>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col space-y-4">
                        <h3 class="font-semibold text-sm text-center">Jawaban Evaluasi Keseluruhan User</h3>
                        <div id="evalChart"></div>
                    </div>
                    <div class="w-full md:w-1/5 px-2">
                        <div
                            class="text-blue-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm">
                            <div class="h-10 w-10 bg-blue-100 rounded-lg text-blue-500 p-2 shadow-md">
                                <svg height="100%" width="100%" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.698 2.54374C10.175 2.62083 9.69588 3.00416 9.48963 3.51458L9.43963 3.63541L8.71463 3.64583L7.98963 3.65624L7.85004 3.72499C7.68338 3.80624 7.54171 3.95624 7.47296 4.12499C7.42713 4.23749 7.42713 4.25416 7.42088 5.40416C7.41463 6.70208 7.41463 6.70416 7.55421 6.91041C7.64171 7.03749 7.72713 7.10624 7.89171 7.18333L8.01046 7.23958H10.9271H13.8438L13.9834 7.17083C14.1438 7.09166 14.2542 6.97916 14.3313 6.81458L14.3855 6.69791L14.3917 5.56249C14.3959 4.79791 14.3896 4.38333 14.375 4.29374C14.3292 4.03541 14.1771 3.82916 13.9417 3.71458L13.823 3.65624L13.1063 3.64583L12.3917 3.63541L12.3438 3.50624C12.2438 3.22916 12.0188 2.94999 11.7605 2.78124C11.5959 2.67291 11.3209 2.57083 11.1188 2.54374C10.9355 2.51874 10.8771 2.51874 10.698 2.54374ZM11.1938 3.40833C11.3188 3.44999 11.5021 3.61666 11.5625 3.74166C11.5875 3.79374 11.6209 3.91874 11.6375 4.02083C11.6521 4.12291 11.673 4.22499 11.6855 4.24583C11.723 4.31666 11.8709 4.43541 11.9521 4.45624C12.0021 4.47083 12.325 4.47916 12.8084 4.47916H13.5834V5.44791V6.41666H10.9271H8.27088V5.44791V4.47916H9.05421C9.54796 4.47916 9.86879 4.47083 9.92504 4.45624C10.0313 4.42916 10.1542 4.33541 10.2021 4.24374C10.2188 4.20833 10.2417 4.11041 10.2521 4.02499C10.2813 3.75833 10.4021 3.56041 10.6021 3.44999C10.7875 3.34999 10.9813 3.33541 11.1938 3.40833Z"
                                        fill="currentColor" />
                                    <path
                                        d="M4.67294 4.76041C4.26877 4.87083 3.94169 5.18541 3.80002 5.60416C3.76252 5.71458 3.76044 5.95208 3.76044 13.5937V21.4687L3.8146 21.6083C3.97294 22.0167 4.28335 22.3021 4.67919 22.4062C4.78544 22.4333 5.51044 22.4375 10.9167 22.4375C17.6604 22.4375 17.15 22.4479 17.4354 22.3062C17.6313 22.2104 17.8459 21.9937 17.9459 21.7917C18.0896 21.4979 18.0834 21.6417 18.0834 18.6042V15.8625L18.0375 15.7708C17.9438 15.5917 17.7417 15.4917 17.5667 15.5396C17.4563 15.5708 17.3375 15.6729 17.2896 15.7812C17.2521 15.8604 17.25 16 17.25 18.5833C17.25 21.1937 17.2479 21.3062 17.2104 21.3875C17.1896 21.4354 17.1354 21.5 17.0917 21.5333L17.0146 21.5937H10.9167H4.81877L4.74169 21.5333C4.69794 21.5 4.64377 21.4354 4.62294 21.3875C4.58544 21.3042 4.58335 21.0771 4.58335 13.5833C4.58335 6.12291 4.58544 5.8625 4.62294 5.78125C4.66669 5.68541 4.73544 5.61666 4.81877 5.58541C4.85627 5.57083 5.1146 5.5625 5.51669 5.5625C5.88127 5.5625 6.1896 5.55416 6.23127 5.54166C6.45835 5.47916 6.59794 5.25208 6.54169 5.04166C6.5146 4.93958 6.39169 4.79583 6.29794 4.75625C6.20002 4.71666 4.8271 4.71875 4.67294 4.76041Z"
                                        fill="currentColor" />
                                    <path
                                        d="M15.5312 4.75833C15.3854 4.82292 15.2833 4.97708 15.2833 5.13542C15.2833 5.32292 15.4125 5.48958 15.6021 5.54167C15.6437 5.55417 15.9521 5.5625 16.3167 5.5625C16.7187 5.5625 16.9771 5.57083 17.0146 5.58542C17.0979 5.61667 17.1667 5.68542 17.2104 5.78125C17.2458 5.85625 17.25 5.92708 17.25 6.5C17.25 7.21667 17.2562 7.24583 17.4062 7.37083C17.6396 7.5625 17.9771 7.4625 18.0625 7.17708C18.0792 7.11667 18.0854 6.89375 18.0792 6.39583C18.0708 5.70417 18.0708 5.69583 18.0167 5.55833C17.8604 5.15 17.5521 4.86458 17.1562 4.76042C16.9896 4.71667 15.6292 4.71458 15.5312 4.75833Z"
                                        fill="currentColor" />
                                    <path
                                        d="M19.3542 6.99791C19.3146 7.02083 19.2625 7.06041 19.2375 7.08749C19.1729 7.15833 18.6521 7.96249 18.625 8.02916C18.5917 8.11666 18.6 8.27291 18.6438 8.36666C18.6896 8.46666 18.7334 8.49999 19.3063 8.88749C19.5271 9.03541 19.7084 9.16249 19.7084 9.17083C19.7084 9.17916 18.4604 11.0146 16.9375 13.2479L14.1646 17.3083L13.7563 17.5792C13.5292 17.7292 13.3438 17.85 13.3417 17.8479C13.3396 17.8458 13.3854 17.6271 13.4459 17.3646L13.5563 16.8854L16.15 13.1C17.5771 11.0187 18.75 9.29374 18.7584 9.26666C18.7979 9.11874 18.7417 8.94791 18.6188 8.83958C18.4709 8.71041 18.2729 8.69583 18.1188 8.80416C18.0542 8.85208 17.7417 9.29374 16.7334 10.7708C16.0188 11.8187 14.8459 13.5354 14.1313 14.5833L12.8292 16.4896L12.5604 17.6208C12.4125 18.2437 12.2917 18.7833 12.2917 18.8187C12.2938 18.9792 12.4459 19.1646 12.6125 19.2104C12.7792 19.2562 12.825 19.2312 13.7938 18.55C14.2917 18.2021 14.7209 17.8958 14.7479 17.8708C14.8313 17.7937 20.65 9.26874 20.6813 9.17708C20.7209 9.06874 20.7 8.89999 20.6396 8.80833C20.6104 8.76458 20.4063 8.61249 20.0938 8.39999C19.8188 8.21249 19.5959 8.04999 19.6 8.03541C19.6042 8.02083 19.6146 8.00208 19.625 7.99166C19.6354 7.98333 19.8563 8.11874 20.125 8.30208C20.3896 8.48124 20.6375 8.64166 20.6771 8.65833C20.8959 8.74999 21.1667 8.60208 21.2292 8.35833C21.2563 8.24791 21.2417 8.16666 21.1771 8.04999C21.1375 7.98124 21.0042 7.87916 20.4563 7.49791C20.0875 7.24166 19.7563 7.01458 19.7209 6.99583C19.6334 6.94791 19.4479 6.94999 19.3542 6.99791Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6.41669 10.1771V11.5833H7.82294H9.22919L9.22502 10.1812L9.21877 8.78124L7.81877 8.77499L6.41669 8.77083V10.1771ZM8.39169 10.1812L8.39585 10.75H7.82294H7.25002V10.1771V9.60416L7.81877 9.60833L8.38544 9.61458L8.39169 10.1812Z"
                                        fill="currentColor" />
                                    <path
                                        d="M10.7 8.96874C10.5938 9.00624 10.4875 9.11249 10.4459 9.22291C10.373 9.41041 10.4584 9.62499 10.6438 9.72291L10.7355 9.77083H12.9188C14.4105 9.77083 15.1209 9.76458 15.1605 9.74791C15.298 9.69583 15.4167 9.51874 15.4167 9.36458C15.4167 9.18333 15.273 9.00624 15.0917 8.96041C15.0313 8.94374 14.348 8.93749 12.8917 8.93749C11.15 8.93958 10.7667 8.94374 10.7 8.96874Z"
                                        fill="currentColor" />
                                    <path
                                        d="M10.6979 10.5917C10.5521 10.6563 10.45 10.8104 10.45 10.9688C10.45 11.1563 10.5792 11.3229 10.7688 11.375C10.8771 11.4042 13.9104 11.4042 14.0313 11.3729C14.1396 11.3458 14.2729 11.2375 14.3208 11.1375C14.4125 10.9458 14.3229 10.7063 14.1208 10.6021C14.0458 10.5646 13.975 10.5625 12.4021 10.5625C11.0875 10.5646 10.7479 10.5688 10.6979 10.5917Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6.41669 14.3229V15.7292L7.81877 15.725L9.21877 15.7187L9.22502 14.3167L9.22919 12.9167H7.82294H6.41669V14.3229ZM8.39169 14.3167L8.38544 14.8854L7.81877 14.8917L7.25002 14.8958V14.3229V13.75H7.82294H8.39585L8.39169 14.3167Z"
                                        fill="currentColor" />
                                    <path
                                        d="M10.6979 13.925C10.5521 13.9896 10.45 14.1437 10.45 14.3021C10.45 14.4896 10.5792 14.6562 10.7688 14.7083C10.8688 14.7354 12.6313 14.7354 12.7313 14.7083C12.9583 14.6458 13.0979 14.4187 13.0417 14.2083C13.0146 14.1062 12.8917 13.9625 12.7979 13.9229C12.7 13.8833 10.7896 13.8854 10.6979 13.925Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6.41669 18.4583V19.8542H7.82294H9.22919V18.4583V17.0625H7.82294H6.41669V18.4583ZM8.39585 18.4583V19.0208H7.82294H7.25002V18.4583V17.8958H7.82294H8.39585V18.4583Z"
                                        fill="#066F6A" />
                                </svg>
                            </div>
                            <h2 class="font-semibold text-[3.2rem]  leading-[70px]">{{ $questionsCount }}</h2>
                            <span class="text-sm font-medium">Total pertanyaan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-full pb-4 mb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex w-full flex-col md:flex-nowrap rounded-lg shadow-sm">
                <h2 class="text-md font-semibold text-dark w-full mb-3">User Gabung</h2>
                <hr class="mb-3">
                <div class="w-full flex flex-row flex-wrap h-auto">
                    <div class="w-full md:w-2/3 h-[300px] md:h-[400px]">
                        <div id="userChart"></div>
                    </div>
                    <div class="w-full md:w-1/3">
                        <h5 class="text-sm font-semibold text-dark mb-3 ml-2">User terbaru</h5>
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Nama</th>
                                    <th class="px-4 py-3">Usia kehamilan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($users as $user)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold truncate">{{ $user->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm truncate text-center">
                                            {{ get_age_of_pregnancy($user->age_pregnancy->pregnancy_start) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const month = {{ json_encode($userJoin) }}
        var pieOptions = {
            chart: {
                type: 'pie',
                height: '300px',
                width: '100%'
            },
            labels: ['Salah', 'Benar'],
            colors: ['#FF1752', '#0086FF'],
            legend: {
                position: 'bottom'
            }
        }

        const barOptions = {
            chart: {
                type: 'bar',
                height: '100%'
            },
            bar: {
                columnWidth: '90%',
            },
            series: [{
                data: month
            }],
            plotOptions: {
                bar: {
                    distributed: true,
                    columnWidth: '50%'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                custom: function({
                    series,
                    seriesIndex,
                    dataPointIndex,
                }) {
                    return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] +
                        ' user join</span>' +
                        '</div>';
                }
            },
            xaxis: {
                categories: [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'Nopember',
                    'Desember',
                ]
            },
        }

        const quizChartOption = {
            ...pieOptions,
            series: [{{ $quizAnswer['true'] }}, {{ $quizAnswer['true'] + $quizAnswer['false'] }}]
        }
        const evalChartOption = {
            ...pieOptions,
            series: [{{ $evalAnswer['true'] }}, {{ $evalAnswer['true'] + $evalAnswer['false'] }}]
        }

        var chartQuiz = new ApexCharts(document.querySelector("#quizChart"), quizChartOption);
        var chartEval = new ApexCharts(document.querySelector("#evalChart"), evalChartOption);
        var chartUser = new ApexCharts(document.querySelector("#userChart"), barOptions);

        chartUser.render();
        chartQuiz.render();
        chartEval.render();
    </script>

</x-app-layout>
