<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <x-bladewind.tab-group name="free-pics">

                    <x-slot name="headings">
                        <x-bladewind.tab-heading name="unsplash-1" label="Lissete Laverde" />

                        <x-bladewind.tab-heading name="unsplash-2" label="Marko Pavlichenko" />

                        <x-bladewind.tab-heading name="unsplash-3" active="true" label="Yoonbae Cho" />

                        <x-bladewind.tab-heading name="unsplash-4" label="Sam Carter" />
                    </x-slot>

                    <x-bladewind.tab-body>

                        <x-bladewind.tab-content name="unsplash-1">
                            <x-bladewind.table divider="thin">
                                <x-slot name="header">
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                </x-slot>
                                <tr>
                                    <td>Alfred Rowe</td>
                                    <td>Outsourcing</td>
                                    <td>alfred@therowe.com</td>
                                </tr>
                                <tr>
                                    <td>Michael K. Ocansey</td>
                                    <td>Tech</td>
                                    <td>kabutey@gmail.com</td>
                                </tr>
                            </x-bladewind.table>
                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="unsplash-2">
                            <x-bladewind.table divider="thin">
                                <x-slot name="header">
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                </x-slot>
                                <tr>
                                    <td>Alfred Rowe</td>
                                    <td>Outsourcing</td>
                                    <td>alfred@therowe.com</td>
                                </tr>
                                <tr>
                                    <td>Michael K. Ocansey</td>
                                    <td>Tech</td>
                                    <td>kabutey@gmail.com</td>
                                </tr>
                            </x-bladewind.table>
                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="unsplash-3" active="true">
                            <x-bladewind.table divider="thin">
                                <x-slot name="header">
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                </x-slot>
                                <tr>
                                    <td>Alfred Rowe</td>
                                    <td>Outsourcing</td>
                                    <td>alfred@therowe.com</td>
                                </tr>
                                <tr>
                                    <td>Michael K. Ocansey</td>
                                    <td>Tech</td>
                                    <td>kabutey@gmail.com</td>
                                </tr>
                            </x-bladewind.table>
                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="unsplash-4">
                            <x-bladewind.table divider="thin">
                                <x-slot name="header">
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
                                </x-slot>
                                <tr>
                                    <td>Alfred Rowe</td>
                                    <td>Outsourcing</td>
                                    <td>alfred@therowe.com</td>
                                </tr>
                                <tr>
                                    <td>Michael K. Ocansey</td>
                                    <td>Tech</td>
                                    <td>kabutey@gmail.com</td>
                                </tr>
                            </x-bladewind.table>
                        </x-bladewind.tab-content>

                    </x-bladewind.tab-body>

                </x-bladewind.tab-group>
            </div>
        </div>
    </div>
</x-app-layout>
