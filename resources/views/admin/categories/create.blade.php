@extends('layouts.admin_layout')


@section('title', 'Create Category')

@section('content')

    <section class="content">
        <h2>Create Category</h2>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-primary">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-controll" name="title" id="title" placeholder="Name" required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    </section>
@endsection
