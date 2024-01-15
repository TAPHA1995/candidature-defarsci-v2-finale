@extends('layouts.front')

@section('content')

<div class="conatiner">
  
    <div class="card">
        <div class="card-header bg-info text-white">Editer un candidat</div>
        <div class="card-body">
            <form action="{{route('update.candidat',$candidat->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$candidat->email }}">
                </div>
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" class="form-control" value="{{$candidat->nom }}">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" class="form-control" value="{{$candidat->prenom }}">
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" name="telephone" id="" class="form-control" value="{{$candidat->telephone }}">
                </div>
                
                <div class="form-group">
                    <label for="">Adresse Domicile</label>
                    <input type="text" name="adresse" id="" class="form-control my-3" value="{{$candidat->adresse }}" requered>
                </div>

                <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3" value="{{$candidat->domaine }}">
                            {{-- foreach module --}}
                            <option value="Ressources Humaines">Ressources Humaines</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion Projet">Gestion Projet</option>
                            <option value="Informatique Bureautique">Informatique Bureautique</option>
                            <option value="Développement Web">Développement Web</option>
                            <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                            <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Design Graphique">Design Graphique</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="myfile">Télécharger votre CV:</label>
                        <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3" value="{{$candidat->mylfie}}" required>

                    </div>

                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" value="{{$candidat->question}}" required>
                    </div>
                <div class="form-group">
                    <button class="btn btn-success mt-3">Modifier</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection
