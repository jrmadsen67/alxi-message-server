<div>
    <div class="mt-6  sm:px-6 lg:px-8">
        <form class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-4 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $iccid }} - {{ $msisdn }}
                        </h3>
                    </div>
                </div>

                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <input type="hidden" wire:model="selected_id">
                        <div class="sm:col-span-1">
                            <label for="iccid" class="block text-sm font-medium text-gray-700">
                                ICCID
                            </label>
                            <div class="mt-1">
                                <input  wire:model="iccid"
                                        type="text"
                                        name="iccid"
                                        id="iccid"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('iccid') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="msisdn" class="block text-sm font-medium text-gray-700">
                                MSISDN
                            </label>
                            <div class="mt-1">
                                <input  wire:model="msisdn"
                                        type="text"
                                        name="msisdn"
                                        id="msisdn"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @error('msisdn') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 relative">
                        <div class="sm:col-span-1">
                            <label for="network_id" class="block text-sm font-medium text-gray-700">Network</label>
                            <div class="mt-1">
                                <select wire:model="network_id" id="network_id" name="network_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($networks as $network)
                                        <option value="{{ $network->id }}">{{ $network->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="device_plan_id" class="block text-sm font-medium text-gray-700">Device Plans</label>
                            <div class="mt-1">
                                <select wire:model="device_plan_id" id="device_plan_id" name="device_plan_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($device_plans as $device_plan)
                                        <option value="{{ $device_plan->id }}">{{ $device_plan->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-1">
                            <label for="simcard_plan_id" class="block text-sm font-medium text-gray-700">SIM Card Plans</label>
                            <div class="mt-1">
                                <select wire:model="simcard_plan_id" id="simcard_plan_id" name="simcard_plan_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Select a SIM Card Plan</option>
                                    @foreach($simcard_plans as $simcard_plan)
                                        <option value="{{ $simcard_plan->id }}">{{ $simcard_plan->nickname }}</option>
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
