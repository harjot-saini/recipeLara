@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" id="app-recipe">
            <div class="col-md-4">
                <app-search-recipe></app-search-recipe>
                <app-list-recipe></app-list-recipe>
            </div>
            <div class="col-md-8">
                <app-detail-recipe></app-detail-recipe>
            </div>

        </div>
    </div>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'baseUrl' => URL(''),
        ]); ?>
    </script>
    <script src="{{ mix('js/recipe.js') }}"></script>

@endsection
