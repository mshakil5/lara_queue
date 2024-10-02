@extends('admin.admin_master')
@section('admin')
<main class="relative h-screen overflow-hidden bg-gray-100 dark:bg-gray-800 rounded-2xl">
    <div class="flex items-start justify-between">
        <div class="relative hidden h-screen my-4 ml-4 shadow-lg lg:block w-80">
            <div class="h-full bg-white rounded-2xl dark:bg-gray-700">
                
                    {{-- NAVBAR --}}
                    @include('admin.sidebar.sidebar')
                    
                </div>
            </div>
            
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                
                
                @include('admin.header.header')
    
                
                        <div class="flex flex-col max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-700 sm:px-6 md:px-6 lg:px-6">
                            <div class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white">
                                Email send to user
                            </div>
                            <div class="mt-8">
                                {{-- <form action="{{ route('admin.Newregister.create') }}" method="POST"> --}}
                                <form action="{{ route('admin.emailSubmit') }}" method="POST">
                                    @csrf
                                    
                                    <div class="flex flex-col mb-2">
                                        <div class=" relative ">
                                            <input type="text" name="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Name"/>
                                        </div>
                                    </div>

                                    <div class="flex flex-col mb-2">
                                        <div class=" relative ">
                                            <input type="email" name="email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email Address"/>
                                        </div>
                                    </div>
                                    
                                    <div class="flex w-full my-4">
                                        <button type="submit" class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
@endsection    
