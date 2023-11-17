@extends('modeles/modele')
    @section('content')
<div>
<img src="{{ asset('images/anime01.jpg') }}" width="400" height="500">
<a href="{{ route('onepiece') }}" type="button" class="btn btn-primary">Cliquez ici</a>
</div>
<div>
<img src="{{ asset('images/anime02.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
<div>
<img src="{{ asset('images/anime03.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
<div>
<img src="{{ asset('images/anime04.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
<div>
<img src="{{ asset('images/anime05.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
<div>
<img src="{{ asset('images/anime06.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
<div>
<img src="{{ asset('images/anime07.jpg') }}" width="400" height="500">
<button type="button" class="btn btn-primary">Cliquez ici</button>
</div>
@endsection