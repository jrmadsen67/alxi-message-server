<div>
    <div class="mt-6  sm:px-6 lg:px-8">
        <form class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-4 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Edit Allocation
                        </h3>
                    </div>
                </div>

                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <input type="hidden" wire:model="selected_id">
                        <div class="sm:col-span-1">
                            <label for="device_id" class="block text-sm font-medium text-gray-700">Device</label>
                            <div class="mt-1">
                                <select wire:model="device_id" id="device_id" name="device_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($devices as $device)
                                        <option value="{{ $device->id }}">{{ $device->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="sim_card_id" class="block text-sm font-medium text-gray-700">SIM Cards</label>
                            <div class="mt-1">
                                <select wire:model="sim_card_id" id="sim_card_id" name="sim_card_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($simCards as $simCard)
                                        <option value="{{ $simCard->id }}">{{ $simCard->iccid }} - {{ $simCard->msisdn }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="device_id" class="block text-sm font-medium text-gray-700">Device Groups</label>
                            <div class="mt-1">
                                <select wire:model="device_group_id" id="device_group_id" name="device_group_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select a Device Plan</option>
                                    @foreach($deviceGroups as $deviceGroup)
                                        <option value="{{ $deviceGroup->id }}">{{ $deviceGroup->nickname }}</option>
                                    @endforeach
                                </select>
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
