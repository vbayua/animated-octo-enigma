<x-layout>

    <div class="flex flex-col items-center justify-center">
        <div class="">
            {{-- SEARCH --}}
            <div class="max-w-96 min-w-64">
                <form action="" method="post">
                    <input type="search" class="input input-bordered w-full" name="search" id="search"
                        placeholder="Cari Temuan">
                </form>
            </div>
        </div>

        <div class="flex-1 lg:m-14 lg:p-14 rounded-xl border-t-2 container min-h-screen space-y-14">
            <h2 class="text-3xl font-bold text-center">
                Data Temuan
            </h2>

            <div class="overflow-hidden">
                <table class="table md:border-0">
                    <thead class="max-md:h-px max-md:overflow-hidden max-md:p-0 max-md:absolute xs:w-px">
                        <tr class="max-md:block max-md:border-b-2 max-md:mb-1.5">
                            <th></th>
                            <th>Temuan</th>
                            <th>Klasifikasi</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($temuan as $item)
                            <tr
                                class="max-md:block max-md:border-b-2 max-md:mb-4 max-md:px-4 max-md:border max-md:shadow-md">
                                <td class="max-md:border-b max-md:bg-black max-md:text-white max-md:flex max-md:justify-center max-md:text-sm max-md:before:content-['']"
                                    data-label="">
                                    <span class="max-md:font-bold">{{ $loop->iteration }}</span>
                                </td>
                                <td class="max-md:border-b max-md:flex max-md:justify-between max-md:text-sm"
                                    data-label="Temuan">
                                    <span class="md:hidden max-md:font-bold">Temuan</span>
                                    <span class="max-w-sm">{{ $item->title }}</span>
                                </td>
                                <td class="max-md:border-b max-md:flex max-md:justify-between max-md:text-sm"
                                    data-label="Klasifikasi">
                                    <span class="md:hidden max-md:font-bold">Klasifikasi</span>
                                    <span class="max-w-sm">
                                        {{ $item->level->name }}
                                    </span>
                                </td>
                                <td class="max-md:border-b max-md:flex max-md:justify-between max-md:text-sm"
                                    data-label="Kategori">
                                    <span class="md:hidden max-md:font-bold">Kategori</span>
                                    <span class="max-w-sm">
                                        {{ $item->category->name }}
                                    </span>
                                </td>
                                <td class="max-md:border-b max-md:flex max-md:justify-between max-md:text-sm"
                                    data-label="Status">
                                    <span class="md:hidden max-md:font-bold">Status</span>
                                    <span class="max-w-sm">
                                        {{ $item->status->name }}
                                    </span>
                                </td>
                                <td class="max-md:border-b max-md:flex max-md:justify-center max-md:text-sm"
                                    data-label="Detail">
                                    <a href="#" class="btn btn-ghost max-md:btn-wide">Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- @foreach ($temuan as $item)
            <div class="card border-2 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $item->title }}
                    </h2>

                    <div class="card-actions justify-end">
                        <div class="badge-outline">{{ $item->category->name }}</div>
                        <div class="badge-outline">{{ $item->status->name }}</div>
                    </div>
                </div>
            </div>
        @endforeach --}}
    </div>

</x-layout>
