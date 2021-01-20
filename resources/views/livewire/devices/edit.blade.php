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
                        <input type="hidden" wire:model="selected_id">
                        <div class="sm:col-span-1">
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
                            <label for="imei" class="block text-sm font-medium text-gray-700">
                                IMEI
                            </label>
                            <div class="mt-1">
                                <input  wire:model="imei"
                                        type="text"
                                        name="imei"
                                        id="imei"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('imei') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="os" class="block text-sm font-medium text-gray-700">OS</label>
                            <div class="mt-1">
                                <select wire:model="os" id="os" name="os" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select an OS</option>
                                    @foreach(['iOS', 'Android'] as $os)
                                        <option value="{{ $os }}">{{ $os }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="device_plan_id" class="block text-sm font-medium text-gray-700">Device Plans</label>
                            <div class="mt-1">
                                <select wire:model="device_plan_id" id="device_plan_id" name="device_plan_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select a Device Plan</option>
                                    @foreach($devicePlans as $devicePlan)
                                        <option value="{{ $devicePlan->id }}">{{ $devicePlan->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <div class="sm:col-span-1">
                            <label for="network_id" class="block text-sm font-medium text-gray-700">Physical Location</label>
                            <div class="mt-1">
                                <select wire:model="physical_location_id" id="physical_location_id" name="physical_location_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select a Physical Location</option>
                                    @foreach($physicalLocations as $physicalLocation)
                                        <option value="{{ $physicalLocation->id }}">{{ $physicalLocation->nickname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="physical_location_port" class="block text-sm font-medium text-gray-700">
                                Port
                            </label>
                            <div class="mt-1">
                                <input  wire:model="physical_location_port"
                                        type="text"
                                        name="physical_location_port"
                                        id="physical_location_port"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('physical_location_port') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="network_id" class="block text-sm font-medium text-gray-700">Virtual Location</label>
                            <div class="mt-1">
                                <select wire:model="virtual_location_id" id="virtual_location_id" name="virtual_location_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select a Virtual Location</option>
                                    @foreach($virtualLocations as $virtualLocation)
                                        <option value="{{ $virtualLocation->id }}">{{ $virtualLocation->nickname }}</option>
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
