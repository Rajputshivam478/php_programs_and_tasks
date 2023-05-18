<header class="bg-blue-400  px-2 md:px-6 py-4 text-white h-52 rounded-xl z-10 space-y-2">
    <div class="flex flex-col md:flex-row gap-4 items-start justify-between px-10">
        <div class="space-y-1">
            <ul class="text-xs font-extralight flex items-center gap-1">
                <li>Pages</li>
                <li>/</li>
                <li>Profile</li>
            </ul>
            <span class="block text-sm font-semibold">Profile</span>
        </div>
        <div class="text-xs flex flex-col-reverse md:flex-row md:items-center gap-6">
            <form action="#" class="relative">
                <svg class="w-4 h-4 absolute bottom-2 left-2 text-black" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z"
                        fill="currentColor"></path>
                </svg>
                <input type="search" name="search" id="search " placeholder="Type here.." class="py-2 rounded-xl px-8">
            </form>
            <div class="flex items-center gap-4">
                <form action="./service/logout.php" method="post">
                    <button type="submit" name="logout" class="flex items-center gap-1">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M12 2C9.38 2 7.25 4.13 7.25 6.75c0 2.57 2.01 4.65 4.63 4.74.08-.01.16-.01.22 0h.07a4.738 4.738 0 004.58-4.74C16.75 4.13 14.62 2 12 2z">
                            </path>
                            <path
                                d="M17.08 14.15c-2.79-1.86-7.34-1.86-10.15 0-1.27.85-1.97 2-1.97 3.23s.7 2.37 1.96 3.21C8.32 21.53 10.16 22 12 22c1.84 0 3.68-.47 5.08-1.41 1.26-.85 1.96-1.99 1.96-3.23-.01-1.23-.7-2.37-1.96-3.21z">
                            </path>
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
                <a href="#">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z">
                            </path>
                        </g>
                    </svg>
                </a>
                <a href="#">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div
        class="p-3 flex flex-col md:flex-row md:items-center justify-between md:pr-8 text-black bg-white bg-opacity-90 rounded-xl translate-y-0 md:translate-y-24">
        <div class="flex items-center gap-3">
            <div class="relative">
                <img src="<?php echo $path; ?>" alt="Profile photo" class="rounded-lg w-20 h-20 object-cover">
                <span class="p-1 w-5 rounded-md bg-white block absolute -right-2 -bottom-1">
                    <svg class="w-3 h-3 text-secondary-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z">
                        </path>
                    </svg>
                </span>
            </div>
            <div>
                <span class="font-bold">
                    <?php echo $fname." ".$lname; ?>
                </span>
            </div>
        </div>
        <div class="pt-6 md:pt-0">
            <ul class="flex flex-col pr-28 md:pr-0 md:flex-row md:items-center gap-4">
                <li>
                    <a href="#" class="flex items-center gap-1 py-3 px-2 md:px-6 bg-white shadow-md rounded-xl w-28">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z">
                            </path>
                        </svg>
                        <span class="text-xs font-semibold">OVERVIEW</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-1 py-3 px-2 md:px-6 hover:bg-white hover:shadow-md rounded-xl w-28">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z">
                            </path>
                            <path
                                d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z">
                            </path>
                        </svg>
                        <span class="text-xs font-semibold">TEAMS</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-1 py-3 px-2 md:px-6 hover:bg-white hover:shadow-md rounded-xl w-28">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"
                            fill="currentColor">
                            <path
                                d="M865.3 244.7c-.3-.3-61.1 59.8-182.1 180.6l-84.9-84.9 180.9-180.9c-95.2-57.3-217.5-42.6-296.8 36.7A244.42 244.42 0 0 0 419 432l1.8 6.7-283.5 283.4c-6.2 6.2-6.2 16.4 0 22.6l141.4 141.4c6.2 6.2 16.4 6.2 22.6 0l283.3-283.3 6.7 1.8c83.7 22.3 173.6-.9 236-63.3 79.4-79.3 94.1-201.6 38-296.6z">
                            </path>
                        </svg>
                        <span class="text-xs font-semibold">PROJECTS</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>