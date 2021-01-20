<div>
    <div class="mt-6  sm:px-6 lg:px-8">
        <form class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-4 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $selected_id }}
                        </h3>
                    </div>
                </div>

                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <input type="hidden" wire:model="selected_id">
                        <div class="sm:col-span-1">
                            <label for="nickname" class="block text-sm font-medium text-gray-700">
                                ID
                            </label>
                            <div class="mt-1">
                                {{ $selected_id }}
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="country_id" class="block text-sm font-medium text-gray-700">Country</label>
                            <select wire:model="country_id" id="country_id" name="country_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country_id') <span class="error">{{ $message }}</span> @enderror
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

<div class="grid grid-cols-1 gap-1 mt-10 mb-10">
    <x-list-datatable>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th colspan="3" scope="col" class="px-6 pt-3 pb-1 text-left text-sm  text-gray-500 uppercase tracking-wider">
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
                        {{ $record->name }}
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
</div>
