<x-filament-widgets::widget class="fi-filament-info-widget">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <div>
                <a href="{{ config('dev.paypal') }}" rel="noopener noreferrer" target="_blank">
                    <svg class="h-10 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 154.728 190.5"
                        xmlns:v="https://vecta.io/nano">
                        <g transform="translate(898.192 276.071)">
                            <path clip-path="none"
                                d="M-837.663-237.968a5.49 5.49 0 0 0-5.423 4.633l-9.013 57.15-8.281 52.514-.005.044.01-.044 8.281-52.514c.421-2.669 2.719-4.633 5.42-4.633h26.404c26.573 0 49.127-19.387 53.246-45.658.314-1.996.482-3.973.52-5.924v-.003h-.003c-6.753-3.543-14.683-5.565-23.372-5.565z"
                                fill="#001c64" />
                            <path clip-path="none"
                                d="M-766.506-232.402c-.037 1.951-.207 3.93-.52 5.926-4.119 26.271-26.673 45.658-53.246 45.658h-26.404c-2.701 0-4.999 1.964-5.42 4.633l-8.281 52.514-5.197 32.947a4.46 4.46 0 0 0 4.405 5.153h28.66a5.49 5.49 0 0 0 5.423-4.633l7.55-47.881c.423-2.669 2.722-4.636 5.423-4.636h16.876c26.573 0 49.124-19.386 53.243-45.655 2.924-18.649-6.46-35.614-22.511-44.026z"
                                fill="#0070e0" />
                            <path clip-path="none"
                                d="M-870.225-276.071a5.49 5.49 0 0 0-5.423 4.636l-22.489 142.608a4.46 4.46 0 0 0 4.405 5.156h33.351l8.281-52.514 9.013-57.15a5.49 5.49 0 0 1 5.423-4.633h47.782c8.691 0 16.621 2.025 23.375 5.563.46-23.917-19.275-43.666-46.412-43.666z"
                                fill="#003087" />
                        </g>
                    </svg>
                </a>
            </div>

            <div class="flex-1">
                <h2 class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white">
                    Donate
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Support this project by donating
                </p>
            </div>

            <div class="flex flex-col items-end gap-y-1">
                <x-filament::button color="gray" tag="a" href="{{ config('dev.paypal') }}"
                    icon="heroicon-m-arrow-top-right-on-square"
                    icon-alias="panels::widgets.filament-info.open-documentation-button" rel="noopener noreferrer"
                    target="_blank">
                    Donate now
                </x-filament::button>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
