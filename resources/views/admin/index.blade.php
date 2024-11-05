@extends("admin.layouts.app")

@section("page-title", "Projects")

@section("main-content")
<div class="container">
    <div class="row mb-2">
    @forelse ($projects as $index => $project )
        <div style="width: 18rem;">
            <div class="card-body">
            <h1 class="card-text">Titolo:  {{ $project->name }}</h1>
            <p class="card-text">Data: {{ $project->date }}</p>
            <p class="card-text">Descrizione: {{ $project->description }}</p>
            <a class="card-text"> Link: {{ $project->link }}</a>
             <a class="btn btn-secondary mb-2" href=" }}">
                Vai al Progetto
            </a>
            <a class="btn btn-secondary mb-2" href="">
                Edita Il progetto
            </a>
            <form action=" }}"
                 method="post">
            @csrf
            @method("DELETE")
                <input type="submit" value="Elimina" class="btn btn-danger mb-2">
            </form>
            </div>
        </div>
    @empty
        <div>
            <h1>
                No Projects Are aviable
            </h1>
        </div>
    @endforelse
    </div>
</div>
@endsection
