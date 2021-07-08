@extends('layouts.adminnav')

@section('content')
<div class=" pt-2 pt-3 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-blue-700 border border-b-0 px-4 py-2 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-xl text-white font-semibold">Welcome to Admin section</h1>
    </div>
</div>

<div class="flex flex-1 flex-col lg:flex-row h-full w-full lg:mb-0 lg:min-h-0 lg:min-w-0">
        
    <div class="block pb-2 lg:pb-0 w-full lg:max-w-sm px-3 flex flex-row lg:flex-col md:fl flex-wrap lg:flex-nowrap my-3">
        <!-- control content left -->
        
        <div class="w-full h-24 min-h-0 min-w-0">
            <div class="bg-blue-400 hover:bg-blue-300 cursor-pointer border rounded-md h-auto p-2 mb-2" title="category" style="font-family:Mukta">
                <h1 class="text-lg font-semibold text-gray-700 text-center">Category</h1>
            </div>
            <a href="{{ url('admin/addBook')}}">
            <div class="bg-blue-200 hover:bg-blue-300 cursor-pointer border rounded-md h-auto p-2" title="category" style="font-family:Mukta">
                <h1 class="text-lg font-semibold text-gray-700 text-center">Book</h1>
            </div>
            </a>
        </div>
    </div>
        
    <div class="h-full w-auto lg:flex-1 px-3 my-3 min-h-0 min-w-0">
        <!-- overflow content right -->
        <div class="bg-transparent h-auto min-h-0 min-w-0 overflow-auto my-auto">
            <div class="border bg-blue-200">
                <div class="flex md:flex-col my-3 justify-center mx-auto">
                    <h1 class="text-center">View Category</h1>
                </div>
            </div>
            <div class="bg-white border mb-2">
                <div class="flex my-3 justify-center mx-auto max-h-80">
                    <table class="w-full border-2 border-blue-400 md:mx-52 overflow-y-scroll">
                        <tr class="bg-gray-100">
                            <th class="text-center">No</th>
                            <th>Category</th>
                        </tr>
                        @foreach ($catData as $cat)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$cat->category}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
            <div class="border bg-blue-200 mt-3">
                <div class="flex md:flex-col my-3 justify-center mx-auto">
                    <h1 class="text-center">Add Category</h1>
                </div>
            </div>
            <div class="bg-white border mb-2">
                <div class="flex my-3 justify-center mx-auto">
                    <form method="POST" action="/admin/home">
                            @csrf
                            
                            <div class="flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="category">Add new category</label>
                                <div class="flex mx-auto">
                                    <input class="p-2 border-2 border-gray-700 rounded-md" name="category" id="category" cols="100" rows="10" placeholder="Put category ...">
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0 mt-4">
                                <div class="flex justify-center items-center mx-auto">
                                    <button type="addCategory" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-center flex mx-auto">
                                    {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
