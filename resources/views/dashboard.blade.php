@extends('layouts.front')
<br><br><br><br><br>
<br><br><br><br><br>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(session('success'))
    <script>
    swal("Success","{{ Session::get('success')}}", 'success',{
        button:true,
        button:"Ok",
    });
    </script>
    @endif
    <div class="card-dashboard">
    <a href="{{ route('users') }}">
        <div class="row">
            <div class="card">
                <h4>Gestion des utilisateurs</h4>
            </div>
        </div>
        </a>
    <a href="{{ route('liste.candidat') }}">
        <div class="row">
            <div class="card">
                <h4>Gestion des candidature</h4>
            </div>
        </div>
    </a>
    <a href="{{ route('liste.module') }}">
        <div class="row">
            <div class="card">
                <h4>Gestion des modules</h4>
            </div>
        </div>
    </a>
    </div>
    <!-- <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-3xl mx-4 my-4">Les actions possibles</h3>
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <a href="{{ route('users') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des utilisateurs
                    </a>
                    <a href="{{ route('liste.candidat') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des candidature
                    </a>
                    <a href="{{ route('liste.module') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des modules
                    </a>
                </div>
            </div>
        </div>
    </div> -->
           
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.card-dashboard{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
}
.card-dashboard a{
    text-decoration:none;
    color:none;
}


.card {
  border-radius: 10px;
  filter: drop-shadow(0 5px 10px 0 #ffffff);
  width: 400px;
  height: 180px;
  background-color: #ffffff;
  padding: 20px;
  position: relative;
  z-index: 0;
  overflow: hidden;
  transition: 0.6s ease-in;
}

.card::before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -15px;
  right: -15px;
  background: #f55a2b;
  height:220px;
  width: 25px;
  border-radius: 32px;
  transform: scale(1);
  transform-origin: 50% 50%;
  transition: transform 0.25s ease-out;
}

.card:hover::before{
    transition-delay:0.2s ;
    transform: scale(40);
}

.card:hover{
    color: #ffffff;
}

.card p{
    padding: 10px 0;
}
</style>