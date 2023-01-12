<x-app-layout>
    <div class="d-flex">
        <div class="p-2 flex-fill w-75 ">
            @yield('admin_container')
        </div>

        <div class="p-2 flex-fill w-25 ">

            <a href="/admin/add-notice"><button type="submit" class="btn btn-primary my-2 w-75"> Add
                    Notice</button></a><br>

            <a href="/admin/datas"><button type="submit" class="btn btn-primary my-2 w-75">Datas </button></a><br>
            <a href="/admin/trash"><button type="submit" class="btn btn-primary my-2 w-75">Trashed Datas </button></a><br>
        </div>
    </div>
</x-app-layout>
