@extends('layouts.app')

@section('title', 'Home Professeur List')

@section('contents')
    <div class="">
        <h1 class="font-bold text-2xl ml-3">Home Professeur List</h1>
      
        
<div class="flex items-cente flex-wrap justify-center   space-x-4  w-full ">
      
      <form class="px-4 w-full max-w-[230px] "action="{{ route('SearchProfesseur') }}" method="GET">
    
              <div class="relative">
                      <input type="text"name="keyword" id="keyword" value="{{ request('keyword') }}" class="w-full max-w-[160px] text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" id="">
                  <button type="submit" value="Search"
                      class="absolute end-2.5 bottom-1/2 translate-y-1/2 p-4 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                          class="w-2 h-2">
                          <path d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" stroke-width="2" stroke-linejoin="round"
                              stroke-linecap="round" stroke="currentColor"></path>
                      </svg>
                      <span class="sr-only">Search</span>
                  </button>
              </div>
     </form>


      <form action="{{ route('admin/professeurs/importExcel') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <input id="picture" id="file" name="file" accept=".xlsx, .xls" type="file"
              class="flex h-10 w-40 rounded-md border border-input bg-gray-400 px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
          <button type="submit" class="btn ">Importer</button>

      </form>
      <p>ADD Professeur:</p>
      <a href="{{ route('admin/professeurs/create') }}"
          class="rounded-lg  relative w-10 h-10 cursor-pointer flex items-center border  bg-green-300 group hover:bg-green-500 ">
          <span class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center ">
              <svg class="svg w-8 text-white" fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                  xmlns="http://www.w3.org/2000/svg">
                  <line x1="12" x2="12" y1="5" y2="19"></line>
                  <line x1="5" x2="19" y1="12" y2="12"></line>
              </svg>
          </span>
      </a>
  </div>
       
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="overflow-x-auto overflow-y-auto">

            <table
                class="w-full overflow-x-auto shadow rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">id</th>
                        <th scope="col" class="px-6 py-3">Nom Professeur</th>
                        <th scope="col" class="px-6 py-3">Prenom Professeur</th>
                        <th scope="col" class="px-6 py-3">Date_Naissance</th>
                        <th scope="col" class="px-6 py-3">Date Recrutement</th>
                        <th scope="col" class="px-6 py-3">Function</th>
                        <th scope="col" class="px-6 py-3">Situation Familiale</th>
                        <th scope="col" class="px-6 py-3">Nombre d'enfants</th>
                        <th scope="col" class="px-6 py-3">Secteur</th>
                        <th scope="col" class="px-6 py-3">Grade</th>
                        <th scope="col" class="px-6 py-3">Echelle</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>


                    </tr>
                </thead>
                <tbody class=" min-w-full overflow-x-auto py-4 lg:overflow-x-hidden">
                    @if ($professeur->count() > 0)
                        @foreach ($professeur as $rs)
                            <tr
                                class=" border-b bg-[#f8f4f3]  dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-300">
                                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $rs->Nom_Professeur }}
                                </td>
                                <td>
                                    {{ $rs->Prenom_Professeur }}
                                </td>
                                <td>
                                    {{ $rs->Date_Naissance }}
                                </td>
                                <td>
                                    {{ $rs->Date_Recrutement }}
                                </td>
                                <td>
                                    {{ $rs->function }}
                                </td>
                                <td>
                                    {{ $rs->situation_familiale }}
                                </td>
                                <td>
                                    {{ $rs->Nombre_enfants }}
                                </td>
                                <td>
                                    {{ $rs->secteur }}
                                </td>
                                <td>
                                    {{ $rs->grade }}
                                </td>
                                <td>
                                    {{ $rs->echelle }}
                                </td>
                                <td>
                                    {{ $rs->status }}
                                </td>
                                

                                <td class="px-6 py-4 whitespace-nowrap w-full md:w-auto">
                                    <div class="h-14 pt-5 flex justify-center md:justify-start">
                                        <a href="{{ route('admin/professeurs/show', $rs->id) }}"
                                            class="text-blue-800">
                                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17a6 6 0 0 0 5.458-4c.09-.3.09-.6 0-.9A11.965 11.965 0 0 0 15 7a6 6 0 0 0-6 6 6 6 0 0 0 6 4zM9 17a6 6 0 0 1-5.458-4c-.09-.3-.09-.6 0-.9A11.965 11.965 0 0 1 9 7a6 6 0 0 1 6 6 6 6 0 0 1-6 4zM15 13a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
                                        </svg>
                                        </a>|
                                        <a href="{{ route('admin/professeurs/edit', $rs->id) }}"
                                            class="text-green-800 pl-2">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 20h5l7-7-5-5-7 7v5zM11 20h5v-5l-5 5zM5 5L20 20"></path>
                                        </svg>
                                        </a> |
                                        <form action="{{ route('admin/professeurs/destroy', $rs->id) }}" method="POST"
                                            onsubmit="return confirm('Delete?')" class="text-red-800">
                                            @csrf
                                            @method('DELETE')
                                            <button>
                                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 0 0-1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v1l3 0"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 6h14v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 6v14"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 6v14"></path>
                                            </svg></button>
                                        </form>
                                    </div>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Professeur not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $professeur->links() }}

        </div>
    </div>
@endsection
