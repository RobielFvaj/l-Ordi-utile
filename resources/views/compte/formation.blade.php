@extends('compte.index')
@section('profile')
    
<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">
 

    <form action="{{ route('profile') }}" method="post">
      @csrf


      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formation">
           formation
          </label>
          <div class="relative ">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option>----</option>
              <option>Elève</option>
              <option>Etudiant</option>
              <option>Stagiaire</option>
              <option>Apprenti</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formation">
             langue
            </label>
            <div class="relative ">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>----</option>
                <option>France</option>
                <option>Anglais</option>
                <option>Allemand</option>
                <option>Italie</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
          </div>
      </div>

     
      <div class="flex justify-center ">
        <button type="submit" class="bg-green-400 text-white px-12 py-4 rounded font-medium ">
          Sauvegarder
      </button>
      </div>
   

    </form>

  </div>
</div>
@endsection