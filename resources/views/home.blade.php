@extends('adminlayout.layout')

@section('admin_content')
<div class="container-fluid">

    <div class="row">
        


        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-primary text-white">{{ $counter['teams'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('team.index') }}" class="btn btn-primary">Team List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3 ">
            <div class="card">
                <h1 class="card-header  bg-success text-white">{{ $counter['company'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('company.index') }}" class="btn btn-success">Company List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-secondary text-white">{{ $counter['posts'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('post.index') }}" class="btn btn-secondary">News List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-warning">{{ $counter['category'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('category.index') }}" class="btn btn-warning">News Category List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-info">{{ $counter['tags'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('tag.index') }}" class="btn btn-info">News Tag List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-dark text-white">{{ $counter['reviews'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('review.index') }}" class="btn btn-dark">Rating & Review List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-primary text-white">{{ $counter['tips'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('insuranceTip.index') }}" class="btn btn-primary">Insurace Tips List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-secondary text-white">{{ $counter['enq'] }}</h1>
                <div class="card-body">
                 
                  <a href="#" class="btn btn-secondary">Contact Form List</a>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 mb-3">
            <div class="card">
                <h1 class="card-header bg-warning">{{ $counter['faqcat'] }}</h1>
                <div class="card-body">
                 
                  <a href="{{ route('faqCategory.index') }}" class="btn btn-warning">Faq Category List</a>
                </div>
              </div>
        </div>
       
    </div>
</div>
@endsection
