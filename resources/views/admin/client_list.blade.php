@extends('admin.admin_master')
@section('clientList')
    <main class="relative h-screen overflow-hidden bg-gray-100 dark:bg-gray-800 rounded-2xl">
        <div class="flex items-start justify-between">
            <div class="relative hidden h-screen my-4 ml-4 shadow-lg lg:block w-80">
                <div class="h-full bg-white rounded-2xl dark:bg-gray-700">
                    <div class="flex items-center justify-center pt-6">
                        <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                            <defs>
                                <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%" id="linearGradient-1">
                                    <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                                    </stop>
                                    <stop stop-color="#FF0057" offset="86.1354%">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <g>
                                <path d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z" fill="#001B38">
                                </path>
                                <circle fill="url(#linearGradient-1)" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                                <circle fill="url(#linearGradient-1)" opacity="0.5" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                            </g>
                        </svg>
                    </div>
                    {{-- NAVBAR --}}
                    @include('admin.sidebar.sidebar')
                </div>
            </div>
            
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                
                @include('admin.header.header')
    
                <div class="container max-w-3xl px-4 mx-auto sm:px-10 divScroll" id="divScroll">
                    <div class="py-8">
                        <div class=" overflow-x-auto sm:-mx-10 sm:px-10">
                            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                
                                @if(Session::has('success'))
                                <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
                                <p class="font-bold">
                                {{ session::get('success') }}
                                </p>
                                </div>
                                @endif
                
                                <table class="min-w-full leading-normal" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                                User Name
                                            </th>
                                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                                Email Address
                                            </th>
                                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                                Role
                                            </th>
                                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                                status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($sellers as $Sellers)
                                            <tr>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{ $Sellers->name }}</td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{ $Sellers->email }}</td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{ $Sellers->status }}</td>
                                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                                    <button type="button" class="py-2 px-4 flex justify-center items-center  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg  ">
                                                        <a href='delete/{{ $Sellers->id }}'>Delete</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </main>
@endsection    
