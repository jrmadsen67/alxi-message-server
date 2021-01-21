<div>
    <div class="mt-6  sm:px-6 lg:px-8">
        <form class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-4 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $nickname }}
                        </h3>
                    </div>
                </div>

                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <div class="sm:col-span-1">
                            <input type="hidden" wire:model="selected_id">
                            <label for="nickname" class="block text-sm font-medium text-gray-700">
                                Nickname
                            </label>
                            <div class="mt-1">
                                <input  wire:model="nickname"
                                        type="text"
                                        name="nickname"
                                        id="nickname"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('nickname') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="msisdn" class="block text-sm font-medium text-gray-700">
                                Hourly Capacity
                            </label>
                            <div class="mt-1">
                                <input  wire:model="hourly_capacity"
                                        type="text"
                                        name="hourly_capacity"
                                        id="hourly_capacity"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('hourly_capacity') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="msisdn" class="block text-sm font-medium text-gray-700">
                                Daily Capacity
                            </label>
                            <div class="mt-1">
                                <input  wire:model="daily_capacity"
                                        type="text"
                                        name="daily_capacity"
                                        id="daily_capacity"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('daily_capacity') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="msisdn" class="block text-sm font-medium text-gray-700">
                                Monthly Capacity
                            </label>
                            <div class="mt-1">
                                <input  wire:model="monthly_capacity"
                                        type="text"
                                        name="monthly_capacity"
                                        id="monthly_capacity"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('monthly_capacity') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2 absolute right-0 bottom-0 mr-1/6">
                            <button wire:click="cancel" type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </button>
                            <button wire:click="update"  type="button" class="ml-1 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>



<div class="grid grid-cols-2 gap-1 mt-10 mb-10">
    <x-list-datatable>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th colspan="3"  scope="col" class="px-6 pt-3 pb-1 text-left text-sm  text-gray-500 uppercase tracking-wider">
                    Devices
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nickname
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    IMEI
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    OS
                </th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($devices as $record)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $record->nickname }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $record->imei }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $record->os }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-list-datatable>

    <x-list-datatable>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th colspan="2" class="px-6 pt-3 pb-1 text-left text-sm  text-gray-500 uppercase tracking-wider">
                    SIM Cards
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ICCID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    MSISDN
                </th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($simcards as $record)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $record->iccid }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $record->msisdn }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-list-datatable>

</div>
