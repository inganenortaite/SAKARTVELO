@extends('components.min_layout')
 
@section('content')

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">   
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="{{ url('admin/recipes/index') }}"><img class="img-fluid" alt="100%x280" src="{{ asset('images/Food_1.jpg') }}"></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{ url('admin/recipes/index') }}" class="list-group-item list-group-item-action">Sakartvelo Food Traditions</a></h4>
                        <p class="card-text">Food for Sakartvelians is not just an eating process. It is the best place for conversation, expression of emotions and relationships. It is a well-known fact that Sakartvelo is famous for it's hospitality. The phenomenon of respect for the visitor is originally expressed in the genes of the Sakartvelians.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="{{ url('admin/categories/index') }}"><img class="img-fluid" alt="100%x280" src="{{ asset('images/Food.jpg') }}"></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{ url('admin/categories/index') }}" class="list-group-item list-group-item-action">Sakartvelo Food Categories</a></h4>
                        <p class="card-text">It's easy to lose track of time at the Sakartvelo table. Serving food is a fitting welcome to Sakartvelo, a mountainous country sandwiched between Europe and Asia, where dinner guests are exalted as "gifts from God" and by the table they must try all categories of food.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="{{ url('admin/ingredients/index') }}"><img class="img-fluid" alt="100%x280" src="{{ asset('images/Food_2.jpg') }}"></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{ url('admin/ingredients/index') }}" class="list-group-item list-group-item-action">Sakartvelo Food Ingredients</a></h4>
                        <p class="card-text">Sakartvelians actually infuse most of their food with unique herbs and spices. These ingredients are commonly found in different parts of the region, so they uses them to make various traditional dishes such as meat and vegetable dishes, soups, sour plums, and cornbreads.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div>
    <h4 class="text-center text-muted">“No one is born a great cook, one learns by doing.” - Julia Child</h4>
</div>
<br>
<div>
    <h2 class="text-center text-muted">Here You Can Find The Newest Recipes From Sakartvelo...</h2>
</div>
<br>
<div class="row">
    @foreach($recipes as $recipe)
    <div class="col-3 mb-3">
        <div class="card">
            <div class="card-body">
                @if ($recipe->image)
                <a href="{{ url('recipe', ['id'=> $recipe->id]) }}"><img class="card-img-top" src="{{ asset($recipe->image) }}"></a>
                @else
                    No image
                @endif
                <h4 class="card-title text-center text-uppercase"><a href="{{ url('recipe', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a></h4>
                <h6 class="card-subtitle text-muted text-center"><a href="{{ url('admin/categories', ['id' => $recipe->category_id]) }}" class="list-group-item list-group-item-action">
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif</a>
                </h6>
                <a class="link-success" href="{{ url('recipe', ['id'=> $recipe->id]) }}">Try To Make {{ $recipe->name }}</a>  
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection