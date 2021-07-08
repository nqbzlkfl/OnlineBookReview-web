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
            <a href="{{ url('admin/home')}}">
            <div class="bg-blue-200 hover:bg-blue-300 cursor-pointer border rounded-md h-auto p-2 mb-2" title="category" style="font-family:Mukta">
                <h1 class="text-lg font-semibold text-gray-700 text-center">Category</h1>
            </div>
            </a>
            <div class="bg-blue-400 hover:bg-blue-300 cursor-pointer border rounded-md h-auto p-2" title="category" style="font-family:Mukta">
                <h1 class="text-lg font-semibold text-gray-700 text-center">Book</h1>
            </div>
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
                    <table class="w-full border-2 border-blue-400 md:mx-5 overflow-y-scroll">
                        <tr class="bg-gray-100">
                            <th class="text-center">No</th>
                            <th>Book Title</th>
                            <th>Author</th>
                            <th>Date Added</th>
                        </tr>
                        @foreach ($bookData as $book)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$book->bName}}</td>
                            <td>{{$book->bAuthor}}</td>
                            <td>{{$book->created_at}}</td>
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
                    <form method="POST" action="/admin/addBook">
                            @csrf
                            
                            <div class="flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="bName">Title</label>
                                <div class="flex mx-auto w-full">
                                    <input class="w-full px-8 p-2 border-2 border-gray-700 rounded-md" name="bName" id="bName" cols="100" rows="10" placeholder="Put title ...">
                                </div>
                            </div>
                            <div class="mt-2 flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="bAuthor">Author</label>
                                <div class="flex mx-auto">
                                    <input class="p-2 border-2 border-gray-700 rounded-md" name="bAuthor" id="bAuthor" cols="100" rows="10" placeholder="Put Author ...">
                                </div>
                            </div>
                            <div class="mt-2 flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="bDesc">Description</label>
                                <div class="flex mx-auto">
                                    <textarea class="x-8 p-2 border-2 border-gray-700 rounded-md" name="bDesc" id="bDesc" cols="100" rows="10" placeholder="Put Description ..."></textarea>
                                </div>
                            </div>
                            <div class="mt-2 flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="bInfo">Info (Optional)</label>
                                <div class="flex mx-auto">
                                    <input class="p-2 border-2 border-gray-700 rounded-md" name="bInfo" id="bInfo" cols="30" rows="10" placeholder="Put Info ...">
                                </div>
                            </div>
                            <div class="mt-2 flex flex-col justify-center mx-auto">
                                <label class="text-center jusitfy-center text-md font-semibold" for="bRate">Rate based on GoodReads</label>
                                <div class="flex mx-auto">
                                    <input class="p-2 border-2 border-gray-700 rounded-md" name="bRate" id="bRate" cols="100" rows="10" placeholder="Put rate (per 5) ...">
                                </div>
                            </div>
                            
                            <div class="mt-2 form-group row mb-0 mt-4">
                                <div class="flex justify-center items-center mx-auto">
                                    <button type="addBook" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-center flex mx-auto">
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
